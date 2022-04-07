<?php
namespace App\Http\Controllers;
use Redirect;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\BusDispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\AccessAuthorizesRequests;
use Illuminate\Foundation\Auth\AccessAuthorizesResources;
use Illuminate\Html\HtmlServiceProvider;

class LoginController extends BaseController
  {
   
    public function showLogin()
    {
       return view('login');
    }

    public function validate(Request $request)
    {
        
        $rules = array(
            'email' => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:8');
            // password has to be greater than 3 characters and can only be alphanumeric and);
            // checking all field
            //$validator = Validator::make($request->all() , $rules);
            // if the validator fails, redirect back to the form
           /* if ($validator->fails())
              {
              return Redirect::to('login')->withErrors($validator) // send back all errors to the login form
              ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
              }
              else*/
              {
              // create our user data for the authentication
              $userdata = array(
                'email' => $request->get('username') ,
                'password' => $request->get('pwd')
              );
              // attempt to do the login
              if (Auth::attempt($userdata))
                {
                    return view('homepage');
                // validation successful
                // do whatever you want on success
                }
                else
                {
                // validation not successful, send back to form
                return Redirect::to('login');
                }
            }
    }

    public function printnumbers()
    {
        for($i=1;$i<=100;$i++)
        {
            if($i%3==0 && $i%5==0)
            {
                print_r('FizzBuzz');
            }
            else if($i%3==0)
            {
                print_r('Fizz');
            }
            else if($i%5==0)
            {
                print_r('Buzz');
            }
            else
            {
                print_r($i);
            }
        }
    }
  }
