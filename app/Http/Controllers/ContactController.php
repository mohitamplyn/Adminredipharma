<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller {

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index() {
        $contact = Contact:: latest() -> get();
        return view('admin.contact.index', ['contacts' => $contact]);

    }
}

