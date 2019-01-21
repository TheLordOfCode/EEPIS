<?php

namespace EEPIS\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class AdminController extends Controller
{
    /* public function login(Request $request){
         if($request->isMethod('post')){
             $data = $request->input();
             if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'], 'admin'=>'1'])){
                 //echo "success"; die;
                 Session::put('adminSession',$data['email']);
                 return redirect('admin/dashboard');
             }else{
                 //echo "failed"; die;
                 return redirect('/admin')->with('flash_message_error', 'Usuario o Contraseña invalidos');
             }

         }
         return view('admin.admin_login');

    }
*/
     public function dashboard(){
       /*if(Session::has('adminSession')){

         }else{
             return redirect('/login')->with('flash_message_error','Primero debe iniciar sesión');
         }


         if (Session::has('users')) {

         }else{
             return redirect('/login')->with('flash_message_error','Primero debe iniciar sesión');
         }
        */
         return view('admin.dashboard');
     }
    public function settings(){
         return view('admin.settings');
    }
    public function student_data(){
        return view('admin.student_data');
    }
    public function quiz(){
        return view('admin.quiz');
    }
    public function upload_data(){
        return view('admin.upload_data');
    }
    public function results(){
        return view('admin.results');
    }
    public function logout(){
        Session::flush();
        return redirect('/login')->with('flash_message_success', 'Sesión finalizada');

    }


}