<?php

namespace App\Http\Controllers;

class ActualActionController extends Controller
{
    public function performAction()
    {
        // Perform the actual action here, like deleting a record from the database
        return redirect()->back()->with('success', 'Action performed successfully!');
    }
}
