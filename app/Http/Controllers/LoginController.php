<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Account;
use Session;
use Socialite;
use DB;

class LoginController extends Controller
{
	/**
	* Create a redirect method to facebook api.
	*
	* @return void
	*/
	public function redirect()
	{
		return Socialite::driver('facebook')->redirect();
	}

	/**
	 * Return a callback method from facebook api.
	 *
	 * @return callback URL from facebook
	 */
	public function callback()
	{
		$user = Socialite::driver('facebook')->user();
		if(!Account::check($user->id)){
			Account::create_account($user->id, $user->name, $user->email, $user->profileUrl, $user->avatar_original);
		}
		Session::put('user', $user);
		return redirect()->to('/');
	}	
}
