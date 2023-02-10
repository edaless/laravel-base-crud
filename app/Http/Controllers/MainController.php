<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
    public function home()
    {

        $saints = Saint::all();
        $data = [
            'saints' => $saints
        ];

        return view('pages.home', $data);


        // lui fa:
        // $saints = Saint::orderBy('created_at', 'DESC') -> get();        
        // return view('pages.home', compact('saints'));
        // per ordinarli dal più recente.
        // può essere utile
    }


    public function saintShow($id)
    {
        $saint = Saint::find($id);
        $data = [
            'saint' => $saint
        ];
        return view('pages.saintShow', $data);
    }

    public function saintDestroy($id)
    {
        $saint = Saint::find($id);
        $saint->delete();

        return redirect()->route('home');
    }

    public function saintCreate()
    {
        return view('pages.saintCreate');
    }

    public function saintStore(Request $request)
    {

        $data = $request->all();
        $saint = new Saint();

        $saint->name = $data['name'];
        $saint->birth_place = $data['birth_place'];
        $saint->blessing_date = $data['blessing_date'];
        $saint->miracles_number = $data['miracles_number'];

        $saint->save();

        return redirect()->route('home');
    }
}
