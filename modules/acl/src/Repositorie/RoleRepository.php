<?php

namespace Acl\Repositorie;

use  Acl\Database\Models\Role;

class RoleRepository
{

    public function getParenRoleByIdWithChilds($id)
    {
        return Role::find($id)->with('childs')->where('parent_id', 0)->get();
    }

    public function getRoleById($id)
    {
        return Role::find($id);
    }

    public function getAllRole()
    {
        return Role::all();
    }

    public function CreateRole($name, $description,$guard)
    {
        Role::create([
            'name' => $name,
            'description' => $description,
            'guard'=> $guard
        ]);
    }


    public function UpdateRoleById($id,$name,$parent_id)
    {
        $role = $this->getRoleById($id);
        $role->update(['name' => $name, 'parent_id' => $parent_id ]);
    }


    public function DeleteRoleById($id)
    {
        $this->getRoleById($id)->delete();
    }
}
