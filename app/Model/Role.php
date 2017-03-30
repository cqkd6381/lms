<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    /**
     * @param Permission $permission
     * @return Model
     */
    public function givePermission(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }
}
