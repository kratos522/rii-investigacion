<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeIntervencionComunicacion extends Model
{
protected $table = "informe_intervencion_comunicaciones";

  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }

   public function solicitudintervencion(){
        return $this->hasOne(SolicitudIntervencionComunicacion::class);
    }

    // tambien podria requerir un juez
   public function fiscales(){
        return $this->hasOne(Fiscal::class);
    }

     public function sospechosos(){
          return $this->hasMany(Sospechoso::class);
      }

}
