<?php

namespace App\Services;

use Illuminate\Http\Request;

class CaptchaService{

    public static function checkCaptcha($token, Request $request = null){
        $secret = env("CAPTCHA_SECRET", NULL);
        $site = env("CAPTCHA_SITE_KEY", NULL);

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        // $url = 'http://localhost:8080/sample';
        $data = [
            "secret" => $secret,
            "response" => $token
        ];
        $opt = [
            "http" => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            ]
        ];
        $ctx  = stream_context_create($opt);
        $res = file_get_contents($url, false, $ctx);

        if($res){
            return json_decode($res);
        }else throw new \Exception("Google Captcha cannot be accessed.");
    }

}
