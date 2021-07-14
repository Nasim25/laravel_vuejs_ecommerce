<div class="left-sidebar">

    <div class="left-sidebar-header">
        <div class="left-sidebar-title">Navigation</div>
        <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs"
             data-toggle-class="left-sidebar-collapsed" data-target="html">
            <span></span>
        </div>
    </div>

    <div id="left-nav" class="nano">
        <div class="nano-content">
            <nav>
                <ul class="nav nav-left-lines" id="main-nav">

                    <li class="active-item">
                        <router-link to="/home"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></router-link>
                    </li>
                    <li>
                        <router-link to="/brand"><i class="fa fa-home" aria-hidden="true"></i><span>Brand</span></router-link>
                    </li>
                    <li>
                        <router-link to="/category"><i class="fa fa-home" aria-hidden="true"></i><span>Category</span></router-link>
                    </li>
                    <li>
                        <router-link to="/subcategory"><i class="fa fa-home" aria-hidden="true"></i><span>Sub-Category</span></router-link>
                    </li>
                    <li>
                        <router-link to="/subsubcategory"><i class="fa fa-home" aria-hidden="true"></i><span>Sub-Sub-Category</span></router-link>
                    </li>

                    <li class="has-child-item close-item">
                        <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Product</span></a>
                        <ul class="nav child-nav level-1">
                            <li><router-link to="/product-create">Add Product</router-link></li>
                            <li><router-link to="/product-list">Product List</router-link></li>
                        </ul>
                    </li>

                    <li>
                        <router-link to="/slider"><i class="fa fa-home" aria-hidden="true"></i><span>Slider</span></router-link>
                    </li>

                    <li class="has-child-item close-item">
                        <a><i class="fa fa-cubes" aria-hidden="true"></i><span>UI Elements</span></a>
                        <ul class="nav child-nav level-1">
                            <li><a href="ui-elements_panels.html">Panels</a></li>
                            <li class="has-child-item close-item">
                                <a>Notifications</a>
                                <ul class="nav child-nav level-2 ">
                                    <li><a href="ui-elements_notifications-pnotify.html">PNotify</a></li>
                                    <li><a href="ui-elements_notifications-toastr.html">Toastr</a></li>
                                </ul>
                            </li>
                            <li><a href="ui-elements_animations-appear.html">Animations</a></li>
                            <li><a href="ui-elements_badges-tags.html">Badge & Tags</a></li>
                        </ul>
                    </li>


                </ul>
            </nav>
        </div>
    </div>
</div>
