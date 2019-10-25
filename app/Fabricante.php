<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fabricante extends Model
{
    use SoftDeletes; 

    protected $table = 'fabricante';
    

    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['nombre', 'pais']; 
    protected $attributes = ['pais' => 'Japón']; 
    
    public function vehiculos() {
        return $this->hasMany('App\Vehiculo');
    }
}
