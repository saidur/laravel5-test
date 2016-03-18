@extends('layouts.master')

@section('title', 'Welcome to laravel test')
@section('content')



<div class="container">

    <div class="row">
        <div class="col-xs-12 col-md-12">
            <h1>
                Product  </h1></div>

    </div>

    <div class="row">
        <div class="col-md-12">
                <!--  <img src="images/tacentre-2.jpg" alt=""> -->
            <form role="form" data-toggle="validator"  method="post" class="" id="target" >
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="pname" class="form-control" id="pname" placeholder="Product Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Quantity in Stock</label>
                    <input type="number" name="qty" class="form-control" id="qty" placeholder="Quantity in stock" required>
                </div>

                <div class="form-group">
                    <label for="peritem">Price per item</label>
                    <input type="number" name="item" class="form-control" id="item" placeholder="Price per item" required>
                </div>


                <input type="submit" value="Add" />
            </form>

            <hr>

        </div>     
    </div>
</div>

<section class="cnt-strt" id="show_products">
    
    
</section>






<script type="text/javascript">

    $(function() {
    
         var formURL  = '/add';
           
        $.ajax(
                    {
                        url: formURL,
                        type: "GET",
                        data: '',
                        success: function (data, textStatus, jqXHR)
                        {
                           // console.log (data);
                            //alert (data);
                            $('#show_products').html(data);
                            //data: return data from server
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            //if fails     
                        }
                    });
                    
    });                


    $('form').on('submit', function (e) {
          
        e.preventDefault();
        
            var postData = $(this).serializeArray();
            
            console.log (postData);
            var formURL  = '/add';
            
            $.ajax(
                    {
                        url: formURL,
                        type: "POST",
                        data: postData,
                        success: function (data, textStatus, jqXHR)
                        {
                           // console.log (data);
                            //alert (data);
                            $('#show_products').html(data);
                            //data: return data from server
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            //if fails     
                        }
                    });
        
    });

</script>

@endsection