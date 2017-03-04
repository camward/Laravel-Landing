<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Portfolio;
use App\Service;
use App\People;

class IndexController extends Controller
{
    public function execute(Request $request){
        $pages = Page::all(); // все записи и все поля
        $portfolios = Portfolio::get(['name', 'filter', 'images']); // все записи, но определенные поля
        $services = Service::where('id', '<', 20)->get(); // записи, у которых ид меньше 20
        $peoples = People::take(3)->get(); // только 3 записи

        return view('site.index');
    }
}
