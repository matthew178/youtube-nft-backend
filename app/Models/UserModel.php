<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Laravel\Lumen\Auth\Authorizable;

class UserModel extends Model implements JWTSubject, AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    public $incrementing = true;
    protected $fillable = [
        'user_id', 'email', 'password', 'name', 'family_name', 'age', 'phone_number', 'location', 'created_at', 'updated_at', 'deleted_at', 'deleted'
    ];
    public $timestamps = true;

    public function getUserByEmail($email)
    {
        return UserModel::select('user.*')
            ->where('email', '=', $email)
            ->get();
    }

    public function login($email, $password)
    {
        return UserModel::select('user.*')
            ->where('email', '=', $email)
            ->where('password', '=', $password)
            ->get();
    }

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
}
