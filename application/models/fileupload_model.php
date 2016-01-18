<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class fileupload_model extends CI_Model
{
public function create($cdate,$image,$currenttime)
{
$data=array("cdate" => $cdate,"image" => $image,"currenttime" => $currenttime);
$query=$this->db->insert( "cfile_fileupload", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("cfile_fileupload")->row();
return $query;
}
function getsinglefileupload($id){
$this->db->where("id",$id);
$query=$this->db->get("cfile_fileupload")->row();
return $query;
}
public function edit($id,$cdate,$currenttime)
{
if($image=="")
{
$image=$this->fileupload_model->getimagebyid($id);
$image=$image->image;
}
$data=array("cdate" => $cdate,"currenttime" => $currenttime);
$this->db->where( "id", $id );
$query=$this->db->update( "cfile_fileupload", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `cfile_fileupload` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `cfile_fileupload` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `cfile_fileupload` ORDER BY `id`
                    ASC")->row();
$return=array(
"" => "Select Option"
);
foreach($query as $row)
{
$return[$row->id]=$row->name;
}
return $return;
}
}
?>
