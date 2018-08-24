<?php
/**
 *
 */
class News_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }
  
  public function get_news($slug = False)
  {
    if($slug === False){
        $query = $this->db->get('news');
        return $query->result();
    }
    $query = $this->db->get_where($news,array('slug'=>$slug));
    return $query->row_array();
  }

}

 ?>
