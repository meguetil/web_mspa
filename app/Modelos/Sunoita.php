<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Sunoita extends Model
{
    //
    protected $table = 'Sunoitas';
    protected $primaryKey = 'id_archivo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','seccion_id','tipo_norma','numero','denominacion','fecha_pub','fecha_mod','link'];
}
