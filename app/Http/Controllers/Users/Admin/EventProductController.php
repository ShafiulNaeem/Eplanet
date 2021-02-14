<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\EventProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $eventProducts = EventProduct::with(['category','product','event'])->EventProductWithAdminOwner()->get();
//dd($eventProducts);
        return view('admin.eventProduct.manage',compact('eventProducts'));
    }

    public function allEventProduct()
    {
        $eventProducts = EventProduct::with(['category','product','event'])->EventProductWithOutAdminOwner()->get();
        //dd($eventProducts);
        return view('admin.eventProduct.manage',compact('eventProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::CategoryWithAdminOwner()->GetActive()->get();
        $products = Product::AdminProduct()->GetActive()->get();
        $events = Event::EventWithAdminOwner()->GetActive()->get();
         //dd($events);

        return view('admin.eventProduct.create',compact('products','events','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'event_category'=> 'required',
            'product_id'=> 'required',
            'event_id'=> 'required',
        ]);

        foreach ($request->product_id as $id){
            $event = EventProduct::create([
                'admin_id' => Auth::guard('admin')->id(),
                'category_id' => $request->event_category,
                'event_id' => $request->event_id,
                'product_id' => $id,
            ]);

            if( empty($event->id) ) return redirect()->back()->with('error', 'Something went wrong, please try again');
        }

        return redirect(route('eventProduct.index'))->with('success', 'Product Event Category created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EventProduct $eventProduct)
    {
        //dd($eventProduct->category_id);
        $categories = Category::CategoryWithAdminOwner()->GetActive()->get();
        $products = Category::with('products')->where('id',$eventProduct->category_id)->CategoryWithAdminOwner()->GetActive()->get();
        $events = Event::EventWithAdminOwner()->GetActive()->get();

        return view('admin.eventProduct.edit',compact('categories','events','eventProduct','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, EventProduct $eventProduct)
    {
        $validate = $request->validate([
            'category_id'=> 'required',
            'product_id'=> 'required',
            'event_id'=> 'required',
        ]);

        return ( $eventProduct->update($validate) )?
        redirect()->route('eventProduct.index')->with('success', 'Updated Successfully'):
        redirect()->route('eventProduct.index')->with('error', 'Something went wrong') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param EventProduct $eventProduct
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(EventProduct $eventProduct)
    {
        return $eventProduct->delete() ?
            redirect()->back()->with('info', ' Delete Successfully') :
            redirect()->back()->with('error', 'Delete Unsuccessful') ;
    }


    public function allEventProducts($id)
    {
        $eventProduct = Event::with(['eventProducts.products.category', 'eventProducts.products.subcategory', 'eventProducts.products.brand', 'eventProducts.products.secondsub'])
            ->where('id', $id)->get()->toArray();

        $tableData = null;

        foreach ($eventProduct as $event_products){
            foreach ($event_products['event_products'] as $products){
                $tableData .= '<tr role="row"><td class="text-center">' . $products['products']['product_name'] . "</td>";
                $tableData .= '<td class="text-center"> <img width="80" src="' . asset('/storage/images/' . $products['products']['feature_image']) . '" /></td>';
                $tableData .= '<td class="text-center">' . $products['products']['stock'] . '</td>';
                $tableData .= '<td class="text-center">' . $products['products']['product_price'] . '</td>';
                $tableData .= '<td class="text-center">' . $products['products']['category']['category_name'] . '</td>';
                $tableData .= '<td class="text-center">' . $products['products']['subcategory']['subcategory_name'] . '</td>';
                $tableData .= '<td class="text-center">' . $products['products']['secondsub']['secondary_subcategory_name'] . '</td>';
                $tableData .= '<td class="text-center">' . $products['products']['brand']['brand_name'] . '</td>';
                $tableData .= '<td class="text-center"> <form
                                                                    action="'.route('eventProduct.destroy',$products["id"]).'"
                                                                    method="post">
                                                                    <input type="hidden" value="' . csrf_token() . '" name="_token">
                                                                    <input type="hidden" value="DELETE"  name="_method">
                                                                    <button type="submit" class="btn btn-app text-danger"><i class="fa fa-trash fa-2x"></i> </button>
                                                                </form> </td></tr>';

            }
        }

//        foreach ($eventProduct as $event_products){
//            foreach ($event_products['event_products'] as $products){
//                $tableData .= '<tr role="row"><td class="text-center">' . $products['products']['product_name'] . "</td>";
//                $tableData .= '<td class="text-center"> <img width="80" src="' . asset('/storage/images/' . $products['products']['feature_image']) . '" /></td>';
//                $tableData .= '<td class="text-center">' . $products['products']['stock'] . '</td>';
//                $tableData .= '<td class="text-center">' . $products['products']['product_price'] . '</td>';
//                $tableData .= '<td class="text-center">' . $products['products']['category']['category_name'] . '</td>';
//                $tableData .= '<td class="text-center">' . $products['products']['subcategory']['subcategory_name'] . '</td>';
//                $tableData .= '<td class="text-center">' . $products['products']['secondsub']['secondary_subcategory_name'] . '</td>';
//                $tableData .= '<td class="text-center">' . $products['products']['brand']['brand_name'] . '</td>';
//                $tableData .= '<td class="text-center"> <form
//                                                                    action="'.route('eventProduct.destroy',$products["id"]).'"
//                                                                    method="post">
//                                                                    <input type="hidden" value="' . csrf_token() . '" name="_token">
//                                                                    <input type="hidden" value="DELETE"  name="_method">
//                                                                    <button type="submit" class="btn btn-app text-danger"><i class="fa fa-trash fa-2x"></i> </button>
//                                                                </form> </td></tr>';
//
//            }
//        }
//        $tableData .= "</tr>";
        return $tableData;
    }
}
