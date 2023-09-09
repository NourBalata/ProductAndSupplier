
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

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">

    <div class="add-group">
                                            <a href="#" data-bs-toggle="modal"
                                               data-bs-target="#add_sale_order" 
                                               class=" modal-effect btn btn-primary add-pluss ms-2"><img
                                                    src="{{asset('dashboard/assets/img/icons/plus.svg')}}" alt="">Add Sales Orders</a>
</div>
<div class="card">
<div class="card-header">
<h3 class="card-title">Salses Orders</h3>
</div>

<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
    <th>#</th>
    <th>Place</th>
                                <th>Supplier</th>
                             
                                <th>Final_Total</th>
                                <th>Action</th>
</tr>
</thead>
<tbody>
    @foreach($data as $info )
                                <tr>
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                    <td>{{ $info->place}}
                                    </td>
                                    <td>
                                        <span class="custom-badge status-blue ">{{$info->Supplier->name}}</span>

                                    </td>
                     
                                    <td>
                                        <span class="custom-badge status-blue ">{{$info->final_total}}</span>
                               
                                    </td>

                              

                
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle"
                                               data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit_sale_order" data-sale_order_id="{{$info->id}}"
                                                   data-place="{{$info->place}}" data-supplier_id="{{$info->supplier_id}}"
                                                   data-product_id="{{$info->product_id}}"
                                                   data-final_total="{{$info->final_total}}" 
                                                  
                                                  <i
                                                        class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>

                                                <a class="dropdown-item" data-sale_order_id="{{$info->id}}" href="#"
                                                   data-bs-toggle="modal" data-bs-target="#delete_sale_order"><i
                                                        class="fa fa-trash-alt m-r-5"></i> Delete</a>
                                                        <a class="dropdown-item" href="{{route('sales_orders.show',$info->id)}}"><i
                                                            class="fa-solid fa-eye m-r-5"></i> Details</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
</tbody>
<tfoot>
<tr>
    <th>#</th>
<th>Name</th>
<th>Status</th>
                          
 <th>Action</th>
</tr>
</tfoot>
</table>
</div>

</div>

</div>

</div>

</div>

</section>

</div>

<footer class="main-footer">
<div class="float-right d-none d-sm-block">
<b>Version</b> 3.2.0
</div>
<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>




<div class="modal custom-modal fade invoices-preview" id="add_sale_order" role="dialog" >
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_category">New Sales_Orders</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card invoice-info-card">
                                <div class="card-body pb-0">
                                    <div class="modal-body">
                                        <form action="{{route('sales_orders.store')}}" method="post"
                                              enctype="multipart/form-data" id="storedata">
                                            @csrf
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Place:<span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="place" required value="{{old('place')}}"
                                                       class="form-control" id="recipient-name">

                                                @error('place')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Supplier:<span
                                                        class="login-danger">*</span></label>
                                                <br>
                                                <select type="text" name="supplier_id" required
                                                        value="{{old('supplier_id')}}"
                                                        class="form-control  select2">
                                                    <option value="">------select-------</option>
                                                    @foreach($suppliers as $supplier)
                                                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                    @endforeach
                                                </select>

                                                @error('supplier_id')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Product:<span
                                                        class="login-danger">*</span></label>
                                                <br>
                                                <select type="text" name="product_id" required
                                                        value="{{old('product_id')}}"
                                                        class="form-control  select2" id="product_id">
                                                    <option value="">------select-------</option>
                                                    @foreach($products as $product)
                                                        <option value="{{$product->id}}">{{$product->title}}</option>
                                                    @endforeach
                                                </select>

                                                @error('product_id')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                  
                                                  
                                
                
                                            
                                            <table id="example2" class="table table-bordered table-striped">
<thead>
<tr>
 
<th>Title</th>
<th >Price</th>
<th>Note</th>
<th>Qunitity</th>
<th>Total</th>
<th>Delete</th>
<p>Total <span id="final_total">0</span></p>
                                                <input type="hidden" name="final_total" id="final_total_input">
</tr>
</thead>
<tbody>
   
