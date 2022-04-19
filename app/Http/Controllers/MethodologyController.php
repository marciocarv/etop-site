<?php

namespace App\Http\Controllers;

use App\Models\Methodology;
use Illuminate\Http\Request;

class MethodologyController extends Controller
{
    public function methodology(){
        $methodology = Methodology::find(1);

        return view('sistema.methodology', ['methodology'=>$methodology]);
    }

    public function setUpdate($id){
        $methodology = Methodology::find($id);

        return view('sistema.formMethodology', ['methodology'=>$methodology]);
    }

    public function update(Request $request){
        $methodology = Methodology::find(1);

        $methodology->content = $request->content;

        $methodology->save();

        return redirect()->route('methodology')->with('success', 'Página editada com sucesso!');
    }
}
