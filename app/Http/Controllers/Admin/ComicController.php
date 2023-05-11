<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        //index riceve array comics
        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->all();

        $newComic = new Comic();

/*         $newComic->title = $data["title"];
        $newComic->description = $data["description"];
        $newComic->thumb =  $data["thumb"];
        $newComic->price =  $data["price"];
        $newComic->series =  $data["series"];
        $newComic->sale_date =  $data["sale_date"];
        $newComic->type = $data["type"];
        $newComic->artists =  $data["artists"];
        $newComic->writers = $data["writers"]; */

        $newComic->fill($data);
        $newComic->save();

        //return redirect()->route('comics.show', $newComic->id);
        return to_route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comic.show', compact('comic'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data =$request->all();

        /* $comic->title = $data["title"];
        $comic->description = $data["description"];
        $comic->thumb =  $data["thumb"];
        $comic->price =  $data["price"];
        $comic->series =  $data["series"];
        $comic->sale_date =  $data["sale_date"];
        $comic->type = $data["type"];
        $comic->artists =  $data["artists"];
        $comic->writers = $data["writers"];

        $comic->save(); */
        $comic->update($data); 
        //return redirect()->route('comics.show', $newComic->id);
        return to_route('comics.show', $comic->id);
       //dd($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
