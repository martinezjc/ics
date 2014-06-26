<?php
class AccountController extends Controller{

	/**
	 * Show the administration login page
	 *
	 * @return void
	 */
	public function showLogin(){
        return View::make('admin.login')->with('title', 'Login');
	}
}
?>