<?php

namespace EEPIS;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $fillable = ['documento_identidad', 'nombres', 'apellidos','telefono','celular','correo'];
}
