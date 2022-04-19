<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Institutional;
use App\Models\Methodology;
use App\Models\Module;
use App\Models\Notice;
use App\Models\Pack;
use App\Models\Showcase;
use App\Models\vimeo_course;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        $categories = Category::all()->take(5);
        $categories_menu = Category::all();
        $showcases = Showcase::all()->where('status', 'mostrar');
        $notices = Notice::all()->take(5);
        $spotlights = Pack::all()->where('spotlight', 's')->take(6);

        return view('site.home', ['categories'=>$categories, 
                                    'showcases'=>$showcases, 
                                    'notices'=>$notices,
                                    'spotlights'=>$spotlights,
                                    'categories_menu'=>$categories_menu]);
    }

    public function vimeo_course(){
        $vimeo_courses = vimeo_course::paginate(15);
        $categories_menu = Category::all();

        return view('site.vimeo_course', ['vimeo_courses'=>$vimeo_courses, 'categories_menu'=>$categories_menu]);
    }

    public function quem(){
        $institutional = Institutional::find(1);
        $categories_menu = Category::all();
        return view('site.about', ['categories_menu'=>$categories_menu, 'institutional'=>$institutional]);
    }

    public function contato(){
        $categories_menu = Category::all();
        return view('site.contact', ['categories_menu'=>$categories_menu]);
    }

    public function metodologia(){
        $categories_menu = Category::all();
        $methodology = Methodology::find(1);
        return view('site.metodologia', ['categories_menu'=>$categories_menu, 'methodology'=>$methodology]);
    }

    public function packByCategory($categoria, $id){
        $categories_menu = Category::all();
        $category = Category::findOrFail($id);

        $packs = $category->packs;

        return view('site.packByCategory', ['category'=>$category, 'packs'=>$packs, 'categories_menu'=>$categories_menu]);
    }

    public function module(){
        $categories_menu = Category::all();
        $categories = Category::all();

        return view('site.module', ['categories'=>$categories, 'categories_menu'=>$categories_menu]);
    }

    public function pack(){
        $categories_menu = Category::all();
        $categories = Category::all();

        return view('site.pack', ['categories'=>$categories, 'categories_menu'=>$categories_menu]);
    }

    public function notice(){
        $categories_menu = Category::all();
        $noticies = Notice::paginate(10);

        return view('site.notice', ['noticies'=>$noticies, 'categories_menu'=>$categories_menu]);
    }

    public function viewNotice($id){
        $categories_menu = Category::all();
        $notice = Notice::findOrFail($id);

        return view('site.viewNotice', ['notice'=>$notice, 'categories_menu'=>$categories_menu]);
    }

    public function viewPack($id){
        $categories_menu = Category::all();
        $pack = Pack::findOrFail($id);
        $modules = $pack->modules;

        return view('site.viewPack', ['pack'=>$pack, 'modules'=>$modules, 'categories_menu'=>$categories_menu]);
    }

    public function viewModule($id){
        $categories_menu = Category::all();
        $module = Module::findOrFail($id);

        return view('site.viewModule', ['module'=>$module, 'categories_menu'=>$categories_menu]);
    }


}
