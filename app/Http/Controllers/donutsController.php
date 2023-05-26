<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\donuts;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class donutsController extends Controller
{
    //
    public function index()
    {
        $donuts = donuts::all();
        return view('donuts.index', ['donuts' => $donuts]);
    }
    public function create()
    {
        return view('donuts/create');
    }
    public function Edit($id)
    {
        $donuts = donuts::find($id);
        return view('donuts.edit', compact('donuts'));
    }
    public function store(Request $request)
    {
        $id = $request->get('id');
        if($id){
            $donuts = donuts::find($id);
        } else {
            $donuts = new donuts;
        }
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $imageName = time() . '.' . $foto->getClientOriginalExtension();
            $destinationPath = 'image/';
            $foto->move($destinationPath, $imageName);
            $donuts->foto = $imageName;
        }
        $donuts->nama = $request->nama;
        $donuts->harga = $request->harga;
        $donuts->save();
        return redirect()->route('donuts.index');
    }
    public function donutsDel($id) {
        $donuts = donuts::find($id);
        $donuts->delete();
        return redirect('/donuts');
    }
}