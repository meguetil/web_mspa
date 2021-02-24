<?php

namespace App\Permisos\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'name', 'slug', 'description','full-access',
    ];

    public function users(){

        return $this->belongsToMany('App\User')->WithTimesTamps();
    }

    public function permissions(){

        return $this->belongsToMany('App\Permisos\Models\Permission')->WithTimesTamps();
    }

}
