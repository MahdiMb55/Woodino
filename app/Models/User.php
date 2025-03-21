<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Order;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'name',
        'mobile',
        'email',
        'password',
        'address',
        'role_id',
        'birthdate'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }

    public function employerOrders()
    {
        return $this->hasMany(Order::class, 'employer_id');
    }
}
