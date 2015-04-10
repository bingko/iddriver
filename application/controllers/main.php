<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {
	public function __construct() 
	{
        parent::__construct();
        $this->load->library("mpdf/mpdf"); //โหลด Library โฟล์เดอร์ mpdf ตามด้วยชื่อไฟล์ mpdf ไม่    //ต้องมี .php นะครับ  
    }
	public function index()
	{
		$data['page'] = "indexcontent";
		$data['news'] = $this->model->getNews(null);
		$data['article'] = $this->model->getArticle(null);
		$data['slide'] = $this->model->getSlide();
		// echo "<pre>";
		// print_r($data);
		$this->load->view('index',$data);
	}
	public function contact()
	{
		$data['page'] = "contact";
		$this->load->view('index',$data);
	}
	public function typography()
	{
		$data['page'] = "typography";
		$this->load->view('index',$data);
	}	
	public function gallery()
	{
		$data['page'] = "gallery";
		$data['images'] = $this->model->getGallery();
		$data['album'] = $this->model->getAlbum();
		// echo "<pre>";
		// print_r($data);
		$this->load->view('index',$data);
	}	
	public function generation()
	{
		$data['page'] = "generation";
		$data['album'] = $this->model->getGeneration();
		$data['images'] = $this->model->getGenImage();
		$this->load->view('index',$data);
	}	
	public function autocheck()
	{
		$data['page'] = "autocheck";
		$this->load->view('index',$data);
	}
	public function editSlide()
	{
		$data['page'] = "slide";
		$data['slide'] = $this->model->getSlide();
		$this->load->view('index',$data);
	}	
	public function register()
	{
		$data['page'] = "register";
		$data['course'] = $this->model->getCourse();
		$this->load->view('index',$data);
	}
	public function job()
	{
		$data['page'] = "job";
		$this->load->view('index',$data);
	}	
	public function upload()
	{
		$this->load->view('upload_form');
	}
	public function news()
	{
		$ID=$this->uri->segment(3);
		$data['page'] = "news";
		$data['content'] = $this->model->getNews($ID);
		
		$this->load->view('index',$data);
	}
	public function getnews()
	{
		$ID=$this->uri->segment(3);
		$content = $this->model->getNews2($ID);
		//print_r($ID);
		echo $content;
		//$this->load->view('index',$data);
	}
	public function article()
	{
		$ID=$this->uri->segment(3);
		$data['page'] = "article";
		$data['content'] = $this->model->getArticle($ID);
		
		$this->load->view('index',$data);
	}
	public function add_register()
	{
			$data = array(
					'course'=> $this->input->post('course'),
					'citizenid'=> $this->input->post('citizenID'),
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'address' => $this->input->post('address'),
					'phonenumber' => $this->input->post('phoneNumber'),
					'mobilenumber' => $this->input->post('mobileNumber'),
					'citizencopy'=> $this->input->post('citizencopy'),
					'picture'=>$this->input->post('picture')
				);
			$insert_id=$this->model->insertCourseRegister($data);
			$this->session->set_userdata(array('registerID'=>$insert_id));
			redirect('main/bill/'.$insert_id);
	}
  public function view_register(){
    $imageupload = $_FILES['files']['tmp_name'];
    $imageupload_name = $_FILES['files']['name'];
    for($i=0;$i<count($imageupload);$i++){
    	if(!empty($imageupload_name[$i])){
     		 copy($imageupload[$i],"img/uploads/".$imageupload_name[$i]);
  		}
    }
    $data['page'] = "view_register";
    $data['image']=$imageupload_name;
    $data['detail'] =$this->input->post();
    $this->load->view('index',$data);
  }
  public function bill(){
	  	$id = $this->uri->segment(3);
  	if($this->session->userdata('registerID')==$id){
	  	$data['register']=$this->model->get_register_row($id);
	  	// print_r($data['register']);
	  	// exit();
	    $this->load->view('bill',$data);
	}
	else{
		redirect('main/register');
	}
  }
	public function employee_register()
	{ 
       $data = array(
			'position'=> $this->input->post('position'),
		   'salary' => $this->input->post('salary'),
		   'firstname' => $this->input->post('firstname'),
			'lastname'=> $this->input->post('lastname'),
		   'birthdate' => $this->input->post('birthdate'),
		   'education' => $this->input->post('education'),
		   'address' => $this->input->post('address'),
		   'mobilephone' => $this->input->post('mobilephone')
		);
		
		$id=$this->model->test_get($data);
		$from = $this->input->post('from');
		$workto = $this->input->post('toDate');
		$company = $this->input->post('company');
		$position = $this->input->post('oldPosition');
		for($i=0; $i<count($from); $i++){
			$data = array(
               'workfrom' => $from[$i],
               'workto' => $workto[$i],
               'company' => $company[$i],
               'position' => $position[$i],
               'jobID' => $id
            );
			$this->model->insertOldWork($data);
		}
		redirect('main/job/success');
	}
	
}