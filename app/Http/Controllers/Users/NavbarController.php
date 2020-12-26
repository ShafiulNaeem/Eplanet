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

            $product = Product::with(['productImages', 'productVideos'])->where('product_name', 'LIKE','%'.$request->product_name.'%')->GetActive()->get();

            return view('pages.product-details',['results' => $mainRes,'products' =>$product]);
        } else {
            $category = SubCategory::with(['category','productWithStatus'])->where('category_id',$request->category_name)->GetActive()->get();

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

        //$category = SubCategory::with('productWithStatus')->where('id',$id)->GetActive()->paginate(1);
        $category = SubCategory::where('id',$id)->GetActive()->get();
        $product = Product::where([
            ['sub_categories_id' , '=', $id],
            ['status', '=', 1],
        ])->paginate(16);

        //dd($product);

        return view('pages.one_category',['results' => $mainRes,'categories' =>$category,'products' => $product]);
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
            $subCategories = Category::with('products')->where([
                ['category_name' , '=', $val],
                ['status', '=', 1],
            ])->get();

            foreach ($subCategories as $sub) {
                if ( count($sub->products) ){
                    $category_result['category'] = [
                        'category_name' => $sub->category_name,
                        'category_image' => $sub->category_image
                    ];

                    foreach ($sub->products as $product){
                        //dd($product->status);
                        if ($product->status == 1){
                            $category_result['category']['products'][] = [
                                'id' => $product->id,
                                'unique_id' => $product->unique_id,
                                'brand_id' => $product->brand_id,
                                'product_name' => $product->product_name,
                                'feature_image' => $product->feature_image,
                                'stock' => $product->stock,
                                'product_price' => $product->product_price
                            ];
                        }

                    }
                    $mainRes[] = $category_result;
                }
            }
        }
        return $mainRes;
    }
}
