<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
      protected $table    = 'usuarios';
      protected $fillable = ['id','cpf','nome','fone','email','senha','perfil'];
      public $timestamps  = false;
}