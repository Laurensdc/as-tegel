<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Mail;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/producten';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        $this->middleware('lang');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'naam' => 'required|max:255',
            'voornaam' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'tel' => 'min:8|max:20'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $naam = $data['naam'];

        if(!isset($data['is_handelaar'])) {
            $data['btw'] = null;
            Mail::send('mail.particulier',
             [  'voornaam' => $data['voornaam'],
                'achternaam' => $data['naam'],
                'telnr' => $data['tel'],
                'email' => $data['email'],
             ], function($message) use ($naam)
            {
                $message->to('chriswolfcarius@yahoo.com.sg')->subject('Registratie particulier ' . $naam);
            });

        }
        else if($data['is_handelaar'] == true) {      
            Mail::send('mail.handelaar',
             [  'voornaam' => $data['voornaam'],
                'achternaam' => $data['naam'],
                'telnr' => $data['tel'],
                'email' => $data['email'],
                'btw' => $data['btw']
             ], function($message) use ($naam)
            {
                $message->to('chriswolfcarius@yahoo.com.sg')->subject('Aanvraag registratie handelaar ' . $naam);
            });

        }

        return User::create([
            'firstname' => $data['voornaam'],
            'lastname' => $data['naam'],
            'role' => 'particulier',
            'telnr' => $data['tel'],
            'email' => $data['email'],
            'btwnr' => $data['btw'],
            'password' => bcrypt($data['password'])
        ]);
    }
}
