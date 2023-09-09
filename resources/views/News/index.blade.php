<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | DataTables</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.11/dist/summernote-bs4.min.css" rel="stylesheet">
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <div class="doctor-search-blk">
                                        <div class="add-group">
                                            <a href="#" data-bs-toggle="modal"
                                               data-bs-target="#add_new"
                                               class=" modal-effect btn btn-primary add-pluss ms-2"><img
                                                    src="{{asset('dashboard/assets/img/icons/plus.svg')}}" alt=""> Add news</a>


                                        </div>
                                    </div>


<div class="card">
<div class="card-header">
<h3 class="card-title">categories</h3>
</div>
                         

  
<div class="card-body">
    @include('News.index2')
</div>

</div>

</div>

</section>

</div>
</div>
                            </div>
                        </div>
                    


                        
                        <div class="modal custom-modal fade invoices-preview" id="add_new" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_category">New News</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row left-content">
                        <div class="col-lg-8">
                            <div class="card invoice-info-card">
                                <div class="card-body pb-0">
                                    <div class="modal-body">
                                        <form action="{{route('news.store')}}" method="post"
                                              enctype="multipart/form-data" id="storedata">
                                            @csrf
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">title New:<span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="title_new" required value="{{old('title_new')}}"
                                                       class="form-control" id="recipient-title_new">

                                                @error('title_new')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Address:<span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="address" required value="{{old('address')}}"
                                                       class="form-control" id="recipient-address">

                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Slug:<span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="slug" required value="{{old('slug')}}"
                                                       class="form-control" id="recipient-slug">

                                                @error('slug')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                    
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Summary:<span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="summary" required value="{{old('summary')}}"
                                                       class="form-control" id="recipient-summary">

                                                @error('summary')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>

                                   
                                                

                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Details:<span
                                                        class="login-danger">*</span></label>
                                                        <div class="controls">
                          
                          <textarea type="text"  id="summernote" name="details" class="form-control" rows="6" required placeholder="details" data-validation-required-message="This field is required">
                      
                          </textarea>
                          
                      </div>
                                                @error('details')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                            
                                       
                                  

                                

                                        
                                                 
                                                   
                                                
                                       
                                    </div>

                                </div>
                            </div>
                        </div>
                 
                        <div class="col-lg-2 col-md-2">
                                                        
                   
                                                         <div class="col-2">
                                                <div class="form-group local-top-form">
                                                    <label class="local-top">Image <span
                                                            class="login-danger">*</span></label>
                                                    <div class="settings-btn upload-files-avator">
                                                        <input type="file" accept="image/*" name="image" id="file22"
                                                               onchange="document.getElementById('upload').src = window.URL.createObjectURL(this.files[0])"
                                                               class="hide-input">

                                                    </div>


                                                    @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                          </span>

                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <div class="upload-images form-group local-top-form">
                                                    <img id="upload" width="150px" height="150px"
                                                         src="{{asset('dashboard/assets/img/logo-dark.png')}}"
                                                         alt="Image">
                                                    {{--                                    <a href="javascript:void(0);" class="btn-icon logo-hide-btn">--}}
                                                    {{--                                        <i class="feather-x-circle"></i>--}}
                                                    {{--                                    </a>--}}
                                                </div>
                                            </div>
                                            <div class="form-group col-18" >
                                                <label for="recipient-name" class="col-form-label">title New:<span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="title" required value="{{old('title')}}"
                                                       class="form-control" id="recipient-name"style="width:239px">

                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Category:<span
                                                        class="login-danger">*</span></label>
                                                <br>
                                                <select type="text" name="category_id" required
                                                        value="{{old('category_id')}}"
                                                        class="form-control  select2"style="width:239px">
                                                    <option value="">------select-------</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>

                                                @error('category_id')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">writer:<span
                                                        class="login-danger">*</span></label>
                                                <br>
                                                <select type="text" name="writer_id" required
                                                        value="{{old('writer_id')}}"
                                                        class="form-control  select2 "style="width:239px">
                                                    <option value="">------select-------</option>
                                                    @foreach($writers as $writer)
                                                        <option value="{{$writer->id}}">{{$writer->name}}</option>
                                                    @endforeach
                                                </select>

                                                @error('writer_id')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">TypeNews:<span
                                                        class="login-danger">*</span></label>
                                                <br>
                                                <select type="text" name="type_id" required
                                                        value="{{old('type_id')}}"
                                                        class="form-control  select2 " style="width:239px">
                                                    <option value="">------select-------</option>
                                                    @foreach($types as $type)
                                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                                    @endforeach
                                                </select>

                                                @error('type_id')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                                   </div>
                                                <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">language:<span
                                                        class="login-danger">*</span></label>
                                                <br>
                                                <select type="text" name="language_id" required
                                                        value="{{old('language_id')}}"
                                                        class="form-control  select2 "style="width:239px">
                                                    <option value="">------select-------</option>
                                                    @foreach($languages as $language)
                                                        <option value="{{$language->id}}">{{$language->name}}</option>
                                                    @endforeach
                                                </select>

                                                @error('language_id')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                                   </div>
                                                   <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">News Status:<span
                                                        class="login-danger">*</span></label>
                                                <br>
                                                <select type="text" name="status_id" required
                                                        value="{{old('status_id')}}"
                                                        class="form-control  select2 "style="width:239px">
                                                    <option value="">------select-------</option>
                                                    @foreach($statuses as $status)
                                                        <option value="{{$status->id}}">{{$status->name}}</option>
                                                    @endforeach
                                                </select>

                                                @error('status_id')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                                   </div>

                                                   <div class="col-lg-12 col-md-12">
                                                        <div class="invoice-inner-date">
                                                        <span>
                                                        Date <input class="form-control datetimepicker" name="date" id="date" readonly value="{{old('date',date('d-m-Y'))}}" type="text" placeholder=""style="width:239px">
                                                        </span>
                                                        </div>
                                                         </div>
                                                   <div class="col-lg-12 col-md-12">
                                                         <div class="invoice-inner-date invoice-inner-datepic">
                                                        <span>
                                                        Due Date <input  class="form-control datetimepicker" value="{{old('datepublication')}}" type="text" name="datepublication" id="datepublication" required placeholder="Select"style="width:239px">
                                                        </span>
                                                        </div>
                                                    </div>
                                     
                
                    </div>
                </div>
             
                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                            
                                        </form> 
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
<script>
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

