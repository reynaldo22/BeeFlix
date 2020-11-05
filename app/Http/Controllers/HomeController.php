<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use App\Genres;
use App\Episodes;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drama = Movies::where('genre_id',1)->paginate(4);
        $kids = Movies::where('genre_id',2)->paginate(4);
        $tvShow = Movies::where('genre_id',3)->paginate(4);

        $data = [
            'movies' => [
                'drama' => $drama,
                'kids' => $kids,
                'tvShow' => $tvShow,
            ]
        ];
        // dd($data['movies']['drama']);
        return view('welcome',compact('data'));
    }

    public function showAll()
    {
        $drama = Movies::where('genre_id',1)->get();
        $kids = Movies::where('genre_id',2)->get();
        $tvShow = Movies::where('genre_id',3)->get();

        $data = [
            'movies' => [
                'drama' => $drama,
                'kids' => $kids,
                'tvShow' => $tvShow,
            ]
        ];
        // dd($data['movies']['drama']);
        return view('all',compact('data'));
    }

    public function category($id) {

        $genres = Genres::find($id);
        $movies = Movies::where('genre_id',$id)->get();
        $category = Genres::where('genres.id',$id)->select('genres.name')->get();
        // dd($category[0]);
        // dd($movies);

        return view('category',compact('movies','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movies = Movies::find($id);
        $genres = DB::table('movies')
                    ->join('genres','movies.genre_id','=','genres.id')
                    ->select('genres.name','genres.id')
                    ->where('movies.id',$id)
                    ->get();
        $episodes = DB::table('episodes')
                    ->join('movies','movies.id','=','episodes.movie_id')
                    ->select('episodes.episode','episodes.title')
                    ->where('movies.id',$id)
                    ->paginate(3);
        // dd($episodes);
        $data = [
            'movies'    => $movies,
            'genres'    => $genres,
            'episodes'  => $episodes
        ];
        // dd($data['episodes']);
        return view('show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
