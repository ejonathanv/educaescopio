<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use App\Mail\NewMessageFromWebsite;

class WebsiteController extends Controller
{
    public function home(){
        return view('website.home');
    }

    public function about(){
        return view('website.about');
    }

    public function nursery(){
        return view('website.nursery');
    }

    public function preschool(){
        return view('website.preschool');
    }

    public function contact(){
        return view('website.contact');
    }

    public function submitForm(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|ends_with:@gmail.com,@hotmail.com,@yahoo.com,@outlook.com,@live.com',
            'phone' => 'nullable|numeric|digits:10',
            'message' => 'required|min:10|max:500',
            'terms' => 'required|accepted'
        ], [
            'name.required' => 'El nombre es requerido',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'name.max' => 'El nombre debe tener máximo 50 caracteres',
            'email.required' => 'El correo electrónico es requerido',
            'email.email' => 'El correo electrónico no es válido',
            'email.ends_with' => 'El correo electrónico debe ser de una de las siguientes empresas: gmail.com, hotmail.com, yahoo.com, outlook.com, live.com',
            'phone.numeric' => 'El teléfono debe ser numérico',
            'phone.digits' => 'El teléfono debe tener 10 dígitos',
            'message.required' => 'El mensaje es requerido',
            'message.min' => 'El mensaje debe tener al menos 10 caracteres',
            'message.max' => 'El mensaje debe tener máximo 500 caracteres',
            'terms.required' => 'Debes aceptar los términos y condiciones',
            'terms.accepted' => 'Debes aceptar los términos y condiciones'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone ?? 'No proporcionado',
            'message' => $request->message
        ];

        Mail::to($data['email'])->send(new ContactForm($data));;
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new NewMessageFromWebsite($data));

        return redirect()->route('contact')->with('success', 'Mensaje enviado correctamente');
    }

    public function parentsArea(){
        return view('website.parentsArea');
    }

    public function privacyPolicy(){
        return view('website.terms');
    }

    public function programs(){
        return view('website.programs');
    }

    public function enrollments(){
        return view('website.enrollments');
    }
    
}
