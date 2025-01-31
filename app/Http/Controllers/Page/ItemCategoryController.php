<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\TblCategory;
use Illuminate\Http\Request;

class ItemCategoryController extends Controller
{
    public function index()
    {
        $categories = TblCategory::all();
        return view('page.item_category', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tblCat_Code' => "nullable|string|max:255",
            'tblCat_Description' => "nullable|string|max:255",
        ]);

        $category = TblCategory::create([
            'unitcode' => $request->tblCat_Code,
            'amount_sold' => 0,
            'profit' => 0,
            'item_sold' => 0,
            'item_profit' => 0,
            'product_num' => 0,
            'item_desc' => $request->tblCat_Description,
        ]);

        return response()->json([
            'success' => true,
            'category' => $category
        ]);
    }

    public function destroy($id)
    {
        $category = TblCategory::find($id);

        if (!$category) {
            return response()->json(['success' => false, 'message' => 'Category not found'], 404);
        }

        $category->delete();

        return response()->json(['success' => true, 'message' => 'Category deleted successfully']);
    }
}
