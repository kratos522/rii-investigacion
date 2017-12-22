<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaDeclaracionTestigo extends Model
{
  public function acta(){
       return $this->morphOne(Acta::class, 'actable');
   }
   // el o los abogados irian tambien
   public function fiscales(){
        return $this->hasOne(Fiscal::class);
    }

    public function testigos(){
         return $this->hasMany(Testigo::class);
     }
}
