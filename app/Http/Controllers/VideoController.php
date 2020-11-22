<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('videos',[
         'videos' =>Videos::all()
     ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addvideo');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * One way to store the DB 
         *  return Video::create([
          *  'videoname' => request('videoname'),
           * 'videourl'=> request('videourl'),
            * 'videodescr'=> request('videodescr'),
             * 'videocat'=> request('videocat')
    
          *  ]);
         * 
         */

         /**
          * Another way to save values to DB
          */
         
       $video = new Videos();
       $video->name = request('videoname');
       $video->url=  request('videourl');
       $video->descr =request('videodescr');
       $video->cat = request('videocat');
           $video->save();
       return redirect('/videos');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // display a particular video
        $video = Videos::findOrFail($id);
        $videourl= $video->url;
        // need to convert the youtube URL into the Iframe URL - 
        preg_match('%(?:youtube(?:-nocookie)?.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu.be/)([^"&?/ ]{11})%i', $videourl, $match);
        $fullEmbedUrl = $match[1];
        $fullEmbedUrl = 'https://www.youtube.com/embed/' . $fullEmbedUrl ;

        return view('videoshow',compact('video','fullEmbedUrl'));
       
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
