<?php

namespace App\Http\Controllers;

use App\Models\vimeo_course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Vimeo_courseController extends Controller
{
    public function vimeo_course(){
        $vimeo_courses = vimeo_course::all();

        $title = 'Cadastrar Curso Plataforma 2';
        $route = 'store-vimeo_course';
        $action = 'store';

        return view('sistema.vimeo_course', ['title'=>$title, 'route'=>$route, 'action'=>$action, 'vimeo_courses'=>$vimeo_courses]);
    }

    public function store(Request $request){
        $vimeo_course = new vimeo_course;

        $vimeo_course->name = $request->name;
        $vimeo_course->url = $request->url;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $imageName = $requestImage->store('vimeo_course', 'public');
                        
            $vimeo_course->image = $imageName;
        }

        $vimeo_course->save();

        return Redirect()->route('vimeo_course')->with('success', 'Curso Salvo com sucesso!');
    }

    public function delete($id){
        $vimeo_course = vimeo_course::findOrFail($id);

        if(!$vimeo_course->delete()){
            return Redirect()->route('vimeo_course')->with('error', 'Não foi possível apagar a Curso!');
        }

        Storage::disk('public')->delete($vimeo_course->image);

        return Redirect()->route('vimeo_course')->with('success', 'Cruso excluído com sucesso!');
    }

    public function setUpdate($id){
        $vimeo_courseUpdate = vimeo_course::findOrFail($id);

        $vimeo_courses = vimeo_course::all();

        $title = 'Editar Curso Plataforma 2';
        $route = 'update-vimeo_course';
        $action = 'update';

        return view('sistema.vimeo_course', ['title'=>$title, 'route'=>$route, 'action'=>$action,
                     'vimeo_courses'=>$vimeo_courses, 'vimeo_courseUpdate'=>$vimeo_courseUpdate]);
    }

    public function update(Request $request){
        $vimeo_course = vimeo_course::findOrFail($request->vimeo_course_id);

        $vimeo_course->name = $request->name;
        $vimeo_course->url = $request->url;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $imageName = $requestImage->store('vimeo_course', 'public');

            Storage::disk('public')->delete($vimeo_course->image);
                        
            $vimeo_course->image = $imageName;
        }

        $vimeo_course->save();

        return Redirect()->route('vimeo_course')->with('success', 'Curso editado com sucesso!');
    }
}
