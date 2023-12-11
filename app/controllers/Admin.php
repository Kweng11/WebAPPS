<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {
    public function home() 
    {
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
         redirect('LGULogin');
     }
       $this->call->view('Admin/home');
    }

     public function Dashboard() 
     {

      $data['isAdmin'] = $this->session->userdata('isAdmin'); 
      $this->call->view('Admin/Dashboard',$data);
        
     }
     public function ChangePass() 
     {

        $this->call->view('Admin/ChangePass');
     }
     public function OrminDash() 
     {
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
         redirect('LGULogin');
     }
        $this->call->view('Admin/Oriental/OrminDash');
     }
     public function OrminTab() 
     {
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
         redirect('LGULogin');
     }
     
        $userId = $this->session->userdata('user_id');
        $userId= 17;
        $data['information'] = $this->Admin_model->getusers($userId);
        $this->call->view('Admin/Oriental/OrminTab', $data);
     }




     

    public function addusers()
    {
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
         redirect('LGULogin');
     }
        
        $userId = $this->session->userdata('user_id');
        $name = $this->io->post('NameofFarmer');
        $location = $this->io->post('FarmerLocation');
        $cans = $this->io->post('NoofCans');
        $date = $this->io->post('SeedlingDate');
        $area = $this->io->post('NoofArea');
        $typhoon = $this->io->post('Damagedoftyphoon');
        $heavyrains = $this->io->post('DamagedofRains');
        $TD = $this->io->post('TotalDamaged');
        $stad = $this->io->post('StandingCrop');
        $trans = $this->io->post('TransplateDate');
        $exd = $this->io->post('ExpectedHarvest');
        $exa = $this->io->post('ExpectedArea');
        $exv = $this->io->post('ExpectedVolume');
        $cd = $this->io->post('DamagesCans');


        $bind = array(
            "user_id" => $userId,
            "names" => $name,
            "location"  =>    $location,
            "cans"  => $cans,
            "date"  =>   $date,
            "area"  =>  $area,
            "typhoon"  =>  $typhoon,
            "heavy_rains"  =>    $heavyrains,
            "total_damages"  => $TD,
            "standing_crop"  =>  $stad,
            "transplate_date"  => $trans,
            "expected_date"  =>  $exd,
            "expected_area"  => $exa,
            "expected_volume" => $exv,
            "cans_damages" => $cd,
        );
        $this->db->table('information')->insert($bind);
        redirect('OrminTab');
    }

    public function delete($id)
    {
        if (isset($id)) {
            $this->db->table('information')->where("id", $id)->delete();
            redirect('OrminTab');
        } else {
            $_SESSION['delete'] = "FAILED";
            redirect('OrminTab');
        }
    }
    public function edit($id)
    {
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
         redirect('LGULogin');
     }
        
        $this->call->model('Admin_model');
        $data['information'] = $this->Admin_model->getusers($id);
        $data['edit'] = $this->Admin_model->searchUsers($id);
        $this->call->view('Admin/Oriental/OrminTab', $data);
    }
    public function submitedit($id)
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('LGULogin');
        }
    
        if (isset($id)) {
            $userId = $this->session->userdata('user_id');
            $name = $this->io->post('NameofFarmer');
            $location = $this->io->post('FarmerLocation');
            $cans = $this->io->post('NoofCans');
            $date = $this->io->post('SeedlingDate');
            $area = $this->io->post('NoofArea');
            $typhoon = $this->io->post('Damagedoftyphoon');
            $heavyrains = $this->io->post('DamagedofRains');
            $TD = $this->io->post('TotalDamaged');
            $stad = $this->io->post('StandingCrop');
            $trans = $this->io->post('TransplateDate');
            $exd = $this->io->post('ExpectedHarvest');
            $exa = $this->io->post('ExpectedArea');
            $exv = $this->io->post('ExpectedVolume');
            $cd = $this->io->post('DamagesCans');
    
            $data = [
                "user_id" => $userId,
                "names" => $name,
                "location" => $location,
                "cans" => $cans,
                "date" => $date,
                "area" => $area,
                "typhoon" => $typhoon,
                "heavy_rains" => $heavyrains,
                "total_damages" => $TD,
                "standing_crop" => $stad,
                "transplate_date" => $trans,
                "expected_date" => $exd,
                "expected_area" => $exa,
                "expected_volume" => $exv,
                "cans_damages" => $cd,
            ];
    
            $this->db->table('information')->where("id", $id)->update($data);
            redirect('OrminTab');
        }
    }
    
    







     public function OcciDash() 
     {
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
         redirect('LGULogin');
        }
     $this->call->view('Admin/Ocidental/OcciDash');
     }

     public function PalDash() 
     {
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
         redirect('LGULogin');
     }
     
     
        $this->call->view('Admin/Palawan/PalDash');
     }
     public function PalTab() 
     {
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
         redirect('LGULogin');
     }
     
        $userId = $this->session->userdata('user_id');
        $userId= 20;
        $data['information'] = $this->Admin_model->getusers($userId);
        $this->call->view('Admin/Palawan/PalTab',$data);
     }
     public function RomDash() 
     {

        $this->call->view('Admin/Romblon/RomDash');
     }
     public function RomTab() 
     {
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
         redirect('LGULogin');
     }
     
        $userId = $this->session->userdata('user_id');
        $userId= 21;
        $data['information'] = $this->Admin_model->getusers($userId);
        $this->call->view('Admin/Romblon/RomTab',$data);
     }
     public function MarDash() 
     {

        $this->call->view('Admin/Marinduque/MarDash');
     }
     public function MarTab() 
     {
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
         redirect('LGULogin');
     }
     
        $userId = $this->session->userdata('user_id');
        $userId= 19;
        $data['information'] = $this->Admin_model->getusers($userId);
        $this->call->view('Admin/Marinduque/MarTab',$data);
     }
     public function Table() 
     {
           $this->call->view('Admin/Table');
     }
     public function Report() 
     {

        $this->call->view('Admin/Report');
     }
}
?>
