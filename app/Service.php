<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description','price', 'active'];
    protected $dates = ['created_at', 'updated_at','deleted_at'];


    //users //appointments
    public function users(){
        return $this->belongsTo("App\User");
    }
    public function appointments(){
        return $this->hasMany("App\Appointment");
    }
}
