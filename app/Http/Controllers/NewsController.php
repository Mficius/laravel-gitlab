<?php

namespace App\Http\Controllers;

use App\Models\NewsItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.backend.news.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $rules = [
            'title' => "string:255|required",
            'date_news' => "date|required"
        ];
        $messages = [
            'required.required' => "Renseigner un titre de l'actualité",
            'date_news.required' => "Renseigner la date de l'actualité",
            'date_news.date' => "Renseigner une date valide",
        ];
        $validation = Validator::make($data, $rules, $messages);
        if ($validation->fails()) {
            $errors = $validation->errors();
            return back()->withErrors($errors)->withInput();
        }else{
            $news = new NewsItem();
            $news->label = $request->title;
            $news->event_date = $request->date_news;
            $news->content = json_encode($request->content_news);
            if ($file = $request->file('main_image')){
                $name = $file->getClientOriginalName();
                $path = base_path() . '/public/backend/images/imagesNews/';
                $file->move($path, $name);
                $news->main_image = $name;
            }
            if ($file = $request->file('video')){
                $name = $file->getClientOriginalName();
                $path = base_path() . '/public/backend/videos/videoNews/';
                $file->move($path, $name);
                $news->video = $name;
            }
            $filesToSend = [];
            if ($file = $request->file('rest_image')){
                $i = 1;
                foreach ($file as $item) {
                    $name = $item->getClientOriginalName();
                    $path = base_path() . '/public/backend/images/imagesNews/';

                    $item->move($path, $name);

                    $filesToSend["image".$i] = $name;
                }
                $news->images = json_encode($filesToSend);
            }
            $news->save();
            return redirect()->route('admin.news.index') ;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
