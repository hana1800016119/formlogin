<?php 
namespace App\Controllers;

use App\Models\M_user;

class user extends BaseController
{
	
	public function index(){
		$data = [
			'title' => 'Form Login',
			'tampil' => 'login',
		];
		echo view('templates/wrapper', $data);
	}

	public function register(){
		$data = [
			'title' => 'Form Register',
			'tampil' => 'register',
		];
		echo view('templates/wrapper', $data);
	}

	public function regis(){
		$userData = new M_user();

		$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

		$userData ->insert($_POST);
		$session = session();
		session()->setFlashdata('message', 'selamat registrasi berhasil!');
		return redirect()->to(base_url('user'));
	}
	}