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
            @php
	            $date= date("d/m/y");
	            $totalbl=DB::Table('orders')->where('order_date',$date)->sum('total');
	            $totalpay=DB::Table('orders')->where('order_date',$date)->sum('pay');
	            $totalproduct=DB::Table('orders')->where('order_date',$date)->sum('total_products');
	            $totalsub=DB::Table('orders')->where('order_date',$date)->sum('sub_total');
	            $totalvat=DB::Table('orders')->where('order_date',$date)->sum('vat');
	            $totaldue=DB::Table('orders')->where('order_date',$date)->sum('due');
            @endphp
            <!-- Start Widget -->
            <div class="row">
	          <div class="col-md-12">
	              <div class="panel panel-default">
	                  <div class="panel-heading">
	                      <h3 class="panel-title">Today History 
	                      </h3>
	                  </div>
	                  <div class="panel-body">
	                      <div class="row">
	                          <div class="col-md-12 col-sm-12 col-xs-12">
	                             <table id="datatable" class="table table-striped table-bordered">
	                                  <thead>
	                                      <tr>
	                                      	  <th>Customer ID</th>
	                                          <th>Order Date</th>
	                                          <th>Order Status</th>
	                                          <th>Total Products</th>
	                                          <th>Sub Total</th>
	                                          <th>Vat</th>
	                                          <th>Total</th>	                                          
	                                          <th>Payment Status</th>
	                                          <th>Pay</th>
	                                          <th>Due</th>
	                                          <th>Created At</th>
	                                      </tr>
	                                  </thead>
	                                  <tbody>
	                                  	@foreach($today as $row)
	                                      <tr>
	                                      	  <td>{{ $row->customer_id }}</td>
	                                          <td>{{ $row->order_date }}</td>
	                                          <td>{{ $row->order_status }}</td>
	                                          <td>{{ $row->total_products }}</td>
	                                          <td>{{ $row->sub_total }}</td>
	                                          <td>{{ $row->vat }}</td>
	                                          <td>{{ $row->total }}</td>	                                          
	                                          <td>{{ $row->payment_status }}</td>
	                                          <td>{{ $row->pay }}</td>
	                                          <td>{{ $row->due }}</td>
	                                          <td>{{ $row->created_at }}</td>
	                                         <td>
	                                      </tr>
	                                    @endforeach
	                                      <tr>
	                                      	  <td>#</td>
	                                          <td>#</td>
	                                          <td>#</td>
	                                          <td>P:{{ $totalproduct }}</td>
	                                          <td>S:{{ $totalsub }}</td>
	                                          <td>V:{{ $totalvat }}</td>
	                                          <td>T:{{ $totalbl }}Tk</td>	                                          
	                                          <td>#</td>
	                                          <td>{{ $totalpay }}</td>
	                                          <td>{{ $totaldue }}</td>
	                                          <td>#</td>
	                                         <td>
	                                      </tr>	                                    
	                                  </tbody>
	                              </table>
	                          </div>
	                      </div>
	                  </div>
	              </div>
	          </div>
            </div>
        </div> <!-- container -->            
    </div> <!-- content -->
</div>
@endsection