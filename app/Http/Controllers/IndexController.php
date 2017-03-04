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

        $menu = [];
        foreach($pages as $page){
            $item = ['title'=>$page->name, 'alias'=>$page->alias];
            array_push($menu, $item);
        }

        $item = ['title'=>'Services', 'alias'=>'service'];
        array_push($menu, $item);
        $item = ['title'=>'Portfolio', 'alias'=>'Portfolio'];
        array_push($menu, $item);
        $item = ['title'=>'Team', 'alias'=>'team'];
        array_push($menu, $item);
        $item = ['title'=>'Contact', 'alias'=>'contact'];
        array_push($menu, $item);

        return view('site.index', [
            'menu'=>$menu,
            'pages'=>$pages,
            'services'=>$services,
            'portfolios'=>$portfolios,
            'peoples'=>$peoples
        ]);
    }
}
