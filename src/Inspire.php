<?php

namespace Spatelamit\Inspire;

use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Request;



class Inspire {

    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }

    public function myfunction($request){
        
        return $request->input('fname')." ".$request->input('lname');
    }
}