<?php

namespace App\Http\Controllers;

use App\Enums\GenderType;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $genders = GenderType::toSelectArray();
        $categories = Category::all();
        $params
        = [
            'genders' => $genders,
            'categories' => $categories,
        ];

        return view('index', compact('params'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();
        $category = Category::find($request->category_id);
        return view('confirm', compact('contact', 'category'));
    }


    public function create(Request $request)
    {
        $form = $request->all();
        Contact::create($form);
        return view('thanks');
    }

    public function admin()
    {
        $contacts = Contact::join('categories', 'contacts.category_id', '=', 'categories.id')
            ->select('contacts.*', 'categories.content')
            ->paginate(7);
        $categories = Category::all();
        return view('admin', compact('contacts', 'categories'));
    }

    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/admin');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
