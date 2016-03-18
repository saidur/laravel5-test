@extends('layouts.master')
@section('title', 'Welcome to laravel test')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-xs-12 col-md-12">
            <section class="cnt-strt">
                <header></header>

                <div class="comp-cnt-box">
                    <div class="table-responsive">
                        <table id="tbl" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <input type="checkbox"></th>
                                    <th>Product name</th>
                                    <th>Stock item </th>
                                    <th>Product per price </th>
                                    <th>Date time  </th>
                                    <th>Total Price  </th>
                                    <th>Action</th>
                                 </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                    $ttvp = 0; 
                                
                                ?>
                                @foreach($data as $product)
                                <?php 
                                        
                                    $tvn = $product->qty * $product->item; 
                                    $ttvp = $ttvp+$tvn;     
                                
                                ?>

                                <tr>
                                    <th class="text-center"></th>
                                    <td>{{$product->name }}</td>
                                    <td>{{$product->qty }}</td>
                                    <td>{{$product->item}}</td>
                                    
                                    <td>{{ $tvn}}</td>
                                    
                                    <td>{{ $product->date_time}}</td>

                                    <td>
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">

                                            <tr>
                                                <td>
                                                    <a class="n-link" href="{{ URL::to('/edit/'.$product->id) }}">Edit</a>
                                                </td>
                                                <td><span></span></td>

                                            </tr>
                                        </table>
                                    </td>

                                </tr>
                                @endforeach
                                
                                <tr>
                                    <th class="text-right"></th>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    
                                    <td>Total</td>
                                    <td>{{$ttvp}}/=</td>
                                    <td>&nbsp;</td>
                                    
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>        
            </section>
        </div>
    </div></div>