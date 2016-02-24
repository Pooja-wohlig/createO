<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class review_model extends CI_Model
{
public function create($duration,$teamsize,$lastlocation,$nextlocation,$knowssmash,$hostwithsmash,$name,$email,$phone,$designation,$organization)
{
$data=array("duration" => $duration,"teamsize" => $teamsize,"lastlocation" => $lastlocation,"nextlocation" => $nextlocation,"knowssmash" => $knowssmash,"hostwithsmash" => $hostwithsmash,"name" => $name,"email" => $email,"phone" => $phone,"designation" => $designation,"organization" => $organization);
$query=$this->db->insert( "smash_review", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("smash_review")->row();
return $query;
}
function getsinglereview($id){
$this->db->where("id",$id);
$query=$this->db->get("smash_review")->row();
return $query;
}
public function edit($id,$duration,$teamsize,$lastlocation,$nextlocation,$knowssmash,$hostwithsmash,$name,$email,$phone,$designation,$organization)
{
if($image=="")
{
$image=$this->review_model->getimagebyid($id);
$image=$image->image;
}
$data=array("duration" => $duration,"teamsize" => $teamsize,"lastlocation" => $lastlocation,"nextlocation" => $nextlocation,"knowssmash" => $knowssmash,"hostwithsmash" => $hostwithsmash,"name" => $name,"email" => $email,"phone" => $phone,"designation" => $designation,"organization" => $organization);
$this->db->where( "id", $id );
$query=$this->db->update( "smash_review", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `smash_review` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
//$query=$this->db->query("SELECT `image` FROM `smash_review` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `smash_review` ORDER BY `id`
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


// public function reviewSubmit($name,$email)
// {
// $q="INSERT INTO `smash_review`(`name`,`email`) VALUE('$name','$email')";
// echo $q;
//     $this->db->query($q);
//     $object = new stdClass();
//     $object->value = true;
//     return $object;
//
// }

public function  reviewSubmit($duration,$teamsize,$lastlocation,$nextlocation,$knowssmash,$hostwithsmash,$name,$email,$phone,$designation,$organization)
{
$data=array("duration" => $duration,"teamsize" => $teamsize,"lastlocation" => $lastlocation,"nextlocation" => $nextlocation,"knowssmash" => $knowssmash,"hostwithsmash" => $hostwithsmash,"name" => $name,"email" => $email,"phone" => $phone,"designation" => $designation,"organization" => $organization);

$query=$this->db->insert( "smash_review", $data );
$id=$this->db->insert_id();
$object = new stdClass();
$object->value = true;
return $object;
// if(!$query)
// return  false;
// else
// return  $id;
}
}
?>
