 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('about_admin') ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>About</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('pendidikan_admin') ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Pendidikan</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('pekerjaan_admin') ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Pekerjaan</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('contactadmin') ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Contact</span></a>
     </li>


     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->