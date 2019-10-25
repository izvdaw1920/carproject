<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehiculo extends Model
{
    use SoftDeletes; 

    protected $table = 'vehiculo';
    

    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['idfabricante', 'modelo']; 
    
    public function fabricante() {
        return $this->belongsTo('App\Fabricante', 'idfabricante');
    }
    
}
