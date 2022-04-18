<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Showcase;
use App\Models\vimeo_course;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        $categories = Category::all()->take(5);
        $showcases = Showcase::all()->where('status', 'mostrar');


        return view('site.home', ['categories'=>$categories, 'showcases'=>$showcases]);
    }

    public function vimeo_course(){
        $vimeo_courses = vimeo_course::all();

        return view('site.vimeo_course', ['vimeo_courses'=>$vimeo_courses]);
    }

    public function quem(){
        return view('site.about');
    }

    public function contato(){
        return view('site.contact');
    }

    public function metodologia(){
        return view('site.metodologia');
    }

    public function notice_site(){

    }

    public function viewNotice($id){

    }
}
