<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable implements JWTSubject
{
    const ADMIN_ROLE = 1;
    const MEMBER_ROLE = 2;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'password',
        'display_name',
        'phone',
        'role',
        'email',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Set encrypted password.
     *
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * Check user is manager
     * 
     * @return boolean
     */
    public function isAdmin() { 
        return $this->role == self::ADMIN_ROLE;
    }

    /**
     * Check user is member
     * 
     * @return boolean
     */
    public function isMember() { 
        return $this->role_id == self::MEMBER_ROLE;
    }

    /**
     * Get the user's avatar.
     *
     * @param  string  $value
     * @return string
     */
    public function getAvatarAttribute($value)
    {
        return $value != null ? asset(Storage::url($value)) : null;
    }
}
