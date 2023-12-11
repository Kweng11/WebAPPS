<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class UserController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function LGULogin()
    {
        if (!$this->session->userdata('isLoggedIn')) {
            $prompt['success'] = $this->session->flashdata('registered');
            $prompt['fail'] = $this->session->flashdata('fail');
            $this->call->view('Login/LGULogin', $prompt);
        } else {
            redirect('/Main');
        }
    }
    public function Home()
    {
        $this->call->view('/Home');
    }

    public function LGURegister()
    {
        if ($this->session->userdata('isLoggedIn')) {
            redirect('/Main');
        } else {
            $this->call->view('Login/LGURegister');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('IsLoggedIn');

        redirect('');
    }

    public function create()
    {
        $email = $this->io->post('email');
        $password = password_hash($this->io->post('password'), PASSWORD_DEFAULT);
        $data = array(
            'email' => $email,
            'password' => $password,
        );
        $this->User_model->addUser($data);
        $this->session->set_flashdata('registered', 'New User Added');
        redirect('/LGULogin');
    }

    public function Contact()
    {
        $this->call->view('Contact');
    }
    public function About()
    {
        $this->call->view('About');
    }


    public function AdminLogin()
    {
        $this->call->view('Login/AdminLogin');
    }


    public function auth()
    {
        $email = $this->io->post('email');
        $password = $this->io->post('password');
        $user = $this->User_model->getEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $sesData = [
                'user_id' => $user['id'],
                'email' => $user['email'],
                'IsLoggedIn' => true,
                'role' => $user['role'], // Include user role in the session data
            ];

            $this->session->set_userdata($sesData);

            if ($user['role'] == 'admin') {
                redirect('Dashboard');  // Redirect to admin dashboard
            } else {
                redirect('Main');  // Redirect to user dashboard
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid email or password');
            redirect('LGULogin');
        }
    }
}
