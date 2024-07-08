<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
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

    public function search( Request $request)
    {
        if ($request->has('reset')) {
            return redirect('/admin')->withInput();
        }

        $query = Contact::query();
        if ($request->filled('keyword')) {
            $query->where(function ($query) use ($request) {
                $query->where('first_name', 'like', "%{$request->keyword}%")
                        ->orWhere('last_name', 'like', "%{$request->keyword}%")
                        ->orWhere('email', 'like', "%{$request->keyword}%");
            });
        }

        if ($request->filled('gender')) {
            $query->where('gender', $request->gender);
        }
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->filled('date')) {
            $query->whereDate('created_at', $request->date);
        }
        
        $contacts = $query->paginate(7);
        $categories = Category::all();
        return view('admin', compact('contacts', 'categories'));
    }

    public function export(Request $request)
    {
        $query = Contact::query();
        if ($request->filled('keyword')) {
            $query->where(function ($query) use ($request) {
                $query->where('first_name', 'like', "%{$request->keyword}%")
                    ->orWhere('last_name', 'like', "%{$request->keyword}%")
                    ->orWhere('email', 'like', "%{$request->keyword}%");
            });
        }

        if ($request->filled('gender')) {
            $query->where('gender', $request->gender);
        }
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->filled('date')) {
            $query->whereDate('created_at', $request->date);
        }

        $contacts = $query->with('category')->get();
        
        $csvHeader = ['ID', '姓', '名', '性別', 'メールアドレス', '住所', '電話番号', 'カテゴリ', '作成日時', '更新日時'];
        $stream = fopen('php://temp', 'r+b');
        fputcsv($stream, $csvHeader);
        foreach ($contacts as $contact) {
            $csvData = [
                $contact->id,
                $contact->last_name,
                $contact->first_name,
                $contact->gender,
                $contact->email,
                $contact->address,
                $contact->tell,
                $contact->category ? $contact->category->content : '', 
                $contact->created_at,
                $contact->updated_at
            ];
            fputcsv($stream, $csvData);
        }

        rewind($stream);
        $csvContent = stream_get_contents($stream);
        fclose($stream);

        $fileName = 'contacts_' . date('Ymd_His') . '.csv';
        $filePath = 'exports/' . $fileName;

        Storage::put($filePath, $csvContent);

        // CSV ファイルをクライアントにダウンロードさせるレスポンスを生成
        return response()->download(storage_path('app/' . $filePath), $fileName);

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