</tbody>
                                            </table>

                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    //edit_service--}}
    <div class="modal custom-modal fade invoices-preview" id="edit_sale_order" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_category">Edit Sales Order</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card invoice-info-card">
                                <div class="card-body pb-0">
                                    <div class="modal-body">
                                        <form action="{{route('sales_orders.update','edit')}}" method="post"
                                              enctype="multipart/form-data" id="updatadata">
                                            @csrf
                                            @method('put')

                                            <input type="hidden" name="sale_order_id"
                                                   class="form-control" id="id">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">place:<span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="place" required value="{{old('place')}}"
                                                       class="form-control" id="place">

                                                @error('place')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">final_total: <span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="final_total" required value="{{old('final_total')}}"
                                                       class="form-control"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       id="final_total">

                                                @error('final_total')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                                           

                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Supplier:<span
                                                        class="login-danger">*</span></label>
                                                <br>
                                                <select type="text" name="supplier_id" required id="supplier_id"
                                                        value="{{old('supplier_id')}}"
                                                        class="form-control  select2">
                                                    <option value="">------select-------</option>
                                                    @foreach($suppliers as $supplier)
                                                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                    @endforeach
                                                </select>

                                                @error('supplier_id')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Product:<span
                                                        class="login-danger">*</span></label>
                                                <br>
                                                <select type="text" name="product_id" required id="product_id"
                                                        value="{{old('product_id')}}"
                                                        class="form-control  select2">
                                                    <option value="">------select-------</option>
                                                    @foreach($products as $product)
                                                        <option value="{{$product->id}}">{{$product->title}}</option>
                                                    @endforeach
                                                </select>

                                                @error('product_id')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                                     
                                           
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    delete_service--}}
    <div class="modal custom-modal modal-bg fade" id="delete_sale_order" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete sale_order</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <form action="{{route('sales_orders.destroy','delete')}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" id="sale_order_id" value="" name="sale_order_id">
                                    <a onclick="parentNode.submit();"
                                       class="btn btn-primary paid-continue-btn">Delete</a>

                                </form>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                   class="btn btn-primary paid-cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
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
    $(document).ready(function() {


 $('#product_id').on('change',function(event) {
    event.preventDefault();

    var formData = $(this).serialize();
                var product_id = $('#product_id').val(); 

    $.ajax({
      url: '{{ route("get-product-names") }}',
      type: 'GET',
      dataType: 'json',
      data: {
        product_id: product_id,
  
    },
      success: function(data) {
        

        var trCount = $('#service_details').find('tr.add-row:last').length;
                var numberIncr = trCount > 0 ? parseInt($('#service_details').find('tr.add-row:last').attr('id')) + 1 : 0;

                var experiencecontent = '<tr class="add-row" id="' + 2 + '">' +
            $.each(data, function(index, data) {
              
                $('#example2').append('<tr>' +
                  
                    '<td id="title">' + data.title+ '</td>' +

                   '<td class="col-2">' +
                    '<input type="text" name="price['+product_id+']" required onkeypress="validate(event)" onchange="mychangeitem(this)" id="price'+product_id+'"   class="price form-control"'+'value='+data.price+'>'
            +
                    '</td>'
                    +
                    '</td>' +
                    '<td id="note">' + data.note + '</td>' +
                    '<td class="col-1">' +
                    '<input type="text"  name="quantity['+product_id+']" required  onkeypress="validate(event)" onchange="mychangeitem(this)" id="quantity'+product_id+'" value="0"  class="quantity form-control">' +
                    '</td>' +
                  
                    '<td class="col-2">' +
                    '<input type="text" readonly name="amount['+product_id+']" required id="amount'+product_id+'" value="0"   class="amount form-control">' +
                    '</td>' +
                    '<td class="add-remove text-end">'  + '<a href="javascript:void(0);" class="delegated-btn me-2">'+'<i class="fa fa-trash-alt">'+'</i>'+'</a>'+ '</td>'+
                   
                    '</tr>'
                 
                    );
                  
            });
        
        },
        error: function(xhr) {
            console.log(xhr.responseText);
        }
    });

  

});
});




    </script>

   
    <script>
        // Model Delete
        $('#delete_sale_order').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var sale_order_id = button.data('sale_order_id')
            var modal = $(this)
            modal.find('.modal-body #sale_order_id').val(sale_order_id);
        })
    </script>



 <script>
        // Model Edit
        $('#edit_sale_order').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('sale_order_id')
            var place = button.data('place')
            var final_total = button.data('final_total')
            var product_id = button.data('product_id')
            var supplier_id = button.data('supplier_id')
       
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #place').val(place);
            modal.find('.modal-body #final_total').val(final_total);
            modal.find('.modal-body #product_id').val(product_id);
            modal.find('.modal-body #supplier_id').val(supplier_id);
        


        

        })
    </script>

 
    <script>
		   var config = {
                  routes: {
                    store: "{!! route('sales_orders.store') !!}",
                    update: "{!! route('sales_orders.update','edit') !!}",
        }
    };



    $(document).on('submit', '#updatadata', function(e) {
        e.preventDefault();

        $.ajax({
            url: config.routes.update,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            
            success: function(response) {
                
                alert('update Data for Sales Order');
                $('#message').appaned('True!!!!');
                // new FormData('#message').html(response.message);
                if (response.status == true) {

                    console.log(response.data);                                   
               }
            },

        });


    });
$(document).on('click', '.delegated-btn', function (e) {

let confirmAction = confirm("Are you sure you want to delete?");
if (confirmAction) {

    e.preventDefault();
    var product_id = $('#product_id').val(); 
    var id_n = $(this).attr('id');
    // console.log(id_n);
    var replaced = id_n.replace(/\D/g, '');
    id_row = Number(replaced);  // 1 ,2,2,3,
    var id_class = $(this).attr('class');
    var replaced_class = id_class.replace(/\D/g, '');
    id_class = Number(replaced_class);

    var quantity = parseInt(document.getElementById("quantity" + id_row).value);

    var amount = parseFloat(document.getElementById("amount" + id_row).value);

 

    // var title = parseInt(document.getElementById("title" + id_row).value);

    var price = parseFloat(document.getElementById("price" + id_row).value);
    // var note = parseFloat(document.getElementById("note" + id_row).value);

    var final_total = document.getElementById("final_total").textContent;
                    document.getElementById("final_total").textContent = parseFloat( Math.abs(final_total - amount)).toFixed(2);
                    document.getElementById("final_total_input").textContent = parseFloat( Math.abs(final_total - amount)).toFixed(2);
    // count_item = count_item - 1
    // $('#item_count_all').text(count_item);
    // $('#count_item_all_invoice').val(count_item);


 
   
    $(this).parent().parent().remove();

}
});

    </script>

    <script>
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

                        }});}});

        </script>
    <script>
    
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
           
           
            var sum = 0;
            $('.amount').each(function () {

                if ($(this).val() != "") {
                    sum -= parseFloat($(this).val());
                }

            });


           
            document.getElementById("final_total").textContent =  parseFloat(Math.abs(sum)).toFixed(2);
            document.getElementById("final_total_input").value =  parseFloat(Math.abs(sum)).toFixed(2);

          
 

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
</body>
</html>
