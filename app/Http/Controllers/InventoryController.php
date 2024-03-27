<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryData;
use App\Models\User;
use App\Models\Category;
use DataTables;


class InventoryController extends Controller
{
    public function index(Request $request)
    {
        $userEmail = Auth::user()->email;

        $categories = Category::where('user_email', '=', $userEmail)->get();
        $categoryData2 = CategoryData::all();
        //dd( $categories);
        
        
        foreach ($categories as $new=> $data ) {
    //dd($data->category_name);

    $data->category_name;
        }
      
        $formattedData = [];
        foreach ($categoryData2 as $dataforcategory) {
            
            //  $formattedData= array($data->category_name => $dataforcategory->data);
         // var_dump( $formattedData);
             }
            
       // dd( $formattedData);

        if ($request->ajax()) {
            $data = CategoryData::whereHas('category', function ($query) use ($userEmail) {
                $query->where('user_email', '=', $userEmail);
            })->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('inventory.inventory', [
            'categories' => $categories,
            'categoryData' => $categoryData2,
        ]);
    }
}
