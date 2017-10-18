<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UrlController extends Controller
{
    //
    public function getShortenUrl(Request $request){
		$url = $request->url;
		$request = json_encode(array('longUrl' => $url));
		// Tạo mới một CURL
		$ch = curl_init();
		// Cấu hình cho CURL
		curl_setopt($ch, CURLOPT_URL, "https://www.googleapis.com/urlshortener/v1/url?key=AIzaSyCNe1VDvZaqKaHIb4DfNbKYpK7FJuGsKg8");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		// Thực thi CURL
		$data = json_decode(curl_exec($ch), true);
		// Ngắt CURL, giải phóng
		curl_close($ch);
		return view('welcome',$data);
	}
}
