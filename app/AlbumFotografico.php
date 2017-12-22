<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumFotografico extends Model
{
  public function acta(){
       return $this->morphOne(Acta::class, 'actable');
   }

   public function fiscales(){
        return $this->hasOne(Fiscal::class);
    }

    public function fotografia(){
         return $this->hasMany(Fotografia::class);
     }

     public function lugar(){
          return $this->hasOne(LugarSS::class);
      }
}
