<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $req)
    {
        $email = $req->email;
        $password = $req->password;
        $confirm_password = $req->confirm_password;
        $return = [];

        if ($email != "" && $email != null && $password != "" && $password != null && $confirm_password != null && $confirm_password != null) {
            if ($password == $confirm_password) {
                $user = new UserModel();
                $cari_user = $user->getUserByEmail($req->email);
                if (count($cari_user) > 0) {
                    $return['status'] = false;
                    $return['message'] = "Email already exists";
                } else {
                    $user->email = $req->email;
                    $user->password = Hash::make($req->password);
                    $user->save();
                    $return['status'] = true;
                    $return['message'] = "Register success";
                }
            } else {
                $return['status'] = false;
                $return['message'] = "Password and confirm password not match";
            }
        } else {
            $return['status'] = false;
            $return['message'] = "All field must be filled";
        }

        echo json_encode($return);
    }

    public function login(Request $req)
    {
        $email = $req->email;
        $password = $req->password;
        $return = [];

        if ($email != "" && $email != null && $password != "" && $password != null) {
            $user = new UserModel();
            $result = $user->getUserByEmail($email);
            if (count($result) > 0) {
                $check = Hash::check($password, $result[0]->password);
                if ($check == 1) {
                    $return['status'] = true;
                    $return['message'] = "Login success";
                    $user_id = $result[0]->user_id;
                    $credentials = request(['email', 'password']);
                    if (!$token = auth()->attempt($credentials)) {
                        $return['status'] = false;
                        $return['message'] = "Unauthorized";
                    }
                    $respond = $this->respondWithToken($token);
                    $return['token'] = $respond->original['access_token'];
                    // $email = JWT::decode($respond['access_token']);
                } else {
                    $return['status'] = false;
                    $return['message'] = "Wrong password";
                }
            } else {
                $return['status'] = false;
                $return['message'] = "Account not exist";
            }
        }

        echo json_encode($return);
    }

    public function getProfile()
    {
        $me = $this->me();

        if (isset($me->original['user_id'])) {
            $return['status'] = true;
            $return['message'] = "Authorized";
            $return['data'] = $me;
        } else {
            $return['status'] = false;
            $return['message'] = "Unauthorized";
            $return['data'] = "";
        }

        echo json_encode($return);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
