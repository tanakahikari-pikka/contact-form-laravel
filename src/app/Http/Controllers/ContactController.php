<?php

namespace App\Http\Controllers;

use App\Enums\GenderType;
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

    public function confirm(Request $request)
    {
        $contact = $request->all();
        $category = Category::find($request->category_id);
        return view('confirm', compact('contact', 'category'));
    }


    public function create(Request $request)
    {
        // $this->validate($request, Book::$rules);
        $form = $request->all();
        Contact::create($form);
        return view('thanks');
    }

    public function admin()
    {
        return view('admin');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
