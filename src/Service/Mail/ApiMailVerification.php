<?php

namespace App\Service\Mail;

class ApiMailVerification{
    
    public function validate($mail){
        $url = "https://emailvalidation.abstractapi.com/v1/?api_key=".$_ENV['MAIL_VERIFICATION_API_KEY']."&email=$mail";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $data = curl_exec($ch);
        curl_close($ch);
        return json_decode($data, true);
    }
}