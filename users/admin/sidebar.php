<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
   <!--  <img src="../../dist/img/government-of-kerala-logo-png-5.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8"> -->
    <span class="brand-text font-weight-light">Factory Management System</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="?f=dashboard" id="menu_dashboard" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          </li>
          
         
            <li class="nav-item">
                <a href="?f=orders" id="menu_orders" class="nav-link ">
                 <i class="fas fa-folder-open"></i>
                  <p> Orders</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="?f=job_card"  id="menu_job_card"  class="nav-link">
                 <i class="fas fa-cogs"></i>
                  <p> Job Cards</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="?f=work_log" id="menu_work_log"  class="nav-link">
                 <i class="fas fa-clipboard-list"></i>
                  <p>  Work Log</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="?f=purchase" id="menu_purchase"  class="nav-link">
                 <i class="fas fa-cash-register"></i>
                  <p> Purchase</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                 <i class="fas fa-industry"></i>
                  <p> Consumption</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                 <i class="fas fa-receipt"></i>
                  <p> Receipts</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-money-bill-alt"></i>
                  <p> Payments</p>
                </a>
              </li>
           

              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?f=list_fee_table" class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Reports 1</p>
                </a>
              </li>
              
            </ul>
          </li> 
          <li class="nav-item has-treeview" id="master_list">
            <a href="#" id="menu_masters" class="nav-link">
             <i class="fas fa-brain"></i>
              <p>
                Masters
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

               <li class="nav-item">
                <a href="?f=customer_master" id="menu_customer_master" class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Customer Master</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?f=product_master" id="menu_product_master" class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Product Master</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="?f=type_master" id="menu_type_master" class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Type Master</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="?f=size_master" id="menu_size_master" class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Size Master</p>
                </a>
              </li> 

               <li class="nav-item">
                <a href="?f=unit_master" id="menu_unit_master"  class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Units Master</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="?f=OrderStatus_master" id="menu_OrderStatus_master"  class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Order Status</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="?f=Machines_master" id="menu_Machines_master"  class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Machines</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?f=MatCategories_master" id="menu_MatCategories_master"  class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Material Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?f=Materials_master" id="menu_Materials_master"  class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Materials Master</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?f=Suppliers_master" id="menu_Suppliers_master"  class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Suppliers Master</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="?f=Employees_master" id="menu_Employees_master"  class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Employees Master</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?f=colours_master" id="menu_colours_master"  class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Colours Master</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?f=district_master" id="menu_district_master" class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> District Master</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?f=state_master" id="menu_state_master" class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> State Master</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="?f=country_master" id="menu_country_master" class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Country Master</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?f=order_frequency_master" id="menu_frequency_master" class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Order Frequeny Master</p>
                </a>
              </li>
            </ul>
          </li> 
            
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-sliders-h"></i>
                  <p> Settings</p>
                </a>
              </li>
           
         <!--  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Fee Management 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?f=list_fee_table" class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Fee Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> New Application Fee</p>
                </a>
              </li>
            </ul>
          </li>  -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>