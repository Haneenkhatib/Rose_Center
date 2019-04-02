<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'service_id','Date', 'Description'];
    protected $dates = ['created_at', 'updated_at','deleted_at'];

    //users //appointments
    public function users(){
        return $this->belongsTo("App\User");
    }
    public function services(){
        return $this->belongsTo("App\Appointment");
    }

}
