<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mail extends CI_Controller {
    
    public function sendMail()  {

        if ($this->captcha->check_captcha()==0)
         {
            redirect('main/contact/wrong_capcha');
        }
        else{
            $title= $this->input->post('subject');
            $body= $this->input->post('message');
            $email=$this->input->post('email');
            $name=$this->input->post('name');
            $type=$this->input->post('subject');
            $title='['. $type.']'.$this->input->post('head');
            // print_r('['. $type.']'.$this->input->post('head'));
            // exit();
            $html="
                <p>คุณ ".$name."<p>
                <p>Email ". $email."<p>
                <p>".$body."</p>
            ";
            $this->mail_model->send_email($title,$html);
            redirect('main/contact/success');
         }
    }
    
}