<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Categorydata;

class categorydataController extends Controller
{
  
    public function address()
{
  
    return view('inventory.category_data');
}


public function submitCategoryData(Request $request)
{
    $request->validate([
        'category_data.*' => 'required|string|max:255',
    ]);

    foreach ($request->input('category_data') as $categoryId => $data) {
        // Here, $categoryId represents the associated category
        // Create a new record in categories_data with $categoryId and $data
        CategoryData::create([
            'category_id' => $categoryId,
            'data' => $data,
        ]);
    }

    return redirect()->route('category_data')->with('success', 'Form submitted successfully');
}

public function getCategoryData() {

    $userEmail = Auth::user()->email; 
    // Replace 'column_name' and 'value' with your actual conditions
    $categoryData = Category::where('user_email', '=', $userEmail)->get();

    return view('inventory.category_data', ['categoryData' => $categoryData]);
}
}
