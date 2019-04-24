@extends('layouts.app')
@section('content')
<div class="content-page">
  <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Welcome !</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Echobvel</a></li>
                        <li class="active">IT</li>
                    </ol>
                </div>
            </div>

            <!-- Start Widget -->
            <div class="row">
	           <!-- Basic example -->
	           <div class="col-md-2"></div>
                <div class="col-md-8 ">
                    <div class="panel panel-default">
                      <div class="panel-heading"><h3 class="panel-title">View Product</h3></div>  
                        <div class="panel-body">
                           <img src="{{ URL::to($prod->product_image) }}">
                                <div class="form-group">
                                    <label for="exampleInput">Product Name</label>
                                    <p>{{ $prod->product_name }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Produt Code</label>
                                   <p>{{ $prod->product_code }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Category</label>
                                    <p>{{ $prod->cat_name }}</p>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInput">Supplier</label>
                                    <p>{{ $prod->name }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Godaun</label>
                                   <p>{{ $prod->product_garage }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Product Route</label>
                                   <p>{{ $prod->product_route }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Buying Date</label>
                                    <p>{{ $prod->buy_date }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Expire Date </label>
                                   <p>{{ $prod->expire_date }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Buying Price</label>
                                    <p>{{ $prod->buying_price }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Selling Price</label>
                                    <p>{{ $prod->selling_price }}</p>
                                </div>
 
                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col-->

            </div>
        </div> <!-- container -->
                   
    </div> <!-- content -->
</div>


@endsection