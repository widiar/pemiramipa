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
         <li class="nav-item">
           <a href="/panduan" class="nav-link{{request()->is('panduan') ? ' active' : '' }}">
             <i class="nav-icon fas fa-book-open"></i>
             <p>
               Panduan
             </p>
           </a>
         </li>
         @if(auth()->user()->role==0 || auth()->user()->role==2)
         <li class="nav-item">
           <a href="/voting" class="nav-link{{request()->is('voting') ? ' active' : '' }}">
             <i class="nav-icon fas fa-vote-yea"></i>
             <p>
               Voting
             </p>
           </a>
         </li>
         @endif
         @if(auth()->user()->role==2)
         <li class="nav-item">
           <a href="/superadmin" class="nav-link{{request()->is('superadmin') ? ' active' : '' }}">
             <i class="nav-icon fas fa-vote-yea"></i>
             <p>
               SuperAdmin
             </p>
           </a>
         </li>
         @endif
         @if(auth()->user()->role == 1 || auth()->user()->role==2)
         <div class="garis-sidebar"></div>
         <li class="nav-item">
           <a href="/verifikasipemilih" class="nav-link{{request()->is('verifikasipemilih') ? ' active' : '' }}">
             <i class="nav-icon fas fa-user-check"></i>
             <p>
               Verifikasi Pemilih
             </p>
           </a>
         </li>
         <!-- <li class="nav-item">
           <a href="/admintambah" class="nav-link{{request()->is('admintambah') ? ' active' : '' }}">
             <i class="nav-icon fas fa-user-plus"></i>
             <p>
               Tambah Admin
             </p>
           </a>
         </li> -->
         @endif
         <div class="garis-sidebar"></div>
         <li class="nav-item">
           <a href="/datakandidat" class="nav-link{{request()->is('datakandidat') ? ' active' : '' }}">
             <i class="nav-icon fas fa-id-card"></i>
             <p>
               Data Kandidat
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="/datasuara" class="nav-link{{request()->is('datasuara') ? ' active' : '' }}">
             <i class="nav-icon fas fa-vote-yea"></i>
             <p>
               Data Suara
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
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>