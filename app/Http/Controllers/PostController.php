<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $posts = post::orderby('id','desc')->paginate(6);
      
       return view('Pages.viewMovies')->with('posts', $posts);
      
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
        $addPost= new post();
        
        $addPost->movieName=$request->input('movieName');
        $addPost->movieGenre=$request->input('movieGenre');
        $addPost->description=$request->input('movieDescription');
        $addPost->showingDate=$request->input('dateSelect');
        if($request->hasFile('movieImage'))
        {
            $file=$request->file('movieImage');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".". $extension;
            $file->move('uploads/img',$filename);
            $addPost->movieImage=$filename;
        }
        else
        {
            return $request;
            $addPost->movieImage='';
        }

        $addPost->save();
        $posts = post::orderBy('id','desc')->paginate(10);
      
        return view('Pages.manageMovies')->with('posts', $posts);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search=$request->get('search');
        $posts=post::where('movieName','like','%'.$search.'%')->paginate(6);
        return view('Pages.viewMovies',['posts'=>$posts]);

    } public function searchManage(Request $request)
    {
        $searchTable=$request->get('searchTable');
        $posts=post::where('movieName','like','%'.$searchTable.'%')->paginate(6);
        return view('Pages.manageMovies',['posts'=>$posts]);

    }
    public function show($id)
    {
        //
        $movieId=post::find($id);
        return view('Pages.contentMovie')->with('posts', $movieId);
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
        $editMovie = post::find($id);
        $editMovie->movieName= $request->get('movieName');
        $editMovie->movieGenre= $request->get('movieGenre');
        $editMovie->showingDate= $request->get('dateSelect');
        $editMovie->description= $request->get('movieDescription');
        $editMovie->save();
        $postingM= post::orderBy('id','desc')->paginate(10);
        return view('Pages.manageMovies')->with('posts', $postingM);
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
        $movieId=post::find($id);
        $movieId->delete();
       $posting= post::orderBy('id','desc')->paginate(10);
        return view('Pages.manageMovies')->with('posts', $posting);
    }
}
