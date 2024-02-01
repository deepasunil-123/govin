<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Stripe;

class mainprjectcontroller extends Controller
{
    public function index(request $request)
    {
        {
            $buyer_view_product=DB::table('product_tb')->join('category_tb','product_tb.cat_id','=','category_tb.id')->join('sub_category_tb','product_tb.sub_cat_id','=','sub_category_tb.id')->select('product_tb.*','category_tb.*','sub_category_tb.*','product_tb.id as pid')->get();
        
            //$buyer_view_product=DB::table('product_tb')->join('category_tb','product_tb.cat_id','=','category_tb.id')->join('sub_category_tb','category_tb.id','=','sub_category_tb.cat_id')->get();
        
           // $buyer=Db::table('product_tb')->get();
           $search_data=DB::table('category_tb')->get();
        
            return view('index',['res'=>$buyer_view_product,'res1'=>$search_data]);
        
        }
        
        // return view('index');
    }
    public function index_details(request $request,$pid)
    {
        $buyer_view_product=DB::table('product_tb')->join('category_tb','product_tb.cat_id','=','category_tb.id')->join('sub_category_tb','product_tb.sub_cat_id','=','sub_category_tb.id')->select('product_tb.*','category_tb.*','sub_category_tb.*','product_tb.id as pid')->where('product_tb.id',$pid)->first();
        //print_r($id);
     //exit();
 
     //$buy_pro_det=DB::table('product_tb')->where('id',$id)->first();
     return view('index_details',['res'=>$buyer_view_product]);
 
    }
//     public function index_add_to_cart (Request $request, $pid)
// {
//     //$buyerid=
//     $buyerid=$request->session()->get('id');

//     //$product_id=
//     if($buyerid)
//     {
//     $qty=$request->input('qty');
//     $array=array('buyer_id'=>$buyerid,'product_id'=>$pid,'qty'=>$qty);
//     DB::table('cart_tb')->insert($array);
//     return redirect('buyer_view_cart');
// }
//         else
//         {
//             return view('login');

//         }
//     //print_r($array);
//    // exit();
// }


    
    public function login()
    {
        return view('login');
    }
    public function buyreg()
    {
        return view('buyer/buyerreg');
    }
    public function sellerreg()
    {
        return view('seller/seller_reg');
    }
    public function buyer_insert_form(Request $request)
    {
        $request->validate([
            'name'=>'required|regex:/^[a-z A-Z]+/',
            'phone'=>'required|regex:/^[0-9]{10}$/',
            'email'=>'required|email',
            'place'=>'required|regex:/^[a-z A-Z]+/'
        ]);

            $name=$request->input('name');   
            $email=$request->input('email');
            $phone=$request->input('phone');
            $place=$request->input('place');
            $uname=$request->input('uname');
    
            $pwd=$request->input('pwd');
            $photo=$request->file('photo');
            $file_name=time().'.'.$photo->getClientOriginalExtension();
            $status="Pending";
    
    

    
    
            $arr=array('name'=>$name,'email'=>$email,'phone'=>$phone,'place'=>$place,'uname'=>$uname,'pwd'=>$pwd,'photo'=>$file_name,'status'=>$status);
            DB::table('buyer_tb')->insert($arr);  
            $photo->move('images/',$file_name);
            return redirect('buyer_reg')->with('message','registration completed');

        
    
    }


    public function seller_insert_form(Request $request)
    {
        $request->validate([
            'phone'=>'required|regex:/^[0-9]{10}+$/',
            'email'=>'required|email',
        ]);


        

            $name=$request->input('name');   
            $email=$request->input('email');
            $phone=$request->input('phone');
            $place=$request->input('place');
            $uname=$request->input('uname');
    
            $pwd=$request->input('pwd');
            $photo=$request->file('photo');
            $file_name=time().'.'.$photo->getClientOriginalExtension();
            $status="Pending";
    
    

    
    
            $arr=array('name'=>$name,'email'=>$email,'phone'=>$phone,'place'=>$place,'uname'=>$uname,'pwd'=>$pwd,'photo'=>$file_name,'status'=>$status);
            DB::table('seller_tb')->insert($arr);  
            $photo->move('images/',$file_name);
            return redirect('seller_reg')->with('message','registration completed');
        
    
    }

    public function home()
    {
        return view('admin/home');

    }

    public function home_buyer()
    {
        return view('buyer/home_buyer');

    }
    public function home_seller()
    {
        return view('seller/home_seller');

    }


