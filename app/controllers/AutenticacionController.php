<?php

class AutenticacionController extends BaseController {


    public function showLogin()
    {

        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
            return Redirect::to('/');
        }

        $data['title'] = 'Login';

        $view = View::make('pages.login',$data);

        return $view;
    }

    public function doLogin()
    {

        $respuesta=new stdClass();
        $rules = array(
            'username' => 'required',
            'password' => 'required|alphaNum|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            $respuesta->validacion=false;
            $respuesta->errores = $validator->messages();

        } else {

            //creo la informacion del usuario para la autenticacion
            $userdata = [
                'username' 	=> Input::get('username'),
                'password' 	=> Input::get('password')
            ];

            if (Auth::attempt($userdata, Input::get('remember'))) {
                $respuesta->validacion = true;
                $respuesta->mensaje='Usuario correcto';
                $respuesta->redirect = Session::get('url.intended', url('admin'));


            } else {
                $respuesta->validacion=false;
                $respuesta->errores = array('Usuario incorrecto');
            }

        }

        echo json_encode($respuesta);



    }

    public function doLogout()
    {

        Auth::logout(); // log the user out of our application
        return Redirect::to('login'); // redirect the user to the login screen
    }





}
