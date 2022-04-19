<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticeController extends Controller
{
    public function notice(){
        $noticies = Notice::all();

        $title = 'Cadastrar Notícia';
        $route = 'store-notice';
        $action = 'store';

        return view('sistema.notice', ['title'=>$title, 'route'=>$route, 'action'=>$action, 'noticies'=>$noticies]);
    }

    public function store(Request $request){
        $notice = new Notice;

        $notice->title = $request->title;
        $notice->content = $request->content;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $imageName = $requestImage->store('noticies', 'public');
                        
            $notice->image = $imageName;
        }

        $notice->save();

        return Redirect()->route('notice')->with('success', 'Notícia Salva com sucesso!');
    }

    public function delete($id){
        $notice = Notice::findOrFail($id);

        if(!$notice->delete()){
            return redirect()->route('notice')->with('error', 'Não foi possível apagar a notícia!');
        }

        if($notice->image != null){
            Storage::disk('public')->delete($notice->image);
        }        

        return redirect()->route('notice')->with('success', 'Notícia excluída com sucesso!');
    }

    public function setUpdate($id){
        $noticeUpdate = Notice::findOrFail($id);

        $noticies = Notice::all();

        $title = 'Editar Notícia';
        $route = 'update-notice';
        $action = 'update';

        return view('sistema.notice', ['title'=>$title, 'route'=>$route, 'action'=>$action,
                     'noticies'=>$noticies, 'noticeUpdate'=>$noticeUpdate]);
    }

    public function update(Request $request){
        $notice = Notice::findOrFail($request->notice_id);

        $notice->title = $request->title;
        $notice->content = $request->content;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $imageName = $requestImage->store('noticies', 'public');

            Storage::disk('public')->delete($notice->image);
                        
            $notice->image = $imageName;
        }

        $notice->save();

        return redirect()->route('notice')->with('success', 'Notícia editada com sucesso!');
    }

    public function view($id){
        $notice = Notice::findOrFail($id);

        return view('sistema.viewNotice', ['notice'=>$notice]);
    }
}
