 <?php  
date_default_timezone_set("Asia/Jakarta");


class Auth extends CI_Controller{

	public function index(){
		// if ($this->session->userdata('email')) {
		// 	echo "<script>
		// 		alert('mau kemana kali');
		// 		document.location.href= 'dashboard';
		// 		</script>";
		// }

		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/auth_header');
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');			
		}
		else{
			$this->_login();
		}
	}
 
	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if($user){
			if ($user['is_active'] == 1) {
				if (password_verify($password, $user['password'])) {
					$data = array(
						'email' => $user['email'],
						'role_id' => $user['role_id']
					);
					$this->session->set_userdata($data);

					if ($user['role_id'] == 1) {
						echo "<script>
							alert('Selamat datang admin');
							document.location.href= 'admin/Dashboard_admin';
							</script>";
						// redirect('admin/dashboard_admin');
					}
					else{
						echo "<script>
							alert('Selamat datang user');
							document.location.href= 'dashboard';
							</script>";
						// redirect('dashboard');
					}
				}
				else{
					$this->session->set_flashdata('user','<div class="alert alert-danger alert-dismissible fade show" role="alert">Password Salah
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button></div>');
					redirect('auth');
				}
			}
			else{
				$this->session->set_flashdata('user','<div class="alert alert-danger alert-dismissible fade show" role="alert">Email Belum Di Activasi
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button></div>');
					redirect('auth');
			}
		}
		else{
			$this->session->set_flashdata('user','<div class="alert alert-danger alert-dismissible fade show" role="alert">Email Belum Terdaftar
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('auth');
		}
	}

	public function registrasi(){
		if ($this->session->userdata('email')) {
			redirect('dashboard');
		}

		$this->form_validation->set_rules('nama','Username','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[tb_user.email]');
		$this->form_validation->set_rules('no_hp','No Handphone','required|trim');
		$this->form_validation->set_rules('alamat','Alamat','required|trim');
		$this->form_validation->set_rules('password1','Password','required|trim|matches[password2]|min_length[5]');
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]|min_length[5]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/auth_header');
			$this->load->view('auth/registrasi');
			$this->load->view('templates/auth_footer');		
		}
		else{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$password = $this->input->post('password1');
			$no_hp = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');

			$data = array(
				'nama' => htmlspecialchars($nama),
				'email' => htmlspecialchars($email),
				'password' => password_hash($password, PASSWORD_DEFAULT),
				'no_hp' => $no_hp, 
				'alamat' => $alamat,
				'gambar' => 'default.jpg',
				'role_id' => 2,
				'is_active' => 0
				// 'date_created' => time()
			);

			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time(),
			];

			$this->m_auth->insert($data , 'tb_user');
			$this->m_auth->insert($user_token , 'user_token');

			$this->_sendEmail($token, 'verify');

			$this->session->set_flashdata('user','<div class="alert alert-success alert-dismissible fade show" role="alert">silahkan cek email untuk verification acount
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button></div>');
			redirect('auth');
		}
	
	}

	private function _sendEmail($token, $type){
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'aldiskax02@gmail.com',
			'smtp_pass' => 'Aldiskax.#02',
			'smtp_port' => 465,
			'mailtype' => 'htlm',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		$this->load->library('email', $config);
		$this->email->initialize($config);

		$this->email->from('aldiskax02@gmail.com','Admin Snack Hay');
		$this->email->to($this->input->post('email'));
		// $this->email->subject('Anda berahasiim membeli');
		// $this->emiil->message('Selamat anda berhasil membelii rumah');
		// $thiis->email->send();


		if ($type == 'verify') {
			$this->email->subject('Acount verification');
			// $this->email->message('Click link ini untuk verifikasi akun anda : <a href="'. base_url() . 'auth/verify?email=' .$this->input->post('email') . '&token=' . urlencode($token) . '">Activekan</a>');
			$this->email->message('Klik ini link bos: <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktif</a>');
		}

		if ($this->email->send()) {
			return true;
		}
		else{
			echo $this->email->print_debugger();
			die;
		}

	}

	public function verify(){
		$email = $this->input->get('email');
		$token = $this->input->get('token');
		// echo $token;die;

		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if ($user){
			// echo $token;die;
			$user_token = $this->db->get_where('user_token', ['token' == $token])->row_array();
			// var_dump($user_token) ;die;
			if ($user_token) {
				if (time() - $user_token['date_created'] < (60*60*24 )) {
 
 					$this->db->set('is_active', 1);
 					// $this->pating shere()
 					$this->db->where('email', $email);
 					$this->db->update('tb_user');

 					$this->db->delete('user_token',['email' => $email]);

 					$this->session->set_flashdata('user','<div class="alert alert-success alert-dismissible fade show" role="alert"> '. $email .' Sudah aktif silahkan login
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
					redirect('auth'); 
				}
				else{
					$this->db->delete('user', ['email' => $email]);
					$this->db->dalete('$user_token', ['email' => $email]);

					$this->session->set_flashdata('user','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Akun aktivasi token gagal karena expaid
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
					redirect('auth'); 
				}
			}
			else{
				$this->session->set_flashdata('user','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Aktivasi akun gagal karena token
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button></div>');
			redirect('auth'); 
			}
		}
		else{
				$this->session->set_flashdata('user','<div class="alert alert-danger alert-dismissible fade show" role="alert">Aktivasi akun gagal! karena Email
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button></div>');
			redirect('auth'); 
		}
	}

	public function profil(){
		$data['title'] = 'Halaman Profil';
		$data['user'] = $this->m_kategori->session_user();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('auth/profil', $data);
		$this->load->view('templates/footer');
	}

	public function ubah_profil(){
		$data['user'] = $this->model_barang->tampil_user();
		$id = $data['user']['id'];
		$nama  = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');

		$edit_gambar = $_FILES['foto']['name'];
		// var_dump($data['user']['gambar']);die;
		// var_dump($nama,$no_hp,$alamat,$edit_gambar);die;
			if ($edit_gambar) {
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto')) {
					$old_gambar = $data['user']['gambar'];
					if ($old_gambar != 'default.jpg') {
						unlink(FCPATH . 'assets/img/profile/' .$old_gambar);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				}
			}
			$data = array(
				'nama' => $nama,
				'no_hp' => $no_hp,
				'alamat' => $alamat
			);
			// var_dump($data);die;
			$where = ['id' => $id];
			$this->model_barang->update_profil($where,$data,'tb_user');
			$this->session->set_flashdata('edit','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Di Ubah
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('auth/profil');

	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('user','<div class="alert alert-success alert-dismissible fade show" role="alert">Anda Berhasil Logout
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
		redirect('auth');
	}
}



?>