<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product as ProductModel ;
use function Termwind\render;
class dashboard extends Controller
{
    public function index(){
        $data =[];
        $data['title'] ='Admin';
        $data ['template'] =  'Admin/index';
        return view('Admin',$data);  
    }    
    public function products()
    {
        $data = [];
        $data['title'] = 'Products';
        $data['template'] = 'Dashboard/products';
         $products = ProductModel::orderBy('id','desc')->get(); 
        //  dd($products->toArray());
         $data['products'] = $products;
        return view('Admin', $data);
    }
    public function productnewpost(){
        if($_POST['update'] == 0){
            unset($_POST['id']);
            ProductModel::create($_POST);
        }else{
            if($_POST['id']){
                unset($_POST['_token']);
                unset($_POST['update']);
                ProductModel::where('id', $_POST['id'])->update($_POST);
                
            }
        }
        return redirect()->route('dashboard/products');
    }
public function deleteProduct($id)
{
        $product = ProductModel::find($id);
        if ($product) {
            $product->delete();
            return response()->json(['message' => 'Xóa sản phẩm thành công'], 200);
        } else {
            return response()->json(['message' => 'Không tìm thấy sản phẩm'], 404);
        }
}
    public function user(){
        $data = [];
        $data['title'] = 'user';
        $data['template'] = 'Dashboard/user';
        return view('Admin', $data);
    }
  
}