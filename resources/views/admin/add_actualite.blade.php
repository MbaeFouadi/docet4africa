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
                                <img src="assets/images/logo.png" alt="logo">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="small logo">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="index-2.html" class="logo-dark">
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="dark logo">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-dark-sm.png" alt="small logo">
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
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="text-center">Ajouter une actualité</h2> <br>
                                    

                                    <form action="{{route('actualites.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="datepicker-preview">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3 position-relative" id="datepicker1">
                                                        <label class="form-label">Titre</label>
                                                        <input type="text" class="form-control" name="titre" data-provide="datepicker" data-date-today-highlight="true" data-date-container="#datepicker1">
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-6">
                                                    <div class="mb-3 position-relative" id="datepicker2">
                                                        <label class="form-label">Déscription</label>
                                                        <input type="text" name="description" class="form-control" data-provide="datepicker" data-date-format="d-M-yyyy" data-date-container="#datepicker2">
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="row">
                                            <div class="col-lg-6">
                                                    <div class="mb-3 position-relative" id="datepicker2">
                                                        <label class="form-label">Lieu</label>
                                                        <input type="text" name="lieu" class="form-control" data-provide="datepicker" data-date-format="d-M-yyyy" data-date-container="#datepicker2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3 position-relative" id="datepicker3">
                                                        <label class="form-label">Image</label>
                                                        <input type="file" name="image" class="form-control" data-provide="datepicker" data-date-multidate="true" data-date-container="#datepicker3">
                                                    </div>
                                                </div>
    
                                                <!-- <div class="col-lg-6">
                                                    <div class="mb-3 position-relative" id="datepicker4">
                                                        <label class="form-label">Autoclose</label>
                                                        <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker4">
                                                    </div>
                                                </div> -->
                                            </div>
    
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3 position-relative" id="datepicker5">
                                                        <label class="form-label">Contenu</label>
                                                        <textarea name="contenu" class="form-control" id="" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
    
                                               
                                            </div>
    
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                       <input type="submit" class="btn btn-sm btn-primary" value="Valider">
                                                    </div>
                                                </div>
                                            </div>                      
                                        </div> <!-- end preview-->
                                    
                                   
                                    </div> <!-- end tab-content-->
                                    </form>
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
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