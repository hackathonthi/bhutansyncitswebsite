<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BaseController extends CI_Controller {
    public function _construct(){
        parent::_construct();
    }
	public function index(){
		$this->load->view('web/index');
	}
	function loadpage($param1="",$param2=""){
        //die($param1);
        if($param1=="about" || $param1=="faq"){
            $page_data['linktype']=$param1;
            $this->load->view('web/about/about', $page_data);   
        }
        if($param1=="blog"){
            $page_data['linktype']=$param1;
            $this->load->view('web/blog/blog', $page_data);   
        }
        if($param1=="contact"){
            $page_data['linktype']=$param1;
            $this->load->view('web/contact/contact', $page_data);   
        }
        if($param1=="team"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/team', $page_data);   
        }
        if($param1=="testimonail"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/testimonail', $page_data);   
        }
        if($param1=="portfolio"){
            $page_data['linktype']=$param1;
            $this->load->view('web/portfolio/portfolio', $page_data);   
        }
        if($param1=="pricing"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pricing/pricing', $page_data);   
        }
		if($param1=="service"){
            $page_data['linktype']=$param1;
            $this->load->view('web/service/service', $page_data);   
        }
        if($param1=="career"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/career', $page_data);   
        }
        if($param1=="login"){
            $page_data['linktype']=$param1;
            $this->load->view('web/login/login', $page_data);   
        }
        if($param1=="signup"){
            $page_data['linktype']=$param1;
            $this->load->view('web/register/signup', $page_data);   
        }
	}
    function loginuser(){
        if($this->input->post('EmailId')!="" &&  $this->input->post('password')!=""){
            $query = $this->db->get_where('t_user_details', array(
            'User_Id' => $this->input->post('EmailId')));
            if ($query->num_rows() > 0){
                $row = $query->row_array(); 
                if(password_verify($this->input->post('password'), $row['Password'])){
                    if($row['User_Status']=="N"){
                     $page_data['message']='Your user is deactivated. Please contact system administrator.';
                         $this->load->view('web/acknowledgement', $page_data); 
                    }
                    else{
                        
                        $this->session->set_userdata('User_table_id', $row['Id']);
                        $this->session->set_userdata('Role_Id', $row['Role_Id']);
                        $this->session->set_userdata('Full_Name', $row['Full_Name']);
                        $this->session->set_userdata('User_Id', $row['User_Id']);
                        $this->session->set_userdata('Contact_No', $row['Contact_Number']);
                        redirect(base_url() . 'index.php?baseController/dashboard', 'refresh');
                    }  
                }
                else{
                    $page_data['message']='Invalid email and password';
                    $this->load->view('web/acknowledgement', $page_data); 
                }
            } 
            else{
                $page_data['message']='Invalid email ';
                $this->load->view('web/acknowledgement', $page_data); 
            }
        } 
        else{
            $page_data['message']='Email and password is required';
                $this->load->view('web/acknowledgement', $page_data); 
        }

    }
    function dashboard($param=""){
        $page_data['message']="";
        if ($this->session->userdata('Full_Name') == null ){
            redirect(base_url(), 'refresh');
        }
        else{
            $this->load->view('admin/dashboard', $page_data);
        }
    }
    function logout($param=''){  
        $this->session->unset_userdata(0);
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'index.php?baseController/', 'refresh');
    }
}
