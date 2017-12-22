<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeRetratoHablado extends Model
{
  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

  public function fiscales(){
       return $this->hasOne(Fiscal::class);
   }

    public function sospechosos(){
         return $this->hasOne(Sospechoso::class);
     }

     public function testigos(){
          return $this->hasOne(Testigo::class);
      }
}
