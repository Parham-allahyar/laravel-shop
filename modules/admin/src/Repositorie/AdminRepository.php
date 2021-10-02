<?php

namespace Admin\Repositorie;

use Admin\Database\Models\Admin;


class AdminRepository
{
    public  $newAdmin;
    public function create($data): bool
    {
        $adminData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ];
        $this->newAdmin = Admin::create($adminData);
        return !$this->newAdmin->exists ? false : true;
    }

    public function getAllAdmins()
    {
        return Admin::all();
    }
}
