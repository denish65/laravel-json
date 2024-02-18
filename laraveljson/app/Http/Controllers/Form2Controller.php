<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TabbedForm2;


class Form2Controller extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'field4' => 'required|string',
            'field5' => 'required|string',
            'field6' => 'required|string',
        ]);

        // Save the form data to the database
        TabbedForm2::create($validatedData);

        // You can add additional logic or redirect the user as needed
        return redirect()->back()->with('success', 'Form 2 submitted successfully!');
    }
}
