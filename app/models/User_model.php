<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class User_model extends Model
{
    public function getUserByEmail($email)
    {
        $data = $this->getUsers();
        foreach ($data as $users) {
            if ($users['email'] == $email) {
                return [
                    'id' => $users['id'],
                    'password' => $users['password'],
                    'email' => $users['email'],
                    'role' => $users['role']
                ];
            }
        }
        return null;
    }
    public function getusers()
    {
        return $this->db->table('users')->get_all();
    }
    public function searchUser($id)
    {
        return $this->db->table('users')->where('id', $id)->get();
    }
    public function addUser($data)
    {
        return $this->db->table('users')->insert($data);
    }
    public function updateUser($data, $id)
    {
        return $this->db->table('users')->where('id', $id)->update($data);
    }

    public function getEmail($email)
    {
        return $this->db->table('users')->where('email', $email)->get();
    }
    public function getInfo($user_id)
    {
        return $this->db->table('information')->where('user_id', $user_id)->get_all();
    }

}
