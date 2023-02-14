<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{

    public function producto() {

        return $this->belongsTo('App\Models\TipoProductos');

    }
}
