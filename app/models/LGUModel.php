<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class LGUModel extends Model {
    public function getusers($user_id)
    {
        // return $this->db->table('information')->get_all();
        return $this->db->table('information')->where('user_id', $user_id)->get_all();
    }
    public function searchUsers($id)
    {
        return $this->db->table('information')->where('id', $id)->get();
    }
    public function addUser($data)
    {
        return $this->db->table('information')->insert($data);
    }
    public function updateUser($data, $id)
    {
        return $this->db->table('information')->where('id', $id)->update($data);

    }


}
?>
