<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){

        // Category wise Product
        $catArray = ['kids', 'men', 'women', 'electronics'];
        $mainRes = [];

        foreach ($catArray as $val){
            $category_result = [];
            $subCategories = Category::with('subcategory')->where([
                ['category_name' , '=', $val],
                ['status', '=', 1],
            ])->get();


            foreach ($subCategories as $sub){

                $category_result['category'] = [
                    'category_name' => $sub->category_name,
                    'category_image' => $sub->category_image
                ];

                foreach ($sub->subcategory as $subCat){
                $product = SubCategory::with('products')->where('id', $subCat->id)->get();
                    if (count($product) > 0){
                        foreach ($product as $pval) {
                            foreach ($pval->products as $products){
                            $category_result['category']['products'][] = [
                                'id' => $products->id,
                                'unique_id' => $products->unique_id,
                                'brand_id' => $products->brand_id,
                                'product_name' => $products->product_name,
                                'feature_image' => $products->feature_image,
                                'stock' => $products->stock,
                                'product_price' => $products->product_price
                            ];

                            }
                        }
                    }
                }
                $mainRes[]=$category_result;
            }
        }

        //Category Query
        $category = Category::orderBy('category_name','asc')->get();

        //BestSell from Product
        $product = Product::orderBy('sold','desc')->get();


        //dd($mainRes);
        return view('welcome',['results' => $mainRes,'categories' => $category, 'products' =>$product ]);
    }

    public function show($id)
    {

        //dd($products);
        // Category wise Product
        $catArray = ['kids', 'men'];
        $mainRes = [];

        foreach ($catArray as $val){
            $category_result = [];
            $subCategories = Category::with('subcategory')->where([
                ['category_name' , '=', $val],
                ['status', '=', 1],
            ])->get();


            foreach ($subCategories as $sub){

                $category_result['category'] = [
                    'category_name' => $sub->category_name,
                    'category_image' => $sub->category_image
                ];

                foreach ($sub->subcategory as $subCat){
                    $product = SubCategory::with('products')->where('id', $subCat->id)->get();
                    if (count($product) > 0){
                        foreach ($product as $pval) {
                            foreach ($pval->products as $products){
                                $category_result['category']['products'][] = [
                                    'id' => $products->id,
                                    'unique_id' => $products->unique_id,
                                    'brand_id' => $products->brand_id,
                                    'product_name' => $products->product_name,
                                    'feature_image' => $products->feature_image,
                                    'stock' => $products->stock,
                                    'product_price' => $products->product_price
                                ];

                            }
                        }
                    }
                }
                $mainRes[]=$category_result;
            }
        }

        $product = Product::with(['productImages', 'productVideos'])->where('id', $id)->get();

        return view('pages.product-details',['results' => $mainRes,'products' =>$product ]);
       // return view('pages.product-details',compact('products'));
    }

}
