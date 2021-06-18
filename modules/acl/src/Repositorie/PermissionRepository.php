<?php

namespace Acl\Repositorie;

use  Acl\Database\Models\Permission;

class PermissionRepository
{

    public function getPermissionById($id)
    {
        return Permission::find($id);
    }

    public function getAllPermission()
    {
        return Permission::with('childs')->where('parent_id', 0)->get();
    }

    public function CreatePermission($name, $parent_id)
    {
        

        Permission::create([
            'name' => $name,
            'description' => $parent_id,
        ]);
    }


    public function UpdatePermissionById($id,$name,$parent_id)
    {
        $category = $this->getPermissionById($id);
        $category->update(['name' => $name, 'parent_id' => $parent_id ]);
    }


    public function DeletePermissionById($id)
    {
        $this->getPermissionById($id)->delete();
    }
}
