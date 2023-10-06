<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class blogs extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

  protected $guarded=[];

  public function slug()
{
return $this->belongsTo('App\Models\blogs');
}

}
