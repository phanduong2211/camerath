<?php
	/**
	* 
	*/
	namespace App\Http\Controllers\admin;
	use App\User;
	use App\Http\Controllers\Controller;
	use View;
	use DB;
	use Input;
	use Session;
	use Redirect;
	class login extends Controller
	{
		public function getLogin()
		{
				return View::make("admin.login");			
		}
		public function boollogin()
		{
			$Inputdata=array("username"=>Input::get("username"),"password"=>Input::get("password"));		
			foreach (User::get() as $user) {
				if(strtolower($user->acc) == strtolower($Inputdata["username"])
					&& $user->pass==$Inputdata["password"])
				{
					Session::put("login","true");
					Session::put("nameuser",$user->name);				
					return true;
				}
				
			}
			Session::put("login","false");
			return false;
		}
		public function checklogin()
		{

			if($this->boollogin())	
			{		
				return Redirect::to("admin/index");
			}
			else
			{
				return redirect()->back();
			}
			
		}
		public function boolchecksessionlogin()
		{
			if(Session::has("nameuser"))
			{
				return true;
			}
			return false;
		}
		public function checksessionlogin()
		{
			if($this->boolchecksessionlogin())
			{
				return $this->getIndexAdmin();
			}
			return Redirect::to("admin/login");
		}
		public function getIndexAdmin()
		{
			return View::make("admin.index");
		}
		public function logout()
		{
			Session::forget("nameuser");
			return Redirect::to("admin/login");
		}
	}
 ?>