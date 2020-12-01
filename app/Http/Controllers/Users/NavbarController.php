<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        if ($request->product_name != null ){
            $mainRes = $this->productByCategory(['kids', 'men']);

            $product = Product::with(['productImages', 'productVideos'])->where('product_name', 'LIKE','%'.$request->product_name.'%')->get();

            return view('pages.product-details',['results' => $mainRes,'products' =>$product]);
        } else {
            $category = SubCategory::with(['category','products'])->where('category_id',$request->category_name)->get();

            return view('pages.categories',['categories' =>$category]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catArray = ['kids', 'men'];
        $mainRes = $this->productByCategory($catArray);

        $category = SubCategory::with('products')->where('id',$id)->get();

        return view('pages.one-category',['results' => $mainRes,'categories' =>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    private function productByCategory($catArray){
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
        return $mainRes;
    }
}
