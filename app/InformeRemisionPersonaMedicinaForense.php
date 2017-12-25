<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeRemisionPersonaMedicinaForense extends Model
{
  protected $table = "informe_remision_personas_medicina_forense";
  
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

      public function lugar(){
           return $this->hasOne(LugarSS::class);
       }

}
