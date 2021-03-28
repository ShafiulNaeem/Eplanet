<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SecondarySubCategory;
use App\Models\SubCategory;
use http\Env\Response;
use Illuminate\Http\Request;

class ProductAPIController extends Controller
{
    /**
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function productBySlug($slug): \Illuminate\Http\JsonResponse
    {
        $pro = Product::with(['productImages', 'productVideos', 'category', 'subcategory', 'brand', 'secondsub', 'coupon'])->where('product_slug', $slug)->GetActive()->first();
        return ($pro)?
            response()->json($pro, 200):
            response()->json([], 404);
    }


    /**
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function categoryBySlug($slug): \Illuminate\Http\JsonResponse
    {
        $cat = Category::where('category_slug', $slug)->with('subcategory')->GetActive()->first();

        return ($cat)?
            response()->json($cat, 200):
            response()->json([], 404);
    }


    /**
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function subCatBySlug($slug): \Illuminate\Http\JsonResponse
    {
        $cat = SubCategory::where('subcategory_slug', $slug)->with('secondary_sub_categories')->GetActive()->first();

        return ($cat)?
            response()->json($cat, 200):
            response()->json([], 404);
    }


    /**
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function secondarySubCatBySlug($slug): \Illuminate\Http\JsonResponse
    {
        $second = SecondarySubCategory::where('secondary_subcategory_slug', $slug)->GetActive()->first();

        return ($second)?
            response()->json($second, 200):
            response()->json([], 404);
    }


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function allProduct(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Product::all(), 200);
    }


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function allCategory(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Category::GetActive()->get(), 200);
    }


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function allSubCategory(): \Illuminate\Http\JsonResponse
    {
        return response()->json(SubCategory::GetActive()->get(), 200);
    }


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function allSecondarySubCategory(): \Illuminate\Http\JsonResponse
    {
        return response()->json(SecondarySubCategory::GetActive()->get(), 200);
    }
}
