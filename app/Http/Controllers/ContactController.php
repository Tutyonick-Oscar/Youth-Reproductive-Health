<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function infocontacts ()
    {
        return view('admin.infoContacts',[
            'contacts' => Contact::paginate(5)
        ]);
    }
    public function toContact (Request $request)
    {
        $data = $request->validate([
            'contactname' => ['required'],
            'contactemail' => ['required', 'email'],
            'contactmessage' => ['required','min:10']
        ]);
        Contact::create($data);
        return to_route('contact')->with(['success' => 'votre message a bien été envoyé']);
    }
    public function deleteContacts (Request $request, int $id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return to_route('admin.infocontacts')->with(['success' => 'Contact supprimé']);
    }
}
