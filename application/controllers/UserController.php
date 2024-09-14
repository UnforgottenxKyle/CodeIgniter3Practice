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
        $this->load->view('login');
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
            $this->user->create($data);
            redirect(base_url('usercontroller/index'));
        }
    }
}
