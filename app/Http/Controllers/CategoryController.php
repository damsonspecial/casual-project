<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //app/Http/Controllers/CategoryController.php

public function create()
{
    return view('inventory.create_category');
}

public function store(Request $request)
{
    try {
        $request->validate([
            'category_name' => 'required|string|max:20',
            // Add validation rules for other fields as needed
        ]);

        $userEmail = auth()->user()->email; // Retrieve the logged-in user's email

        Category::create([
            'category_name' => $request->category_name,
            'user_email' => $userEmail, // Assign the user's email to the field   
        ]);

        return redirect()->route('create_category')->with('success', 'Category created successfully');
    } catch (\Exception $e) {
        return redirect()->route('create_category')->with('error', '' . $e->getMessage());
    }
}
}