<template>
    <div>
        <div class="backdrop"></div>
        <section class="header-part">
            <div class="header-top alert fade show">
                <p>
                    20% Discount All New Customers
                    <a href="register.html">get register</a>
                </p>
                <button data-bs-dismiss="alert">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="container">
                <div class="header-content">
                    <div class="header-media-group">
                        <button class="header-user">
                            <img src="/frontend/images/user.png" alt="user" /></button><a href="index.html"><img
                                src="/frontend/images/logo.png" alt="logo" /></a><button class="header-src">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <a href="index.html" class="header-logo"><img src="/baitslogo.png" alt="logo" /></a><a
                        href="http://127.0.0.1:8000/admin-login" class="header-widget" title="My Account"><img src="/frontend/images/user.png"
                            alt="user" /><span>join</span></a>
                    <form class="header-form">
                        <input type="text" placeholder="Search anything..." /><button><i
                                class="fas fa-search"></i></button>
                    </form>
                    <div class="header-widget-group">
                        <a href="compare.html" class="header-widget" title="Compare List"><i
                                class="fas fa-random"></i><sup>0</sup></a><a href="wishlist.html" class="header-widget"
                            title="Wishlist"><i class="fas fa-heart"></i><sup>0</sup></a><button
                            class="header-widget header-cart" title="Cartlist">
                            <i class="fas fa-shopping-basket"></i><sup>9+</sup><span>total
                                price<small>$345.00</small></span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <nav class="navbar-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-content">
                            <ul class="navbar-list">
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link" href="#">home</a>
                                </li>

                                

                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">pages</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="#">offers</a></li>
                                        <li>
                                            <a href="#">my profile</a>
                                        </li>
                                        <li>
                                            <a href="#">about us</a>
                                        </li>
                                        <li>
                                            <a href="#">privacy policy</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <div class="navbar-select-group">
                                <div class="navbar-select">
                                    <i class="fas fa-flag"></i><select class="select">
                                        <option value="english" selected>english</option>
                                        <option value="bangali">bangali</option>
                                        <option value="arabic">arabic</option>
                                    </select>
                                </div>
                                <div class="navbar-select">
                                    <i class="fas fa-funnel-dollar"></i><select class="select">
                                        <option value="english" selected>doller</option>
                                        <option value="bangali">pound</option>
                                        <option value="arabic">taka</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- mobile category -->
        <aside class="category-sidebar">
            <div class="category-header">
                <h4 class="category-title">
                    <i class="fas fa-align-left"></i><span>categories</span>
                </h4>
                <button class="category-close">
                    <i class="icofont-close"></i>
                </button>
            </div>
            <ul class="category-list">
                <li class="category-item" v-for="(category, index) in categories" :key="index">
                    <router-link :to="`/product-by-category/${category.id}`" class="category-link dropdown-link"><i
                            class="flaticon-vegetable"></i><span>{{category.category_name_en}}</span>
                        </router-link>
                    <ul class="dropdown-list">
                        <li v-for="(subcategory,index) in category.subcategories" :key="index"><a href="#">{{subcategory.subcategory_name_en}}</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="category-footer">
                <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
            </div>
        </aside>
        <!-- mobile category end -->
        <aside class="cart-sidebar">
            <div class="cart-header">
                <div class="cart-total">
                    <i class="fas fa-shopping-basket"></i><span>total item (5)</span>
                </div>
                <button class="cart-close">
                    <i class="icofont-close"></i>
                </button>
            </div>
            <ul class="cart-list">
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="/frontend/images/product/01.jpg" alt="product" /></a><button
                            class="cart-delete">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6>
                                <a href="product-single.html">existing product name</a>
                            </h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus">
                                    <i class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1" /><button
                                    class="action-plus" title="Quantity Plus">
                                    <i class="icofont-plus"></i>
                                </button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="/frontend/images/product/02.jpg" alt="product" /></a><button
                            class="cart-delete">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6>
                                <a href="product-single.html">existing product name</a>
                            </h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus">
                                    <i class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1" /><button
                                    class="action-plus" title="Quantity Plus">
                                    <i class="icofont-plus"></i>
                                </button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="/frontend/images/product/03.jpg" alt="product" /></a><button
                            class="cart-delete">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6>
                                <a href="product-single.html">existing product name</a>
                            </h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus">
                                    <i class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1" /><button
                                    class="action-plus" title="Quantity Plus">
                                    <i class="icofont-plus"></i>
                                </button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="/frontend/images/product/04.jpg" alt="product" /></a><button
                            class="cart-delete">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6>
                                <a href="product-single.html">existing product name</a>
                            </h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus">
                                    <i class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1" /><button
                                    class="action-plus" title="Quantity Plus">
                                    <i class="icofont-plus"></i>
                                </button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="/frontend/images/product/05.jpg" alt="product" /></a><button
                            class="cart-delete">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6>
                                <a href="product-single.html">existing product name</a>
                            </h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus">
                                    <i class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1" /><button
                                    class="action-plus" title="Quantity Plus">
                                    <i class="icofont-plus"></i>
                                </button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="cart-footer">
                <button class="coupon-btn">Do you have a coupon code?</button>
                <form class="coupon-form">
                    <input type="text" placeholder="Enter your coupon code" /><button
                        type="submit"><span>apply</span></button>
                </form>
                <a class="cart-checkout-btn" href="checkout.html"><span class="checkout-label">Proceed to
                        Checkout</span><span class="checkout-price">$369.78</span></a>
            </div>
        </aside>
        <aside class="nav-sidebar">
            <div class="nav-header">
                <a href="#"><img src="/frontend/images/logo.png" alt="logo" /></a><button class="nav-close">
                    <i class="icofont-close"></i>
                </button>
            </div>
            <div class="nav-content">
                <div class="nav-btn">
                    <a href="login.html" class="btn btn-inline"><i class="fa fa-unlock-alt"></i><span>join
                            here</span></a>
                </div>
                <div class="nav-select-group">
                    <div class="nav-select">
                        <i class="icofont-world"></i><select class="select">
                            <option value="english" selected>English</option>
                            <option value="bangali">Bangali</option>
                            <option value="arabic">Arabic</option>
                        </select>
                    </div>
                    <div class="nav-select">
                        <i class="icofont-money"></i><select class="select">
                            <option value="english" selected>Doller</option>
                            <option value="bangali">Pound</option>
                            <option value="arabic">Taka</option>
                        </select>
                    </div>
                </div>
                <ul class="nav-list">
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                        <ul class="dropdown-list">
                            <li><a href="home-grid.html">Home grid</a></li>
                            <li><a href="index.html">Home index</a></li>
                            <li>
                                <a href="home-classic.html">Home classic</a>
                            </li>
                            <li>
                                <a href="home-standard.html">Home standard<span class="menu-badge">new</span></a>
                            </li>
                            <li>
                                <a href="home-category.html">Home category</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                        <ul class="dropdown-list">
                            <li>
                                <a href="shop-5column.html">shop 5 column</a>
                            </li>
                            <li>
                                <a href="shop-4column.html">shop 4 column<span class="menu-badge">new</span></a>
                            </li>
                            <li>
                                <a href="shop-3column.html">shop 3 column</a>
                            </li>
                            <li>
                                <a href="shop-2column.html">shop 2 column</a>
                            </li>
                            <li>
                                <a href="shop-1column.html">shop 1 column<span class="menu-badge">new</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                        <ul class="dropdown-list">
                            <li><a href="product-tab.html">product tab</a></li>
                            <li>
                                <a href="product-grid.html">product grid<span class="menu-badge">new</span></a>
                            </li>
                            <li>
                                <a href="product-video.html">product video<span class="menu-badge">new</span></a>
                            </li>
                            <li>
                                <a href="product-simple.html">product simple</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                        <ul class="dropdown-list">
                            <li><a href="profile.html">profile</a></li>
                            <li><a href="wishlist.html">wishlist</a></li>
                            <li><a href="compare.html">compare</a></li>
                            <li><a href="checkout.html">checkout</a></li>
                            <li><a href="orderlist.html">order history</a></li>
                            <li><a href="invoice.html">order invoice</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentic</a>
                        <ul class="dropdown-list">
                            <li><a href="login.html">login</a></li>
                            <li><a href="register.html">register</a></li>
                            <li>
                                <a href="reset-password.html">reset password</a>
                            </li>
                            <li>
                                <a href="change-password.html">change password</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                        <ul class="dropdown-list">
                            <li><a href="blog-grid.html">blog grid</a></li>
                            <li>
                                <a href="blog-standard.html">blog standard</a>
                            </li>
                            <li>
                                <a href="blog-details.html">blog details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link" href="offer.html"><i class="icofont-sale-discount"></i>offers</a>
                    </li>
                    <li>
                        <a class="nav-link" href="profile.html"><i class="icofont-user-alt-3"></i>profile</a>
                    </li>
                    <li>
                        <a class="nav-link" href="wishlist.html"><i class="icofont-heart"></i>wishlist</a>
                    </li>
                    <li>
                        <a class="nav-link" href="checkout.html"><i class="icofont-checked"></i>checkout</a>
                    </li>
                    <li>
                        <a class="nav-link" href="orderlist.html"><i class="icofont-settings"></i>order history</a>
                    </li>
                    <li>
                        <a class="nav-link" href="faq.html"><i class="icofont-question-circle"></i>need help</a>
                    </li>
                    <li>
                        <a class="nav-link" href="contact.html"><i class="icofont-contacts"></i>contact us</a>
                    </li>
                    <li>
                        <a class="nav-link" href="login.html"><i class="icofont-logout"></i>logout</a>
                    </li>
                </ul>
                <div class="nav-info-group">
                    <div class="nav-info">
                        <i class="icofont-ui-touch-phone"></i>
                        <p>
                            <small>call us</small><span>(+880) 183 8288 389</span>
                        </p>
                    </div>
                    <div class="nav-info">
                        <i class="icofont-ui-email"></i>
                        <p>
                            <small>email us</small><span>support@organe.com</span>
                        </p>
                    </div>
                </div>
                <div class="nav-footer">
                    <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
                </div>
            </div>
        </aside>

        <menu class="mobile-menu"><a href="index.html" title="Home Page">
                <i class="fas fa-home"></i><span>Home</span></a><button class="cate-btn" title="Category List">
                <i class="fas fa-list"></i><span>category</span></button><button class="cart-btn" title="Cartlist">
                <i class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup></button><a href="wishlist.html"
                title="Wishlist"><i class="fas fa-heart"></i><span>wishlist</span><sup>0</sup></a><a href="compare.html"
                title="Compare List"><i class="fas fa-random"></i><span>compare</span><sup>0</sup></a>
        </menu>
        <!-- product view model -->
        <div class="modal fade" id="product_view">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                    <div class="product-view">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="view-gallery">
                                    <div class="view-label-group">
                                        <label class="view-label new">new</label><label
                                            class="view-label off">-10%</label>
                                    </div>
                                    <ul class="preview-slider slider-arrow">
                                        <li>
                                            <img id="image_preview" :src="
                                                    view_product.product_thambnail
                                                " alt="product" />
                                        </li>
                                    </ul>
                                    <ul class="thumb-slider">
                                        <li v-for="images in view_product.multiimages" :key="images">
                                            <img id="mulimg" :src="images.image" alt="product" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="view-details">
                                    <h3 class="view-name">
                                        <a href="#">{{
                                            view_product.product_name_en
                                            }}</a>
                                    </h3>
                                    <div class="view-meta">
                                        <p>SKU:<span>1234567</span></p>
                                        <p>
                                            BRAND:<a href="#">{{
                                                view_product.brand_name_en
                                                }}</a>
                                        </p>
                                    </div>
                                    <div class="view-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3 reviews)</a>
                                    </div>
                                    <h3 class="view-price">
                                        <del>Tk
                                            {{
                                            view_product.selling_price
                                            }}</del><span>Tk {{ view_product.discount_price
                                            }}<small></small></span>
                                    </h3>
                                    <p class="view-desc" v-html="view_product.short_descp_en"></p>
                                    <div class="view-list-group">
                                        <label class="view-list-title">tags:</label>
                                        <ul class="view-tag-list">
                                            <li><a href="#">organic</a></li>
                                            <li><a href="#">vegetable</a></li>
                                            <li><a href="#">chilis</a></li>
                                        </ul>
                                    </div>
                                    <div class="view-list-group">
                                        <label class="view-list-title">Share:</label>
                                        <ul class="view-share-list">
                                            <li>
                                                <a href="#" class="icofont-facebook" title="Facebook"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icofont-twitter" title="Twitter"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icofont-linkedin" title="Linkedin"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="icofont-instagram" title="Instagram"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="view-add-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i><span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i></button><input class="action-input"
                                                title="Quantity Number" type="text" name="quantity" value="1" /><button
                                                class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="view-action-group">
                                        <a class="view-wish wish" href="#" title="Add Your Wishlist"><i
                                                class="icofont-heart"></i><span>add to wish</span></a><a
                                            class="view-compare" href="compare.html" title="Compare This Item"><i
                                                class="fas fa-random"></i><span>Compare This</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product view model -->

        <!-- main category -->
        <section class="banner-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="banner-category">
                            <div class="banner-category-head">
                                <i class="fas fa-bars"></i><span>categories</span>
                            </div>
                            <ul class="banner-category-list">
                                <li class="banner-category-item" v-for="(category, index) in categories" :key="index">
                                    <router-link :to="`/product-by-category/${category.id}`"><i class="flaticon-vegetable"></i><span>{{
                                            category.category_name_en
                                            }}</span>
                                    </router-link>

                                    <div class="banner-category-dropdown" v-for="(subcategory,
                                        index) in category.subcategories" :key="index">
                                        <div class="banner-sub-category">
                                            <ul>
                                                <li v-for="(subcategory,
                                                    index) in category.subcategories" :key="index">
                                                    <a href="#">{{
                                                        subcategory.subcategory_name_en
                                                        }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <main-Slider></main-Slider>
                </div>
            </div>
        </section>
        <!-- main category end -->
        <section class="section intro-part">
            <div class="container">
                <div class="row intro-content">
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="intro-content">
                                <h5>free home delivery</h5>
                                <p>
                                    Lorem ipsum dolor sit amet adipisicing elit
                                    nobis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <div class="intro-content">
                                <h5>instant return policy</h5>
                                <p>
                                    Lorem ipsum dolor sit amet adipisicing elit
                                    nobis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="intro-content">
                                <h5>quick support system</h5>
                                <p>
                                    Lorem ipsum dolor sit amet adipisicing elit
                                    nobis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="intro-content">
                                <h5>secure payment way</h5>
                                <p>
                                    Lorem ipsum dolor sit amet adipisicing elit
                                    nobis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section deals-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>best deals on items</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="countdown deals-clock" data-countdown="2021/09/09">
                            <span class="countdown-time"><span>00</span><small>days</small></span><span
                                class="countdown-time"><span>00</span><small>hours</small></span><span
                                class="countdown-time"><span>00</span><small>minutes</small></span><span
                                class="countdown-time"><span>00</span><small>seconds</small></span>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
                    <div class="col" v-for="(product, index) in Products" :key="index">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-10%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i></button>
                                    <router-link class="product-image" :to="`/product-view/${product.product_slug_en}`">
                                    <img :src="product.product_thambnail" alt="product" /></router-link>

                                <div class="product-widget">
                                    
                                    <a title="Product View" class="fas fa-eye"
                                        @click="product_view(product.product_slug_en)"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="#">{{
                                        product.product_name_en
                                        }}</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>{{ product.selling_price
                                        }}<small>TK</small></del><span>{{ product.discount_price
                                        }}<small>TK</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i><span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus">
                                        <i class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1" /><button
                                        class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="shop-4column.html" class="btn btn-inline"><i class="fas fa-eye"></i><span>view all
                                    deals</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section feature-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>our featured items</h2>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col" v-for="(featureproduct, index) in FeaturedProducts" :key="index">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">feature</label>
                                </div>
                                <button class="feature-wish wish">
                                    <i class="fas fa-heart"></i></button>

                                    <router-link class="feature-image" :to="`/product-view/${featureproduct.product_slug_en}`">
                                        <img :src="featureproduct.product_thambnail" alt="product" />
                                    </router-link>

                                <div class="feature-widget">
                                    <a title="Product View"  class="fas fa-eye" @click="product_view(featureproduct.id)"></a>
                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="product-video.html">{{
                                        featureproduct.product_name_en
                                        }}</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3 Reviews)</a>
                                </div>
                                <h6 class="feature-price">
                                    <del>{{ featureproduct.selling_price
                                        }}<small>TK</small></del><span>{{ featureproduct.discount_price
                                        }}<small>TK</small></span>
                                </h6>
                                <p class="feature-desc" v-html="featureproduct.short_descp_en"></p>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i><span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus">
                                        <i class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1" /><button
                                        class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="shop-4column.html" class="btn btn-outline"><i class="fas fa-eye"></i><span>view all
                                    feature</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section promo-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="promo-content">
                            <h3>only <span>$45</span>per kilogram</h3>
                            <h2>fresh Blueberries</h2>
                            <a href="shop-4column.html" class="btn btn-inline"><i
                                    class="fas fa-shopping-basket"></i><span>shop now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section deals-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>New Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 row-cols-xl-6">
                    <div class="col" v-for="(product, index) in getnewProduct" :key="index">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-10%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i></button>
                                    <router-link class="product-image" :to="`/product-view/${product.product_slug_en}`">
                                    <img :src="product.product_thambnail" alt="product" />
                                    </router-link>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product View" class="fas fa-eye" @click="product_view(product.id)"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="#">{{
                                        product.product_name_en
                                        }}</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>{{ product.selling_price
                                        }}<small>TK</small></del><span>{{ product.discount_price
                                        }}<small>TK</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i><span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus">
                                        <i class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1" /><button
                                        class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="shop-4column.html" class="btn btn-inline"><i class="fas fa-eye"></i><span>view all
                                    deals</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section niche-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Browse by Top Niche</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#top-sales" class="tab-link active" data-bs-toggle="tab"><i
                                        class="icofont-price"></i><span>top sales</span></a>
                            </li>
                            <li>
                                <a href="#top-rate" class="tab-link" data-bs-toggle="tab">
                                    <i class="icofont-star"></i><span>top rating</span></a>
                            </li>
                            <li>
                                <a href="#top-disc" class="tab-link" data-bs-toggle="tab">
                                    <i  class="icofont-sale-discount"></i><span>top discount</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane active" id="top-sales">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                        <div class="col" v-for="(product, index) in getnewProduct" :key="index">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text sale">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button>
                                        <router-link class="product-image" :to="`/product-view/${product.product_slug_en}`"><img src="/frontend/images/product/01.jpg"
                                            alt="product" />
                                            </router-link>

                                    <div class="product-widget">
                                       <a title="Product View" class="fas fa-eye" @click="product_view(product.id)"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="top-rate">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/11.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/12.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/13.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/14.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/15.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/16.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card product-disable">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/17.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/18.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/19.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/20.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="top-disc">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/06.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del><span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/07.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del><span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/08.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del><span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/09.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del><span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/10.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del><span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/11.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del><span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/12.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del><span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/13.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del><span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/14.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del><span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i></button><a class="product-image"
                                        href="product-video.html"><img src="/frontend/images/product/15.jpg"
                                            alt="product" /></a>

                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                            title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                            title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="icofont-star"></i><a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del><span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i><span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus">
                                            <i class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1" /><button
                                            class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="shop-4column.html" class="btn btn-outline"><i class="fas fa-eye"></i><span>view all
                                    niche</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section deals-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Category By Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-2 row-cols-lg-6 row-cols-xl-6">
                    <div class="col " v-for="(category, index) in categories" :key="index">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img :src="category.category_image" alt="category" />
                                <div class="category-overlay">
                                    <a href="#"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h6>{{ category.category_name_en }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="shop-4column.html" class="btn btn-inline"><i class="fas fa-eye"></i><span>view all
                                    deals</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section brand-part">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2>shop by brands</h2>
                        </div>
                    </div>
                </div>
                <div class="brand-slider slider-arrow">
                    <div class="brand-wrap">
                        <div class="brand-media">
                            <img src="/frontend/images/brand/01.jpg" alt="brand" />
                            <div class="brand-overlay">
                                <a href="#"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="brand-meta">
                            <h4>natural organe</h4>
                            <p>(45 items)</p>
                        </div>
                    </div>
                    <div class="brand-wrap">
                        <div class="brand-media">
                            <img src="/frontend/images/brand/02.jpg" alt="brand" />
                            <div class="brand-overlay">
                                <a href="#"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="brand-meta">
                            <h4>vegan lover</h4>
                            <p>(45 items)</p>
                        </div>
                    </div>
                    <div class="brand-wrap">
                        <div class="brand-media">
                            <img src="/frontend/images/brand/03.jpg" alt="brand" />
                            <div class="brand-overlay">
                                <a href="#"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="brand-meta">
                            <h4>organic foody</h4>
                            <p>(45 items)</p>
                        </div>
                    </div>
                    <div class="brand-wrap">
                        <div class="brand-media">
                            <img src="/frontend/images/brand/04.jpg" alt="brand" />
                            <div class="brand-overlay">
                                <a href="#"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="brand-meta">
                            <h4>ecomart limited</h4>
                            <p>(45 items)</p>
                        </div>
                    </div>
                    <div class="brand-wrap">
                        <div class="brand-media">
                            <img src="/frontend/images/brand/05.jpg" alt="brand" />
                            <div class="brand-overlay">
                                <a href="#"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="brand-meta">
                            <h4>fresh fortune</h4>
                            <p>(45 items)</p>
                        </div>
                    </div>
                    <div class="brand-wrap">
                        <div class="brand-media">
                            <img src="/frontend/images/brand/06.jpg" alt="brand" />
                            <div class="brand-overlay">
                                <a href="#"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="brand-meta">
                            <h4>econature</h4>
                            <p>(45 items)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section blog-part">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2>Read our articles</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-slider slider-arrow">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#"><img src="/frontend/images/blog/01.jpg"
                                            alt="blog" /></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i><span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i><span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident
                                            Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Alias autem recusandae
                                        deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#"><span>read more</span><i
                                            class="icofont-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#"><img src="/frontend/images/blog/02.jpg"
                                            alt="blog" /></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i><span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i><span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident
                                            Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Alias autem recusandae
                                        deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#"><span>read more</span><i
                                            class="icofont-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#"><img src="/frontend/images/blog/03.jpg"
                                            alt="blog" /></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i><span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i><span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident
                                            Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Alias autem recusandae
                                        deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#"><span>read more</span><i
                                            class="icofont-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#"><img src="/frontend/images/blog/04.jpg"
                                            alt="blog" /></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i><span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i><span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident
                                            Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Alias autem recusandae
                                        deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#"><span>read more</span><i
                                            class="icofont-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="blog-grid.html" class="btn btn-outline"><i class="fas fa-eye"></i><span>view all
                                    blog</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="news-part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 col-xl-7">
                        <div class="news-text">
                            <h2>Get 20% Discount for Subscriber</h2>
                            <p>
                                Lorem ipsum dolor consectetur adipisicing
                                accusantium
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <form class="news-form">
                            <input type="text" placeholder="Enter Your Email Address" /><button>
                                <span><i class="icofont-ui-email"></i>Subscribe</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <a class="footer-logo" href="#"><img src="/frontend/images/logo.png" alt="logo" /></a>

                            <p class="footer-desc">
                                Adipisci asperiores ipsum ipsa repellat
                                consequatur repudiandae quisquam assumenda dolor
                                perspiciatis sit ipsum dolor amet.
                            </p>
                            <ul class="footer-social">
                                <li>
                                    <a class="icofont-facebook" href="#"></a>
                                </li>
                                <li>
                                    <a class="icofont-twitter" href="#"></a>
                                </li>
                                <li>
                                    <a class="icofont-linkedin" href="#"></a>
                                </li>
                                <li>
                                    <a class="icofont-instagram" href="#"></a>
                                </li>
                                <li>
                                    <a class="icofont-pinterest" href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget contact">
                            <h3 class="footer-title">contact us</h3>
                            <ul class="footer-contact">
                                <li>
                                    <i class="icofont-ui-email"></i>
                                    <p>
                                        <span>support@organe.com</span><span>carrer@organe.com</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-ui-touch-phone"></i>
                                    <p>
                                        <span>+120 279 532 13</span><span>+120 279 532 14</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <p>
                                        1Hd- 50, 010 Avenue, NY 90001 United
                                        States
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">quick Links</h3>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Best Seller</a></li>
                                    <li><a href="#">New Arrivals</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Location</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Carrer</a></li>
                                    <li><a href="#">Faq</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">Download App</h3>
                            <p class="footer-desc">
                                Lorem ipsum dolor sit amet tenetur dignissimos
                                ipsum eligendi autem obcaecati minus ducimus
                                totam reprehenderit exercitationem!
                            </p>
                            <div class="footer-app">
                                <a href="#"><img src="/frontend/images/google-store.png" alt="google" /></a><a
                                    href="#"><img src="/frontend/images/app-store.png" alt="app" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom">
                            <p class="footer-copytext">
                                &copy; All Copyrights Reserved by
                                <a target="_blank" href="https://baitsbd.com">baitsbd</a>
                            </p>
                            <div class="footer-card">
                                <a href="#"><img src="/frontend/images/payment/jpg/01.jpg" alt="payment" /></a><a
                                    href="#"><img src="/frontend/images/payment/jpg/02.jpg" alt="payment" /></a><a
                                    href="#"><img src="/frontend/images/payment/jpg/03.jpg" alt="payment" /></a><a
                                    href="#"><img src="/frontend/images/payment/jpg/04.jpg" alt="payment" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
    import Slider from "./Slider";
    export default {
        components: {
            "main-Slider": Slider
        },
        name: "FrontendHome",
        data: function () {
            return {
                form: new Form({}),
                view_product: {}
            };
        },

        mounted() {
            this.$store.dispatch("productHotDeal");
            this.$store.dispatch("category");
            this.$store.dispatch("getFeaturedproducts");
            this.$store.dispatch("getnewProduct");
        },
        computed: {
            Products() {
                return this.$store.getters.productHotDeal;
            },
            categories() {
                return this.$store.getters.category;
            },
            FeaturedProducts() {
                return this.$store.getters.getFeaturedproducts;
            },
            getnewProduct() {
                return this.$store.getters.getnewProduct;
            }
            // frontlang() {
            //     return this.$store.getters.frontlang;
            // }
        },
        methods: {
            product_view($product_slug_en) {
                $("#product_view").modal("show");

                axios.get("api/api/v1/frontend/product-view/" + $product_slug_en).then(res => {
                    this.view_product = res.data.data;
                });
            }

            // englishLanguage() {
            //     localStorage.setItem("frontlang", "english");
            //     this.$store.dispatch("frontlang");
            // },
            // banglaLanguage() {
            //     localStorage.setItem("frontlang", "bangla");
            //     this.$store.dispatch("frontlang");
            // }
        }
    };
</script>

<style scoped>
    #image_preview {
        max-width: 500px;
        max-height: 600px;
        object-fit: cover;
        cursor: pointer;
        border: 2px solid black;
    }

    .thumb-slider {
        display: block ruby;
        height: 80px;
        width: 80px;
        border: 1px solid #ccc;
    }
</style>