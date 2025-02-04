<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    protected $tbale = 'coche';

    protected $filelable = ['marca','modelo','precio'];
    
    //definir aquí las relaciones si hubiera mas de una tabla 
    
}
