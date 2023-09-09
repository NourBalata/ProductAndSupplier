<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table show-entire">
                <div class="card-body">

                    <div class="page-table-header mb-2">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="doctor-table-blk">
                                    <h3>Products List</h3>
                                    <div class="doctor-search-blk">
                                        <div class="add-group">
                                            <a href="#" data-bs-toggle="modal"
                                               data-bs-target="#add_product"
                                               class=" modal-effect btn btn-primary add-pluss ms-2"><img
                                                    src="{{asset('dashboard/assets/img/icons/plus.svg')}}" alt=""> Add Products</a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                                <a href="javascript:;" class=" me-2"><img
                                        src="{{asset('dashboard/assets/img/icons/pdf-icon-01.svg')}}"
                                        alt=""></a>
                                <a href="javascript:;" class=" me-2"><img
                                        src="{{asset('dashboard/assets/img/icons/pdf-icon-02.svg')}}"
                                        alt=""></a>
                                <a href="javascript:;" class=" me-2"><img
                                        src="{{asset('dashboard/assets/img/icons/pdf-icon-03.svg')}}"
                                        alt=""></a>
                                <a href="javascript:;"><img
                                        src="{{asset('dashboard/assets/img/icons/pdf-icon-04.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="table1" class="table border-0 custom-table comman-table  mb-0">
                            <thead>
                            <tr>

                                <th>#</th>
                                <th>Title</th>

                                <th>Price</th>
                        <th>Note</th>
                                <th>Status</th>
                          
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                           @foreach($data as $info)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                    <td class="profile-image"><a href="#"><img width="28" height="28"
                                                                               src="{{ $info->image !='' ? $info->image :asset('dashboard/assets/img/profiles/avatar-02.jpg')}}"
                                                                               class="rounded-circle m-r-5"
                                                                               alt="">{{ $info->title}}</a>
                                    </td>
                                    <td>
                                        <span class="custom-badge status-blue ">{{$info->price}}</span>

                                    </td>
                                  <td>
                                        <span class="custom-badge status-blue ">{{$info->note}}</span>

                                    </td> 
                                     {{-- <td>
                                        {{isset($info->brand->name)? $info->brand->name :''}}
                                    </td>  --}}

                                    <td><span
                                            class="custom-badge status-{{$info->status() =='Active'?'green':'red'}} "> {{$info->status()}}</span>
                                    </td>

                              
                                  <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle"
                                               data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit_product" data-product_id="{{$info->id}}"
                                                   data-title="{{$info->title}}" data-note="{{$info->note}}"
                                                    data-image="{{$info->image}}"
                                                   data-price="{{$info->price}}"
                                                   data-status="{{$info->status}}"><i
                                                        class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>

                                                <a class="dropdown-item" data-product_id="{{$info->id}}" href="#"
                                                   data-bs-toggle="modal" data-bs-target="#delete_product"><i
                                                        class="fa fa-trash-alt m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{--    //add_service--}}
    <div class="modal custom-modal fade invoices-preview" id="add_product" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_category">New Product</h5>
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
                                        <form action="{{route('products.store')}}" method="post"
                                              enctype="multipart/form-data" id="storedata">
                                            @csrf
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">title:<span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="title" required value="{{old('title')}}"
                                                       class="form-control" id="recipient-name">

                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Price: <span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="price" required value="{{old('price')}}"
                                                       class="form-control"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       id="recipient-name">

                                                @error('price')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
 

                                   
                                                

                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Note:<span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="note" required value="{{old('note')}}"
                                                       class="form-control" id="recipient-name">

                                                @error('note')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <div class="col">
                                                    <div class="form-group select-gender">
                                                        <label class="gen-label">Status <span
                                                                class="login-danger">*</span></label>
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="radio" checked required name="status"
                                                                       value="{{old('status',1)}}"
                                                                       class="form-check-input">Active
                                                            </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="radio" required name="status"
                                                                       value="{{old('status',0)}}"
                                                                       class="form-check-input">In Active
                                                            </label>
                                                        </div>

                                                        @error('status')
                                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
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

                                            <div class="col-4">
                                                <div class="upload-images form-group local-top-form">
                                                    <img id="upload" width="150px" height="150px"
                                                         src="{{asset('dashboard/assets/img/1691151957621.jpg')}}"
                                                         alt="Image">
                                                    {{--                                    <a href="javascript:void(0);" class="btn-icon logo-hide-btn">--}}
                                                    {{--                                        <i class="feather-x-circle"></i>--}}
                                                    {{--                                    </a>--}}
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    //edit_service--}}
    <div class="modal custom-modal fade invoices-preview" id="edit_product" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_category">Edit Product</h5>
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
                                        <form action="{{route('products.update','edit')}}" method="post"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('put')

                                            <input type="hidden" name="product_id"
                                                   class="form-control" id="id">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Title:<span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="title" required value="{{old('title')}}"
                                                       class="form-control" id="title">

                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Price: <span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="price" required value="{{old('price')}}"
                                                       class="form-control"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       id="price">

                                                @error('price')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                              

                                           
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Note: <span
                                                        class="login-danger">*</span></label>
                                                <input type="text" name="note" required value="{{old('note')}}"
                                                       class="form-control" type="text"
                                                     
                                                       id="note">

                                                @error('note')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                @enderror
                                            </div>
                                          

                                            <div class="form-group">
                                                <div class="col">
                                                    <div class="form-group select-gender">
                                                        <label class="gen-label">Status <span
                                                                class="login-danger">*</span></label>
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="radio" id="status1" checked required
                                                                       name="status"
                                                                       value="{{old('status',1)}}"
                                                                       class="form-check-input">Active
                                                            </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="radio" id="status0" required name="status"
                                                                       value="{{old('status',0)}}"
                                                                       class="form-check-input">In Active
                                                            </label>
                                                        </div>

                                                        @error('status')
                                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group local-top-form">
                                                    <label class="local-top">Image <span
                                                            class="login-danger">*</span></label>
                                                    <div class="settings-btn upload-files-avator">
                                                        <input type="file" accept="image/*" name="image" id="file2"
                                                               onchange="document.getElementById('pic').src = window.URL.createObjectURL(this.files[0])"

                                                               class="hide-input">

                                                    </div>


                                                    @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                          </span>

                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="upload-images form-group local-top-form">
                                                    <img id="pic" width="150px" height="150px"
                                                         src=""
                                                         alt="Image">
                                                    {{--                                    <a href="javascript:void(0);" class="btn-icon logo-hide-btn">--}}
                                                    {{--                                        <i class="feather-x-circle"></i>--}}
                                                    {{--                                    </a>--}}
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    delete_service--}}
    <div class="modal custom-modal modal-bg fade" id="delete_product" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Product</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <form action="{{route('products.destroy','delete')}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" id="product_id" value="" name="product_id">
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



    <script>
        $(document).ready(function () {
            $('#table1').DataTable();
        });


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

    $(document).ready(function () {
        $('#table1').DataTable();
    });
</script>

<script>
    setTimeout(function() {
        $('#my_alert_s').fadeOut('fast');
    }, 2000); // <-- time in milliseconds
    //  setTimeout(function() {
    //     $('#my_alert_e').fadeOut('fast');
    // }, 1000); // <-- time in milliseconds

    
</script>
<script>
 	   var config = {
                  routes: {
                    store: "{!! route('products.store') !!}",
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
                
                alert('Save Data For Products');
                $('#message').appaned('True!!!!');
                // new FormData('#message').html(response.message);
                if (response.status == true) {

                    console.log(response.data);                                   
               }
            },

        });


    });

</script>
