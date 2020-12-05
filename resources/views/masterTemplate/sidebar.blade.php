 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-info elevation-4">
     <!-- Brand Logo -->
     <a href="/" class="brand-link">
         <img src="{{ asset('dist/img/logo pemira 2020.png') }}" alt="Logo Pemira" class="brand-image img-circle elevation-3" style="opacity: .8;padding:2px 5px 1px 5px">
         <span class="brand-text font-weight-light">PEMIRA</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">

         <!-- Sidebar Menu -->

         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 @if(auth()->user()->role==0)
                 <li class="nav-item">
                     <a href="/voting" class="nav-link{{request()->is('voting') ? ' active' : '' }}">
                         <i class="nav-icon fas fa-vote-yea"></i>
                         <p>
                             Voting
                         </p>
                     </a>
                 </li>
                 @endif
                 @if(auth()->user()->role==1 || auth()->user()->role==2)
                 <li class="nav-item">
                     <a href="/mulai" class="nav-link{{request()->is('mulai') ? ' active' : '' }}">
                         <i class="nav-icon fas fa-vote-yea"></i>
                         <p>
                             Admin Mulai
                         </p>
                     </a>
                 </li>
                 <div class="garis-sidebar"></div>
                 <li class="nav-item">
                     <a href="/verifikasipemilih" class="nav-link{{request()->is('verifikasipemilih') ? ' active' : '' }}">
                         <i class="nav-icon fas fa-user-check"></i>
                         <p>
                             Verifikasi Pemilih
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/adduser" class="nav-link{{request()->is('adduser') ? ' active' : '' }}">
                         <i class="nav-icon fas fa-vote-yea"></i>
                         <p>
                             Add User
                         </p>
                     </a>
                 </li>
                 <div class="garis-sidebar"></div>
                 <li class="nav-item">
                     <a href="/dashboard/ubahpassword" class="nav-link{{request()->is('dashboard/ubahpassword') ? ' active' : '' }}">
                         <i class="nav-icon fas fa-cogs"></i>
                         <p>
                             Ubah Password
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/logout" class="nav-link logout">
                         <i class="nav-icon fas fa-sign-out-alt"></i>
                         <p>
                             Logout
                         </p>
                     </a>
                 </li>
                 @endif
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>