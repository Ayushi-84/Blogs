<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class blogs extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

  protected $guarded=['id'];

  public static function slug($slug)
{
return static::all()->firstWhere('slug',$slug);
}
  public static function user($user)
{
return static::all()->where('user_id',$user);
}

}
