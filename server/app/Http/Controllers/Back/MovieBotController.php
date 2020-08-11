<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Goutte\Client;

class MovieBotController extends Controller
{

    public function __construct()
    {
     return $this->middleware('auth');   
    }
    public function movie()
    {
        $client = new Client();
        $crawler = $client->request('GET','');
        $data = $crawler->filter('')->each(function ($node) {
            print $node->text()."\n";
        });

      
    }
}
