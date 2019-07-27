<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Db_Functions extends CI_Model {
function __Music_Model(){
	parent::__construct();
}

public function get_music()
{
$query=$this->db->query('select m.name,m.description,m.musician_image_URL,m.month from musician m,performance p
WHERE m.musicianid = p.musicianid
order by m.MusicianId asc');
return $query;
}

public function get_gear()
{
$query=$this->db->query('select id_product, Name, Description, price, Product_Image_URL from product');
return $query;
}

 public function insert_jobs($data)
 {
    $this->db->insert('jobs',$data);
 }

 public function place_order($data)
 {
   $this->db->insert('orders',$data);



 }

}

?>
