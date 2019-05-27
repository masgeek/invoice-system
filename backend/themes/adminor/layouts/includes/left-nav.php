<?php

use yii\helpers\Html; ?>
<nav id="sidebar" class="nav-sidebar">
    <ul class="list-unstyled components" id="accordion">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="assets\images\faces\female\25.jpeg" alt="user-img" class="img-circle"></div>
                <div class="mb-2"><a href="#" class="" data-toggle="" aria-haspopup="true"
                                     aria-expanded="false"> <span
                                class="font-weight-semibold">Joyce Stewart</span> </a>
                    <br><span class="text-gray">Web Designer</span>
                </div>
            </div>
        </div>

        <li><?= Html::a('<i class="fa fa-desktop mr-2"></i> Dashboard', ['/site']) ?></li>

        <li class="">
            <a href="#pages" class="accordion-toggle wave-effect" data-toggle="collapse"
               aria-expanded="false">
                <i class="mdi mdi-file mr-2"></i> Pages
            </a>
            <ul class="collapse list-unstyled" id="pages" data-parent="#accordion">
                <li>
                    <a href="profile.html">Profile</a>
                </li>
                <li>
                    <a href="editprofile.html">Edit Profile</a>
                </li>
                <li>
                    <a href="email.html">Email</a>
                </li>
                <li>
                    <a href="emailservices.html">Email Inbox</a>
                </li>
                <li>
                    <a href="gallery.html" class=" wave-effect"> Gallery</a>
                </li>
                <li>
                    <a href="about.html">About Company</a>
                </li>
                <li>
                    <a href="company-history.html">Company History</a>
                </li>
                <li>
                    <a href="services.html">Services</a>
                </li>
                <li>
                    <a href="faq.html">FAQS</a>
                </li>
                <li>
                    <a href="terms.html">Terms and Conditions</a>
                </li>
                <li>
                    <a href="invoice.html">Invoice</a>
                </li>
                <li>
                    <a href="pricing.html">Pricing Tables</a>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li>
                    <a href="empty.html">Empty Page</a>
                </li>
                <li>
                    <a href="construction.html">Under Construction</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#Forms" class="accordion-toggle wave-effect" data-toggle="collapse"
               aria-expanded="false">
                <i class="mdi mdi-arrange-send-backward mr-2"></i> Forms
            </a>
            <ul class="collapse list-unstyled" id="Forms" data-parent="#accordion">
                <li>
                    <a href="form-elements.html">Form Elements</a>
                </li>
                <li>
                    <a href="form-wizard.html">Form-wizard Elements</a>
                </li>
                <li>
                    <a href="wysiwyag.html">Text Editor</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#Submenu1" class="accordion-toggle wave-effect" data-toggle="collapse"
               aria-expanded="false">
                <i class="fa fa-calendar mr-2"></i> Calendar
            </a>
            <ul class="collapse list-unstyled" id="Submenu1" data-parent="#accordion">
                <li>
                    <a href="calendar.html">Default calendar</a>
                </li>
                <li>
                    <a href="calendar2.html">Full calendar</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#Icons" class="accordion-toggle wave-effect" data-toggle="collapse"
               aria-expanded="false">
                <i class="fa fa-bandcamp mr-2"></i> Icons
            </a>
            <ul class="collapse list-unstyled" id="Icons" data-parent="#accordion">
                <li>
                    <a href="icons.html">Font Awesome</a>
                </li>
                <li>
                    <a href="icons2.html">Material Design Icons</a>
                </li>
                <li>
                    <a href="icons3.html">Simple Line Iocns</a>
                </li>
                <li>
                    <a href="icons4.html">Feather Icons</a>
                </li>
                <li>
                    <a href="icons5.html">Ionic Icons</a>
                </li>
                <li>
                    <a href="icons6.html">Flag Icons</a>
                </li>
                <li>
                    <a href="icons7.html">pe7 Icons</a>
                </li>
                <li>
                    <a href="icons8.html">Themify Icons</a>
                </li>
                <li>
                    <a href="icons9.html">Typicons Icons</a>
                </li>
                <li>
                    <a href="icons10.html">Weather Icons</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="maps.html" class=" wave-effect"><i class="fa fa-map-marker mr-2"></i> Maps</a>
        </li>
        <li class="">
            <a href="#Submenu2" class="accordion-toggle wave-effect" data-toggle="collapse"
               aria-expanded="false">
                <i class="fa fa-crosshairs mr-2"></i> User Pages
            </a>
            <ul class="collapse list-unstyled" id="Submenu2" data-parent="#accordion">
                <li>
                    <a href="login.html">Login</a>
                </li>
                <li>
                    <a href="register.html">Register</a>
                </li>
                <li>
                    <a href="forgot-password.html">Forgot password</a>
                </li>
                <li>
                    <a href="lockscreen.html">Lock screen</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#Submenu3" class="accordion-toggle wave-effect" data-toggle="collapse"
               aria-expanded="false">
                <i class="fa fa-table mr-2"></i> Tables
            </a>
            <ul class="collapse list-unstyled" id="Submenu3" data-parent="#accordion">
                <li>
                    <a href="tables.html">Default table</a>
                </li>
                <li>
                    <a href="datatable.html">Data Table</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#Submenu6" class="accordion-toggle wave-effect" data-toggle="collapse"
               aria-expanded="false">
                <i class="fa fa-shopping-cart mr-2"></i> E-commerce
            </a>
            <ul class="collapse list-unstyled" id="Submenu6" data-parent="#accordion">
                <li>
                    <a href="shop.html">Products</a>
                </li>
                <li>
                    <a href="shop-description.html">Product Details</a>
                </li>
                <li>
                    <a href="cart.html">Shopping Cart</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#Submenu5" class="accordion-toggle wave-effect" data-toggle="collapse"
               aria-expanded="false">
                <i class="fa fa-exclamation-triangle mr-2"></i> Error pages
            </a>
            <ul class="collapse list-unstyled" id="Submenu5" data-parent="#accordion">
                <li>
                    <a href="400.html">400 Error</a>
                </li>
                <li>
                    <a href="401.html">401 Error</a>
                </li>
                <li>
                    <a href="403.html">403 Error</a>
                </li>
                <li>
                    <a href="404.html">404 Error</a>
                </li>
                <li>
                    <a href="500.html">500 Error</a>
                </li>
                <li>
                    <a href="503.html">503 Error</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
