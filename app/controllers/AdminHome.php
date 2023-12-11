<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'app/vendor/autoload.php';

class AdminHome extends Controller {
    private $LAVA;
	public function __construct()
    {
        parent::__construct();
        $this->call->model('Admin_model');
        $this->LAVA = &lava_instance();
        $this->LAVA->call->database();
        $this->LAVA->call->library('session');
    }

	public function AdminLogin() {

		
		$this->call->view('Login/AdminLogin');
		
	
	}
	public function AdminRegister() {


		
		$this->call->view('Login/AdminRegister');
		
	
	}
	public function in()
    {
        if (!isset($_SESSION['email'])) {
            redirect('/AdminLogin');
        }
        $this->call->view('email');
    }
	public function verification()
    {
        $email = $_SESSION['email'];
        $user = $this->db->table('loginuser')->where(array('email' => $email))->get();
        if ($user) {
            $status = $user['email_verified'];
            if ($status == 1) {
                redirect('/');
            } else {
                $this->call->view('Login/verify');
            }
        }
    }
	public function signin()
    {
        $email = $this->io->post('email');
        $enteredPassword = $this->io->post('password');
        $_SESSION['email'] = $email;

        $user = $this->db->table('loginuser')->where(array('email' => $email))->get();

        if ($user) {
            $status = $user['email_verified'];
            $hashedPassword = $user['password'];
            if (password_verify($enteredPassword, $hashedPassword)) {
                if ($status == 1) {
                    redirect('/home');
                } else {
                    echo '<script>alert("Account not verified."); window.location.href = "/verification";</script>';
                }
            } else {
                echo '<script>alert("Incorrect password"); window.location.href = "/AdminLogin";</script>';
            }
        } else {
            echo '<script>alert("Email does not exist"); window.location.href = "/AdminLogin";</script>';
        }
    }

    public function insert()
    {
        $this->call->library('form_validation');
        $this->form_validation
            ->name('password')
            ->required()
            ->min_length(8)
            ->name('confirmpassword')
            ->matches('password')
            ->required()
            ->min_length(8)
            ->name('email')
            ->valid_email();
        if ($this->form_validation->run() == FALSE) {
            echo '<script>alert("Form validation failed.");</script>';
            $this->call->view('LGURegister');
        } else {
                      $email = $this->io->post('email');
            $password = $this->io->post('password');

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $email_token = md5(uniqid(rand(), true));

            $this->LAVA->db->transaction();

            $existingUser = $this->LAVA->db->table('loginuser')->where('email', $email)->get();

            if ($existingUser) {
                $this->LAVA->db->roll_back();
                echo '<script>alert("Email already in use."); window.location.href = "/AdminLogin";</script>';
                return false;
            }

            $data = array(
              
                'password' => $hashedPassword,
                'email' => $email,
                'email_token' => $email_token
            );

            $res = $this->LAVA->db->table('loginuser')->insert($data);

            if ($res) {
                $this->verify($email, $email_token);
                $this->LAVA->db->commit();
                $_SESSION['email'] = $email;
                $this->call->view('Login/verify');
                return true;
            } else {
                $this->LAVA->db->roll_back();
                return false;
            }
        }
    }
	
    public function verify($to, $email_token)
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'algorithmphp@gmail.com';
            $mail->Password   = 'csia gvsz uzyc xnkb';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom('algorithmphp@gmail.com', 'Kweng');
            $mail->addAddress($to);

            $mail->isHTML(true);
            $mail->Subject = 'Email Verification';
            $mail->Body    = 'Click the following link to verify your email: <a href="http://localhost:8080/verify?token=' . $email_token . '">Verify Email</a>';

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
   

    public function verify_email()
    {
        $token = $_GET['token'];
        $email_token = $this->db->table('loginuser')->where(array('email_token' => $token))->get();
        if ($email_token) {
            $email = $email_token['email'];
            if ($email) {
                $this->db->table('loginuser')->where('email', $email)->update(['email_verified' => 1]);
                redirect('/');
            } else {
                echo '<script>alert("Invalid verification link."); window.location.href = "/verification";</script>';
            }
        } else {
            echo '<script>alert("This email is not registered."); window.location.href = "/verification";</script>';
        }
    }

    public function send()
    {
        $email = $_SESSION['email'];
        $user = $this->db->table('loginuser')->where(array('email' => $email))->get();
        $mail = new PHPMailer(true);

        $to = $this->io->post('receiver'); {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'algorithmphp@gmail.com';
            $mail->Password   = 'csia gvsz uzyc xnkb';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom($email, $fullName);
            $mail->addAddress($to);


            $mail->isHTML(true);
            $mail->Subject = $_POST['subject'];
            $mail->Body = $_POST['message'];

            if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == 0) {
                $mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
            }

            try {
                $mail->send();
                echo '<script>alert("Email sent."); window.location.href = "/";</script>';
                $this->call->view('email');
            } catch (Exception $e) {
                echo '<script>alert("Email not sent."); window.location.href = "/";</script>';
                $this->call->view('email');
            }
        }
    }
	       
    

}
?>