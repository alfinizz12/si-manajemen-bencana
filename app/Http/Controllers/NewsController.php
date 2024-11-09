<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NewsStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\NewsUpdateRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();

        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsStoreRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('images/news', $filename, 'public');
    
            $validatedData['image'] = $path;
        }
    
        News::create($validatedData);

        return redirect()->route('news.admin')->with('success', 'Data berita berhasil diinput');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('news', compact($news));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('newsEdit', compact('$news'));
    }

    public function update(NewsUpdateRequest $request, News $news)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('images/news', $filename, 'public');
    
                if ($news->image) {
                    Storage::disk('public')->delete($news->image);
                }
                $validatedData['image'] = $path;
            }
        }
        $news->update($validatedData);

        return redirect()->route('news.admin')
            ->with('success', 'News has been updated successfully.');
    }

    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();

        return redirect()->route('news.admin')
            ->with('success', 'Information has been deleted successfully.');
    }

    public function news(){
        $news = News::all();
        return view('berita', compact('news'));
    }

    public function headNews(){
        $headNews = DB::table('news')->latest()->take(3)->get();
        return $headNews;
    }
}
