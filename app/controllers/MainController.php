<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class MainController extends Controller
{

    public function UserTable()
    {
        if (!$this->session->userdata('IsLoggedIn')) {
            redirect('');
        }
        $userId = $this->session->userdata('user_id');
        $data['users'] = $this->LGUModel->getusers($userId);
        $this->call->view('User/UserTable', $data);
    }


    public function addusers()
    {
        if (!$this->session->userdata('IsLoggedIn')) {
            redirect('');
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
        redirect('UserTable');
    }
    public function delete($id)
    {
        if (isset($id)) {
            $this->db->table('information')->where("id", $id)->delete();
            redirect('UserTable');
        } else {
            $_SESSION['delete'] = "FAILED";
            redirect('UserTable');
        }
    }
    public function edit($id)
    {
        if (!$this->session->userdata('IsLoggedIn')) {
            redirect('');
        }
        $this->call->model('LGUModel');
        $data['users'] = $this->LGUModel->getusers($id);
        $data['edit'] = $this->LGUModel->searchUsers($id);
        $this->call->view('User/UserTable', $data);
    }
    public function submitedit($id)
    {
        if (!$this->session->userdata('IsLoggedIn')) {
            redirect('');
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
                "expected_volume"  => $exv,
                "cans_damages" => $cd,
            ];
            $this->db->table('information')->where("id", $id)->update($data);
            redirect('UserTable');
        }
    }
}
