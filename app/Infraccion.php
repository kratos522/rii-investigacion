<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infraccion extends Model
{
protected $table = "infracciones";

  public function documento(){
       return $this->morphOne(Documento::class, 'documentable');
   }

   public function delitos(){
        return $this->hasMany(Delito::class);
    }

    public function personas(){
         return $this->hasOne(Persona::class);
     }
}
