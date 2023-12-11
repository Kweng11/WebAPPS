<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class OcciTabController extends Controller {

       public function OcciTab() 
     {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('LGULogin');
        }
        
           $userId = $this->session->userdata('user_id');
           $userId= 18;
           $data['infor'] = $this->OC_model->getUsers($userId);
        $this->call->view('Admin/Ocidental/OcciTab',$data);
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
        redirect('OcciTab');
    }

    public function delete($id)
    {
        if (isset($id)) {
            $this->db->table('information')->where("id", $id)->delete();
            redirect('OcciTab');
        } else {
            $_SESSION['delete'] = "FAILED";
            redirect('OcciTab');
        }
    }
    public function edit($id)
    {
      if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
         redirect('LGULogin');
     }
        
        $this->call->model('OC_model');
        $data['infor'] = $this->OC_model->getUsers($id);
        $data['edit'] = $this->OC_model->searchUsers($id);
        $this->call->view('Admin/Oriental/OcciTab', $data);
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

            $existingUserData = $this->Admin_model->getusers($id);

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
                "updated_at" => date("Y-m-d H:i:s"),
        ];
         
    
            $this->db->table('information')->where("id", $id)->update($data);
           

            $logData = [
                "admin_id" => $userId, // assuming you have an admin_id field in your log table
                "user_id" => $id,
                "action" => "edit",
                "old_data" => json_encode($existingUserData),
                "new_data" => json_encode($data),
                "created_at" => date("Y-m-d H:i:s"),
            ];
           
           
        $this->db->table('edit_log')->insert($logData);

        redirect('OrminTab');
    
        }
    }
}