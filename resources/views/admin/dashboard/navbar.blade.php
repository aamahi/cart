<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{route('category')}}">
                    <i class="fa fa-tag"></i>
                    <span>Category</span>
                </a>
            </li>


            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Product</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('addProduct')}}">Add Product</a></li>
                    <li><a  href="{{route('product')}}">All Product</a></li>

                </ul>
            </li>


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
