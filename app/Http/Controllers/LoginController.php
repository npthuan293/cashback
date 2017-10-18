<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Socialite;

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
		
		return redirect()->to('/');
	}	
}
