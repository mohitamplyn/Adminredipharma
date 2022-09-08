<div class=" page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
           <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/deshboard')}}">
                    <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                    <span class="menu-title">Dashboard</span>
                </a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/contact')}}">
                    <span class="icon-bg"><i class="mdi mdi-contact-mail menu-icon"></i></span>
                    <span class="menu-title">Contact</span>
                </a>
                </li>

                <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                    <span class="menu-title">Product</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/product')}}">List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/product-add')}}">Add</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/product-archive')}}">Archived</a></li>
                    </ul>
                </div>
                </li>
            
                
                <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                    <span class="menu-title">Settings</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/login')}}">change password</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/login')}}">forget password</a></li>
                    </ul>
                </div>
                </li>
                
                <li class="nav-item ">
                <div class="sidebar-user-menu">
                    <a  href="{{ url('admin/login')}}"  class="nav-link">
                        <span class="icon-bg"><i class="mdi mdi-logout menu-icon"></i></span>
                    <span class="menu-title">Log Out</span></a>
                </div>
                </li>
           </ul>
        </nav>
</div>