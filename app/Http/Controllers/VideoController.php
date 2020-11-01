<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Unirest\Request as UnirestRequest;
use Response;
use Session;

class VideoController extends Controller
{
    public function getLinks(Request $request){
      
      $request->validate([
        'url' => 'required|min:20']);
        
        $url = $request->input('url');

        $data = UnirestRequest::get("https://getvideo.p.rapidapi.com/?url={$url}",
        array(
          "X-RapidAPI-Host" => "getvideo.p.rapidapi.com",
          "X-RapidAPI-Key" => "30a07ee996msh4cd8f0454d66117p1c82f9jsnf8b10a5ef492"
        )
      );
       $video = Response::json($data);
       

     return  view('videoPage',['video'=> $video]);

      
    }
}