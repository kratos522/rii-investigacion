<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaCitacion extends Model
{
  public function acta(){
       return $this->morphOne(Acta::class, 'actable');
   }
   // el o los abogados irian tambien
   public function fiscales(){
        return $this->hasOne(Fiscal::class);
    }

    public function sospechosos(){
         return $this->hasMany(Sospechoso::class);
     }

     public function detenidos(){
          return $this->hasMany(Detenido::class);
      }

      public function ofendidos(){
           return $this->hasMany(Ofendido::class);
       }

      public function victimas(){
           return $this->hasMany(Victima::class);
       }

       public function testigos(){
            return $this->hasMany(Testigo::class);
        }
}
