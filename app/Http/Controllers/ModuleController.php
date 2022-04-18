<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function module(){
        $modules = Module::all();
        $categories = Category::all();

        $title = 'Cadastrar Modulos';
        $route = 'store-module';
        $action = 'store';

        return view('sistema.module', ['title'=>$title, 'route'=>$route, 'action'=>$action, 'categories'=>$categories, 'modules'=>$modules]);

    }

    public function store(Request $request){
        $module = new Module;

        $module->category_id = $request->category_id;
        $module->description = $request->description;
        $module->content = $request->content;

        if(!$module->save()){
            return redirect()->route('module')->with('error', 'Não foi possível salvar o módulo');
        }

        return redirect()->route('module')->with('success', 'Módulo Salvo com sucesso');
    }

    public function delete($id){
        $module = Module::findOrFail($id);

        if(!$module->delete()){
            return redirect()->route('module')->with('error', 'Não foi possível apagar o módulo');
        }

        return redirect()->route('module')->with('success', 'Modulo Apagado com sucesso!');
    }

    public function setUpdate($id){
        $modules = Module::all();
        $categories = Category::all();
        $moduleUpdate = Module::findOrFail($id);

        $title = 'Editar Modulo';
        $route = 'update-module';
        $action = 'update';

        return view('sistema.module', ['title'=>$title, 'route'=>$route, 'action'=>$action, 'categories'=>$categories, 'modules'=>$modules, 'moduleUpdate'=>$moduleUpdate]);
    }

    public function update(Request $request){
        $module = Module::findOrFail($request->module_id);

        $module->description = $request->description;
        $module->category_id = $request->category_id;
        $module->content = $request->content;

        if(!$module->save()){
            return redirect()->route('module')->with('error', 'Não foi possível editar o módulo');
        }

        return redirect()->route('module')->with('success', 'Módulo editado com sucesso');
    }

    public function view($id){
        $module = Module::findOrFail($id);

        return view('sistema.viewModule', ['module'=>$module]);
    }


}
