<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Module;
use App\Models\Pack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackController extends Controller
{
    public function pack(){
        $packs = Pack::all();
        $categories = Category::all();

        $title = 'Cadastrar Pacotes';
        $route = 'store-pack';
        $action = 'store';

        return view('sistema.pack', ['title'=>$title, 'route'=>$route, 'action'=>$action, 'packs'=>$packs, 'categories'=>$categories]);
    }

    public function store(Request $request){
        $pack = new Pack;

        $pack->name = $request->name;
        $pack->description = $request->description;
        $pack->category_id = $request->category_id;
        $pack->promocional = $request->promocional;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $imageName = $requestImage->store('packs', 'public');
                        
            $pack->image = $imageName;
        }

        $pack->save();

        return Redirect()->route('set-add-modules', ['id'=>$pack->id])->with('success', 'Pacote Salvo com sucesso!');
    }

    public function setAddModules($id){
        $pack = Pack::findOrFail($id);
        $category = Category::findOrFail($pack->category_id);

        $module_ids = $pack->modules;

        $modules = $category->modules;
        $title = 'Adicionar Módulos';
        $route = 'add-modules';

        return view('sistema.addModules', ['pack'=>$pack, 'modules'=>$modules, 'title'=>$title, 'route'=>$route, 'module_ids'=>$module_ids]);
    }

    public function addModules(Request $request){
        $pack = Pack::findOrFail($request->pack_id);

        $pack->modules()->sync($request->modules);

        return redirect()->route('pack')->with('success', 'Modulos Adicionados ao Pacote!');
    }

    public function delete($id){
        $pack = Pack::findOrFail($id);

        if(!$pack->delete()){
            return redirect()->route('pack')->with('error', 'Não foi possível apagar o pacote!');
        }

        Storage::disk('public')->delete($pack->image);

        return redirect()->route('pack')->with('success', 'Pacote excluído com sucesso!');
    }

    public function setUpdate($id){
        $packUpdate = Pack::findOrFail($id);

        $packs = Pack::all();
        $categories = Category::all();

        $title = 'Editar Pacote';
        $route = 'update-pack';
        $action = 'update';

        return view('sistema.pack', ['title'=>$title, 'route'=>$route, 'action'=>$action,
                     'packs'=>$packs, 'categories'=>$categories, 'packUpdate'=>$packUpdate]);
    } 

    public function update(Request $request){
        $pack = Pack::findOrFail($request->pack_id);

        $pack->name = $request->name;
        $pack->description = $request->description;
        $pack->category_id = $request->category_id;
        $pack->promocional = $request->promocional;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $imageName = $requestImage->store('packs', 'public');

            Storage::disk('public')->delete($pack->image);
                        
            $pack->image = $imageName;
        }

        $pack->save();

        return Redirect()->route('pack')->with('success', 'Pacote editado com sucesso!');
    }

    public function view($id){
        $pack = Pack::findOrFail($id);

        $modules = $pack->modules;

        return view('sistema.viewPack', ['pack'=>$pack, 'modules'=>$modules]);
    }
}
