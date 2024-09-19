<?php


class UserController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user');
    }

    public function index()
    {
        $datas['student'] = $this->user->read();
        $this->load->view('login', $datas);
    }
    public function register()
    {
        $this->load->view('register');
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $course = $this->input->post('course');
            $studentno = $this->input->post('studentno');
            $data = [
                'std_first_name' => $firstname,
                'std_last_name' => $lastname,
                'std_course' => $course,
                'std_no' => $studentno
            ];


            $status = $this->user->create($data);

            if ($status == true) {
                $this->session->set_flashdata('success', 'Successfuly Added');
                redirect(base_url('usercontroller/index'));
            } else {
                $this->session->set_flashdata('error', 'Not Successfull');
                $this->load->view('register');
            }
        } else {
            $this->load->view('register');
        }
    }

    public function delete($id)
    {
        $status = $this->user->delete($id);
        if ($status == true) {
            $this->session->set_flashdata('success', 'Successfuly Added');
            redirect(base_url('usercontroller/index'));
        } else {
            $this->session->set_flashdata('error', 'Not Successfull');
            redirect(base_url('usercontroller/index'));
        }
    }
}
