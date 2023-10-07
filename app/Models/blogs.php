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
$data=static::all()->firstWhere('slug',$slug);
if(! $data)
{
    abort(404);
}
return $data;
}

public function getRouteKeyName()
{
    return 'slug';
}



  public static function userData($user)
{
return static::all()->where('user_id',$user);
}
  public function user()
{
return $this->belongsTo(User::class);
}

}
