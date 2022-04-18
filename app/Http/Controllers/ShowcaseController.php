<?php

namespace App\Http\Controllers;

use App\Models\Showcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShowcaseController extends Controller
{
    public function showcase(){
        $showcases = Showcase::all();

        $title = 'Cadastrar Vitrine';
        $route = 'store-showcase';
        $action = 'store';

        return view('sistema.showcase', ['title'=>$title, 'route'=>$route, 'action'=>$action, 'showcases'=>$showcases]);
    }

    public function store(Request $request){
        $showcase = new Showcase;

        $showcase->title = $request->title;
        $showcase->url = $request->url;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $imageName = $requestImage->store('showcase', 'public');
                        
            $showcase->image = $imageName;
        }

        $showcase->save();

        return Redirect()->route('showcase')->with('success', 'Vitrine Salva com sucesso!');
    }

    public function delete($id){
        $showcase = Showcase::findOrFail($id);

        if(!$showcase->delete()){
            return Redirect()->route('showcase')->with('error', 'Não foi possível apagar a vitrine!');
        }

        Storage::disk('public')->delete($showcase->image);

        return Redirect()->route('showcase')->with('success', 'Vitrine excluída com sucesso!');
    }

    public function setUpdate($id){
        $showcaseUpdate = Showcase::findOrFail($id);

        $showcases = Showcase::all();

        $title = 'Editar Vitrine';
        $route = 'update-showcase';
        $action = 'update';

        return view('sistema.showcase', ['title'=>$title, 'route'=>$route, 'action'=>$action,
                     'showcases'=>$showcases, 'showcaseUpdate'=>$showcaseUpdate]);
    }

    public function update(Request $request){

        $showcase = Showcase::findOrFail($request->showcase_id);

        $showcase->title = $request->title;
        $showcase->url = $request->url;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $imageName = $requestImage->store('showcase', 'public');

            Storage::disk('public')->delete($showcase->image);
                        
            $showcase->image = $imageName;
        }

        $showcase->save();

        return Redirect()->route('showcase')->with('success', 'Vitrine editada com sucesso!');
    }

    public function view($id){
        $showcase = Showcase::findOrFail($id);

        return view('sistema.viewShowcase', ['showcase'=>$showcase]);
    }

    public function show($id){
        $showcase = Showcase::findOrfail($id);

        $showcase->status = 'mostrar';

        $showcase->save();

        return Redirect()->route('showcase')->with('success', 'A vitrine será visível no site!');
    }

    public function hidden($id){
        $showcase = Showcase::findOrfail($id);

        $showcase->status = 'ocultar';

        $showcase->save();

        return Redirect()->route('showcase')->with('success', 'A vitrine não será visível no site!');
    }
}
