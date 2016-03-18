<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class ProductController extends Controller {
   
    function index ()
    {
        return view('welcome');
    }
    
    function save (Request $request)
    {
        
          if ($request->isMethod('post')) {    
        
                $params = $request->all();
                
                $dir = 'data.json';
                $file = file_get_contents('data.json');
                $data = json_decode($file);
                unset($file);//prevent memory leaks for large json.
                //insert data here
                
                if ( !file_exists($dir) ) {
                        $oldmask = umask(0);  // helpful when used in linux server  
                         mkdir ($dir, 0777);
                }
                
                
                $product['id'] = uniqid();
                $product['name']        = $params['pname'];
                $product['qty']         = $params['qty'];
                $product['item']        = $params['item'];
                $product['date_time']   = date('Y-m-d h:i:s');
                
                $data[] = $product;
                $products = array ();
                $products = json_decode(json_encode($data));
               //save the file
                file_put_contents('data.json',json_encode($data));
                
               return view('product',  array('data' => $products));
            } else {
                
                $file = file_get_contents('data.json');
                $data = json_decode($file);
                unset($file);//prevent memory leaks for large json.
              if ($data==""){
                  return "there is no data";
              }else
              {
                  return view('product',  array('data' => $data));
              }
                
                
            }
        }   
       
        
    
}