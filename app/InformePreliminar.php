<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformePreliminar extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

  public function fiscales(){
       return $this->hasOne(Fiscal::class);
   }

    public function sospechosos(){
         return $this->hasMany(Sospechoso::class);
     }

     public function victimas(){
          return $this->hasMany(Victima::class);
      }

     public function delitos(){
          return $this->hasMany(delito::class);
      }
}
