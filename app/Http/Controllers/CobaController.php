<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;
use App\Models\Groups;

class CobaController extends Controller
{

    public function index()
    {
        $friends = Friends::orderBy('id' , 'desc')->paginate(3);

        return view('friends.index', compact('friends'));
    }

    public function home()
    {
        $friends = Friends::orderBy('id' , 'desc')->paginate(3);

        return view('friends.home', compact('friends'));
    }
    public function create()
    {
        return view('friends.create',);
    }
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_tlp' => 'required|numeric',
            'alamat' => 'nullable',
        ]);

        $friends = new Friends;

        $friends->nama = $request->nama;
        $friends->no_tlp = $request->no_tlp;
        $friends->alamat = $request->alamat;

        $friends->save();

        return redirect('/');
    }
    public function show($id){
        // $group = Groups::where('groups_id' ,'1' )->count();
        // $friend2 = Friends::where('groups_id' ,'2' )->count();
        // $friend3 = Friends::where('groups_id' ,'3' )->count();
        // $friend4 = Friends::where('groups_id' ,'4' )->count();

        $friend = Friends::where('id' , $id)->first();
        return view('friends.show', ['friend'=> $friend]);
    }
    public function edit($id)
    {
        $friend = Friends::where('id' , $id)->first();
        return view('friends.edit', ['friend'=> $friend]);
    }
    public function update(Request $request, $id)
    {
        Friends::find($id)->update([
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat
        ]);
        return redirect('/');
    }
    public function destroy($id){
        Friends::find($id)->delete();
        return redirect('/');
    }
}
