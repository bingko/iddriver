<?php
class mail_model extends CI_Model {
	function send_email($title,$body){
		$this->load->library('phpmailer');
		$this->load->library('smtp');
		$this->phpmailer->IsSMTP();
	    $this->phpmailer->SMTPAuth   = true;
	    $this->phpmailer->CharSet = "utf-8";
	    $this->phpmailer->SMTPSecure = "ssl";
	    $this->phpmailer->Host       = "smtp.gmail.com";
	    $this->phpmailer->Port       = 465;
	    $this->phpmailer->Username   = "service.iddriver@gmail.com";
	    $this->phpmailer->Password   = "iddriver1234";
	    $this->phpmailer->SetFrom('info@yourdomain.com', 'ชื่อ-นามสกุล');
	   // $this->phpmailer->AddReplyTo("response@yourdomain.com","ชื่อ-นามสกุล");
	    $this->phpmailer->Subject    =$title;
	    $this->phpmailer->MsgHTML($body);
	    //$this->phpmailer->AltBody    = "Plain text message";
	    $this->phpmailer->AddAddress('kantapon.hanpachern@gmail.com', "Fucyber");
	    $this->phpmailer->AddAddress('l2uncs@gmail.com', "Fucyber");
	    //$this->phpmailer->AddAddress('receive2@hotmail.com', "Fucyber");

	    //$this->phpmailer->AddAttachment("images/phpmailer.gif");
	    //$this->phpmailer->AddAttachment("images/phpmailer_mini.gif");
	    if(!$this->phpmailer->Send()) {
	  	  redirect('main/contact/error');
	    } 
	    else {
	  	  redirect('main/contact/success');
	    }

	}
   }
?>