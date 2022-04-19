<?php

namespace App\Http\Controllers;

use App\Models\Institutional;
use Illuminate\Http\Request;

class InstitutionalController extends Controller
{
    public function institutional(){
        $institutional = Institutional::find(1);

        return view('sistema.institutional', ['institutional'=>$institutional]);
    }

    public function setUpdate($id){
        $institutional = Institutional::find($id);

        return view('sistema.formInstitutional', ['institutional'=>$institutional]);
    }

    public function update(Request $request){
        $institutional = Institutional::find(1);

        $institutional->content = $request->content;

        $institutional->save();

        return redirect()->route('institutional')->with('success', 'Página editada com sucesso!');
    }
}
