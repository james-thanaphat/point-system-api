<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductListsCollection;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    public function lists(Request $request)
    {
        try {
            $products = Product::lists();

            $perPage = $request->per_page ?? 10;
            $currentPage = $request->page ?? 1;

            $paginatedItems = $products->forPage($currentPage, $perPage);

            $paginator = new LengthAwarePaginator(
                $paginatedItems, // รายการที่แบ่งหน้า
                $products->count(), // จำนวนทั้งหมด
                $perPage, // จำนวนรายการต่อหน้า
                $currentPage, // หน้า
                ['path' => $request->url(), 'query' => $request->query()]
            );

            return new ProductListsCollection($paginator);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
