<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->library('form_validation');
        //$this->session->userdata('is_login') == true;
        //redirect('auth');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        if( $this->form_validation->run() == false)
        {
            $data['title'] = 'Login page';
            $this->load->view('templates/auth_header',$data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        }else{
            $this-> _login();
        }
    }
    private function _login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email'=> $email])->row_array();
        if($user){
            if($user['is_active']== 1){
                if(password_verify($password, $user['password']) ){
                    $data =[
                        'email' => $user['email'],
                        'role' => $user['role_id'],
                        //'is_login' => true
                    ];
                    $this->session->set_userdata($data);
                    if($user){
                        $this->session->set_userdata($user);

                        switch($user['role_id']){
                          case 1:
                            redirect('Admin');
                            break;
                            case 2:
                              redirect('Datauser2');
                              break;
                              case 3:
                                redirect('Beranda');
                                break;
                                default:
                                redirect('auth');
                                break;
                        }
                    }else{

                        redirect('auth');
                    }
                }else{
                 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> password salah </div>');
                }
            }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> email belum diaktif </div>');

            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> email belum pernah terdaftar </div>');
           redirect('auth');  
        }
    }
    public function registration()
    {
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]',[
            'matches' =>'password tidak sama !!',
            'min_length' => 'password terlalu pendek'
        ]
    );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if( $this->form_validation->run() == false){
            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else{
           $data =[
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email',true)),
            'image' => 'default.png',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id'=> $this->input->post('role_id', true),
            'is_active' => 1,
            'date_created' => time(),
           ];
           $this->db->insert('user', $data);
           $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> congratulation! your acount has been created. Please Login</div>');
           redirect('auth');        
        }
      

    }
    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message','<div class="alert aler-success" role="alert"> You have been logout</div>');
        redirect('Auth');
    }   
}