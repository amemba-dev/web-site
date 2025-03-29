<?php
/*
This call sends a message based on a template.
*/
namespace App\Service\Mail;

use App\Service\Api;
use Mailjet\Client;
use \Mailjet\Resources;

class ApiMailJet {

    private $api_key;
    private $api_key_privat;

    public function __construct()
    {
        $this->api_key = $_ENV['MAIL_JET_API_KEY'];
        $this->api_key_privat = $_ENV['MAIL_JET_API_PRIVATE_KEY'];
    }

    public function send($emailTo, $name, $subject, $content){
        $client = new Client($this->api_key, $this->api_key_privat,true,['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [ 'Email' => "services@mariamaba-alumni.com", 'Name' => "AMEMBA" ],
                    'To' => [ ['Email' => $emailTo, 'Name' => $name] ],
                    'TemplateID' => 4079681 ,
                    'TemplateLanguage' => true,
                    'Variables' => [ 'content' => $content, 'objet' => $subject ]
                ]
            ]
        ];
        $client->post(Resources::$Email, ['body' => $body]);
    }


    public function part($emailTo, $name, $content){
        $mj = new Client($this->api_key, $this->api_key_privat,true,['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "services@mariamaba-alumni.com",
                        'Name' => "AMEMBA"
                    ],
                    'To' => [
                        [
                            'Email' => $emailTo,
                            'Name' => $name
                        ]
                    ],
                    'TemplateID' => 4079668 ,
                    'TemplateLanguage' => true,
                    'Variables' => [
                        'content' => $content,
                        'name' => $name
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        //$response->success() && var_dump($response->getData());
        //dd($response->getData());
    
    }

    public function news($emailTo, $name, $titre, $content){
        $mj = new Client($this->api_key, $this->api_key_privat,true,['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "services@mariamaba-alumni.com",
                        'Name' => "AMEMBA"
                    ],
                    'To' => [
                        [
                            'Email' => $emailTo,
                            'Name' => $name
                        ]
                    ],
                    'TemplateID' => 4079693 ,
                    'TemplateLanguage' => true,
                    'Variables' => [
                        'content' => $content,
                        'titre' => $titre
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        //$response->success() && var_dump($response->getData());
        //dd($response->getData());
    
    }
}
?>