<script src="https://cdn.jsdelivr.net/npm/bs4-summernote@0.8.10/dist/summernote-bs4.min.js"></script>
<script src="{{asset('dashboard/assets/js/app.js')}}"></script>
    </script>
    <script>
        // Model Delete
        $('#delete_product').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var product_id = button.data('product_id')
            var modal = $(this)
            modal.find('.modal-body #product_id').val(product_id);
        })
    </script>
    <script>
    $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
    });
    </script>
    <script>
        // Model Edit
        $('#edit_product').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('product_id')
            var title = button.data('title')
            var status = button.data('status')
            var price = button.data('price')
            var note = button.data('note')
            var image = button.data('image')

            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #title').val(title);
       
            modal.find('.modal-body #price').val(price);
            modal.find('.modal-body #note').val(note);
            modal.find('.modal-body #pic').attr("src", image);


           

        })
    </script>


    <script>
 	   var config = {
                  routes: {
                    store: "{!! route('news.store') !!}",
        }
    };

$(document).on('submit', '#storedata', function(e) {
        e.preventDefault();

        $.ajax({
            url: config.routes.store,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            
            success: function(response) {
                
                alert('Save Data For news');
                $('#message').appaned('True!!!!');
                // new FormData('#message').html(response.message);
                if (response.status == true) {

                    console.log(response.data);                                   
               }
            },

        });


    });

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    });
    
    $(document).ready(function()
    {
        $(document).on('click', '.pagination a',function(event)
        {
            event.preventDefault();
  
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
  
            var myurl = $(this).attr('href');
            var page=$(this).attr('href').split('page=')[1];
  
            getData(page);
        });
  
    });
  
    function getData(page){
        $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html"
        }).done(function(data){
            $("#item-lists").empty().html(data);
            location.hash = page;
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
    }
</script>