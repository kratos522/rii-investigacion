<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaLevantamientoCadaver extends Model
{
  protected $table = "acta_levantamiento_de_cadaver";

  public function acta(){
       return $this->morphOne(Acta::class, 'actable');
   }

   public function victimas(){
        return $this->hasOne(Victima::class);
    }

    public function fiscal(){
         return $this->hasOne(Fiscal::class);
     }

     public function indicios(){
          return $this->hasMany(Indicios::class);
      }

      public function lugarSS(){
           return $this->hasOne(LugarSS::class);
       }
}