    public function login_form(Request $request)
    {
        
            $uname=$request->input('uname');
            $pwd=$request->input('pwd');

           $ans_admin=DB::table('admin_tb')->where('uname',$uname)->where('pwd',$pwd)->first();
        if($ans_admin)
        {           // print_r($uname);
           // exit();

            $id=$ans_admin->id;
            $photo=$ans_admin->photo;
            $email=$ans_admin->email;

            $request->session()->put('name',$uname);
            $request->session()->put('email',$email);
            $request->session()->put('photo',$photo);

            $request->session()->put('id',$id);
        //    print_r($photo);
        //    exit();

            return redirect('home');

        }
        else
        {            $status="Approved";

            $ans_buyer=DB::table('buyer_tb')->where('uname',$uname)->where('pwd',$pwd)->where('status',$status)->first();
            if($ans_buyer)
            {
                $bid=$ans_buyer->id;
                $email=$ans_buyer->email;
                $photo=$ans_buyer->photo;
                $uname=$ans_buyer->uname;



                $request->session()->put('name',$uname);
                $request->session()->put('id',$bid);
                $request->session()->put('email',$email);
                $request->session()->put('photo',$photo);


                return redirect('home_buyer');
    
            }
            else
            {            $status="Approved";


    $ans_seller=DB::table('seller_tb')->where('uname',$uname)->where('pwd',$pwd)->where('status',$status)->first();
    if($ans_seller)
    {$uname=$ans_seller->uname;

        $sid=$ans_seller->id;
        $email=$ans_seller->email;
        $photo=$ans_seller->photo;

        $request->session()->put('name',$uname);
        $request->session()->put('id',$sid);
        $request->session()->put('email',$email);
        $request->session()->put('photo',$photo);


        return redirect('home_seller');

    }
    else
        {
            return redirect('login');
        

        }
            }
    }



}

public function admin_view_profile(Request $request)
{
    //$request->session()->put('name',$uname);
    $id=$request->session()->get('id');

    $admin_view=DB::table('admin_tb')->where('id',$id)->first();
return view('admin\admin_view_profile',['res'=>$admin_view]);

}

public function admin_edit_profile(Request $request)
 {   
//'cat_name'=>'required|regex:/^[a-z A-Z0-9]+/',

     $id=$request->session()->get('id');

       $admin_edit=DB::table('admin_tb')->where('id',$id)->first();
        return view('admin\admin_edit_profile',['res'=>$admin_edit]);

}

public function admin_update_profile(Request $request)

{
    $id=$request->session()->get('id');

    $request->validate([
        //'name'=>'required|regex:/^[a-z A-Z]+/',
        'phone'=>'required|regex:/^[0-9]{10}+$/',
        'email'=>'required|email',
        //'place'=>'required|regex:/^[a-z A-Z]+/'
    ]);


    

        $name=$request->input('name');   
        $email=$request->input('email');
        $phone=$request->input('phone');
        $place=$request->input('place');
        $uname=$request->input('uname');

        $pwd=$request->input('pwd');
        $photo=$request->file('photo');
        //$status="Pending";



if($photo)
{       
    $file_name=time().'.'.$photo->getClientOriginalExtension();
    $arr=array('name'=>$name,'email'=>$email,'phone'=>$phone,'place'=>$place,'uname'=>$uname,'pwd'=>$pwd,'photo'=>$file_name);
    $photo->move('images/',$file_name);


}

else

{   
     $arr=array('name'=>$name,'email'=>$email,'phone'=>$phone,'place'=>$place,'uname'=>$uname,'pwd'=>$pwd);

}

DB::table('admin_tb')->where('id',$id)->update($arr);


        return redirect('admin_view_profile');

}

public function buyer_view_profile(Request $request)
{
    $id=$request->session()->get('id');

    $buyer_view=DB::table('buyer_tb')->where('id',$id)->first();
return view('buyer\buyer_view_profile',['res'=>$buyer_view]);

}
public function buyer_edit_profile(Request $request)
{
    $id=$request->session()->get('id');

    $buyer_edit=DB::table('buyer_tb')->where('id',$id)->first();
    return view('buyer\buyer_edit_profile',['res'=>$buyer_edit]);

}


public function buyer_update_profile(Request $request)

{
    $id=$request->session()->get('id');

    $request->validate([
        'phone'=>'required|regex:/^[0-9]{10}+$/',
        'email'=>'required|email',
    ]);

    

        $name=$request->input('name');   
        $email=$request->input('email');
        $phone=$request->input('phone');
        $place=$request->input('place');
        $uname=$request->input('uname');

        $pwd=$request->input('pwd');
        $photo=$request->file('photo');
        $status=$request->input('status');


if($photo)
{       
    $file_name=time().'.'.$photo->getClientOriginalExtension();
    $arr=array('name'=>$name,'email'=>$email,'phone'=>$phone,'place'=>$place,'uname'=>$uname,'pwd'=>$pwd,'status'=>$status,'photo'=>$file_name);
    $photo->move('images/',$file_name);


}

else

{   
     $arr=array('name'=>$name,'email'=>$email,'phone'=>$phone,'place'=>$place,'uname'=>$uname,'pwd'=>$pwd,'status'=>$status);

}



DB::table('buyer_tb')->where('id',$id)->update($arr);


        return redirect('buyer_view_profile');

}

public function seller_view_profile(Request $request)

{
    $id=$request->session()->get('id');

    $seler_view=DB::table('seller_tb')->where('id',$id)->first();
return view('seller\seller_view_profile',['res'=>$seler_view]);

}

public function seller_edit_profile(Request $request)
{
    $id=$request->session()->get('id');

    $seller_edit=DB::table('seller_tb')->where('id',$id)->first();
    return view('seller\seller_edit_profile',['res'=>$seller_edit]);

}
public function seller_update_profile(Request $request)


{
    $request->validate([
        'phone'=>'required|regex:/^[0-9]{10}$/',
        'email'=>'required|email',
    ]);


    
    $name=$request->input('name');   
    $email=$request->input('email');
    $phone=$request->input('phone');
    $place=$request->input('place');
    $uname=$request->input('uname');

    $pwd=$request->input('pwd');
    $photo=$request->file('photo');
    $status=$request->input('status');


if($photo)
{       
$file_name=time().'.'.$photo->getClientOriginalExtension();
$arr=array('name'=>$name,'email'=>$email,'phone'=>$phone,'place'=>$place,'uname'=>$uname,'pwd'=>$pwd,'status'=>$status,'photo'=>$file_name);
$photo->move('images/',$file_name);


}

else

{   
 $arr=array('name'=>$name,'email'=>$email,'phone'=>$phone,'place'=>$place,'uname'=>$uname,'pwd'=>$pwd,'status'=>$status);

}

$id=$request->session()->get('id');


DB::table('seller_tb')->where('id',$id)->update($arr);  

    return redirect('seller_view_profile');



}
public function admin_view_seller(Request $request)
{
    $admin_seler_view=DB::table('seller_tb')->get();
    return view('admin\admin_view_seller',['res'=>$admin_seler_view]);
    
}
public function admin_view_seller_details($id)
{
    $admin_seler_view_details=DB::table('seller_tb')->where('id',$id)->first();
    return view('admin\admin_view_seller_details',['res'=>$admin_seler_view_details]);
    
}
public function approvereject(Request $request,$id)
{

       $app_rej=$request->input('app_rej');   
      
       if($app_rej=="Approve")
       {
        $arr=array('status'=>"Approved"); 
        $status=DB::table('seller_tb')->where('id',$id)->update($arr);
        return back()->with('message','approved');
    
       }
       else{
        $arr=array('status'=>"Rejected");
        $status=DB::table('seller_tb')->where('id',$id)->update($arr);
        return back()->with('message','rejected');
    
       }


}
public function admin_view_buyer(Request $request)
{
    $admin_buyer_view=DB::table('buyer_tb')->get();
    return view('admin\admin_view_buyer',['res'=>$admin_buyer_view]);
    
}
public function admin_view_buyer_details($id)
{
    $admin_buyer_view_details=DB::table('buyer_tb')->where('id',$id)->first();
    return view('admin\admin_view_buyer_details',['res'=>$admin_buyer_view_details]);
    
}
public function approvereject_buyer(Request $request,$id)
{


       $app_rej=$request->input('app_rej');   
      
       if($app_rej=="Approve")
       {
        $arr=array('status'=>"Approved");                    
        $status=DB::table('buyer_tb')->where('id',$id)->update($arr);
        return back()->with('message','approved');
    
       }
       else{
        $arr=array('status'=>"Rejected");
        $status=DB::table('buyer_tb')->where('id',$id)->update($arr);
        return back()->with('message','rejected');
    
       }


}

public function admin_add_category_form()
{
    return view('admin\admin_add_category');
}

public function admin_insert_category(Request $request)
{       
     $request->validate([
    'cat_name'=>'required|regex:/^[a-z A-Z0-9]+/',
]);

    
    $cat_name=$request->input('cat_name');
    $cat_data=array('cat_name'=>$cat_name);
    DB::table('category_tb')->insert($cat_data);
 return redirect('admin_add_category_form')->with('message','Data added Successfully');

}


public function admin_view_category(request $request)
{
    
    
    $admin_view_cat=DB::table('category_tb')->get();
    return view('admin\admin_view_category',['res'=>$admin_view_cat]);
}

public function admin_edit_cat($id)

{
$cat_edit=DB::table('category_tb')->where('id',$id)->first();
return view('admin\admin_edit_cat',['res'=>$cat_edit]);
}

public function admin_update_cat(request $request, $id)
{
    $request->validate([
        'cat_name'=>'required|regex:/^[a-z A-Z]+/',
    ]);
    
    $cat_name=$request->input('cat_name');
    $cat_data=array('cat_name'=>$cat_name);
    DB::table('category_tb')->where('id',$id)->update($cat_data);
    return redirect('admin_view_category');


}
public function admin_delete_cat($id)
{
DB::table('category_tb')->where('id',$id)->delete();
return redirect('admin_view_category');

}


public function admin_cat_data()
{
    $cat_name=DB::table('category_tb')->get();
    return view('admin\add_sub_cat_form',['res'=>$cat_name]);

}

public function admin_sub_cat_insert(Request $request)
{
     $request->validate([
        'sb_cat_name'=>'required|regex:/^[a-z A-Z0-9]+/',
    ]);
    $cat_name=$request->input('category');
    $sub_cat_name=$request->input('sb_cat_name');
    $data=array('cat_id'=>$cat_name,'sub_cat_name'=>$sub_cat_name);
    DB::table('sub_category_tb')->insert($data);
    
    return redirect('admin_add_sub_cat_form')->with('message','added successfully');

}
public function admin_view_sub_category(request $request)
{
    $admin_view_sub_cat=DB::table('category_tb')->join('sub_category_tb','category_tb.id','=','sub_category_tb.cat_id')->get();

    return view('admin\admin_sub_cat_view',['res'=>$admin_view_sub_cat]);
}

public function admin_edit_sub_cat(request $request,$id)
{
    $cat_data=DB::table('category_tb')->get();
    $admin_view_sub_cat=DB::table('category_tb')->join('sub_category_tb','category_tb.id','=','sub_category_tb.cat_id')->where('sub_category_tb.id',$id)->first();

return view('admin\admin_edit_sub_cat',['data'=>$cat_data,'res'=>$admin_view_sub_cat]);

}

public function admin_update_sub_cat(request $request,$id)
{
    $request->validate([
        'cat_name'=>'required|regex:/^[a-z A-Z 0-9]+/+$/',
        'sub_cat_name'=>'required|regex:/^[a-z A-Z 0-9]+$/',

    ]);

    $cat_name=$request->input('category');
    $sub_cat_name=$request->input('sub_cat_name');
    //$data_update=array('cat_name'=>$cat_name);
    //DB::table('category_tb')->where('id',$id)->update($data_update);
    $data_update2=array('cat_id'=>$cat_name,'sub_cat_name'=>$sub_cat_name);
    DB::table('sub_category_tb')->where('id',$id)->update($data_update2);


}
public function admin_delete_sub_cat($id)
{
    DB::table('sub_category_tb')->where('id',$id)->delete();
    return redirect('admin_view_sub_cat_view');
}
public function viewsub_cat_data(Request $request)
{   $cat=$request->input('category');



    $data=DB::table('sub_category_tb')->where('cat_id',$cat)->get();
    //print_r($data);
    //exit();
    return response()->json($data);
}

public function add_product(request $request )
{   
    $seller_view_cat=DB::table('category_tb')->get();// cat_id=$request['']
//     $cat_name=$request->input('category');
//     $sub_cat_name=$request->input('sub_cat');
//     $prod_name=$request->input('product_name');
//     $price=$request->input('price');
//     $photo=$requst->input('photo');
// $array=array('cat_id'=>$cat_id,'sub_cat_id'=>$sub_cat_id,'pro_name'=>$prod_name,'qty'=>$qty,'price'=>$price,'photo'=>$photo);
// DB::table('product_tb')->insert($array);

    //$seller_sub_cat_view=DB::table('sub_category')->get();
    return view('seller\product_form',['res'=>$seller_view_cat]);

}
public function add_pro_data(request $request )
{
    //$id=2;
    $request->validate([

'qty'=>'required|regex:/^[0-9]+$/',
 'price'=>'required|regex:/^[0-9]+$/',

     ]);

    $sub_cat_id=$request->input('sub_category');
    //print_r($sub_cat_id);
   // exit();
        $cat_name=$request->input('category');
        $sub_cat_name=$request->input('sub_cat');
        $prod_name=$request->input('product_name');
        $qty=$request->input('qty');
    
        $price=$request->input('price');
        $photo=$request->file('photo');
        $filename=time().'.'.$photo->getClientOriginalExtension();
        $seller_id=session()->get('id');
    $array=array('cat_id'=>$cat_name,'sub_cat_id'=>$sub_cat_id,'pro_name'=>$prod_name,'qty'=>$qty,'price'=>$price,'photo'=>$filename,'seller_id'=>$seller_id);
//echo $sub_cat_id;
    print_r($array);
//exit();
    DB::table('product_tb')->insert($array);
   $photo->move('images',$filename);
        //$seller_sub_cat_view=DB::table('sub_category')->get();
return redirect('add_product')->with('message','product added');
}
public function search_product_data(request $request )
{
    return view('seller\product_form',['res'=>$search_data]);


}

public function view_product(request $request)

{
    $id=$request->session()->get('id');

   // $seler_view=DB::table('product_tb')->where('seller_id',$id)->get();
   // $admin_view_sub_cat=DB::table('category_tb')->join('sub_category_tb','category_tb.id','=','sub_category_tb.cat_id')->get();
    $seler_view=DB::table('product_tb')->join('category_tb','product_tb.cat_id','=','category_tb.id')->join('sub_category_tb','product_tb.sub_cat_id','=','sub_category_tb.id')->select('product_tb.*','category_tb.*','sub_category_tb.*','product_tb.id as pid')->where('product_tb.seller_id',$id)->get();
//    print_r ($seler_view);
//    exit();

 return view('seller\view_seller_data',['res'=>$seler_view]);

}
public function seller_edit_product(Request $request,$id)

{  
      //$idnew=$request->session()->get('id');
      //print_r($idnew);
    

    $seller_view_cat=DB::table('category_tb')->get();
    $seller_view_sub_cat=DB::table('sub_category_tb')->get();

   // print_r($seller_view_cat);
//exit;
    //return view('seller\product_form',['res'=>$seller_view_cat]);



    $seler_edit=DB::table('product_tb')->join('category_tb','product_tb.cat_id','=','category_tb.id')->join('sub_category_tb','category_tb.id','=','sub_category_tb.cat_id')->select('product_tb.*','category_tb.*','sub_category_tb.*','product_tb.id as pid')->where('product_tb.id',$id)->first();
    //print_r($seler_edit);
    //exit();
    return view('seller\seller_edit_product',['res'=>$seler_edit,'res1'=>$seller_view_cat,'res_sub'=>$seller_view_sub_cat]);

}
public function seller_delete_product(request $request,$id)
{
    DB::table('product_tb')->where('id',$id)->delete();
    return redirect('view_product');


}
public function seller_update_pro_data(request $request,$id)
{
$request->validate([

    'qty'=>'required|regex:/^[0-9]+$/',
     'price'=>'required|regex:/^[0-9]+$/',
    
         ]);
    


    $sub_cat_id=$request->input('sub_category');
    //print_r($sub_cat_id);
   // exit();
        $cat_name=$request->input('category');
        $sub_cat_name=$request->input('sub_cat');
        $prod_name=$request->input('product_name');
        $qty=$request->input('qty');
    
        $price=$request->input('price');
        $photo=$request->file('photo');
        $seller_id=session()->get('id');
        if($photo)
        {      
              $filename=time().'.'.$photo->getClientOriginalExtension();
              $photo->move('images',$filename);

    $array=array('cat_id'=>$cat_name,'sub_cat_id'=>$sub_cat_id,'pro_name'=>$prod_name,'qty'=>$qty,'price'=>$price,'photo'=>$filename);
        
    // print_r($id);
    // exit();
}
        else
        {
    
    $array=array('cat_id'=>$cat_name,'sub_cat_id'=>$sub_cat_id,'pro_name'=>$prod_name,'qty'=>$qty,'price'=>$price);
        }

//echo $sub_cat_id;
   // print_r($array);
//exit();
    DB::table('product_tb')->where('id',$id)->update($array);
       return redirect('view_product');
    


}
public function buyer_view_product(request $request)
{
    $buyer_view_product=DB::table('product_tb')->join('category_tb','product_tb.cat_id','=','category_tb.id')->join('sub_category_tb','product_tb.sub_cat_id','=','sub_category_tb.id')->select('product_tb.*','category_tb.*','sub_category_tb.*','product_tb.id as pid')->get();

    //$buyer_view_product=DB::table('product_tb')->join('category_tb','product_tb.cat_id','=','category_tb.id')->join('sub_category_tb','category_tb.id','=','sub_category_tb.cat_id')->get();

   // $buyer=Db::table('product_tb')->get();
   $search_data=DB::table('category_tb')->get();

    return view('buyer\buyer_view_product',['res'=>$buyer_view_product,'res1'=>$search_data]);

}
// public function search_product(Request $request)
// {
//     $id=$request->input['category'];
//     $sub_cat_id=$request->input['sub_category'];
//     $search_product=DB::table('product_tb')->where('cat_id',4)->where('sub_cat_id',7)->get();
//     print_r($id);
//     exit();
//     return response()->json($search_product);
    

// }

public function check_search_product(Request $request)
{
    $id=$request->input('category');
    $sub_cat_id=$request->input('sub_category');
    $data=DB::table('product_tb')->where('cat_id',$id)->where('sub_cat_id',$sub_cat_id)->get();
    
    return response()->json($data);


}



public function buyer_view_product_details(request $request,$pid)
{
    $buyer_view_product=DB::table('product_tb')->join('category_tb','product_tb.cat_id','=','category_tb.id')->join('sub_category_tb','product_tb.sub_cat_id','=','sub_category_tb.id')->select('product_tb.*','category_tb.*','sub_category_tb.*','product_tb.id as pid')->where('product_tb.id',$pid)->first();
       //print_r($id);
    //exit();

    //$buy_pro_det=DB::table('product_tb')->where('id',$id)->first();
    return view('buyer\buyer_view_product_details',['res'=>$buyer_view_product]);
}


public function admin_view_product(request $request)

{
    $buyer_view_product=DB::table('product_tb')->join('category_tb','product_tb.cat_id','=','category_tb.id')->join('sub_category_tb','product_tb.sub_cat_id','=','sub_category_tb.id')->join('seller_tb','product_tb.seller_id','=','seller_tb.id')->select('product_tb.*','category_tb.*','sub_category_tb.*','seller_tb.*','product_tb.photo as image')->get();
    return view('admin\admin_view_product',['res'=>$buyer_view_product]);
}


public function add_to_cart(Request $request, $pid)
{
    //$buyerid=
    $buyerid=$request->session()->get('id');

if($buyerid)
{
    $qty=$request->input('qty');
    $array=array('buyer_id'=>$buyerid,'product_id'=>$pid,'qty'=>$qty);
    DB::table('cart_tb')->insert($array);
    return redirect('buyer_view_cart');
}
else{
    return back()->with('message','please login');
}
    //print_r($array);
   // exit();
}

public function buyer_view_cart(Request $request)
{
    $buyerid=$request->session()->get('id');

    $buyer_view_cart=DB::table('product_tb')->join('category_tb','product_tb.cat_id','=','category_tb.id')->join('cart_tb','product_tb.id','=','cart_tb.product_id')->join('sub_category_tb','product_tb.sub_cat_id','=','sub_category_tb.id')->select('product_tb.*','category_tb.*','sub_category_tb.*','cart_tb.qty as quantity','cart_tb.id as cid','product_tb.id as pid')->where('buyer_id',$buyerid)->get();

   // print_r($buyer_view_cart);
    //exit();
    return view('buyer\buyer_view_cart',['res'=>$buyer_view_cart]);

}

public function buyer_qty_update(Request $request ,$cid)
{
   $buyer_view_cart=DB::table('cart_tb')->where('id',$cid)->first();
        $qty=$buyer_view_cart->qty;
    $qty_updat=$request->input('qty_updat');

   if($qty_updat=="+")
   {
        $qty=$qty+1;
        $array=array('qty'=>$qty);
        DB::table('cart_tb')->where('id',$cid)->update($array);
    }
    else
    {
        $qty=$qty-1;
        $array=array('qty'=>$qty);
        DB::table('cart_tb')->where('id',$cid)->update($array);
     
    }
    // $buyer_update_price=DB::table('product_tb)')->where('id',$pid)->first();
    // $price=$buyer_update_price->price;
    // $price_update=$qty_updat*$price;
    return redirect('buyer_view_cart');

    
}

public function proceed_to_checkout(request $request)

{
    $buyerid=$request->session()->get('id');
    //print_r($buyerid);
    //exit();
        $buyer_view_cart=DB::table('product_tb')->join('category_tb','product_tb.cat_id','=','category_tb.id')->join('cart_tb','product_tb.id','=','cart_tb.product_id')->join('sub_category_tb','product_tb.sub_cat_id','=','sub_category_tb.id')->select('product_tb.*','category_tb.*','sub_category_tb.*','cart_tb.qty as quantity','cart_tb.id as cid')->where('buyer_id',$buyerid)->get();
    
       //print_r($buyer_view_cart);
        //exit();
        return view('buyer\buyer_proceed_to_checkout',['res'=>$buyer_view_cart]);
        //print_r($buyer_view_cart);
      // exit();
    //return view('buyer\buyer_proceed_to_checkout');
    
}

public function proceed_to_checkout_insert_data(Request $request)
{
    $buyerid=$request->session()->get('id');
    $request->validate([
    //         'fname'=>'required|regex:/^[a-z A-Z]+/+$/',
    //         'lname'=>'required|regex:/^[a-z A-Z]+$/',
    //         'add'=>'required|regex:/^[a-z A-Z 0-9]+$/',
            'email'=>'required|email',
            'phone'=>'required|regex:/^[0-9]{10}+$/',
    //         'country'=>'required|regex:/^[a-z A-Z 0-9]+$/',


    // 'city'=>'required|regex:/^[A-Z a-z]+$/',
    
    // 'price'=>'required|regex:/^[0-9]+$/',
    
        ]);
    
    


    $fname=$request->input('fname');
    $lname=$request->input('lname');
    $add=$request->input('add');
    $email=$request->input('email');
    $ph=$request->input('phone');
    $country=$request->input('country');
    $city=$request->input('city');

    //$array=DB::table('product_tb')->join('category_tb','product_tb.cat_id','=','category_tb.id')->join('cart_tb','product_tb.id','=','cart_tb.product_id')->join('sub_category_tb','product_tb.sub_cat_id','=','sub_category_tb.id')->select('product_tb.*','category_tb.*','sub_category_tb.*','cart_tb.qty as quantity','cart_tb.id as cid')->where('buyer_id',$buyerid)->get();
   // print_r($array);
   $hidden=$request->input('hidden');
   $status="Pending";

   $query=array('f_name'=>$fname,'l_name'=>$lname,'address'=>$add,'email'=>$email,'phone'=>$ph,'country'=>$country,'city'=>$city,'total'=>$hidden,'status'=>$status,'buyer_id'=>$buyerid);
   $id=DB::table('orders_tb')->insertGetId($query);


    $array=DB::table('product_tb')->join('cart_tb','product_tb.id','=','cart_tb.product_id')->select('product_tb.*','cart_tb.qty as quantity')->where('cart_tb.buyer_id',$buyerid)->get();
    //print_r($array);
   // exit();
    foreach($array as $ans)
    
    {
        $hidden=$request->input('hidden');
        //print_r($hidden);
        //exit();

        $image=$ans->photo;
       $p_name=$ans->pro_name;
        //$price=$ans->price;
        //print_r($price);
        //exit();
        
        $quantity=$ans->quantity;
        $status="Pending";
        $prod_id=$ans->id;
        $query1=array('order_id'=>$id,'product_id'=>$prod_id,'qty'=>$quantity,'total'=>$hidden,'status'=>$status);
$ans=DB::table('product_order_tb')->insert($query1);
// print_r($prod_id);
// exit();

    }
    
    DB::table('cart_tb')->where('buyer_id',$buyerid)->delete();
    return redirect('buyer_view_cart');
     
}
public function remove_cart_data(Request $request,$cid)

{
   // $bid=$request->session()->get('id');
    DB::table('cart_tb')->where('id',$cid)->delete();
    return redirect('buyer_view_cart');
}

public function buyer_view_order(Request $request)
{    $bid=$request->session()->get('id');

   $bvo= DB::table('orders_tb')->where('buyer_id',$bid)->get();
   return view('buyer/buyer_view_order',['res'=>$bvo]);
}

public function product_details(Request $request, $id)
{ 
    $bid=$request->session()->get('id');
    $details=DB::table('orders_tb')->where('id',$id)->first();

    //$details1=DB::table('product_order_tb')->where('order_id',$id)->get();
    // foreach($details1 as $res1)
    // {
    //     $prod_id=$res1->product_id;
    //     $qty=$res1->qty;
    //     $product_details=DB::table('product_tb')->where('id',$prod_id)->first();


    // }
    //$details=DB::table('product_order_tb')->join('orders_tb','product_order_tb.order_id','=','orders_tb.id')->where('orders_tb.buyer_id',$bid)->get();

    //print_r($details);
    //exit();
    $ans=DB::table('product_order_tb')->join('product_tb','product_tb.id','=','product_order_tb.product_id')->where('product_order_tb.order_id',$id)->get();

      
     $arr=array('status'=>"Success"); 


    DB::table('orders_tb')->where('id',$id)->update($arr);

    return view('buyer/product_details',['res'=>$details,'res2'=>$ans]);
}
public function view_orders(Request $request)
{
   $seller_id=$request->session()->get('id');
   $query=DB::table('product_tb')->join('seller_tb','product_tb.seller_id','=','seller_tb.id')->join('product_order_tb','product_order_tb.product_id','=','product_tb.id')->select('product_tb.*','product_order_tb.*','seller_tb.*','product_tb.photo as image','product_order_tb.status as pstatus','product_order_tb.id as pid')->where('seller_tb.id',$seller_id)->get();
   return view('seller/seller_view_orders',['res'=>$query]);
}
// public function seller_view_product_details(Request $request,$order_id)
// {//print_r($order_id);
//    // exit();
// $query=DB::table('orders_tb')->join('buyer_tb','buyer_tb.id','=','orders_tb.buyer_id')->join('product_order_tb','product_order_tb.id','=','orders_tb.id')->select('orders_tb.*','buyer_tb.*','product_order_tb.*','orders_tb.id as oid')->where('orders_tb.id',$order_id)->first();
// return view('seller/seller_view_orders_details',['res'=>$query]);

//   //print_r($query);
//   //exit();

// }
public function seller_view_product_details(Request $request,$order_id)
{//print_r($order_id);
   // exit();

  // $query=DB::table('product_tb')->join('seller_tb','product_tb.seller_id','=','seller_tb.id')->join('product_order_tb','product_order_tb.product_id','=','product_tb.id')->select('product_tb.*','product_order_tb.*','seller_tb.*','product_tb.photo as image','product_order_tb.status as pstatus','product_order_tb.id as pid')->where('product_order_tb.id',$order_id)->first();
    $query=DB::table('orders_tb')->join('buyer_tb','buyer_tb.id','=','orders_tb.buyer_id')->join('product_order_tb','product_order_tb.id','=','orders_tb.id')->join('product_tb','product_order_tb.product_id','=','product_tb.id')->select('orders_tb.*','buyer_tb.*','product_order_tb.*','product_tb.*','orders_tb.id as oid','product_order_tb.qty as qty1','product_order_tb.total as total1','buyer_tb.photo as image1','product_tb.photo as image')->where('orders_tb.id',$order_id)->first();

   
return view('seller/seller_view_orders_details',['res'=>$query]);

  //print_r($query);
  //exit();

}

public function seller_view_product_app_rej(Request $request,$oid)
{
    $button=$request->input('app_rej');
    //print_r($oid);
    //exit();
    if($button=="Approve") 
    {
        $array=array('status'=>"Approved");
    }
        else{
            $array=array('status'=>"Rejected");

        }
        $status=DB::table('product_order_tb')->where('id',$oid)->update($array);
       // print_r($status);
       // exit();
        return redirect('view_orders');
    }
    public function stripe(Request $request)
    {
        $total=$request->input('total');
        return view('stripe',['total'=>$total]);
    }
      
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $total=$request->input('total');
        Stripe\Charge::create ([
                "amount" => $total * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
              return redirect('buyer_view_order');
       // return back()->with('success', 'Payment successful!');
        //request->session()->flash('success', 'Payment successful!');

            //return redirect()->route('payment.success');
    }

Public function sel_change_pwd()
{
    return view('seller\change_pwd');
}
Public function sel_change_pwdfunction(Request $request)
{      
    //   $request->validate([
    //         'opwd'=>'required|regex:/^[a-z A-Z 0-9]+$/',
    //         'npwd'=>'required|regex:/^[a-z A-Z 0-9]+$/',
    //         'cpwd'=>'required|regex:/^[a-z A-Z 0-9]+$/',

    //     ]);

    $id=$request->session()->get('id');
    $opwd=$request->input('opwd');
    $npwd=$request->input('npwd');
    $cpwd=$request->input('cpwd');

    $query=DB::table('seller_tb')->where('pwd' ,$opwd)->where('id',$id)->first();
if($query)
{if($npwd==$cpwd)
    {
$arr=array('pwd'=>$cpwd);
DB::table('seller_tb')->where('id',$id)->update($arr);
//return back()->with('message','password updated');
return redirect('sel_change_pwd')->with('message','password updated');

    }
}
else{
    return view('seller\change_pwd');
}
}
Public function adm_change_pwd()
{
    return view('admin\ad_chnage_pwd');
}
Public function adm_change_pwdfunction(Request $request)
{      $request->validate([
    'opwd'=>'required|regex:/^[a-z A-Z 0-9]+$/',
    'npwd'=>'required|regex:/^[a-z A-Z 0-9]+$/',
    'cpwd'=>'required|regex:/^[a-z A-Z 0-9]+$/',

]);


    $id=$request->session()->get('id');
    $opwd=$request->input('opwd');
    $npwd=$request->input('npwd');
    $cpwd=$request->input('cpwd');

    $query=DB::table('admin_tb')->where('pwd' ,$opwd)->where('id',$id)->first();
if($query)
{if($npwd==$cpwd)
    {
$arr=array('pwd'=>$cpwd);
DB::table('admin_tb')->where('id',$id)->update($arr);
return redirect('adm_change_pwd')->with('message','password updated');
    }
}
else{
    return view('admin\ad_chnage_pwd');
}

}
Public function buy_change_pwd()
{
    return view('buyer\b_change_pwd');
}
Public function buy_change_pwdfunction(Request $request)
{

    $request->validate([
        'opwd'=>'required|regex:/^[a-z A-Z 0-9]+$/',
        'npwd'=>'required|regex:/^[a-z A-Z 0-9]+$/',
        'cpwd'=>'required|regex:/^[a-z A-Z 0-9]+$/',

    ]);


    $id=$request->session()->get('id');
    $opwd=$request->input('opwd');
    $npwd=$request->input('npwd');
    $cpwd=$request->input('cpwd');

    $query=DB::table('buyer_tb')->where('pwd' ,$opwd)->where('id',$id)->first();
if($query)
{if($npwd==$cpwd)
    {
$arr=array('pwd'=>$cpwd);
DB::table('buyer_tb')->where('id',$id)->update($arr);
return redirect('buy_change_pwd')->with('message','password updated');

    }
}
else{
    return view('buyer\b_change_pwd');
}

}
Public function forgot_pwd()
{
    return view('forgot_pwd');
}

Public function forgot_pwd_function(Request $request)
{
    $uname=$request->input('uname');

    $query=DB::table('buyer_tb')->where('uname',$uname)->first();
    $query1=DB::table('seller_tb')->where('uname',$uname)->first();
    $query2=DB::table('admin_tb')->where('uname',$uname)->first();


    if($query)

    {        
           $qid=$query->id;


        
        $request->session()->put('name',$uname);
        $request->session()->put('id',$qid);
        return view('forgot_pwd2');
    }
    if($query1)
    {
        $qid=$query1->id;
        $request->session()->put('name',$uname);
        $request->session()->put('id',$qid);
        return view('forgot_pwd2');


    }
    if($query2)
    {
        $qid=$query2->id;
        $request->session()->put('name',$uname);
        $request->session()->put('id',$qid);
        return view('forgot_pwd2');


    }
    else{
        return view('forgot_pwd');
    }



}
Public function forgot_pwd2_function(Request $request)
{
    $name=session()->get('name');
    $email=$request->input('email');
    $ph=$request->input('phone');
    $query=DB::table('buyer_tb')->where('email',$email)->where('phone',$ph)->where('uname',$name)->first();
    $query1=DB::table('seller_tb')->where('email',$email)->where('phone',$ph)->where('uname',$name)->first();
    $query2=DB::table('admin_tb')->where('email',$email)->where('phone',$ph)->where('uname',$name)->first();

    // print_r($query);
    // exit();
    //$id=DB::table('buyer_tb')->insertGetId($query);

    if($query||$query1||$query2)
    {
    
        return view('forgot_pwd3');
    }
    else
    {
        return view('forgot_pwd2');
    }

}

Public function forgot_pwd3_function(Request $request)
{


    
    $id=$request->session()->get('id');

    $npwd=$request->input('npwd');
    $cpwd=$request->input('cpwd');


    if($npwd==$cpwd)
    { $data_update=array('pwd'=>$cpwd);
        
        $query1=DB::table('buyer_tb')->where('id',$id)->update($data_update);
       $query2=DB::table('seller_tb')->where('id',$id)->update($data_update);
        $query3=DB::table('admin_tb')->where('id',$id)->update($data_update);

        return view('buyer/home_buyer');
    }
    else
    {
        return view('forgot_pwd3');
    }}
public function tracking_det(Request $request,$oid)
 {  
    //  print_r($oid);
//     exit();

return view('seller\tracking_det',['id'=>$oid]);
}   
public function tracking_det_insert(Request $request,$oid)
{

    $det=$request->input('details');
    $date=$request->input('date');
    $array=array('order_id'=>$oid,'details'=>$det,'date'=>$date);
    db::table('tracking_details')->insert($array);
}

public function logout(Request $request) {
    $request->session()->forget('name');
    $request->session()->forget('id');
    $request->session()->forget('email');
    //$request->session()->forget('photo');


    return redirect('/login');
  }

  public function admin_view_orders(Request $request)

  {
      $buyer_view_orders=DB::table('orders_tb')->join('product_order_tb','orders_tb.id','=','product_order_tb.order_id')->join('product_tb','product_order_tb.product_id','=','product_tb.id')->select('product_tb.*','orders_tb.*','product_order_tb.*','product_tb.id as pid')->get();
      return view('admin\admin_view_orders',['res'=>$buyer_view_orders]);
  }
  
  public function admin_view_order_details($id)
  {
      $admin_view_order_details=DB::table('orders_tb')->join('product_order_tb','orders_tb.id','=','product_order_tb.order_id')->join('product_tb','product_order_tb.product_id','=','product_tb.id')->select('product_tb.*','orders_tb.*','product_order_tb.*','product_tb.id as pid')->first();
      return view('admin\admin_view_order_details',['res'=>$admin_view_order_details]);
      
  }
  public function contactus()
  {
return view('buyer\contact-us');
  }

  public function  aboutus()
  {
return view('buyer\aboutus');
  }

  
}