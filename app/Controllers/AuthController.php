<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    private $user;
    public function __construct()
    {
        $this->user = new \App\Models\UserModel();
    }
    // public function index()
    // {
    //     //
    // }
    public function login()
    {
        return view('login');
    }
    public function loginauth()
    {
        $session = session();

        $email = $this->request->getVar('email');
        $password = trim($this->request->getVar('password'));



        $user = $this->user->where('email', $email)->first();
        var_dump($user);

        if ($user) {


            $hashedPassword = $user['password'];
            $authenticatePassword = password_verify($password, $hashedPassword);


            if ($authenticatePassword == true) {

                $ses_data = [
                    'id' => $user['id'],
                    'role' => $user['role'],
                    'isLoggedIn' => true,
                ];


                $session->set($ses_data);

                if ($user['role'] === 'admin') {
                    return redirect()->to(base_url('manage'));

                } else {
                    return redirect()->to('');
                }
            } else {
                return redirect()->to('login');
                //  var_dump($hashedPassword); // Password hash from the database
                //    var_dump($password); // Password entered during login
                ///    echo ' wrong pass or email';

            }
        } else {
            // return redirect()->to('login');
        }
    }

    public function logout()
    {

        $session = session();
        $session->destroy();

        return redirect()->to('login');
    }
    public function register()
    {
        return view('register');
    }
    public function registerauth()
    {
        helper(['form']);

        $validationRules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ];

        if ($this->validate($validationRules)) {
            $data = [
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];


            $this->user->insert($data);

            return redirect()->to('login');
        } else {
            return view('register', ['validation' => $this->validator]);
        }
    }


}