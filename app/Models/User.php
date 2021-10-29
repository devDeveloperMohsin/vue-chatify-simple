<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_RETAILER = 'RETAILER';
    const ROLE_DISTRIBUTOR = 'DISTRIBUTOR';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'role',
        'phone',
        'address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isRetailer(){
        return $this->role == self::ROLE_RETAILER;
    }

    public function isDistributor(){
        return $this->role == self::ROLE_DISTRIBUTOR;
    }

    public function userRetailers(){
        return $this->belongsToMany(User::class,'user_suppliers','distributor_id', 'retailer_id');
    }

    public function userDistributors(){
        return $this->belongsToMany(User::class,'user_suppliers','retailer_id','distributor_id');
    }
}
