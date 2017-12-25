<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeVigilanciaYSeguimiento extends Model
{
protected $table= "informe_vigilancias_y_seguimientos";

  public function informe(){
       return $this->morphOne(Informe::class, 'informable');
   }
   //podria ir el juez y/o la orden del juez?
  public function fiscales(){
       return $this->hasOne(Fiscal::class);
   }

    public function sospechosos(){
         return $this->hasMany(Sospechoso::class);
     }
}
