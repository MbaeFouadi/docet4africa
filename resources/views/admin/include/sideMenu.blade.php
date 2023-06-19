<div class="leftside-menu">

<!-- Brand Logo Light -->
<a href="index-2.html" class="logo logo-light">
    <span class="logo-lg">
        <img src="{{asset('admin/assets/images/logo.png')}}" alt="logo">
    </span>
    <span class="logo-sm">
        <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="small logo">
    </span>
</a>

<!-- Brand Logo Dark -->
<a href="index-2.html" class="logo logo-dark">
    <span class="logo-lg">
        <img src="{{asset('admin/assets/images/logo-dark.png')}}" alt="dark logo">
    </span>
    <span class="logo-sm">
        <img src="{{asset('admin/assets/images/logo-dark-sm.png')}}" alt="small logo">
    </span>
</a>

<!-- Sidebar Hover Menu Toggle Button -->
<div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
    <i class="ri-checkbox-blank-circle-line align-middle"></i>
</div>

<!-- Full Sidebar Menu Close Button -->
<div class="button-close-fullsidebar">
    <i class="ri-close-fill align-middle"></i>
</div>

<!-- Sidebar -left -->
<div class="h-100" id="leftside-menu-container" data-simplebar>
    <!-- Leftbar User -->
    <div class="leftbar-user">
        <a href="pages-profile.html">
            <img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}" alt="user-image" height="42"
                class="rounded-circle shadow-sm">
            <span class="leftbar-user-name mt-2">Dominic Keller</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="side-nav">

        <li class="side-nav-title">Navigation</li>

        <li class="side-nav-item">
            <a  href="{{route('administrateur')}}" aria-expanded="false"
                aria-controls="sidebarDashboards" class="side-nav-link">
                <i class="uil-home-alt"></i>
                <!-- <span class="badge bg-success float-end">5</span> -->
                <span> Accueil </span>
            </a>
          
        </li>



        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                aria-controls="sidebarEcommerce" class="side-nav-link">
                <i class="uil uil-clapper-board"></i>
                <span> Actualités </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEcommerce">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="{{route('actualites.create')}}">Ajouter une actualité</a>
                    </li>
                    <li>
                        <a href="{{route('actualites.index')}}">Liste des actualités</a>
                    </li>
                 
                </ul>
            </div>
        </li>
        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarEvent" aria-expanded="false"
                aria-controls="sidebarEcommerce" class="side-nav-link">
                <i class="uil uil-clapper-board"></i>
                <span> Evènements </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEvent">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="{{route('evenements.create')}}">Ajouter un evènement</a>
                    </li>
                    <li>
                        <a href="{{route('evenements.index')}}">Liste des evènement</a>
                    </li>
                 
                </ul>
            </div>
        </li>
        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false"
                aria-controls="sidebarEmail" class="side-nav-link">
                <i class="uil uil-files-landscapes"></i>
                <span> Partenaires </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEmail">
                <ul class="side-nav-second-level text-center">
                    <li>
                        <a href="{{route('partenaires.create')}}">Ajouter un partenaire</a>
                    </li>
                    <li>
                        <a href="{{route('partenaires.index')}}">Liste des partenaires</a>
                    </li>
                </ul>
            </div>
        </li>

      
        </li>

        <li class="side-nav-title">User</li>

      

        <li class="side-nav-item">
            <a href="{{route('add_user')}}"  class="side-nav-link">
                <i class="uil uil-user-plus"></i>

                <span> Ajouter un utilisateur </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a  href="{{route('show_users')}}" class="side-nav-link">
                <i class="uil uil-users-alt"></i>
                <span> Liste des utilisateurs </span>
               
            </a>
         
        </li>
        <li class="side-nav-item">
            <a  href="#"  class="side-nav-link">
                <i class="uil uil-minus-circle"></i>
                <span>Déconnexion</span>
              
            </a>
         
        </li>

       

     
     

     


    </ul>
    <!--- End Sidemenu -->

    <div class="clearfix"></div>
</div>
</div>