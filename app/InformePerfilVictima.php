<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformePerfilVictima extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

  public function fiscales(){
       return $this->hasOne(Fiscal::class);
   }

     public function victimas(){
          return $this->hasMany(Victima::class);
      }

     public function delitos(){
          return $this->hasMany(delito::class);
      }
}
