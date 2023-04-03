<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('../images/favicon.ico')}}">

    <title>User - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{asset('backend/css/vendors_css.css')}}">

    <!-- Style-->
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/skin_color.css')}}">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

    {{--    Main Header--}}
    @include('frontend.profile.body.header')

    <!-- Left side column. contains the logo and sidebar -->
    {{--    main Sidebar--}}
    @include('frontend.profile.body.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-2 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <div class="icon bg-primary-light rounded w-60 h-60">
                                    <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">New Customers</p>
                                    <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <div class="icon bg-warning-light rounded w-60 h-60">
                                    <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Sold Cars</p>
                                    <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <div class="icon bg-info-light rounded w-60 h-60">
                                    <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Sales Lost</p>
                                    <h3 class="text-white mb-0 font-weight-500">$1,250 <small class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <div class="icon bg-danger-light rounded w-60 h-60">
                                    <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Inbound Call</p>
                                    <h3 class="text-white mb-0 font-weight-500">1,460 <small class="text-danger"><i class="fa fa-caret-up"></i> -1.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <div class="icon bg-success-light rounded w-60 h-60">
                                    <i class="text-success mr-0 font-size-24 mdi mdi-phone-outgoing"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Outbound Call</p>
                                    <h3 class="text-white mb-0 font-weight-500">1,700 <small class="text-success"><i class="fa fa-caret-up"></i> +0.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <div class="icon bg-light rounded w-60 h-60">
                                    <i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Total Revune</p>
                                    <h3 class="text-white mb-0 font-weight-500">$4,500k <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title align-items-start flex-column">
                                    New Arrivals
                                    <small class="subtitle">More than 400+ new members</small>
                                </h4>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-border">
                                        <thead>
                                        <tr class="text-uppercase bg-lightest">
                                            <th style="min-width: 250px"><span class="text-white">products</span></th>
                                            <th style="min-width: 100px"><span class="text-fade">pruce</span></th>
                                            <th style="min-width: 100px"><span class="text-fade">deposit</span></th>
                                            <th style="min-width: 150px"><span class="text-fade">agent</span></th>
                                            <th style="min-width: 130px"><span class="text-fade">status</span></th>
                                            <th style="min-width: 120px"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="pl-0 py-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 mr-20">
                                                        <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
                                                    </div>

                                                    <div>
                                                        <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
                                                        <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary-light badge-lg">Approved</span>
                                            </td>
                                            <td class="text-right">
                                                <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                                <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0 py-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 mr-20">
                                                        <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-2.jpg)"></div>
                                                    </div>

                                                    <div>
                                                        <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
                                                        <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-warning-light badge-lg">In Progress</span>
                                            </td>
                                            <td class="text-right">
                                                <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                                <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0 py-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 mr-20">
                                                        <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-3.jpg)"></div>
                                                    </div>

                                                    <div>
                                                        <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
                                                        <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success-light badge-lg">Success</span>
                                            </td>
                                            <td class="text-right">
                                                <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                                <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0 py-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 mr-20">
                                                        <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-4.jpg)"></div>
                                                    </div>

                                                    <div>
                                                        <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
                                                        <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger-light badge-lg">Rejected</span>
                                            </td>
                                            <td class="text-right">
                                                <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                                <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0 py-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 mr-20">
                                                        <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-5.jpg)"></div>
                                                    </div>

                                                    <div>
                                                        <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
                                                        <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-warning-light badge-lg">In Progress</span>
                                            </td>
                                            <td class="text-right">
                                                <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                                <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    {{--   Main Footer--}}
    @include('frontend.profile.body.footer')

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->


</div>
<!-- ./wrapper -->


<!-- Vendor JS -->
<script src="{{asset('backend/js/vendors.min.js')}}"></script>
<script src="{{asset('../assets/icons/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}"></script>
<script src="{{asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script>
<script src="{{asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>

<!-- Sunny Admin App -->
<script src="{{asset('backend/js/template.js')}}"></script>
<script src="{{asset('backend/js/pages/dashboard.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>


</body>
</html>
