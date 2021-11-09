<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public static $images = array(
        "https://storage.googleapis.com/random_images/334-3341368_bad-decisions-make-good-stories-in-lights.jpg",
        "https://storage.googleapis.com/random_images/77d85bab28e25853d.jpg",
        "https://storage.googleapis.com/random_images/53e15198be019b053cfeaf849289d992.png",
        "https://storage.googleapis.com/random_images/571233eb0e25a4f0eea8f2cecf619f26.jpg",
        "https://storage.googleapis.com/random_images/8671e778a8c741fb947340f235769c68.png",
        "https://storage.googleapis.com/random_images/8cb9681c3a2a25a61dbc1bcf269ba38b.jpg",
        "https://storage.googleapis.com/random_images/Best-Inspirational-Quotes-10.jpg",
        "https://storage.googleapis.com/random_images/EECgc1VXoAAiuo2.jpg",
        "https://storage.googleapis.com/random_images/Stronger.jpg",
        "https://storage.googleapis.com/random_images/c6e60b9003df8b23aa3fc33467ce3abe.jpg",
        "https://storage.googleapis.com/random_images/cd0f0380bb86ba5b30fe67afa696f278.png",
        "https://storage.googleapis.com/random_images/if-not-now-when-quote-1.jpg",
        "https://storage.googleapis.com/random_images/pexels-photo-1580625-x1300.jpeg",
        "https://storage.googleapis.com/random_images/photo-1600164318544-79e55da1ac8f.webp",
        "https://storage.googleapis.com/random_images/photo-1612436524004-4f90d7fe71a5.jpeg",

    );


    public function index()
    {
        $totalImages = (count(Controller::$images));
        $randomNumber = (rand(0, ($totalImages - 1)));
        $randomImage = Controller::$images[$randomNumber];
        return '<img src="' . $randomImage . '" >  <br/> server_ip =>' . gethostbyname(gethostname());
    }
}
