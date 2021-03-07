<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $fillable = ['dni', 'nombre', 'primer_apellido', 'segundo_apellido', 'cui', 'fig_acepto', 'cod_qr', 'fecha_reg'];

}
