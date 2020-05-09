<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	public function index(){
	}
   function loadPage($page="",$id=""){
        $page_data['userDetils'] =$this->CommonModel->getuserDetails($id);
		    $this->load->view('admin/account/'.$page,$page_data);
		}
   function updateUser(){
       $page_data['messagefail']="";
        $data['CID']=$this->input->post('CID');
        $data['Full_Name']=$this->input->post('Full_Name');
        $data['Contact_Number']=$this->input->post('Contact_Number');
        $data['User_Id']=$this->input->post('User_Id');
       // $data['Password']=$this->input->post('Password');
        $this->db->where('Id',  $this->input->post('userId'));
        $this->db->update('t_user_details`', $data);
        $page_data['message']="Details are updated. Thank you for using the system";
        $this->load->view('admin/acknowledgement', $page_data); 
    }
   function updatePassword(){
       	$page_data['messagefail']="";
       	$data['Password']=password_hash($this->input->post('Password'), PASSWORD_BCRYPT);
       }
    function loadservice($page="",$id=""){
      $page_data['ServiceCategory'] = $this->db->get_where('t_service',array('service_type'))->result_array();
      $page_data['Category']=$this->db->get_where('t_service_category',array('category_name'))->result_array();
      $page_data['serviceList'] = $this->db->get_where('t_service_category',array('status'=>'Y'))->result_array();
        $this->load->view('admin/service/'.$page,$page_data);
     }
    function loadgallery($page=""){

          $this->load->view('admin/gallery/'.$page);
     }
     function loadfile($page=""){

          $this->load->view('admin/download/'.$page);
     }
     function loadvideo($page=""){

          $this->load->view('admin/youtube/'.$page);
     }
     function loadevents($page=""){

          $this->load->view('admin/events/'.$page);
     }
     function loadclients($page=""){

          $this->load->view('admin/clients/'.$page);
     }
     function loadstaff($page=""){

          $this->load->view('admin/team/'.$page);
     }
     function loadsystem($page=""){

          $this->load->view('admin/systemuser/'.$page);
     }
     function loadconfig($page=""){

          $this->load->view('admin/configuration/'.$page);
     }

    function addService(){
        $page_data['message']="";
        $page_data['messagefail']="";
        
        $data['service_name']=$this->input->post('service_name');
        $data['service_type']=$this->input->post('service_type');
        $data['content']=$this->input->post('editor1');
        $this->CommonModel->do_insert('t_service', $data); 
        if($this->db->affected_rows()>0){
            $page_data['message']="Service details has been added.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Service is not able to submit. Please try again';
        }
        $this->load->view('admin/acknowledgement', $page_data); 
    }
    function Updateservicecategory($param2=""){
    $data['category_name']=$this->input->post('Categoryname');
    $data['slug']=$this->input->post('slug');
        $this->db->where('category_id',  $this->input->post('deleteId'));
        $this->db->update('t_service_category`', $data);
        $page_data['ServiceCategory'] = $this->db->get_where('t_service_category',array('service_status'))->result_array();
    $this->load->view('admin/service/'.$param2,$page_data);
  }
        function Deleteservicecategory($serviceid="",$page=""){
          $this->db->where('service_id', $serviceid);
              $this->db->delete('t_service_category');
              $page_data['ServiceCategory'] = $this->db->get_where('t_service_category',array('service_status'))->result_array();
            $this->load->view('admin/service'.$page,$page_data);
        }
        function AddServicecategory($page=""){
              $data['service_type']=$this->input->post('Categoryname');
              $this->CommonModel->do_insert('t_service', $data); 
              $this->load->view('admin/service/'.$page,$page_data);
        }
  }