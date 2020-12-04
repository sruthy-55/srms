<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function save(Request $req)
    {

        //print_r($req->input());
        $category=new Category;
        $category->name=$req->name;
        $category->save();
        return redirect('viewcategorylist');
    }
    function show()
    {
        $data= Category::all();
        return view('viewcategorylist',['categories'=>$data]);
    }
    function delete($id)
    {
        $data=Category::find($id);
        $data->delete();
        return redirect('viewcategorylist');
    }
    function showData($id)
    {
        $data=Category::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        $data=Category::find($req->id);
        $data->name=$req->name;
        $data->save();
        return redirect('viewcategorylist');
    }
   
}

