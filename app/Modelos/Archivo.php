<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = 'Archivos';
    protected $primaryKey = 'id_archivo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','seccion_id','tipo_norma','numero','denominacion','fecha_pub','fecha_mod','link'];
}
