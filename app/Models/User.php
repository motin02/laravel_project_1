<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'email', 'password','role'
    ];
    protected $hidden = [
        'password',
    ];
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
    public function notifications(){
        return $this->hasMany(Notification::class);
    }
}
