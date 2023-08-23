<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sales_Orders</title>
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
                                    <h3>Sales_Orders List</h3>
                                    <div class="doctor-search-blk">
                                        {{--                                        <div class="top-nav-search table-search-blk">--}}
                                        {{--                                            <form>--}}
                                        {{--                                                <input type="text" id="search" class="form-control"--}}
                                        {{--                                                       placeholder="Search here">--}}
                                        {{--                                                <a class="btn"><img src="{{asset('dashboard/assets/img/icons/search-normal.svg')}}"--}}
                                        {{--                                                                    alt=""></a>--}}
                                        {{--                                            </form>--}}
                                        {{--                                        </div>--}}
                                        <div class="add-group">
                                            <a href="#" data-bs-toggle="modal"
                                               data-bs-target="#add_sale_order"
                                               class=" modal-effect btn btn-primary add-pluss ms-2"><img
                                                    src="{{asset('dashboard/assets/img/icons/plus.svg')}}" alt="">Add Sales Orders</a>


                                            <a href="javascript:;"
                                               class="btn btn-primary doctor-refresh ms-2"><img
                                                    src="{{asset('dashboard/assets/img/icons/re-fresh.svg')}}"
                                                    alt=""></a>
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
                                
                                <th>Price</th>
                                <th>Supplier</th>
                                <th>Product</th>
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
                                        <span class="custom-badge status-blue ">{{$info->Product->title}}</span>

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
    <div class="modal custom-modal fade invoices-preview" id="add_sale_order" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
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
                                              enctype="multipart/form-data">
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
                                              enctype="multipart/form-data">
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


