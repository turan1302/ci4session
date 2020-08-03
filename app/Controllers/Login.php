<?php 

namespace App\Controllers;
use App\Models\AdminModel;

class Login extends BaseController
{

	public $viewFolder;

	public function __construct(){

		$this->viewFolder="login";
		$this->AdminModel = new AdminModel();

	}

	public function index()
	{
		return view("{$this->viewFolder}/index");
	}


	public function do_login(){

		$rules=array(

			"email"=>"required|valid_email",
			"password"=>"required"

		);


		$message=array(

			"email"=>array(

				"required"=>"E-Mail Alanı Boş Bırakılamaz",
				"valid_email"=>"Lütfen Geçerli Bir E-Mail Giriniz"
			),
			"password"=>array(

				"required"=>"Şifre Alanı Boş Bırakılamaz"

			)

		);


		$validate = $this->validate($rules,$message);


		if ($validate) {

			$user = $this->AdminModel->where(array(

				"email"=>$this->request->getpost("email"),
				"password"=>md5($this->request->getpost("password"))

			))->first();


			if ($user) {

				session()->set('user',$user);

				return redirect()->to(base_url('anasayfa'));
			
			}else{

				session()->setFlashdata('Hata',"Şifreniz Yanlış");

				return redirect()->to(base_url('login'));
			}

		}else{

			return view("{$this->viewFolder}/index");

		}


	}


	public function logout(){

		session()->remove('user');

		return redirect()->to(base_url());

	}

}
