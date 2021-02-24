<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Sdositb extends Model
{
    //
    protected $table = 'Sdositbs';
    protected $primaryKey = 'id_archivo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','seccion_id','unidad','facultades','fuente_legal','link'];

}
