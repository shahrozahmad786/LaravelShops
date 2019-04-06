 

<div class="sidebar" data-color="purple" data-background-color="white" data-image="admin/assets/img/sidebar-1.jpg">


 <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  @if(request()->url() ==route('admin/panel-admin')) {{'active'}} @endif"  ">
            <a class="nav-link" href="{{URL('admin/panel-admin')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
        
 
          <li class="nav-item  @if(request()->url() ==route('admin/product')) {{'active'}} @endif" ">
            <a class="nav-link" href="{{URL('/admin/product')}}">
              <i class="material-icons">shopping_cart</i>
              <p>Products</p>
            </a>
          </li>
  
          
          <li class="nav-item  @if(request()->url() ==route('admin/category')) {{'active'}} @endif" ">
            <a class="nav-link" href="{{URL('admin/category')}}">
              <i class="material-icons">label</i>
              <p>Category</p>
            </a>
          </li>
      
        
        </ul>
      </div>


