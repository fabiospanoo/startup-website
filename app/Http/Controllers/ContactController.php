<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; // Assicurati che questa classe esista

class ContactController extends Controller
{
    // Mostra la pagina del form di contatti
    public function showForm()
    {
        return view('contact-form');
    }

    // Gestisce l'invio del form di contatto
    public function submitForm(Request $request)
    {
        // Validazione dei dati del form
        $formdata = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        // Recupera l'email del destinatario (l'utente che compila il form)
        $emailDestinatario = $formdata['email'];

        // Invia l'email usando la classe Mailable corretta (ContactFormMail)
        Mail::to($emailDestinatario)->send(new ContactFormMail($formdata));

        return "Email inviata con successo! Controlla Mailtrap.";
    }
}
