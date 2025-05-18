<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\organizationtype;
use Illuminate\Http\Request;

class OranizationTypesController extends Controller
{
    public function index(){
        return view('admin.Organization Type.add');

    }
    public function postorganization(Request $request){
        
          $request->validate([
        'name' => 'required|string|max:255|unique:organizationtypes,name',
    ]);

    organizationtype::create([
        'name' => $request->name,
    ]);
        return redirect()->route('organization.get')->with('success', 'add Organization successfully!');

    }
    public function getorganization(){
        $data = organizationtype::where('status', '=', 1)->orderBy('created_at')->get();

        return view('admin.Organization Type.show',compact("data"));
    }

    public function deleteorg($id){
        organizationtype::where("id",$id)->delete();
            return redirect()->back()->with('success', 'Organization  deleted successfully.');

    }
}
