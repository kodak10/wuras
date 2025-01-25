<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validation de l'email
        $request->validate([
            'email' => 'required|email|unique:newsletters,email'
        ]);

        // Enregistrement de l'email dans la base de données
        Newsletter::create([
            'email' => $request->email
        ]);

        // Message de confirmation
        return redirect()->back()->with('success', 'Vous êtes bien abonné à notre newsletter !');
    }
}
