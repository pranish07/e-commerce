<?php
 use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

$products = Product::all();
    return view(
        'products',['products' =>$products] );
});

Route::get('/products/{product}', function (Product $product) { //route model binding
    // $product =Product::find($id);
    return view('product',['product' =>$product]);
});

Route::get('/home', function(){
    $products =Product::all();
    return view('home',['products' => $products]);
});
// Route::get('/create_product',function(){
//     Product::create([
//         'product_name' =>"Mobile Phone",
//         'product_desc' => "This will levitate your life and make you easier to move along in life. Give all your hard works to this phone",
//         "price" =>"30,000",
//         "image"=>""
//     ]);

// });
// Route::get('/get_product',function(){
//  $products = Product::get();
//  return $products;
// });
