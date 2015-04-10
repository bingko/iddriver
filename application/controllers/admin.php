<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {
	
	public function __construct() 
    {
        parent::__construct();
        if ($this->session->userdata('is_logged_in') != 1) {
            // Prevent infinite loop by checking that this isn't the login controller               
            if ($this->router->method != 'login' && $this->router->method != 'checklogin') 
            {   
				redirect('admin/login');
            }
        }   
    }

	public function index()
	{

		$data['page'] = "admin/news";
		$data['news'] = $this->model->getNews(null);
		$data['article'] = $this->model->getArticle(null);
		$data['slide'] = $this->model->getSlide();
		$this->load->view('admin/admin',$data);
	}
	public function news()
	{
		$data['page'] = "admin/news";
		$data['news'] = $this->model->getNews(null);
		$this->load->view('admin/admin',$data);
	}
	public function editnews(){
		$imageupload = $_FILES['files']['tmp_name'];
		$imageupload_name = $_FILES['files']['name'];
		copy($imageupload,"img/uploads/".$imageupload_name);
		$data = array(
			'ID'=>$this->input->post('news_id'),
			'title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'),
			'image' => $imageupload_name
		);
		$this->update->editnews($data);
		redirect('admin/news');
	}
	public function article()
	{ 
		$data['page'] = "admin/article";
		$data['article'] = $this->model->getArticle(null);
		$this->load->view('admin/admin',$data);
	}
	public function editarticle(){
		$imageupload = $_FILES['files']['tmp_name'];
		$imageupload_name = $_FILES['files']['name'];
		copy($imageupload,"img/uploads/".$imageupload_name);
		$data = array(
			'ID'=>$this->input->post('article_id'),
			'title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'),
			'image'=>$imageupload_name
		);
		$this->update->edit_article($data);
		redirect('admin/article');
	}
	public function slide()
	{
		$data['page'] = "admin/slide";
		$data['getAlbum'] = $this->model->getAlbum();
		$data['getGallery'] = $this->model->getGallery();
		$data['getGeneration'] = $this->model->getGeneration();
		$data['getGenImage'] = $this->model->getGenImage();
		$data['slide'] = $this->model->getSlide();
		$this->load->view('admin/admin',$data);
	}
	public function course()
	{
		$data['page'] = "admin/course";
	  	$data['register']=$this->model->get_register();
	 //  	echo '<pre>';
		// print_r($data['register']);
		// exit();
		$this->load->view('admin/admin',$data);
	}		
	public function student()
	{
		$data['page'] = "admin/student";
	  	$data['register']=$this->model->get_register();
	 //  	echo '<pre>';
		// print_r($data['register']);
		// exit();
		$this->load->view('admin/admin',$data);
	}	
	public function view_student()
	{
		$std_id=$this->uri->segment(3);
		$data['page'] = "admin/view_student";
	  	$data['register']=$this->model->get_register_row($std_id);
		$this->load->view('admin/admin',$data);
	}
	public function album()
	{
		$data['page'] = "admin/album";
		$data['getAlbum'] = $this->model->getAlbum();
		$data['getGallery'] = $this->model->getGallery();
		$data['getGeneration'] = $this->model->getGeneration();
		$data['getGenImage'] = $this->model->getGenImage();
		$data['slide'] = $this->model->getSlide();
		$this->load->view('admin/admin',$data);
	}
	public function gen()
	{
		$data['page'] = "admin/gen";
		$data['getAlbum'] = $this->model->getAlbum();
		$data['getGallery'] = $this->model->getGallery();
		$data['getGeneration'] = $this->model->getGeneration();
		$data['getGenImage'] = $this->model->getGenImage();
		$data['slide'] = $this->model->getSlide();
		$this->load->view('admin/admin',$data);
	}
	public function login()
	{
		$this->load->view('login');
		
	}
	public function uploadimage()
	{
		$data['page'] = "uploadimage";
		$this->load->view('admin/admin',$data);
		
	}
	public function checklogin()
	{
		$data = $this->model->getLogin();
        $userdata = array(
        'is_logged_in' => true
        );
		if($data[0]->username==$this->input->post('username') && $data[0]->password== $this->input->post('password')){
			$this->session->set_userdata($userdata);
			redirect('admin');
		}
		else{
			redirect('admin/login');
		}
	}
	public function uploadslide()
	{
		$imageupload = $_FILES['files']['tmp_name'];
		$imageupload_name = $_FILES['files']['name'];
		$InData=null;
		for($i=0;$i<count($imageupload);$i++){
			copy($imageupload[$i],"img/slides/".$imageupload_name[$i]);
			$InData = array(
				'img_name' => $imageupload_name[$i]
			);
			$this->db->insert('slide', $InData);
		}

		redirect('admin/slide');
		
	}
	public function deleteslide()
	{
		$slide_id=$this->uri->segment(3);
		$this->db->where('ID',$slide_id);
		$this->db->delete('slide');
		redirect('admin/slide');
	}
	public function deleteGallery()
	{
		$id=$this->uri->segment(3);
		$this->model->deleteGallery($id);
		redirect('admin/slide');
	}
	public function deleteAlbum()
	{
		$id=$this->uri->segment(3);
		$this->model->deleteAlbum($id);
		$this->model->deleteGalleryAlbum($id);
		redirect('admin/slide');
	}
	public function insert_article()
	{
		$imageupload = $_FILES['files']['tmp_name'];
		$imageupload_name = $_FILES['files']['name'];
		for($i=0;$i<count($imageupload);$i++){
			copy($imageupload[$i],"img/uploads/".$imageupload_name[$i]);
			$data = array(
	           'title' => $this->input->post('title'),
	           'description' => $this->input->post('content'),
	           'image' => $imageupload_name[$i]
	        );
			$query = $this->db->insert('article', $data);
			redirect('admin/article/success');
		}
	}
	public function insert_news()
	{
		$imageupload = $_FILES['files']['tmp_name'];
		$imageupload_name = $_FILES['files']['name'];
		for($i=0;$i<count($imageupload);$i++){
			copy($imageupload[$i],"img/uploads/".$imageupload_name[$i]);
			$data = array(
	           'title' => $this->input->post('title'),
	           'description' => $this->input->post('content'),
	           'image' => $imageupload_name[$i]
	        );
			$query = $this->db->insert('news', $data);
			redirect('admin/news/success');
		}
	}
	
	
	public function delete_article()
	{
		$id=$this->uri->segment(3);
		$retid=$this->model->deleteArticle($id);
		redirect('admin/article');
		
	}	
	public function delete_news()
	{
		$id=$this->uri->segment(3); 
		$retid=$this->model->deleteNews($id);
		redirect('admin/news');
		
	}
	public function get_news(){
		$id=$this->input->post('id');
		$data=$this->model->getNews($id);
		echo json_encode($data);
	}	

	public function get_article(){
		$id=$this->input->post('id');
		$data=$this->model->getArticle($id);
		echo json_encode($data);
	}

	public function updateSlide()
	{
		$id=$this->input->post('status');
		$this->update->swithSlider($id);
		redirect('admin/slide/success');
			
	}
	public function insertGallery()
	{
		$addtype = $this->input->post('title');
		$type = $this->input->post('gallerytype');
		$data = array(
               'name' => $this->input->post('title'),
            );
		$albumID = $this->model->insertAlbum($data,$type);

		$imageupload = $_FILES['files']['tmp_name'];
		$imageupload_name = $_FILES['files']['name'];

		// echo "<pre>";
		// print_r($imageupload_name) ;
		// exit();

		for($i=0;$i<count($imageupload);$i++){
			copy($imageupload[$i],"img/gallery/".$imageupload_name[$i]);
			if($type==1){
			$InData = array(
				'thumbnail' => $imageupload_name[$i],
				'albumID' => $albumID
			);
			}
			else if($type==2){
				$InData = array(
				'image' => $imageupload_name[$i],
				'gen_id' => $albumID
			);
			}
			$this->model->insertImage($InData,$type);
		}
		redirect('admin/slide/success');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */