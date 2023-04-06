<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    // show register/create
    public function create()
    {
        return view('onboard');
    }


// creae user
    public function store(Request $request)
    {
        $formfield =$request->validate([
           'name'=>'required',
           'phone'=>'required|unique:users',
           'password'=>'required|min:8',
           'profil'=>'required',
           'firstname'=>'required',
           'classroom'=>'required'
        ], [
            'name.required'=>'Entre ton nom',
            'name.min'=>'Entre ton nom complet',
            'phone.required'=>'Ton numero n\'est pas valide',
            'password.required'=>'Entre ton pass lasylab',
            'firstname.required'=>'Entre ton prenom',
            'phone.unique'=>'le numero est déjà utiliser',
            'password.min'=> 'mot de pass est faible utiliser plus de 8caractères'

        ]);
        //hash pasword
        $formfield['password'] = bcrypt($formfield['password']);
        //save user
        //crreate user
        $user = User::create($formfield);
        //login
        auth()->login($user);
        return redirect('/choix1');
    }

    //connexion

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'phone' => 'required',
            'password'=>'required'
        ]);
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/enseignements');
        }
        return back()->withErrors('les identifiants ne correspondent pas');
    }

    //deconnection

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'vous etes deconnectés');
    }

    public function accueil()
    {
        return view('accueil');
    }

    public function onboard1()
    {
        return view('onboard1');
    }
    public function onboard2()
    {
        return view('onboard2');
    }
    public function onboard3()
    {
        return view('onboard3');
    }

    public function lesson()
    {
        return view('lesson');
    }

    public function ressource()
    {
        return view('ressource');
    }

    public function course()
    {
        return view('course');
    }

    public function choice()
    {
        return view('choicematter');
    }

    public function payment()
    {
        return view('payment');
    }
}
