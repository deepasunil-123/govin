  
     $seller_view_cat=DB::table('category_tb')->get();
$id="a";
$sub_cat_id="b";
    $cat_name=$request->input('category');
    $sub_cat_name=$request->input('sub_cat');
    $prod_name=$request->input('product_name');
    $qty=$request->input('qty');

    $price=$request->input('price');
    $photo=$request->file('photo');
    $filename=time().'.'.$photo->getClientOriginalExtension();
$array=array('cat_id'=>$id,'sub_cat_id'=>$sub_cat_id,'pro_name'=>$prod_name,'qty'=>$qty,'price'=>$price,'photo'=>$filename);
DB::table('product_tb')->insert($array);
$img->move('images',$filename);
    $seller_sub_cat_view=DB::table('sub_category')->get();
    return view('seller\product_form',['res'=>$array]);

}


}