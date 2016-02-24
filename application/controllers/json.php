<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
class Json extends CI_Controller
{function getallreview()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`smash_review`.`id`";
$elements[0]->sort="1";
$elements[0]->header="id";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`smash_review`.`duration`";
$elements[1]->sort="1";
$elements[1]->header="duration";
$elements[1]->alias="duration";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`smash_review`.`teamsize`";
$elements[2]->sort="1";
$elements[2]->header="teamsize";
$elements[2]->alias="teamsize";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`smash_review`.`lastlocation`";
$elements[3]->sort="1";
$elements[3]->header="lastlocation";
$elements[3]->alias="lastlocation";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`smash_review`.`nextlocation`";
$elements[4]->sort="1";
$elements[4]->header="nextlocation";
$elements[4]->alias="nextlocation";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`smash_review`.`knowssmash`";
$elements[5]->sort="1";
$elements[5]->header="knowssmash";
$elements[5]->alias="knowssmash";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`smash_review`.`hostwithsmash`";
$elements[6]->sort="1";
$elements[6]->header="hostwithsmash";
$elements[6]->alias="hostwithsmash";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`smash_review`.`name`";
$elements[7]->sort="1";
$elements[7]->header="name";
$elements[7]->alias="name";

$elements=array();
$elements[8]=new stdClass();
$elements[8]->field="`smash_review`.`email`";
$elements[8]->sort="1";
$elements[8]->header="email";
$elements[8]->alias="email";

$elements=array();
$elements[9]=new stdClass();
$elements[9]->field="`smash_review`.`phone`";
$elements[9]->sort="1";
$elements[9]->header="phone";
$elements[9]->alias="phone";

$elements=array();
$elements[10]=new stdClass();
$elements[10]->field="`smash_review`.`designation`";
$elements[10]->sort="1";
$elements[10]->header="designation";
$elements[10]->alias="designation";

$elements=array();
$elements[11]=new stdClass();
$elements[11]->field="`smash_review`.`organization`";
$elements[11]->sort="1";
$elements[11]->header="organization";
$elements[11]->alias="organization";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `smash_review`");
$this->load->view("json",$data);
}
public function getsinglereview()
{
$id=$this->input->get_post("id");
$data["message"]=$this->review_model->getsinglereview($id);
$this->load->view("json",$data);
}

// public function reviewSubmit()
// {
//
// //  $data = json_decode(file_get_contents('php://input'), true);
// $email=$this->input->get_post("email");
//   //   $name = $data['name'];
//   // $email = $data['email'];
//
//
// $data['message'] = $this->review_model->reviewSubmit($name,$email);
// $this->load->view('json', $data);
// }

public function reviewSubmit()
{
  $data = json_decode(file_get_contents('php://input'), true);
  $duration = $data['duration'];
  $teamsize = $data['teamsize'];
  $lastlocation = $data['lastlocation'];
  $nextlocation = $data['nextlocation'];
  $knowssmash = $data['knowssmash'];
  $hostwithsmash = $data['hostwithsmash'];
  $name = $data['name'];
  $email = $data['email'];
  $phone = $data['phone'];
  $designation = $data['designation'];
  $organization = $data['organization'];

$data["message"]=$this->review_model->reviewSubmit($duration,$teamsize,$lastlocation,$nextlocation,$knowssmash,
$hostwithsmash,$name,$email,$phone,$designation,$organization);
$this->load->view("json",$data);
}

} ?>
