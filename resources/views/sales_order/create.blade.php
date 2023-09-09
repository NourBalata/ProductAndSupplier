
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | DataTables</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{asset('vendors/plugins/fontawesome-free/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('vendors/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('vendors/dist/css/adminlte.min.css?v=3.2.0')}}">
<script nonce="8457aca6-4b36-413e-b00c-2935d9881a84">(function(w,d){!function(U,V,W,X){U[W]=U[W]||{};U[W].executed=[];U.zaraz={deferred:[],listeners:[]};U.zaraz.q=[];U.zaraz._f=function(Y){return async function(){var Z=Array.prototype.slice.call(arguments);U.zaraz.q.push({m:Y,a:Z})}};for(const $ of["track","set","debug"])U.zaraz[$]=U.zaraz._f($);U.zaraz.init=()=>{var ba=V.getElementsByTagName(X)[0],bb=V.createElement(X),bc=V.getElementsByTagName("title")[0];bc&&(U[W].t=V.getElementsByTagName("title")[0].text);U[W].x=Math.random();U[W].w=U.screen.width;U[W].h=U.screen.height;U[W].j=U.innerHeight;U[W].e=U.innerWidth;U[W].l=U.location.href;U[W].r=V.referrer;U[W].k=U.screen.colorDepth;U[W].n=V.characterSet;U[W].o=(new Date).getTimezoneOffset();if(U.dataLayer)for(const bg of Object.entries(Object.entries(dataLayer).reduce(((bh,bi)=>({...bh[1],...bi[1]})),{})))zaraz.set(bg[0],bg[1],{scope:"page"});U[W].q=[];for(;U.zaraz.q.length;){const bj=U.zaraz.q.shift();U[W].q.push(bj)}bb.defer=!0;for(const bk of[localStorage,sessionStorage])Object.keys(bk||{}).filter((bm=>bm.startsWith("_zaraz_"))).forEach((bl=>{try{U[W]["z_"+bl.slice(7)]=JSON.parse(bk.getItem(bl))}catch{U[W]["z_"+bl.slice(7)]=bk.getItem(bl)}}));bb.referrerPolicy="origin";bb.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(U[W])));ba.parentNode.insertBefore(bb,ba)};["complete","interactive"].includes(V.readyState)?zaraz.init():U.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="../../index3.html" class="nav-link">Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="#" class="nav-link">Contact</a>
</li>
</ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item">
<a class="nav-link" data-widget="navbar-search" href="#" role="button">
<i class="fas fa-search"></i>
</a>
<div class="navbar-search-block">
<form class="form-inline">
<div class="input-group input-group-sm">
<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-navbar" type="submit">
<i class="fas fa-search"></i>
</button>
<button class="btn btn-navbar" type="button" data-widget="navbar-search">
<i class="fas fa-times"></i>
</button>
</div>
</div>
</form>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-comments"></i>
<span class="badge badge-danger navbar-badge">3</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a href="#" class="dropdown-item">

<div class="media">
<img src="{{asset('vendors/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
<div class="media-body">
<h3 class="dropdown-item-title">
Brad Diesel
<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">Call me whenever you can...</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="{{asset('vendors/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
John Pierce
<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">I got your message bro</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="{{asset('vendors/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
Nora Silvester
<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">The subject goes here</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-bell"></i>
<span class="badge badge-warning navbar-badge">15</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<span class="dropdown-item dropdown-header">15 Notifications</span>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-envelope mr-2"></i> 4 new messages
<span class="float-right text-muted text-sm">3 mins</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-users mr-2"></i> 8 friend requests
<span class="float-right text-muted text-sm">12 hours</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-file mr-2"></i> 3 new reports
<span class="float-right text-muted text-sm">2 days</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>
</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="../../index3.html" class="brand-link">
<img src="{{asset('vendors/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{asset('vendors/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">Alexander Pierce</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Dashboard
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{route('products.store')}}" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>Products</p>
</a>
</li>
<li class="nav-item">
<a href="{{route('suppliers.store')}}" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Suppliers v2</p>
</a>
</li>
<li class="nav-item">
<a href="{{route('sales_orders.store')}}" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Sales Orders</p>
</a>
</li>
</ul>
</li>




</ul>
</li>


</ul>
</li>



<li class="nav-item">

<ul class="nav nav-treeview">
  <li class="nav-item">
<a href="{{route('/index2')}}" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Suppliers</p>
</a>
</li>
<li class="nav-item">
<a href="{{route('SalesOrder')}}" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>SalesOrder</p>
</a>
</li>

<li class="nav-item">
<a href="{{route('products')}}" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Products</p>
</a>
</li>
</ul>
</li>

</nav>
</aside>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>DataTables</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">DataTables</li>
</ol>
</div>
</div>
</div>
</section>
  
<div class="content container-fluid">

<div class="page-header invoices-page-header">
    <div class="row align-items-center">
        <div class="col">
            <ul class="breadcrumb invoices-breadcrumb">
                <li class="breadcrumb-item invoices-breadcrumb-item">
                    <a href="{{route('sales_orders.index')}}">
                        <i class="fa fa-chevron-left"></i> Back to Sales Order List
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-auto">

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card invoices-add-card">
            <div class="card-body">
                <form action="{{route('sales_orders.store')}}" id="form" class="invoices-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="invoices-main-form">
                        <div class="row">
                            <h4 class="invoice-details-title">Supplier details</h4>
                            <br>
                            <div class="col-3 ">
                                <div class="form-group">
                                    <label>Supplier Name</label>
                                    <select style="width: 250px"  class="select2" required class="form-control"  name="supplier_id" id="supplier_id">
                                        <option value="0">---select--</option>
                                        @foreach($suppliers as $supplier)
                                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('supplier_id')
                                <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                              </span>
                                @enderror
                            </div>

                            <div class="col-3 ">
                                <div class="form-group">
                                    <label>Status Supplier</label>

                                    <input class="form-control" value="{{old('status')}}"  required readonly type="number" name="status" id="status" >

                                </div>

                            </div>
                          
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="invoice-add-table">
                                <h4>Products Details</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-nowrap  mb-0 no-footer add-table-items" id="service_details">
                                        <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody >
                                        <tr  class="add-row" id="0">
                                            <td class="col-2" >

                                                    <select style="width:200px" class="select2" type="text" id="product0" name="product[0]" class="service form-control">
                                                        <option value="">----select----</option>
                                                        @foreach($products as $product)
                                                        <option value="{{$product->id}}">{{$product->title}}</option>
                                                        @endforeach
                                                    </select>
                                            </td>
                                           
                                         
                                            <td class="col-1">
                                                <input type="text" required id="quantity0" onkeypress='validate(event)' onchange="mychangeitem(this)" name="quantity[0]" value="0" class="quantity form-control">
                                            </td>
                                            <td class="col-2">
                                                <input type="text" required id="price0" onkeypress='validate(event)'   onchange="mychangeitem(this)"  name="price[0]" value="0" class="price form-control">
                                            </td>
                                            <td class="col-2">
                                                <input type="text" required  readonly id="amount0" name="amount[0]" value="0"  class="amount form-control">
                                            </td>
                                            
                                           
                                            <td class="add-remove text-end">
                                                <a href="javascript:void(0);" class="add-btns me-2"><i
                                                        class="fas fa-plus-circle"></i></a>


                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-7 col-md-6">
        
                                    <div class="invoice-faq">
                                        <div class="panel-group" id="accordion" role="tablist"
                                             aria-multiselectable="true">

                                            <div class="faq-tab">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <p class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse"
                                                               data-bs-parent="#accordion" href="#collapseThree"
                                                               aria-expanded="false" aria-controls="collapseThree">
                                                                <i class="fas fa-plus-circle me-1"></i> Add Notes
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse"
                                                         role="tabpanel" aria-labelledby="headingThree"
                                                         data-bs-parent="#accordion">
                                                        <div class="panel-body">
                                                            <textarea class="form-control" name="note" id="note">{{old('note')}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-lg-12 col-md-6">
                                        <span></span>
                                        <div class=" file-loading col-6">
                                      
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="invoice-total-card">
                                        <h4 class="invoice-total-title">Summary</h4>
                                        <div class="invoice-total-box">
                                            <div class="invoice-total-inner">
                                                <p>Quantity <span id="quantity_all">0</span></p>
                                                <p>Total <span id="total_all">0</span></p>
                                                <input type="hidden" name="total_all" id="total_all_input">
                                              
                                              


                                            </div>
                                            <div class="invoice-total-footer">
                                                <h4>Total Amount <span id="total_amount_all">0</span></h4>
                                                <input type="hidden" name="total_amount_all" id="total_amount_all_input">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="upload-sign">

                                        <div class="form-group float-end mb-0">
                                            <button class="btn btn-primary" id="submit" type="submit">Save Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="{{asset('dashboard/assets/js/custom/sales_order.js')}}"></script>
<script src="{{asset('vendors/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('vendors/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('vendors/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('vendors/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script src="{{asset('vendors/dist/js/adminlte.min.js?v=3.2.0')}}"></script>

<script src="{{asset('vendors/dist/js/demo.js')}}"></script>

<script src="{{asset('dashboard/assets/js/custom/sales_order.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

<script src="{{asset('dashboard/assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('dashboard/assets/js/feather.min.js')}}"></script>

<script src="{{asset('dashboard/assets/js/jquery.slimscroll.js')}}"></script>

<script src="{{asset('dashboard/assets/js/select2.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('dashboard/assets/js/jquery.waypoints.js')}}"></script>
<script src="{{asset('dashboard/assets/js/jquery.counterup.min.js')}}"></script>

<script src="{{asset('dashboard/assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/apexchart/chart-data.js')}}"></script>


<script src="{{asset('dashboard/assets/js/app.js')}}"></script>



<script>
        $( document ).ready(function() {
            $('input').attr('autocomplete','off');
        });
        // global app configuration object
        var config = {
            routes: {
                supplier: "{{ URL::to('supplier_data') }}/",
                product: "{{ URL::to('product_data') }}/",
            }
        };
    </script>
    <script>
        
    $("#supplier_id").change(function() {
                var supplier_id = $(this).val();
                var url =$('#supplier_id').val();
                console.log(url);

                if (supplier_id !=0){
                    $.ajax({  //create an ajax request to display.php
                        type: "GET",
                        dataType: "json",
                        url:  config.routes.supplier + supplier_id,
                        success: function (data) {
    //   if(data[0].status==1){
       
    //     $("#status").val('Active');
    //   }
    //   else{
    //     $("#status").val('DisActive'); 
    //   }
                            //patient details
                      if( $("#status").val(data[0].status))  
                         {
                            $("#status").val(data[0].status)
                         }
                         else{
  $("#status").val(data[0].status)
                         }
                       


                        }
                    });
                }else
                {
                    $("#name").val('');
         

                }
            });



</script>

<script>
        $(document).ready(function() {

            $(document).on("click", ".add-btns", function () {

                var trCount = $('#service_details').find('tr.add-row:last').length;
                var numberIncr = trCount > 0 ? parseInt($('#service_details').find('tr.add-row:last').attr('id')) + 1 : 0;

                var experiencecontent = '<tr class="add-row" id="' + numberIncr + '">' +
                    '<td class="col-2">' +
                    '<select  type="text" id="service'+numberIncr+'" name="service['+numberIncr+']" required class="service form-control">'+
                        '<option value="">----select----</option>'+
                        @foreach($products as $product)
                        '<option value="{{$product->id}}">{{$product->title}}</option>'+
                        @endforeach
                    '</select>'+
                '</td>' +
                 
                  
                    '<td class="col-1">' +
                    '<input type="text"  name="quantity['+numberIncr+']" required  onkeypress="validate(event)" onchange="mychangeitem(this)" id="quantity'+numberIncr+'" value="0"  class="quantity form-control">' +
                    '</td>' +
                    '<td class="col-2">' +
                    '<input type="text" name="price['+numberIncr+']" required onkeypress="validate(event)" onchange="mychangeitem(this)" id="price'+numberIncr+'" value="0"   class="price form-control">' +
                    '</td>' +
                    '<td class="col-2">' +
                    '<input type="text" readonly name="amount['+numberIncr+']" required id="amount'+numberIncr+'" value="0"   class="amount form-control">' +
                    '</td>' +
                   
                 
                    '<td class="add-remove text-end">' +
                    ' <a href="javascript:void(0);" class="add-btns me-2"><i class="fas fa-plus-circle"></i></a> ' +
                    '<a href="javascript:void(0);"  id="'+numberIncr+'" style="color: red" class=" delegated-btn"><i class="fa fa-trash-alt"></i></a>' +
                    '</td>' +
                    '</tr>';
                    $(".add-table-items").append(experiencecontent);
                $("#service"+numberIncr).change(function() {
                    // var service_id = $(this).val();
                    var service_id =$('#service'+numberIncr).val();
                    if (service_id !=0){
                        $.ajax({  //create an ajax request to display.php
                            type: "GET",
                            dataType: "json",
                            url:  config.routes.service + service_id,
                            success: function (data) {
                                //services details
                                $("#category"+numberIncr).val(data[1]);
                                $("#price"+numberIncr).val(data[0].price);


                                var amount = parseFloat(document.getElementById("amount" + numberIncr).value);
                               var quantity = parseFloat(document.getElementById("quantity" + numberIncr).value);

                                // $("#quantity"+numberIncr).val(0);
                                // $("#amount"+numberIncr).val(0);
                                // $("#discount"+numberIncr).val(0);
                                // $("#amount_discount"+numberIncr).val(0);
                                // count_item = count_item - 1
                                // $('#item_count_all').text(count_item);
                                // $('#count_item_all_invoice').val(count_item);
                                var quantity_all = document.getElementById("quantity_all").textContent;
                                document.getElementById("quantity_all").textContent = parseInt(Math.abs(quantity_all - quantity));
                                document.getElementById("quantity_all_input").textContent = parseInt(Math.abs(quantity_all - quantity));


                                var total_all = document.getElementById("total_all").textContent;
                                document.getElementById("total_all").textContent = parseFloat(Math.abs(total_all - amount)).toFixed(2);
                                document.getElementById("total_all_input").textContent = parseFloat(Math.abs(total_all - amount)).toFixed(2);


                               

                                var total_amount_all = document.getElementById("total_amount_all").textContent;
                                document.getElementById("total_amount_all").textContent = parseFloat(Math.abs(total_amount_all - amount_discount)).toFixed(2);
                                document.getElementById("total_amount_all_input").textContent = parseFloat(Math.abs(total_amount_all - amount_discount)).toFixed(2);


                            }
                        });
                    }else
                    {
                       
                        $("#price"+numberIncr).val(0);
                        var amount = parseFloat(document.getElementById("amount" + numberIncr).value);
                     
                        var quantity = parseInt(document.getElementById("quantity" + numberIncr).value);

                        $("#quantity"+numberIncr).val(0);
                        $("#amount"+numberIncr).val(0);
                
                        // count_item = count_item - 1
                        // $('#item_count_all').text(count_item);
                        // $('#count_item_all_invoice').val(count_item);
                        var quantity_all = document.getElementById("quantity_all").textContent;
                        document.getElementById("quantity_all").textContent = parseInt(Math.abs(quantity_all - quantity)).toFixed(2);
                        document.getElementById("quantity_all_input").textContent = parseInt(Math.abs(quantity_all - quantity)).toFixed(2);


                        var total_all = document.getElementById("total_all").textContent;
                        document.getElementById("total_all").textContent = parseFloat(Math.abs(total_all - amount)).toFixed(2);
                        document.getElementById("total_all_input").textContent = parseFloat(Math.abs(total_all - amount)).toFixed(2);


                 


                        var total_amount_all = document.getElementById("total_amount_all").textContent;
                        document.getElementById("total_amount_all").textContent = parseFloat(Math.abs(total_amount_all - amount_discount)).toFixed(2);
                        document.getElementById("total_amount_all_input").textContent = parseFloat(Math.abs(total_amount_all - amount_discount)).toFixed(2);


                    }
                });
                return false;

            });

            $("#product0").change(function() {
                // var service_id = $(this).val();
                var product_id =$('#product0').val();
                if (product_id !=0){
                    $.ajax({  //create an ajax request to display.php
                        type: "GET",
                        dataType: "json",
                        url:  config.routes.product + product_id,
                        success: function (data) {
                            //services details
                         
                            $("#price0").val(data[0].price);


                            var amount = parseFloat(document.getElementById("amount0").value);

                            var quantity = parseInt(document.getElementById("quantity" +id_row).value);

                            $("#quantity0").val(0);
                            $("#amount0").val(0);
                           
                            // count_item = count_item - 1
                            // $('#item_count_all').text(count_item);
                            // $('#count_item_all_invoice').val(count_item);
                            var quantity_all = document.getElementById("quantity_all").textContent;
                            document.getElementById("quantity_all").textContent = parseInt(Math.abs(quantity_all - quantity));
                            document.getElementById("quantity_all_input").textContent = parseInt(Math.abs(quantity_all - quantity));



                            var total_all = document.getElementById("total_all").textContent;
                            document.getElementById("total_all").textContent = parseFloat(Math.abs(total_all - amount)).toFixed(2);
                            document.getElementById("total_all_input").textContent = parseFloat(Math.abs(total_all - amount)).toFixed(2);



                            var total_amount_all = document.getElementById("total_amount_all").textContent;
                            document.getElementById("total_amount_all").textContent = parseFloat(Math.abs(total_amount_all - amount_discount)).toFixed(2);
                            document.getElementById("total_amount_all_input").textContent = parseFloat(Math.abs(total_amount_all - amount_discount)).toFixed(2);



                        }
                    });
                }else
                {
                    $("#category0").val('');
                    $("#price0").val(0);

                    var amount = parseFloat(document.getElementById("amount0").value);
                 
                    var quantity = parseInt(document.getElementById("quantity" + id_row).value);

                    $("#quantity0").val(0);
                    $("#amount0").val(0);
           
                    // count_item = count_item - 1
                    // $('#item_count_all').text(count_item);
                    // $('#count_item_all_invoice').val(count_item);


                    var quantity_all = document.getElementById("quantity_all").textContent;
                    document.getElementById("quantity_all").textContent = parseInt(Math.abs(quantity_all - quantity));
                    document.getElementById("quantity_all_input").textContent = parseInt(Math.abs(quantity_all - quantity));

                    var total_all = document.getElementById("total_all").textContent;
                    document.getElementById("total_all").textContent = parseFloat(Math.abs(total_all - amount)).toFixed(2);
                    document.getElementById("total_all_input").textContent = parseFloat(Math.abs(total_all - amount)).toFixed(2);


                   

                    var total_amount_all = document.getElementById("total_amount_all").textContent;
                    document.getElementById("total_amount_all").textContent = parseFloat(Math.abs(total_amount_all - amount_discount)).toFixed(2);
                    document.getElementById("total_amount_all_input").textContent = parseFloat(Math.abs(total_amount_all - amount_discount)).toFixed(2);



                }
            });
        });

</script>
<script>
$(document).on('click', '.delegated-btn', function (e) {

let confirmAction = confirm("Are you sure you want to delete?");
if (confirmAction) {

    e.preventDefault();
                    var id_n = $(this).attr('id');
                    console.log(id_n);
                    var replaced = id_n.replace(/\D/g, '');
                    id_row = Number(replaced);  // 1 ,2,2,3,
                    var id_class = $(this).attr('class');
                    var replaced_class = id_class.replace(/\D/g, '');
                    id_class = Number(replaced_class);
                    
    var quantity = parseInt(document.getElementById("quantity" + id_row).value);

    var amount = parseFloat(document.getElementById("amount" + id_row).value);



    // count_item = count_item - 1
    // $('#item_count_all').text(count_item);
    // $('#count_item_all_invoice').val(count_item);


    var quantity_all = document.getElementById("quantity_all").textContent;
    document.getElementById("quantity_all").textContent = parseInt(Math.abs(quantity_all - quantity));
    document.getElementById("quantity_all_input").textContent = parseInt(Math.abs(quantity_all - quantity));

    var total_all = document.getElementById("total_all").textContent;
    document.getElementById("total_all").textContent = parseFloat( Math.abs(total_all - amount)).toFixed(2);
    document.getElementById("total_all_input").textContent = parseFloat( Math.abs(total_all - amount)).toFixed(2);



   

    $(this).parent().parent().remove();

}





});

function mychangeitem(elem) {
            var id_n = $(elem).attr('id');
            var replaced = id_n.replace(/\D/g, '');
            g = Number(replaced);  // 1 ,2,2,3,

            var quantity = $("#quantity" + g).val();

            if (quantity == "" || quantity == 0) {
                alert('Please Enter Quantity ');
                $("#quantity" + g).focus();
                return false;
            }

            // validate not empty input price
            var price = $("#price" + g).val();

            if (price == "" || price == 0) {
                alert('Please Enter Price ');
                $("#price" + g).focus();
                return false;
            }

            // validate not empty input quantity


            var amount =  $("#amount" + g).val(parseFloat(quantity *price).toFixed(2));
            var discount =  parseFloat($("#discount" + g).val() / 100).toFixed(2);
            var totalValue_discount = parseFloat( quantity *price - (quantity *price * discount)).toFixed(2);
            if (totalValue_discount < 0) {
                alert('عذراً هناك خطأ ، يجب أن تكون نسبة الخصم الاول للمبيعات اقل من ذلك لأن السعر اصبح بالسالب');
                $("#amount_discount"+g).focus();
                return false;
            }else {
                $("#amount_discount"+g).val( parseFloat( totalValue_discount).toFixed(2));
                console.log(discount);
            }

        //calculate all
            var quantity = 0;
            $('.quantity').each(function () {

                if ($(this).val() != "") {
                    quantity -= parseInt($(this).val());
                }

            });

            document.getElementById("quantity_all").textContent = parseInt(Math.abs(quantity));
            document.getElementById("quantity_all_input").value = parseInt(Math.abs(quantity));

            var sum = 0;
            $('.amount').each(function () {

                if ($(this).val() != "") {
                    sum -= parseFloat($(this).val());
                }

            });

            document.getElementById("total_all").textContent =  parseFloat(Math.abs(sum)).toFixed(2);
            document.getElementById("total_all_input").value =  parseFloat(Math.abs(sum)).toFixed(2);

            var discount = 0;
            $('.discount').each(function () {

                if ($(this).val() != "") {
                    discount -= parseInt($(this).val());
                }

            });
            document.getElementById("discount_all").textContent = parseInt( Math.abs(discount)).toFixed(2);
            document.getElementById("discount_all_input").value =  parseInt(Math.abs(discount)).toFixed(2);


            var amount_discount = 0;
            $('.amount_discount').each(function () {

                if ($(this).val() != "") {
                    amount_discount -= parseFloat($(this).val());
                }

            });
            document.getElementById("total_amount_all").textContent = parseFloat( Math.abs(amount_discount)).toFixed(2);
            document.getElementById("total_amount_all_input").value =  parseFloat(Math.abs(amount_discount)).toFixed(2);




        }
        function validate(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
                // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9]|\./;
            if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    </script>
    </script>








