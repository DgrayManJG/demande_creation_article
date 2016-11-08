<?php

class Envoie_email {

  	public function __construct()
  	{

  	}

    public function send_mail(){

      $variable = 'HELLO WORLD';

      $config = Array(
                      'protocol' => 'smtp',
                      'smtp_host' => 'ssl://smtp.googlemail.com',
                      'smtp_port' => 465,
                      'smtp_user' => 'xxx',
                      'smtp_pass' => 'xxx',
                      'mailtype'  => 'html',
                      'charset'   => 'iso-8859-1'
                  );
      $this->load->library('email', $config);

      $this->email->from('jimmy.guevel@groupe-isb.fr', 'Jimmy Guevel');
      $this->email->to('sylvain.demaure@groupe-isb.fr');


      $this->email->subject('demande creéation article');
      $this->email->message('la variable est' . $variable);

      $this->email->send();

     }

     public function hello(){
       echo 'hello world';
     }

}
