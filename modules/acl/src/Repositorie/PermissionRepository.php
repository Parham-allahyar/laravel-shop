<?php

namespace Acl\Repositorie;

use  Acl\Database\Models\Permission;

class PermissionRepository
{

    public function getPermissionById($id)
    {
        return Permission::find($id);
    }

    public function getAllPermissions()
    {
        return Permission::all();
    }

    public function CreatePermission($name, $description, $guard)
    {


        Permission::create([
            'name' => $name,
            'description' => $description,
            'guard' => $guard
        ]);
    }


    public function UpdatePermissionById($id, $name, $parent_id)
    {
        $category = $this->getPermissionById($id);
        $category->update(['name' => $name, 'parent_id' => $parent_id]);
    }


    public function DeletePermissionById($id)
    {
        $this->getPermissionById($id)->delete();
    }
}
