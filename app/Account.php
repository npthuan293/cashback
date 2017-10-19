<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Account extends Model
{
	//
	public static function check($fbid){
		return DB::table('account')->where('fbid',$fbid)->first();
	}
	//
	public static function create_account($fbid, $name, $email, $profileUrl, $avatar_original){
		return DB::table('account')->insert(
			['fbid' 			=> $fbid,
			 'name' 			=> $name,
			 'email' 			=> $email,
			 'profileUrl'		=> $profileUrl,
			 'avatar_original' 	=> $avatar_original
			]);
	}
}
