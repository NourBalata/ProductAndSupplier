<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


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
                    {{--                    <div class="invoices-create-btn">--}}
                    {{--                        <a class="invoices-preview-link" href="#" data-bs-toggle="modal"--}}
                    {{--                           data-bs-target="#invoices_preview"><i class="fa fa-eye"></i> Preview</a>--}}
                    {{--                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices_details"--}}
                    {{--                           class="btn delete-invoice-btn">--}}
                    {{--                            Delete Invoice--}}
                    {{--                        </a>--}}
                    {{--                        <a href="#" data-bs-toggle="modal" data-bs-target="#save_invocies_details"--}}
                    {{--                           class="btn save-invoice-btn">--}}
                    {{--                            Save Draft--}}
                    {{--                        </a>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card invoices-add-card" id="print">
                    <div class="card-body">
                        <div class="row justify-content-center" >
                                            <div class="col-lg-12">
                                                <div class="card invoice-info-card">
                                                    <div class="card-body pb-0">
                                                        <div class="invoice-item invoice-item-one">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="invoice-logo">
                                                                      
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="invoice-info">
                                                                        <div class="invoice-head">
                                                                            <h2 class="text-primary">Sales Order</h2>
                                                                 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="invoice-item invoice-item-bg">
                                                            <div class="invoice-circle-img">
                                                                <img src="{{asset('dashboard/assets/img/invoice-circle1.png')}}" alt="" class="invoice-circle1">
                                                                <img src="{{asset('dashboard/assets/img/invoice-circle2.png')}}" alt="" class="invoice-circle2">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-12">
                                                                    <div class="invoice-info">
                                                                        <strong class="customer-text-one">Billed to</strong>
                                                                        <h6 class="invoice-name">Sales Order</h6>
                                                                        <p class="invoice-details invoice-details-two">
                                                                             Place: {{$data->place}} <br>
                                                                            Final_Total: {{$data->final_total}} <br>
                                                                            
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-12">
                                                                    <div class="invoice-info">
                                                                        <strong class="customer-text-one">Billed to</strong>
                                                                        <h6 class="invoice-name">Suppliers</h6>
                                                                        <p class="invoice-details invoice-details-two">
                                                                             Name: {{$data->supplier->name}} <br>
                                                                            status: {{$data->supplier->status}} <br>
                                                                            
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4 col-md-12">
                                                                    <div class="invoice-info invoice-info-one border-0">
                                                                        <h6 class="invoice-name">products</h6>
                                                                        <p>title : {{$data->product->title}}</p>
                                                                        <p>price : {{$data->product->price}}</p>
                                                                        <p>note :  {{$data->product->note}}</p>
                                                                        <p>status : {{$data->product->status}} </p>
                                                                      
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        

                                                     
                                                    </div>
                                                </div>
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
    setTimeout(function() {
        $('#my_alert_s').fadeOut('fast');
    }, 2000); // <-- time in milliseconds
    //  setTimeout(function() {
    //     $('#my_alert_e').fadeOut('fast');
    // }, 1000); // <-- time in milliseconds

    
</script>