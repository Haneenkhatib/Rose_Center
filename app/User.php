<?php

namespace App;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles,SoftDeletes,Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'password','email', 'photo','type'];
    protected $dates = ['created_at', 'updated_at','deleted_at'];

    // services // appointments
    public function services(){
        return $this->hasMany("App\Service");
    }
    public function appointments(){
        return $this->hasMany("App\Appointment");
    }
}
