<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laravel\Lumen\Routing\Router;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public static function routes(Router $router)
    {
        $router->get('',self::class . '@home');
    }
}