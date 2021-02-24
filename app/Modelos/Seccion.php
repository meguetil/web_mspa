<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = 'Seccions';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo_seccion','item_id'];

    public function seccions($id){
        return Seccion::where('item_id','=',$id)
            ->get();

    }
}
