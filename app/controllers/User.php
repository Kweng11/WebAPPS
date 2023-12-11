<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class User extends Controller
{
   public function Main()
   {
    
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
         redirect('LGULogin');
     }

     $userId = $this->session->userdata('user_id');

      $this->call->view('User/Main');
   }
   public function UserDashboard()
   {
     
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
         redirect('LGULogin');
     }

     $userId = $this->session->userdata('user_id');

      $this->call->view('User/UserDashboard');
   }

   public function UserReport()
   {
      
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
         redirect('LGULogin');
     }

     $userId = $this->session->userdata('user_id');

      $this->call->view('User/UserReport');
   }
   public function ResetPass()
   {
     
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
         redirect('LGULogin');
     }

     $userId = $this->session->userdata('user_id');

      $this->call->view('User/ResetPass');
   }
}
