<?php
namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contact = Contact::get();
        return response()->json($contact);
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return response()->json($contact);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama' => "required|string",
            'nohp' => "required",
            'wa' => "required",
            'alamat' => "string",
            'ig' => "required",
        ]);

        $data = $request->all();
        $contact = Contact::create($data);

        return response()->json($contact);
    }

    public function update(Request $request, $id) 
    {
        $contact = Contact::find($id);

        if(!$contact) {
            return response()->json(['message' => 'Contact Not Found'], 404);
        }

        $this->validate($request, [
            'nama' => "string",
            'alamat' => "string",
        ]);

        $data = $request->all();

        $contact->fill($data);

        $contact->save();
        return response()->json($contact);
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);

        if(!$contact) {
            return response()->json(['message' => 'Contact Not Found'], 404);
        }

        $contact->delete();
        return response()->json(['message' => 'Product Deleted!']);
    }
}
