<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Sdosita extends Model
{
    //
    protected $table = 'Sdositas';
    protected $primaryKey = 'id_archivo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','seccion_id','tipo_norma','numero','denominacion','fecha_pub','link'];

}
