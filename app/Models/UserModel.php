<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
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
}
