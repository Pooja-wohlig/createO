<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
class Json extends CI_Controller 
{function getallfileupload()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`cfile_fileupload`.`id`";
$elements[0]->sort="1";
$elements[0]->header="id";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`cfile_fileupload`.`cdate`";
$elements[1]->sort="1";
$elements[1]->header="cdate";
$elements[1]->alias="cdate";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`cfile_fileupload`.`currenttime`";
$elements[2]->sort="1";
$elements[2]->header="currenttime";
$elements[2]->alias="currenttime";

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
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `cfile_fileupload`");
$this->load->view("json",$data);
}
public function getsinglefileupload()
{
$id=$this->input->get_post("id");
$data["message"]=$this->fileupload_model->getsinglefileupload($id);
$this->load->view("json",$data);
}
} ?>