<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Portfolio;
use App\Service;
use App\People;
use DB;
use Mail;

class IndexController extends Controller
{
    public function execute(Request $request){

        if($request->isMethod('post')){
            // свои сообщения для валидации
            $messages = [
                'required'=>'Поле :attribute обязательно к заполнению',
                'email'=>'Поле :attribute не соответствует email-адресу'
            ];

            // валидация
            $this->validate($request, [
                'name'=>'required|max:255',
                'email'=>'required|email',
                'text'=>'required'
            ], $messages);

            // отправка писем
            $data = $request->all();
            $result = Mail::send('site.email', ['data'=>$data], function($message) use ($data){
                $mail_admin = env('MAIL_ADMIN');
                $message->from($data['email'], $data['name']);
                $message->to($mail_admin, 'Mr. Admin')->subject('Сообщение с сайта');
            });

            if($result){
                return redirect()->route('home')->with('status', 'Сообщение отправлено');
            }
        }

        $pages = Page::all(); // все записи и все поля
        $portfolios = Portfolio::get(['name', 'filter', 'images']); // все записи, но определенные поля
        $services = Service::where('id', '<', 20)->get(); // записи, у которых ид меньше 20
        $peoples = People::take(3)->get(); // только 3 записи
        $tags = DB::table('portfolios')->distinct()->pluck('filter'); // уникальные значения поля filter

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
            'peoples'=>$peoples,
            'tags'=>$tags
        ]);
    }
}
