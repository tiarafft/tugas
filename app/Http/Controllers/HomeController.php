<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendors;
use App\Products;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function vendors()
    {
        $vendors = Vendors::all();
        return view('vendors',['vendors'=>$vendors]);
    }

    public function vendors_add()
    {
        return view('vendors_add');
    }

    public function vendors_action(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'address' => 'string',
        ]);

        try {
            $vendors = Vendors::create([
                'name' => $request->name,
                'address' => $request->address
            ]);
            return redirect('/vendors')->with(['success' =>   $vendors->name . ' Has Been Saved']);
        } catch(\Exception $e) {
            return redirect('/vendors/add')->with(['error' => $e->getMessage()]);
        }
    }
    
    public function vendors_edit($id)
    {
        $vendors = Vendors::find($id);
        return view('vendors_edit',['vendors' => $vendors]);
    }

    public function vendors_update(Request $request, $id)
    {
        $vendors = Vendors::find($id);
        $vendors->update([
            'name' => $request->name,
            'address' => $request->address
        ]);
        return redirect('/vendors')->with(['success' => $vendors->name . ' Updated']);
    }

    public function vendors_delete($id)
    {
        $vendors = Vendors::find($id);
        $vendors->delete();
        return redirect('/vendors')->with(['success' => $vendors->name . ' Berhasil Dihapus']);
    }

    public function products()
    {
        $products = Vendors::all();
        return view('products',['products'=>$products]);
    }

}
