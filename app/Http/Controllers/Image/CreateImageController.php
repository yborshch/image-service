<?php

namespace App\Http\Controllers\Image;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CreateImageController extends Controller
{
    public function __invoke(): Response
    {
        return response()->view('');
    }
}
