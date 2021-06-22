<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('category_id');
        $categoryName = null;

        if($categoryId) {
            $category = Category::find($categoryId);
            $categoryName = ucfirst($category->name);

            $products = $category->allProducts();
        }else{
            $products = Product::take(30)->get();
        }

        return view('product.index', compact('products', 'categoryName'));
    }

    public function search(Request $request)
    {

        $query = $request->input('query');

        $products = Product::where('name','LIKE',"%$query%")->paginate(10);

        return view('product.catalog',compact('products'));
    }

    public function searchbyprice(Request $request)
    {

        $query = $request->input('query');

        $products = Product::where('selling_price','LIKE',"%$query%")->paginate(10);
        $users = DB::table('products')
                ->where('votes', '=', 100)
                ->where('age', '>', 35)
                ->get();

        return view('product.catalog',compact('products'));
    }

    public function show(Product $product)
    {
        $products = Product::where('id','LIKE',$product->id)->get();
        $stocks = Stock::where('product_id','LIKE',$product->id)->get();
       
         
// $colors = Str::of($color)->explode(' ');
// $sizes = Str::of($quantity)->explode(' ');
// $quantitys = Str::of($size)->explode(' ');
FOREACH($stocks as $color){
    $color = $color->color;
}
FOREACH($stocks as $size){
    $size = $size->size;
}
FOREACH($stocks as $quantity){
    $quantity = $quantity->quantity;
}

$colors = explode(',', $color);
$sizes = explode(',', $size);
$quantitys = explode(',', $quantity);
// $col= 'blue';
// $siz='5';
// $n='0';
// echo $quantitys[0];
// for($i=0;$i<5;$i++)
// {
//     if($colors[$i]==$col && $sizes[$i]==$siz)
//     {
//         $quantitys[$i]=$quantitys[$]-1;
//     }
// }

       
        return view('product.show', compact('products','stocks','colors','sizes','quantitys'));

    }


}
