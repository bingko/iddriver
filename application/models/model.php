<?php
class model extends CI_Model {
	function test_get($data)
    {
		$query = $this->db->insert('job', $data); 
		 return $this->db->insert_id();
    }
	function insertOldWork($data)
    {
		if($data){
		$query = $this->db->insert('oldwork', $data);
		}
    }
	function insertCourseRegister($data)
    {
		if($data){
			$query = $this->db->insert('register', $data);
			return $this->db->insert_id();
		}
    }
    function get_register_row($id){
    	$this->db->where('register.ID',$id);
    	$this->db->join('course','register.course=course.ID');
    	$query =$this->db->get('register');
    	return $query->row_array();
    }
    function get_register(){
    	$this->db->select('
    		register.ID,
    		register.firstname,
    		register.citizenid,
    		register.lastname,
    		register.picture,
    		register.register_time,
    		course.course_name
    		');
    	$this->db->join('course','register.course=course.ID');
    	$this->db->order_by('register.ID DESC');
    	$query =$this->db->get('register');
    	return $query->result_array();
    }
	function insertAlbum($data,$type)
    {
		if($type==1){
		$query = $this->db->insert('album', $data);
		}
		else if($type==2){
		$query = $this->db->insert('generation', $data);
		}
		return $this->db->insert_id();
    }
	function updateSlider($data)
    {
		$this->db->where('ID', $data);
		$this->db->update('slide', 1);
    }
	function insertImage($InData,$type)
    {
		if($type==1){
		$query = $this->db->insert('gallery', $InData);
		}
		else if($type==2){
		$query = $this->db->insert('generation_img', $InData);
		}
    }
	function getNews($id)
    {
		if($id!=null){
			$this->db->where('ID',$id);
		}
		$this->db->order_by('ID','desc');
		$query = $this->db->get('news');
		return $query->result_array();
    }
	function getArticle($id)
    {
		if($id!=null){
			$this->db->where('ID',$id);
		}
		$this->db->order_by('ID','desc');
		$query = $this->db->get('article');
		return $query->result();
    }
	function getGallery()
    {
    	$this->db->select('
    			gallery.ID,
    			gallery.albumID,
    			gallery.thumbnail,
    			album.name,
    		');
    	$this->db->join('album','album.ID = gallery.albumID');
		$query = $this->db->get('gallery');
		return $query->result();
    }
	function getAlbum()
    {
		//$this->db->where('type',0);
		$query = $this->db->get('album');
		return $query->result();
    }
	function getGeneration()
    {
		$query = $this->db->get('generation');
		return $query->result();
    }
	function getGenImage()
    {
		$query = $this->db->get('generation_img');
		return $query->result();
    }
	function getLogin()
    {
		$query = $this->db->get('admin');
		return $query->result();
    }
	function insertNews($data)
    {
		$query = $this->db->insert('news', $data);
    }
	function getSlide()
    {
		$query = $this->db->get('slide');
		return $query->result();
    }
    function getCourse(){
    	$query = $this->db->get('course');
    	return $query->result_array();
    }
	function getNews2($id)
    {
		if($id!=null){
			$this->db->where('ID',$id);
		}
		$this->db->order_by('ID','desc');
		$query = $this->db->get('news');
		return '{"id":'.$id.',"title":'.$query->result_array()[0]['title'].',"description":'.$query->result_array()[0]['description'].'}';
    }
    public function get_slide()
    {
    	$this->db->where('status',1);
    	$query = $this->db->get('slide');
    	return $query->result();
    }
    public function deleteGallery($id)
    {
		$this->db->where('ID', $id);
		$this->db->delete('gallery'); 
    }
    public function deleteAlbum($id)
    {
		$this->db->where('ID', $id);
		$this->db->delete('album'); 
    }
    public function deleteGalleryAlbum($id)
    {
		$this->db->where('albumID', $id);
		$this->db->delete('gallery'); 
    }
    function deleteArticle($id)
    {
		$this->db->where('ID', $id);
		$this->db->delete('article'); 
    }
	function deleteNews($id)
    {
		$this->db->where('ID', $id);
		$this->db->delete('news');
	}
	function getCourseCost($id){
		$this->db->where('ID',$id);
		$query = $this->db->get('course');
		return $query->row('cost');
	}
   }
?>