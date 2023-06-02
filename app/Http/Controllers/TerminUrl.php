<?php

namespace App\Http\Controllers;

use App\Models\TerminUrlModel;
use Illuminate\Http\Request;

class TerminUrl extends Controller
{
    public function show()
    {
        $termin_url = TerminUrlModel::first();
        return view('termin-url-form', compact('termin_url'));
    }

    public function updateTerminUrl(Request $request)
    {
        $validatedData = $request->validate([
            'termin_url' => 'required',
        ]);

        TerminUrlModel::updateOrCreate(
            ['id' => 1],
            ['url' => $validatedData['termin_url']]
        );

        return redirect()->route('show-termin-url');
    }
}
