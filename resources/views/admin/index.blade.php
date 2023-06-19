<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper_2/saas/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:33:55 GMT -->

@include('admin.include.head')

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-lg-2 gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="index-2.html" class="logo-light">
                            <span class="logo-lg">
                                <img src="{{asset('admin/assets/images/logo.png')}}" alt="logo">
                            </span>
                            <span class="logo-sm">
                                <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="small logo">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="index-2.html" class="logo-dark">
                            <span class="logo-lg">
                                <img src="{{asset('admin/assets/images/logo-dark.png')}}" alt="dark logo">
                            </span>
                            <span class="logo-sm">
                                <img src="{{asset('admin/assets/images/logo-dark-sm.png')}}" alt="small logo">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
               

                    <!-- Topbar Search Form -->
                    <div class="app-search dropdown d-none d-lg-block">
                     

                    </div>
                </div>

            
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.include.sideMenu')
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                  
                                </div>
                                <h4 class="page-title">Tableau du bord</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card widget-flat">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <i class="mdi mdi-account-multiple widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Customers
                                            </h5>
                                            <h3 class="mt-3 mb-3">36,254</h3>
                                            <p class="mb-0 text-muted">
                                                <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i>
                                                    5.27%</span>
                                                <span class="text-nowrap">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class="col-sm-6">
                                    <div class="card widget-flat">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <i class="mdi mdi-cart-plus widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Orders</h5>
                                            <h3 class="mt-3 mb-3">5,543</h3>
                                            <p class="mb-0 text-muted">
                                                <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i>
                                                    1.08%</span>
                                                <span class="text-nowrap">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card widget-flat">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <i class="mdi mdi-currency-usd widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Revenue</h5>
                                            <h3 class="mt-3 mb-3">$6,254</h3>
                                            <p class="mb-0 text-muted">
                                                <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i>
                                                    7.00%</span>
                                                <span class="text-nowrap">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class="col-sm-6">
                                    <div class="card widget-flat">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <i class="mdi mdi-pulse widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted fw-normal mt-0" title="Growth">Growth</h5>
                                            <h3 class="mt-3 mb-3">+ 30.56%</h3>
                                            <p class="mb-0 text-muted">
                                                <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i>
                                                    4.87%</span>
                                                <span class="text-nowrap">Since last month</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                            </div> <!-- end row -->

                        </div> <!-- end col -->

                     
                    </div>
                    <!-- end row -->

                   
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->


        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


    <!-- Vendor js -->
    @include('admin.include.js')

</body>

<!-- Mirrored from coderthemes.com/hyper_2/saas/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:35:04 GMT -->

</html>