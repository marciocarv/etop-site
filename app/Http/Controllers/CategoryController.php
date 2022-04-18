<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\Caster\RedisCaster;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function category(){
        $categories = Category::all();
        $route = 'store-category';
        $action = 'store';
        $title = 'Cadastrar Categoria';

        return view('sistema.category', ['categories'=>$categories, 'action'=>$action, 'route'=>$route, 'title'=>$title]);

    }

    public function store(Request $request){

        $category = new Category;

        $category->description = $request->description;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $imageName = $requestImage->store('categories', 'public');
                        
            $category->image = $imageName;
        }

        $category->save();

        return Redirect()->route('category')->with('success', 'Categoria Salva com sucesso!');
    }

    public function setUpdate($id){
        $categories = Category::all();
        $categoryUpdate = Category::findOrFail($id);

        $action = 'update';
        $route = 'update-category';
        $title = 'Editar Categoria';

        return view('sistema.category', ['categoryUpdate'=>$categoryUpdate,'categories'=>$categories, 'action'=>$action, 'route'=>$route, 'title'=>$title]);
    }

    public function update(Request $request){
        $category = Category::findOrFail($request->id_category);

        $category->description = $request->description;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $imageName = $requestImage->store('categories', 'public');

            Storage::disk('public')->delete($category->image);
                        
            $category->image = $imageName;
        }

            if(!$category->save()){
                return redirect()->route('category')->with('error', 'Não foi possível editar a categoria!');
            }

            return redirect()->route('category')->with('success', 'Categoria Editada com sucesso!');

    }

    public function delete($id){
        $category = Category::findOrFail($id);

        if(!$category->delete()){
            return redirect()->route('category')->with('error', 'Não foi possível apagar!');
        }

        Storage::disk('public')->delete($category->image);

        return redirect()->route('category')->with('success', 'Categoria apagada com sucesso!');
    }
}
