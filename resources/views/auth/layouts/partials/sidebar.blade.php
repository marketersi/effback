<style>
    /* --------------------------------------------new css--------------------------------------- */
ul.nav.nav-treeview.sub-menu {
    padding: 0 0 0 20px;
}
ul.nav.nav-treeview.sub-menu2 {
    padding: 0 0 0 30px;
}
.nav-treeview>.nav-item>.nav-link {
    color: #c2c7d0;
    font-size: 15px;
}
</style>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Marketersi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="height: 500px">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Contact Us Setting -->
                <!-- <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li> -->
                <li class="nav-item has-treeview {{ Request::is('contact*', 'project*', 'feedback*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('contact*', 'project*', 'feedback*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Contact Us Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('contact.index')}}" class="nav-link {{ Request::is('contact*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact Us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('project.index')}}" class="nav-link {{ Request::is('project*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Project</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('feedback.index') }}" class="nav-link {{ Request::is('feedback*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Feedback</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ request()->is('factow*', 'factowcard*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('factow*', 'factowcard*') ? 'active' : '' }}">
                       <i class="nav-icon fas fa-clipboard-check"></i>
                        <p>
                            Factow Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('factow.index')}}" class="nav-link {{ request()->is('factow*') && !request()->is('factowcard*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Factow</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('factowcard.index')}}" class="nav-link {{ request()->is('factowcard*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Factow Card</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview sub-menu {{ Request::is('calculator*','war-card*','war-title*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('calculator*','war-title*','war-card*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-calculator"></i>
                        <p>
                            Calculator Screen
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sub-menu2">
                        <li class="nav-item">
                            <a href="{{ route('calculator.index') }}"
                                class="nav-link {{ Request::is('calculator*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Calculator
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ Request::is('war-title*','war-card*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('war-title*','war-card*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Warranty Secttion
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('war-title.index') }}"
                                        class="nav-link {{ Request::is('war-title*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Title
                                            <!-- <i class="right fas fa-angle-left"></i> -->
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('war-card.index') }}"
                                        class="nav-link {{ Request::is('war-card*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Card
                                            <!-- <i class="right fas fa-angle-left"></i> -->
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ Request::is('homeherosection*', 'brandsection*', 'company*', 'companycard*', 'rating*', 'homesection1*', 'homesection2*', 'homesection3*', 'homesection4*', 'homesection5*', 'homesection6*', 'homesection7*','sliderimages*','clientrating*','clientfeedback*','summaryfeedback*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('homeherosection*', 'brandsection*', 'company*', 'companycard*', 'rating*', 'homesection1*', 'homesection2*', 'homesection3*', 'homesection4*', 'homesection5*', 'homesection6*', 'homesection7*','sliderimages*','clientrating*','clientfeedback*','summaryfeedback*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home Screen Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('homeherosection.index') }}" class="nav-link {{ Request::is('homeherosection*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Hero Section
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ Request::is('sliderimages*','clientrating*','clientfeedback*','summaryfeedback*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('sliderimages*','clientrating*','clientfeedback*','summaryfeedback*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Client Reviews
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('sliderimages.index') }}" class="nav-link {{ Request::is('sliderimages*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Slider Images
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('clientrating.index') }}" class="nav-link {{ Request::is('clientrating*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Client Rating
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('clientfeedback.index') }}" class="nav-link {{ Request::is('clientfeedback*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Client Feedback
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('summaryfeedback.index') }}" class="nav-link {{ Request::is('summaryfeedback*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Feedback Summary
                                        </p>
                                    </a>
                                </li>
                            </ul>
                
                    <li class="nav-item">
                        <a href="{{ route('brandsection.index') }}" class="nav-link {{ Request::is('brandsection*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                            <p>
                                Brand Section
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('company.index') }}" class="nav-link {{ request()->is('company*') && !request()->is('companycard*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                            <p>
                                Compnay Section
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('companycard.index') }}" class="nav-link {{ Request::is('companycard*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                            <p>
                                Company Card Section
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('rating.index') }}" class="nav-link {{ Request::is('rating*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                            <p>
                                Rating Section
                            </p>
                        </a>
                    </li>
                <li class="nav-item has-treeview sub-menu {{ Request::is('homesection1*', 'homesection2*', 'homesection3*', 'homesection4*', 'homesection5*', 'homesection6*', 'homesection7*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('homesection1*', 'homesection2*', 'homesection3*', 'homesection4*', 'homesection5*', 'homesection6*', 'homesection7*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Images With Description
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sub-menu2">
                        <li class="nav-item">
                            <a href="{{ route('homesection1.index') }}" class="nav-link {{ Request::is('homesection1*') ? 'active' : '' }}">
                            <i class="far fa-square nav-icon"></i>
                                <p>
                                    Section-1
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('homesection2.index') }}" class="nav-link {{ Request::is('homesection2*') ? 'active' : '' }}">
                            <i class="far fa-square nav-icon"></i>
                                <p>
                                    Section-2
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('homesection3.index') }}" class="nav-link {{ Request::is('homesection3*') ? 'active' : '' }}">
                            <i class="far fa-square nav-icon"></i>
                                <p>
                                    Section-3
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('homesection4.index') }}" class="nav-link {{ Request::is('homesection4*') ? 'active' : '' }}">
                            <i class="far fa-square nav-icon"></i>
                                <p>
                                    Section-4
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('homesection5.index') }}" class="nav-link {{ Request::is('homesection5*') ? 'active' : '' }}">
                            <i class="far fa-square nav-icon"></i>
                                <p>
                                    Section-5
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('homesection6.index') }}" class="nav-link {{ Request::is('homesection6*') ? 'active' : '' }}">
                            <i class="far fa-square nav-icon"></i>
                                <p>
                                    Section-6
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('homesection7.index') }}" class="nav-link {{ Request::is('homesection7*') ? 'active' : '' }}">
                            <i class="far fa-square nav-icon"></i>
                                <p>
                                    Section-7
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                </ul>
                </li>
                
                 <li class="nav-item has-treeview {{ Request::is('kreatywny-hero-section*', 'kreatywny-brand-section*', 'kreatywny-company*', 'kreatywny-companycard*', 'kreatywny-rating*', 'kreatywny-iwd-section1*', 'kreatywny-iwd-section2*', 'kreatywny-iwd-section3*', 'kreatywny-iwd-section4*', 'kreatywny-iwd-section5*', 'kreatywny-iwd-section6*', 'kreatywny-iwd-section7*', 'kreatywny-slider-images*', 'kreatywny-client-rating*', 'kreatywny-client-feedback*', 'kreatywny-summary-feedback*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Request::is('kreatywny-hero-section*', 'kreatywny-brand-section*', 'kreatywny-company*', 'kreatywny-companycard*', 'kreatywny-rating*', 'kreatywny-iwd-section1*', 'kreatywny-iwd-section2*', 'kreatywny-iwd-section3*', 'kreatywny-iwd-section4*', 'kreatywny-iwd-section5*', 'kreatywny-iwd-section6*', 'kreatywny-iwd-section7*', 'kreatywny-slider-images*', 'kreatywny-client-rating*', 'kreatywny-client-feedback*', 'kreatywny-summary-feedback*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Kreatywny montaż video Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('kreatywny-hero-section.index') }}"
                                class="nav-link {{ Request::is('kreatywny-hero-section*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Hero Section
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item has-treeview sub-menu {{ Request::is('kreatywny-slider-images*', 'kreatywny-client-rating*', 'kreatywny-client-feedback*', 'kreatywny-summary-feedback*') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ Request::is('kreatywny-slider-images*', 'kreatywny-client-rating*', 'kreatywny-client-feedback*', 'kreatywny-summary-feedback*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Client Reviews
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('kreatywny-slider-images.index') }}"
                                        class="nav-link {{ Request::is('kreatywny-slider-images*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Slider Images
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kreatywny-client-rating.index') }}"
                                        class="nav-link {{ Request::is('kreatywny-client-rating*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Client Rating
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kreatywny-client-feedback.index') }}"
                                        class="nav-link {{ Request::is('kreatywny-client-feedback*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Client Feedback
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kreatywny-summary-feedback.index') }}"
                                        class="nav-link {{ Request::is('kreatywny-summary-feedback*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Feedback Summary
                                        </p>
                                    </a>
                                </li>
                            </ul>

                        <li class="nav-item">
                            <a href="{{ route('kreatywny-brand-section.index') }}"
                                class="nav-link {{ Request::is('kreatywny-brand-section*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Brand Section
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kreatywny-company.index') }}"
                                class="nav-link {{ request()->is('kreatywny-company*') && !request()->is('kreatywny-companycard*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Compnay Section
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kreatywny-companycard.index') }}"
                                class="nav-link {{ Request::is('kreatywny-companycard*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Company Card Section
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kreatywny-rating.index') }}"
                                class="nav-link {{ Request::is('kreatywny-rating*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Rating Section
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item has-treeview sub-menu {{ Request::is('kreatywny-iwd-section1*', 'kreatywny-iwd-section2*', 'kreatywny-iwd-section3*', 'kreatywny-iwd-section4*', 'kreatywny-iwd-section5*', 'kreatywny-iwd-section6*', 'kreatywny-iwd-section7*') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ Request::is('kreatywny-iwd-section1*', 'kreatywny-iwd-section2*', 'kreatywny-iwd-section3*', 'kreatywny-iwd-section4*', 'kreatywny-iwd-section5*', 'kreatywny-iwd-section6*', 'kreatywny-iwd-section7*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Images With Description
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('kreatywny-iwd-section1.index') }}"
                                        class="nav-link {{ Request::is('kreatywny-iwd-section1*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-1
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kreatywny-iwd-section2.index') }}"
                                        class="nav-link {{ Request::is('kreatywny-iwd-section2*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-2
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kreatywny-iwd-section3.index') }}"
                                        class="nav-link {{ Request::is('kreatywny-iwd-section3*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-3
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kreatywny-iwd-section4.index') }}"
                                        class="nav-link {{ Request::is('kreatywny-iwd-section4*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-4
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kreatywny-iwd-section5.index') }}"
                                        class="nav-link {{ Request::is('kreatywny-iwd-section5*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-5
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kreatywny-iwd-section6.index') }}"
                                        class="nav-link {{ Request::is('kreatywny-iwd-section6*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-6
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kreatywny-iwd-section7.index') }}"
                                        class="nav-link {{ Request::is('kreatywny-iwd-section7*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-7
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ Request::is('profesjonalne-hero-section*', 'profesjonalne-brand-section*', 'profesjonalne-company*', 'profesjonalne-companycard*', 'profesjonalne-rating*', 'profesjonalne-iwd-section1*', 'profesjonalne-iwd-section2*', 'profesjonalne-iwd-section3*', 'profesjonalne-iwd-section4*', 'profesjonalne-iwd-section5*', 'profesjonalne-iwd-section6*', 'profesjonalne-iwd-section7*', 'profesjonalne-slider-images*', 'profesjonalne-client-rating*', 'profesjonalne-client-feedback*', 'profesjonalne-summary-feedback*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Request::is('profesjonalne-hero-section*', 'profesjonalne-brand-section*', 'profesjonalne-company*', 'profesjonalne-companycard*', 'profesjonalne-rating*', 'profesjonalne-iwd-section1*', 'profesjonalne-iwd-section2*', 'profesjonalne-iwd-section3*', 'profesjonalne-iwd-section4*', 'profesjonalne-iwd-section5*', 'profesjonalne-iwd-section6*', 'profesjonalne-iwd-section7*', 'profesjonalne-slider-images*', 'profesjonalne-client-rating*', 'profesjonalne-client-feedback*', 'profesjonalne-summary-feedback*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Profesjonalne nagrywanie filmów Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('profesjonalne-hero-section.index') }}"
                                class="nav-link {{ Request::is('profesjonalne-hero-section*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Hero Section
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ Request::is('profesjonalne-slider-images*', 'profesjonalne-client-rating*', 'profesjonalne-client-feedback*', 'profesjonalne-summary-feedback*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('profesjonalne-slider-images*', 'profesjonalne-client-rating*', 'profesjonalne-client-feedback*', 'profesjonalne-summary-feedback*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Client Reviews
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('profesjonalne-slider-images.index') }}"
                                        class="nav-link {{ Request::is('profesjonalne-slider-images*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Slider Images
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('profesjonalne-client-rating.index') }}"
                                        class="nav-link {{ Request::is('profesjonalne-client-rating*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Client Rating
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('profesjonalne-client-feedback.index') }}"
                                        class="nav-link {{ Request::is('profesjonalne-client-feedback*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Client Feedback
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('profesjonalne-summary-feedback.index') }}"
                                        class="nav-link {{ Request::is('profesjonalne-summary-feedback*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Feedback Summary
                                        </p>
                                    </a>
                                </li>
                            </ul>

                        <li class="nav-item">
                            <a href="{{ route('profesjonalne-brand-section.index') }}"
                                class="nav-link {{ Request::is('profesjonalne-brand-section*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Brand Section
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profesjonalne-company.index') }}"
                                class="nav-link {{ request()->is('profesjonalne-company*') && !request()->is('profesjonalne-companycard*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Compnay Section
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profesjonalne-companycard.index') }}"
                                class="nav-link {{ Request::is('profesjonalne-companycard*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Company Card Section
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profesjonalne-rating.index') }}"
                                class="nav-link {{ Request::is('profesjonalne-rating*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Rating Section
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item has-treeview sub-menu {{ Request::is('profesjonalne-iwd-section1*', 'profesjonalne-iwd-section2*', 'profesjonalne-iwd-section3*', 'profesjonalne-iwd-section4*', 'profesjonalne-iwd-section5*', 'profesjonalne-iwd-section6*', 'profesjonalne-iwd-section7*') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ Request::is('profesjonalne-iwd-section1*', 'profesjonalne-iwd-section2*', 'profesjonalne-iwd-section3*', 'profesjonalne-iwd-section4*', 'profesjonalne-iwd-section5*', 'profesjonalne-iwd-section6*', 'profesjonalne-iwd-section7*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Images With Description
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('profesjonalne-iwd-section1.index') }}"
                                        class="nav-link {{ Request::is('profesjonalne-iwd-section1*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-1
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('profesjonalne-iwd-section2.index') }}"
                                        class="nav-link {{ Request::is('profesjonalne-iwd-section2*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-2
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('profesjonalne-iwd-section3.index') }}"
                                        class="nav-link {{ Request::is('profesjonalne-iwd-section3*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-3
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('profesjonalne-iwd-section4.index') }}"
                                        class="nav-link {{ Request::is('profesjonalne-iwd-section4*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-4
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('profesjonalne-iwd-section5.index') }}"
                                        class="nav-link {{ Request::is('profesjonalne-iwd-section5*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-5
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('profesjonalne-iwd-section6.index') }}"
                                        class="nav-link {{ Request::is('profesjonalne-iwd-section6*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-6
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('profesjonalne-iwd-section7.index') }}"
                                        class="nav-link {{ Request::is('profesjonalne-iwd-section7*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Section-7
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item has-treeview {{ Request::is('PO*', 'whyus*', 'customerreview*', 'whattoexpect*', 'selected*', 'konsultacja*', 'formContents*', 'formDropdown1*', 'formDropdown2*', 'formDropdown3*', 'formDropdown4*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Request::is('PO*', 'whyus*', 'customerreview*', 'whattoexpect*', 'selected*', 'konsultacja*', 'formContents*', 'formDropdown1*', 'formDropdown2*', 'formDropdown3*', 'formDropdown4*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Konsultacja Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li
                            class="nav-item has-treeview sub-menu {{ Request::is('PO*', 'formContents*', 'formDropdown1*', 'formDropdown2*', 'formDropdown3*', 'formDropdown4*') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ Request::is('PO*', 'formContents*', 'formDropdown1*', 'formDropdown2*', 'formDropdown3*', 'formDropdown4*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Pricing Option
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('PO.index') }}"
                                        class="nav-link {{ Request::is('PO*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Pricing Option Content
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('formContents.index') }}"
                                        class="nav-link {{ Request::is('formContents*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Form Contents
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('formDropdown1.index') }}"
                                        class="nav-link {{ Request::is('formDropdown1*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Dropdown-1
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('formDropdown2.index') }}"
                                        class="nav-link {{ Request::is('formDropdown2*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Dropdown-2
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('formDropdown3.index') }}"
                                        class="nav-link {{ Request::is('formDropdown3*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Dropdown-3
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('formDropdown4.index') }}"
                                        class="nav-link {{ Request::is('formDropdown4*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Dropdown-4
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('whyus.index') }}"
                                class="nav-link {{ Request::is('whyus*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Why Us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('customerreview.index') }}"
                                class="nav-link {{ Request::is('customerreview*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customer Review</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('whattoexpect.index') }}"
                                class="nav-link {{ Request::is('whattoexpect*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>What To Exect</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('selected.index') }}"
                                class="nav-link {{ Request::is('selected*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Selected Project</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('konsultacja.index') }}"
                                class="nav-link {{ Request::is('konsultacja*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Cards</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ Request::is('examination-herosection*', 'how-test-works*', 'faq*','ques*','research*','percentage*','exam-rating-section*','survey-FO1*', 'survey-FO2*','survey-FO3*', 'survey-FO4*', 'survey-FO5*', 'survey-FO6*', 'survey-FO7*', 'survey-FO8*', 'survey-FO9*', 'survey-FO10*', 'survey-FO11*','survey-FO13*', 'survey-summary*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('examination-herosection*', 'how-test-works*', 'faq*','ques*','research*','percentage*','exam-rating-section*','survey-FO1*', 'survey-FO2*','survey-FO3*', 'survey-FO4*', 'survey-FO5*', 'survey-FO6*', 'survey-FO7*', 'survey-FO8*', 'survey-FO9*', 'survey-FO10*', 'survey-FO11*','survey-FO13*', 'survey-summary*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Examination
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('examination.herosection.index')}}" class="nav-link {{ Request::is('examination-herosection*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hero Section</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ Request::is('faq*','ques*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('faq*','ques*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    FAQ Section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('faq.index') }}" class="nav-link {{ Request::is('faq*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                        <p>
                                            FAQ Title
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('ques.index') }}" class="nav-link {{ Request::is('ques*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                        <p>
                                            FAQ Questions
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('howtestworks.index') }}" class="nav-link {{ Request::is('how-test-works*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>How Test Works</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ Request::is('research*','percentage*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('research*','percentage*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Research Section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('research.index') }}" class="nav-link {{ Request::is('research*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Research Title
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('percentage.index') }}" class="nav-link {{ Request::is('percentage*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Percentage Card
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rating.section.index') }}" class="nav-link {{ Request::is('exam-rating-section*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rating Section</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ Request::is('survey-FO1*','survey-FO2*','survey-FO3*', 'survey-FO4*', 'survey-FO5*', 'survey-FO6*', 'survey-FO7*', 'survey-FO8*', 'survey-FO9*', 'survey-FO10*', 'survey-FO11*', 'survey-FO12*','survey-FO13*', 'survey-summary*') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ Request::is('survey-FO1*','survey-FO2*','survey-FO3*', 'survey-FO4*', 'survey-FO5*', 'survey-FO6*', 'survey-FO7*', 'survey-FO8*', 'survey-FO9*', 'survey-FO10*', 'survey-FO11*', 'survey-FO12*','survey-FO13*', 'survey-summary*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Survey Section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('survey-FO1.index') }}"
                                        class="nav-link {{ Request::is('survey-FO1*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Form 1
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('survey-FO2.index') }}"
                                        class="nav-link {{ Request::is('survey-FO2*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Form 2
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('survey-FO3.index') }}"
                                        class="nav-link {{ Request::is('survey-FO3*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Form 3
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('survey-FO4.index') }}"
                                        class="nav-link {{ Request::is('survey-FO4*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Form 4
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('survey-FO5.index') }}"
                                        class="nav-link {{ Request::is('survey-FO5*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Form 5
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('survey-FO6.index') }}"
                                        class="nav-link {{ Request::is('survey-FO6*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Form 6
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('survey-FO7.index') }}"
                                        class="nav-link {{ Request::is('survey-FO7*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Form 7
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('survey-FO8.index') }}"
                                        class="nav-link {{ Request::is('survey-FO8*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Form 8
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('survey-FO9.index') }}"
                                        class="nav-link {{ Request::is('survey-FO9*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Form 9
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('survey-FO10.index') }}"
                                        class="nav-link {{ Request::is('survey-FO10*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Form 10
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('survey-FO11.index') }}"
                                        class="nav-link {{ Request::is('survey-FO11*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Form 11
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('survey-FO12.index') }}"
                                        class="nav-link {{ Request::is('survey-FO12*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Form 12
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('survey-FO13.index') }}"
                                        class="nav-link {{ Request::is('survey-FO13*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Form 13
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('survey-summary.index') }}"
                                        class="nav-link {{ Request::is('survey-summary*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Summary
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ request()->is('MShero*', 'main-content-1*', 'main-num*', 'main-content-2*', 'result-table-title*', 'result-table-card*', 'strategy*', 'sFeature*', 'testimonial*', 'result-max*', 'price-section*', 'price-card*', 'Mktstrategy-action*', 'Mkt-faq-content*', 'mktfaq-card*', 'what-receive*', 'image-advantage*', 'quote-one*', 'branding*', 'quote-two*', 'analysis-card1*', 'analysis-card2*', 'analysis-card3*', 'analysis-card4*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('MShero*', 'main-content-1*', 'main-num*', 'main-content-2*', 'result-table-title*', 'result-table-card*', 'strategy*', 'sFeature*', 'testimonial*', 'result-max*', 'price-section*', 'price-card*', 'Mktstrategy-action*', 'Mkt-faq-content*', 'mktfaq-card*', 'what-receive*', 'image-advantage*', 'quote-one*', 'branding*', 'quote-two*', 'analysis-card1*', 'analysis-card2*', 'analysis-card3*', 'analysis-card4*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            Marketing Strategy Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('MShero.index')}}" class="nav-link {{ request()->is('MShero*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hero Section</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ request()->is('main-content-1*', 'main-num*', 'main-content-2*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ request()->is('main-content-1*', 'main-num*', 'main-content-2*') ? 'active' : '' }}">
                               <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Main Content Section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('main-content-1.index')}}" class="nav-link {{ request()->is('main-content-1*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Main Content One</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('main-num.index')}}" class="nav-link {{ request()->is('main-num*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Main Number</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('main-content-2.index')}}" class="nav-link {{ request()->is('main-content-2*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Main Content Two</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ request()->is('result-table-title*', 'result-table-card*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ request()->is('result-table-title*', 'result-table-card*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Result Table
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('result-table-title.index')}}" class="nav-link {{ request()->is('result-table-title*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Result Table Title</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('result-table-card.index')}}" class="nav-link {{ request()->is('result-table-card*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Result Table Card</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ request()->is('strategy*', 'sFeature*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ request()->is('strategy*', 'sFeature*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Strategy Secion
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('strategy.index')}}" class="nav-link {{ request()->is('strategy*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Strategy Title</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('sFeature.index')}}" class="nav-link {{ request()->is('sFeature*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Strategy Feature</p>
                                    </a>
                                </li>
                            </ul>
                            <li class="nav-item">
                                <a href="{{ route('testimonial.index')}}" class="nav-link {{ request()->is('testimonial*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Testimonial</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('result-max.index')}}" class="nav-link {{ request()->is('result-max*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Result Max</p>
                                </a>
                            </li>
                            <li
                            class="nav-item has-treeview sub-menu {{ request()->is('analysis-card1*', 'analysis-card2*', 'analysis-card3*', 'analysis-card4*') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ request()->is('analysis-card1*', 'analysis-card2*', 'analysis-card3*', 'analysis-card4*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Analysis Sections
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('analysis-card1.index') }}"
                                        class="nav-link {{ request()->is('analysis-card1*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Business Analysis</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('analysis-card2.index') }}"
                                        class="nav-link {{ request()->is('analysis-card2*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Target Analysis</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('analysis-card3.index') }}"
                                        class="nav-link {{ request()->is('analysis-card3*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Competition Analysis</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('analysis-card4.index') }}"
                                        class="nav-link {{ request()->is('analysis-card4*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>Scalable Marketing Funnel</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('what-receive.index') }}"
                                class="nav-link {{ request()->is('what-receive*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>What Receive</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('image-advantage.index') }}"
                                class="nav-link {{ request()->is('image-advantage*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Image Advantage</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('quote-one.index') }}"
                                class="nav-link {{ request()->is('quote-one*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quote One</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('branding.index') }}"
                                class="nav-link {{ request()->is('branding*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Branding</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('quote-two.index') }}"
                                class="nav-link {{ request()->is('quote-two*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quote Two</p>
                            </a>
                        </li>
                            <li class="nav-item has-treeview sub-menu {{ request()->is('price-section*', 'price-card*') ? 'menu-open' : '' }}">
                                <a href="#" class="nav-link {{ request()->is('price-section*', 'price-card*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Pricing Section
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview sub-menu2">
                                    <li class="nav-item">
                                        <a href="{{ route('price-section.index')}}" class="nav-link {{ request()->is('price-section*') ? 'active' : '' }}">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Price Title</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('price-card.index')}}" class="nav-link {{ request()->is('price-card*') ? 'active' : '' }}">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Price Card</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('Mktstrategy-action.index')}}" class="nav-link {{ request()->is('Mktstrategy-action*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Strategy Action</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview sub-menu {{ request()->is('Mkt-faq-content*', 'mktfaq-card*') ? 'menu-open' : '' }}">
                                <a href="#" class="nav-link {{ request()->is('Mkt-faq-content*', 'mktfaq-card*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        FAQ section
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview sub-menu2">
                                    <li class="nav-item">
                                        <a href="{{ route('Mkt-faq-content.index')}}" class="nav-link {{ request()->is('Mkt-faq-content*') ? 'active' : '' }}">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>FAQ Content</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('mktfaq-card.index')}}" class="nav-link {{ request()->is('mktfaq-card*') ? 'active' : '' }}">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>FAQ Card</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ Request::is('projektowanie-logo*','good-business*','image-group*','exam-opinion*','project-value*','guarantee*','receive*','points*','gallery*','projekto-gallery-image-group*','pdf-copy*','step-by-step*','free-shops*','enexo*','daco*','aico*','zoo-garden*','construction*','restaurant*','park*','new-company*','company-profit*','page-footer-link*','footer-logo*','page-footer-link*','logo-accordion*', 'logoAccordion*','gpn*','gpn-product*','gpn-company*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('projektowanie-logo*','good-business*','image-group*','exam-opinion*','project-value*','guarantee*','receive*','points*','gallery*','projekto-gallery-image-group*','pdf-copy*','step-by-step*','free-shops*','enexo*','daco*','aico*','zoo-garden*','construction*','restaurant*','park*','new-company*','company-profit*','page-footer-link*','footer-logo*','page-footer-link*','logo-accordion*','logoAccordion*','gpn*','gpn-product*','gpn-company*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Projektowanie Logo
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('projekto.logo.index')}}" class="nav-link {{ Request::is('projektowanie-logo*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logo Banner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('image.group.index') }}" class="nav-link {{ Request::is('image-group*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Image Group</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('good.business.index') }}" class="nav-link {{ Request::is('good-business*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Good Business</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('exam-opinion.index') }}" class="nav-link {{ Request::is('exam-opinion*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Opinion</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('project.value.index') }}" class="nav-link {{ Request::is('project-value*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ Request::is('receive*','points*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('receive*','points*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                Receive Section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('receive.index') }}" class="nav-link {{ Request::is('receive*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i
                                        <p>
                                            Receive
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('receive.points.index') }}" class="nav-link {{ Request::is('points*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i
                                        <p>
                                            Points
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('guarantee.index') }}" class="nav-link {{ Request::is('guarantee*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Guarantee</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ Request::is('gallery*','projekto-gallery-image-group*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('gallery*','projekto-gallery-image-group*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Gallery Section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('gallery.index') }}" class="nav-link {{ Request::is('gallery*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i
                                        <p>
                                            Gallery
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gallery.image.group.index') }}" class="nav-link {{ Request::is('projekto-gallery-image-group*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i
                                        <p>
                                            Gallery Image Group
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pdf.index')}}" class="nav-link {{ Request::is('pdf-copy*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>PDF Copy</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('step.by.step.index')}}" class="nav-link {{ Request::is('step-by-step*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Step By Step</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('free.shops.index')}}" class="nav-link {{ Request::is('free-shops*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Free Shops</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('enexo.index')}}" class="nav-link {{ Request::is('enexo*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Enexo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('daco.index')}}" class="nav-link {{ Request::is('daco*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daco</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('aico.index')}}" class="nav-link {{ Request::is('aico*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Aico</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('zoo.garden.index')}}" class="nav-link {{ Request::is('zoo-garden*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Zoo Garden</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('construction.index')}}" class="nav-link {{ Request::is('construction*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Construction</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('restaurant.index')}}" class="nav-link {{ Request::is('restaurant*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Restaurant</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('park.index')}}" class="nav-link {{ Request::is('park*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Park</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('new.company.index')}}" class="nav-link {{ Request::is('new-company*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Company</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('new.company.profit.index')}}" class="nav-link {{ Request::is('company-profit*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Company Profit Slider</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ Request::is('footer-logo*','page-footer-link*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('footer-logo*','page-footer-link*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Footer Section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('footer.logo.index') }}" class="nav-link {{ Request::is('footer-logo*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i
                                        <p>
                                            Footer Logo
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('footer.page.link.index') }}" class="nav-link {{ Request::is('page-footer-link*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i
                                        <p>
                                            Footer Page Link
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ Request::is('gpn*','gpn-product*','gpn-company*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('gpn*','gpn-product*','gpn-company*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    GPN
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('gpn.index') }}" class="nav-link {{ Request::is('gpn*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i
                                        <p>
                                            Title
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gpn.company.index') }}" class="nav-link {{ Request::is('gpn-company*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i
                                        <p>
                                            Company Logo
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gpn.product.index') }}" class="nav-link {{ Request::is('gpn-product*') ? 'active' : '' }}">
                                   <i class="far fa-square nav-icon"></i
                                        <p>
                                            Product Logo
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview sub-menu {{ Request::is('logo-accordion*', 'logoAccordion*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::is('logo-accordion*', 'logoAccordion*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            Logo Accordion
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('logo.accordion1.index') }}"
                                    class="nav-link {{ Request::is('logoAccordion*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                    Logo Accordion 1
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('logo.accordion.index') }}"
                                    class="nav-link {{ Request::is('logo-accordion*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                    Logo Accordion
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                </li>
                
                <li
                class="nav-item has-treeview {{ Request::is('team.card1*', 'team.card2*', 'team.image*', 'team.view*', 'team.section1*', 'team.section2*', 'team.section3*', 'team.section4*', 'team.section5*', 'team.section6*', 'team.section6c1*', 'team.section6c2*', 'team.section6c3*', 'team.section7*', 'team.section8*', 'team.section9*', 'team.10section*', 'team.11section*') ? 'menu-open' : '' }}">
                <a href="#"
                    class="nav-link {{ Request::is('team.card1*', 'team.card2*', 'team.image*', 'team.view*', 'team.section1*', 'team.section2*', 'team.section3*', 'team.section4*', 'team.section5*', 'team.section6*', 'team.section6c1*', 'team.section6c2*', 'team.section6c3*', 'team.section7*', 'team.section8*', 'team.section9*', 'team.10section*', 'team.11section*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-handshake"></i>
                    <p>
                        Team Screen
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.card1.index') }}"
                            class="nav-link {{ Request::is('team.card1*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Team Screen Card</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.card2.index') }}"
                            class="nav-link {{ Request::is('team.card2*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Team Screen Card 2</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.image') }}"
                            class="nav-link {{ Request::is('team.image*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Team Image</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.view.index') }}"
                            class="nav-link {{ Request::is('team.view*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Hero Section</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.section1.index') }}"
                            class="nav-link {{ Request::is('team.section1*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 1</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.section2.index') }}"
                            class="nav-link {{ Request::is('team.section2*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 2</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.section3.index') }}"
                            class="nav-link {{ Request::is('team.section3*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 3</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.section4.index') }}"
                            class="nav-link {{ Request::is('team.section4*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 4</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.section5.index') }}"
                            class="nav-link {{ Request::is('team.section5*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 5</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.section6.index') }}"
                            class="nav-link {{ Request::is('team.section6*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 6</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.section6c1.index') }}"
                            class="nav-link {{ Request::is('team.section6c1*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 6 Card 1</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.section6c2.index') }}"
                            class="nav-link {{ Request::is('team.section6c2*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 6 Card 2</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.section6c3.index') }}"
                            class="nav-link {{ Request::is('team.section6c3*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 6 Card 3</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.section7.index') }}"
                            class="nav-link {{ Request::is('team.section7*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 7</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.section8.index') }}"
                            class="nav-link {{ Request::is('team.section8*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 8</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.section9.index') }}"
                            class="nav-link {{ Request::is('team.section9*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 9</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.10section.index') }}"
                            class="nav-link {{ Request::is('team.10section*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 10</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('team.11section.index') }}"
                            class="nav-link {{ Request::is('team.11section*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section 11</p>
                        </a>
                    </li>
                </ul>


            </li>
            
            <li
                class="nav-item has-treeview {{ Request::is('UXhero*', 'UXcompetetion*', 'UXcounter*', 'UXignoreSites*', 'UXsystematically*', 'UXimages*', 'UXfaqTitle*', 'UXfaqCard*', 'UXexecutive*', 'UXslider*', 'UXwebsite*', 'UXgoodProcess*', 'UXstages*', 'UXinfo*', 'UXvideoTab*','UXcomplex*','one-card*','two-card*','three-card*','four-card*') ? 'menu-open' : '' }}">
                <a href="#"
                    class="nav-link {{ Request::is('UXhero*', 'UXcompetetion*', 'UXcounter*', 'UXignoreSites*', 'UXsystematically*', 'UXimages*', 'UXfaqTitle*', 'UXfaqCard*', 'UXexecutive*', 'UXslider*', 'UXwebsite*', 'UXgoodProcess*', 'UXstages*', 'UXinfo*', 'UXvideoTab*','UXcomplex*','one-card*','two-card*','three-card*','four-card*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-paint-brush"></i>
                    <p>
                        UX Setting
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('UXhero.index') }}"
                            class="nav-link {{ Request::is('UXhero*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Hero Section</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('UXcompetetion.index') }}"
                            class="nav-link {{ Request::is('UXcompetetion*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Competition Section</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('UXcounter.index') }}"
                            class="nav-link {{ Request::is('UXcounter*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Counter Data</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('UXignoreSites.index') }}"
                            class="nav-link {{ Request::is('UXignoreSites*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ignore Sites</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('UXsystematically.index') }}"
                            class="nav-link {{ Request::is('UXsystematically*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Systematically</p>
                        </a>
                    </li>
                    <li
                        class="nav-item has-treeview sub-menu {{ request()->is('UXinfo*', 'UXvideoTab*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ request()->is('UXinfo*', 'UXvideoTab*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                UX Video Section
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('UXinfo.index') }}"
                                    class="nav-link {{ request()->is('UXinfo*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>UX Video</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('UXvideoTab.index') }}"
                                    class="nav-link {{ request()->is('UXvideoTab*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Video Tab</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li
                        class="nav-item has-treeview sub-menu {{ request()->is('UXgoodProcess*', 'UXstages*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ request()->is('UXgoodProcess*', 'UXstages*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Good Process
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('UXgoodProcess.index') }}"
                                    class="nav-link {{ request()->is('UXgoodProcess*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Good Process</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('UXstages.index') }}"
                                    class="nav-link {{ request()->is('UXstages*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Good Stages</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('UXwebsite.index') }}"
                            class="nav-link {{ Request::is('UXwebsite*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Website Section</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('UXslider.index') }}"
                            class="nav-link {{ Request::is('UXslider*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Slider Images</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('UXexecutive.index') }}"
                            class="nav-link {{ Request::is('UXexecutive*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Executives</p>
                        </a>
                    </li>
                    <li
                        class="nav-item has-treeview sub-menu {{ request()->is('UXfaqTitle*', 'UXfaqCard*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ request()->is('UXfaqTitle*', 'UXfaqCard*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                FAQ section
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('UXfaqTitle.index') }}"
                                    class="nav-link {{ request()->is('UXfaqTitle*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>FAQ Content</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('UXfaqCard.index') }}"
                                    class="nav-link {{ request()->is('UXfaqCard*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>FAQ Card</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                     <li class="nav-item">
                        <a href="{{ route('UXcomplex.index') }}"
                            class="nav-link {{ Request::is('UXcomplex*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Complex</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview sub-menu {{ request()->is('one-card*','two-card*','three-card*','four-card*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ request()->is('one-card*','two-card*','three-card*','four-card*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Cards
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('UXCardOne.index') }}"
                                    class="nav-link {{ request()->is('one-card*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Card One</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('UXCardTwo.index') }}"
                                    class="nav-link {{ request()->is('two-card*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Card Two</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('UXCardThree.index') }}"
                                    class="nav-link {{ request()->is('three-card*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Card Three</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('UXCardFour.index') }}"
                                    class="nav-link {{ request()->is('four-card*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Card Four</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            
              <li class="nav-item has-treeview {{ Request::is('price-list*', 'first-price-menu*', 'fourth-price-menu*','fourth-price-range*', 'plo-dropdwonOptions4*','first-price-menu*','first-price-range*', 'plo-dropdwonOptions1*','third-price-menu*','third-price-range*', 'plo-dropdwonOptions3*', 'card2-dropdown1*', 'card2-dropdown2*', 'card2-dropdown3*', 'card2-dropdown4*', 'second-price-menu*') ? 'menu-open' : '' }}">
                <a href="#"
                    class="nav-link {{ Request::is('price-list*', 'first-price-menu*', 'fourth-price-menu*','fourth-price-range*', 'plo-dropdwonOptions4*','first-price-menu*','first-price-range*', 'plo-dropdwonOptions1*','third-price-menu*','third-price-range*', 'plo-dropdwonOptions3*', 'card2-dropdown1*', 'card2-dropdown2*', 'card2-dropdown3*', 'card2-dropdown4*', 'second-price-menu*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Price List Setting
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('price-list.index') }}"
                            class="nav-link {{ request()->is('price-list*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Price list</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview sub-menu {{ Request::is('first-price-menu*','first-price-range*', 'plo-dropdwonOptions1*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::is('first-price-menu*', 'first-price-range*', 'plo-dropdwonOptions1*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                First Price Card 
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('first-price-menu.index') }}"
                                    class="nav-link {{ request()->is('first-price-menu*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Card Menu</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('first-price-range.index') }}"
                                    class="nav-link {{ Request::is('first-price-range*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                        Range
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('plo-dropdwonOptions1.index') }}"
                                    class="nav-link {{ Request::is('plo-dropdwonOptions1*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                        Drop-Dwon Options
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('second-price-menu.index') }}"
                            class="nav-link {{ request()->is('second-price-menu*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Second Price Menu</p>
                        </a>
                    </li>
                    <li
                    class="nav-item has-treeview sub-menu {{ Request::is('card2-dropdown1*', 'card2-dropdown2*', 'card2-dropdown3*', 'card2-dropdown4*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Request::is('card2-dropdown1*', 'card2-dropdown2*', 'card2-dropdown3*', 'card2-dropdown4*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Second Price Menu Dropdowns
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sub-menu2">
                        <li class="nav-item">
                            <a href="{{ route('card2-dropdown1.index') }}"
                                class="nav-link {{ Request::is('card2-dropdown1*') ? 'active' : '' }}">
                                <i class="far fa-square nav-icon"></i>
                                <p>
                                    Dropdown-1
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('card2-dropdown2.index') }}"
                                class="nav-link {{ Request::is('card2-dropdown2*') ? 'active' : '' }}">
                                <i class="far fa-square nav-icon"></i>
                                <p>
                                    Dropdown-2
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('card2-dropdown3.index') }}"
                                class="nav-link {{ Request::is('card2-dropdown3*') ? 'active' : '' }}">
                                <i class="far fa-square nav-icon"></i>
                                <p>
                                    Dropdown-3
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('card2-dropdown4.index') }}"
                                class="nav-link {{ Request::is('card2-dropdown4*') ? 'active' : '' }}">
                                <i class="far fa-square nav-icon"></i>
                                <p>
                                    Dropdown-4
                                </p>
                            </a>
                        </li>
                    </ul>
                    </li>
                    <li class="nav-item has-treeview sub-menu {{ Request::is('third-price-menu*','third-price-range*', 'plo-dropdwonOptions3*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::is('third-price-menu*', 'third-price-range*', 'plo-dropdwonOptions3*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Third Price Menu
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('third-price-menu.index') }}"
                                    class="nav-link {{ request()->is('third-price-menu*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Card Menu</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('third-price-range.index') }}"
                                    class="nav-link {{ Request::is('third-price-range*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                        Range
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('plo-dropdwonOptions3.index') }}"
                                    class="nav-link {{ Request::is('plo-dropdwonOptions3*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                        Drop-Dwon Options
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview sub-menu {{ Request::is('fourth-price-menu*','fourth-price-range*', 'plo-dropdwonOptions4*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::is('fourth-price-menu*', 'fourth-price-range*', 'plo-dropdwonOptions4*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            Fourth Card menu
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('fourth-price-menu.index') }}"
                                    class="nav-link {{ request()->is('fourth-price-menu*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Card menu four</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('fourth-price-range.index') }}"
                                    class="nav-link {{ Request::is('fourth-price-range*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                        Range
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('plo-dropdwonOptions4.index') }}"
                                    class="nav-link {{ Request::is('plo-dropdwonOptions4*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                        Drop-Dwon Options
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </li>
            <li class="nav-item has-treeview {{ request()->is('opinieHero*', 'hero-slider*', 'brilliant-job*', 'opnie-rating*', 'experts*', 'order*', 'opinieReview*', 'accordion-one*', 'accordion-two*', 'opinieReferences*', 'reference-image*', 'reference-card*','opinion-rating*','title-rating*','brand-one*', 'brand-title*', 'opinieteams*', 'personally*','customer-replies-title*', 'customer-replies-review*') ? 'menu-open' : '' }}">
                <a href="#"
                    class="nav-link {{ request()->is('opinieHero*', 'hero-slider*', 'brilliant-job*', 'opnie-rating*', 'experts*', 'order*', 'opinieReview*', 'accordion-one*', 'accordion-two*', 'opinieReferences*', 'reference-image*', 'reference-card*','opinion-rating*','title-rating*','brand-one*', 'brand-title*', 'opinieteams*', 'personally*','customer-replies-title*', 'customer-replies-review*') ? 'active' : '' }}">
                    <i class="fas fa-comment nav-icon"></i>
                    <p>
                        Opinion Screen Setting
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li
                        class="nav-item has-treeview {{ request()->is('opinieHero*', 'hero-slider*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ request()->is('opinieHero*', 'hero-slider*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Hero Section Setting
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('opinieHero.index') }}"
                                    class="nav-link {{ request()->is('opinieHero*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Main Images</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('hero-slider.index') }}"
                                    class="nav-link {{ request()->is('hero-slider*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Slider Images</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('brilliant-job.index') }}"
                            class="nav-link {{ request()->is('brilliant-job*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Brilliant Job Section</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('opinieReview.index') }}"
                            class="nav-link {{ request()->is('opinieReview*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Review Section</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('opnie-rating.index') }}"
                            class="nav-link {{ request()->is('opnie-rating*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Rating Section</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('accordion-one.index') }}"
                            class="nav-link {{ request()->is('accordion-one*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Acoordion-1 Section</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('accordion-two.index') }}"
                            class="nav-link {{ request()->is('accordion-two*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Acoordion-2 Section</p>
                        </a>
                    </li>
                    <li
                        class="nav-item has-treeview sub-menu {{ request()->is('opinieReferences*', 'reference-image*', 'reference-card*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ request()->is('opinieReferences*', 'reference-image*', 'reference-card*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Reference Section
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('opinieReferences.index') }}"
                                    class="nav-link {{ request()->is('opinieReferences*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Reference Content</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('reference-image.index') }}"
                                    class="nav-link {{ request()->is('reference-image*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Reference Image</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('reference-card.index') }}"
                                    class="nav-link {{ request()->is('reference-card*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Reference Card</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('experts.index') }}"
                            class="nav-link {{ request()->is('experts*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Expert Section</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('order.index') }}"
                            class="nav-link {{ request()->is('order*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Order Section</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview sub-menu {{ Request::is('brand-one*', 'brand-title*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ Request::is('brand-one*', 'brand-title*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Brand Section
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('brand-title.index') }}"
                                    class="nav-link {{ Request::is('brand-title*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                        Brand Title
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('brand-one.index') }}"
                                    class="nav-link {{ Request::is('brand-one*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                        Brands
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview sub-menu {{ Request::is('opinion-rating*','title-rating*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ Request::is('opinion-rating*','title-rating*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Opinion Rating
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('title-rating.index') }}"
                                    class="nav-link {{ Request::is('title-rating*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                        Rating Title
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('opinion-rating.index') }}"
                                    class="nav-link {{ Request::is('opinion-rating*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                        Ratings
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                            <a href="{{ route('opinieteams.index') }}"
                                class="nav-link {{ request()->is('opinieteams*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teams Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('personally.index') }}"
                                class="nav-link {{ request()->is('personally*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>At-Owonce Section</p>
                            </a>
                        </li>
                    </li>
                    <li class="nav-item has-treeview sub-menu {{ Request::is('customer-replies-title*', 'customer-replies-review*') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ Request::is('customer-replies-title*', 'customer-replies-review*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Customer Replies
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu2">
                                <li class="nav-item">
                                    <a href="{{ route('repliesTitle.index') }}"
                                        class="nav-link {{ Request::is('customer-replies-title*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Title
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('repliesReview.index') }}"
                                        class="nav-link {{ Request::is('customer-replies-review*') ? 'active' : '' }}">
                                        <i class="far fa-square nav-icon"></i>
                                        <p>
                                            Reviews
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                </ul>
            </li>
                <li
                class="nav-item has-treeview {{ Request::is('hero-section*', 'description*', 'buisnessTools-section*', 'howItWorks-content*', 'howItWorks-steps*', 'knowMore-section*', 'Salesfaq-title*', 'Salesfaq-card*', 'policySection*', 'pricing*', 'slider-section-content*', 'slider-section-images*', 'Salesprojects*', 'Salesproject-2*', 'Salesproject-3-content*', 'Salesproject-3-customerReview*', 'Salesproject-4*', 'Salesproject-5-content*', 'Salesproject-5-customerReview*', 'Salesproject-6*', 'Salesproject-7-content*', 'Salesproject-7-customerReview*', 'Salesproject-8-content*', 'Salesproject-8-qualities*') ? 'menu-open' : '' }}">
                <a href="#"
                    class="nav-link {{ Request::is('hero-section*', 'description*', 'buisnessTools-section*', 'howItWorks-content*', 'howItWorks-steps*', 'knowMore-section*', 'Salesfaq-title*', 'Salesfaq-card*', 'policySection*', 'pricing*', 'slider-section-content*', 'slider-section-images*', 'Salesprojects*', 'Salesproject-2*', 'Salesproject-3-content*', 'Salesproject-3-customerReview*','Salesproject-4*', 'Salesproject-5-content*', 'Salesproject-5-customerReview*', 'Salesproject-6*', 'Salesproject-7-content*', 'Salesproject-7-customerReview*', 'Salesproject-8-content*', 'Salesproject-8-qualities*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                    <p>
                        Sales Content Screen
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('hero-section') }}"
                            class="nav-link {{ Request::is('hero-section*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Home Section</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('description') }}"
                            class="nav-link {{ Request::is('description*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Quote Section</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('buisnessTools-section') }}"
                            class="nav-link {{ Request::is('buisnessTools-section*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Buisness tools Section</p>
                        </a>
                    </li>
                    <li
                        class="nav-item has-treeview sub-menu {{ Request::is('howItWorks-content*', 'howItWorks-steps*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::is('howItWorks-content*', 'howItWorks-steps*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                How It Works Section
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('howItWorks-content') }}"
                                    class="nav-link {{ Request::is('howItWorks-content*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>How It Works Content</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('howItWorks-steps') }}"
                                    class="nav-link {{ Request::is('howItWorks-steps*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>How It Works Steps</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('knowMore-section') }}"
                            class="nav-link {{ Request::is('knowMore-section*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Know More Section</p>
                        </a>
                    </li>
                    <li
                        class="nav-item has-treeview sub-menu {{ Request::is('Salesfaq-title*', 'Salesfaq-card*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::is('Salesfaq-title*', 'Salesfaq-card*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                FAQ
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('Salesfaq-title') }}"
                                    class="nav-link {{ Request::is('Salesfaq-title*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>FAQ Title</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('Salesfaq-card.index') }}"
                                    class="nav-link {{ Request::is('Salesfaq-card*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>FAQ Ques/Ans</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('policySection') }}"
                            class="nav-link {{ Request::is('policySection*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Policy Section</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pricing') }}"
                            class="nav-link {{ Request::is('pricing*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pricing</p>
                        </a>
                    </li>
                    <li
                        class="nav-item has-treeview sub-menu {{ Request::is('Salesprojects*', 'Salesproject-2*', 'Salesproject-3-content*', 'Salesproject-3-customerReview*', 'Salesproject-4*', 'Salesproject-5-content*', 'Salesproject-5-customerReview*', 'Salesproject-6*', 'Salesproject-7-content*', 'Salesproject-7-customerReview*', 'Salesproject-8-content*', 'Salesproject-8-qualities*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::is('Salesprojects*', 'Salesproject-2*', 'Salesproject-3-content*', 'Salesproject-3-customerReview*', 'Salesproject-4*', 'Salesproject-5-content*', 'Salesproject-5-customerReview*', 'Salesproject-6*', 'Salesproject-7-content*', 'Salesproject-7-customerReview*', 'Salesproject-8-content*', 'Salesproject-8-qualities*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Projects
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('Salesprojects') }}"
                                    class="nav-link {{ Request::is('Salesprojects*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('Salesproject-2.index') }}"
                                    class="nav-link {{ Request::is('Salesproject-2*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project 2</p>
                                </a>
                            </li>
                            <li
                                class="nav-item has-treeview sub-menu {{ Request::is('Salesproject-3-content*', 'Salesproject-3-customerReview*') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::is('Salesproject-3-content*', 'Salesproject-3-customerReview*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Project 3
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview sub-menu2">
                                    <li class="nav-item">
                                        <a href="{{ route('Salesproject-3-content.index') }}"
                                            class="nav-link {{ Request::is('Salesproject-3-content*') ? 'active' : '' }}">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Project 3 Content</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('Salesproject-3-customerReview.index') }}"
                                            class="nav-link {{ Request::is('Salesproject-3-customerReview*') ? 'active' : '' }}">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Project 3 Customer Review</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('Salesproject-4.index') }}"
                                    class="nav-link {{ Request::is('Salesproject-4*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project 4</p>
                                </a>
                            </li>
                            <li
                                class="nav-item has-treeview sub-menu {{ Request::is('Salesproject-5-content*', 'Salesproject-5-customerReview*') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::is('Salesproject-5-content*', 'Salesproject-5-customerReview*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Project 5
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview sub-menu2">
                                    <li class="nav-item">
                                        <a href="{{ route('Salesproject-5-content.index') }}"
                                            class="nav-link {{ Request::is('Salesproject-5-content*') ? 'active' : '' }}">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Project 5 Content</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('Salesproject-5-customerReview.index') }}"
                                            class="nav-link {{ Request::is('Salesproject-5-customerReview*') ? 'active' : '' }}">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Project 5 Customer Review</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('Salesproject-6.index') }}"
                                    class="nav-link {{ Request::is('Salesproject-6*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project 6</p>
                                </a>
                            </li>
                            <li
                                class="nav-item has-treeview sub-menu {{ Request::is('Salesproject-7-content*', 'Salesproject-7-customerReview*') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::is('Salesproject-7-content*', 'Salesproject-7-customerReview*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Project 7
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview sub-menu2">
                                    <li class="nav-item">
                                        <a href="{{ route('Salesproject-7-content.index') }}"
                                            class="nav-link {{ Request::is('Salesproject-7-content*') ? 'active' : '' }}">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Project 7 Content</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('Salesproject-7-customerReview.index') }}"
                                            class="nav-link {{ Request::is('Salesproject-7-customerReview*') ? 'active' : '' }}">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Project 7 Customer Review</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="nav-item has-treeview sub-menu {{ Request::is('Salesproject-8-content*', 'Salesproject-8-qualities*') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::is('Salesproject-8-content*', 'Salesproject-8-qualities*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Project 8
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview sub-menu2">
                                    <li class="nav-item">
                                        <a href="{{ route('Salesproject-8-content.index') }}"
                                            class="nav-link {{ Request::is('Salesproject-8-content*') ? 'active' : '' }}">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Project 8 Content</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('Salesproject-8-qualities.index') }}"
                                            class="nav-link {{ Request::is('Salesproject-8-qualities*') ? 'active' : '' }}">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Project 8 Qualities</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="nav-item has-treeview sub-menu {{ Request::is('slider-section-content*', 'slider-section-images*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::is('slider-section-content*', 'slider-section-images*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Slider Section
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub-menu2">
                            <li class="nav-item">
                                <a href="{{ route('slider-section-content') }}"
                                    class="nav-link {{ Request::is('slider-section-content*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Slider Section Content</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('slider-section-images') }}"
                                    class="nav-link {{ Request::is('slider-section-images*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Slider Section Images</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview sub-menu {{ Request::is('business-name-creation-hero-section*', 'business-name-creation-anatomy*','business-name-creation-guide*','business-name-creation-launch-essentials*','business-name-creation-project-value*','business-name-creation-faq*','business-name-creation-customer-review*','business-name-creation-implementation*','business-name-creation-special-review*','business-name-creation-company-review*','business-name-creation-implementation-start*','business-name-creation-profit-slide*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::is('business-name-creation-hero-section*', 'business-name-creation-anatomy*','business-name-creation-guide*','business-name-creation-launch-essentials*','business-name-creation-project-value*','business-name-creation-faq*','business-name-creation-customer-review*','business-name-creation-implementation*','business-name-creation-special-review*','business-name-creation-company-review*','business-name-creation-implementation-start*','business-name-creation-profit-slide*') ? 'active' : '' }}">
                            <i class="fas fa-briefcase nav-icon"></i>
                            <p>
                                Business Name Creation
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('businessNameCreation.heroSection') }}"
                                    class="nav-link {{ Request::is('business-name-creation-hero-section*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Hero Section</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('businessNameCreation.anatomy') }}"
                                    class="nav-link {{ Request::is('business-name-creation-anatomy*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Anatomy</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('businessNameCreation.anatomyGuide') }}"
                                    class="nav-link {{ Request::is('business-name-creation-guide*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Anatomy Guide</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('businessNameCreation.launchEssentials') }}"
                                    class="nav-link {{ Request::is('business-name-creation-launch-essentials*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Launch Essentials</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('businessNameCreation.faq') }}"
                                    class="nav-link {{ Request::is('business-name-creation-faq*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>FAQ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('businessNameCreation.projectValue') }}"
                                    class="nav-link {{ Request::is('business-name-creation-project-value*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Project Value</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('businessNameCreation.customerReview') }}"
                                    class="nav-link {{ Request::is('business-name-creation-customer-review*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Customer Review</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('businessNameCreation.implementation') }}"
                                    class="nav-link {{ Request::is('business-name-creation-implementation*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Implementation</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('businessNameCreation.implementationStart') }}"
                                    class="nav-link {{ Request::is('business-name-creation-implementation-start*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Implementation Start</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('businessNameCreation.companyReview') }}"
                                    class="nav-link {{ Request::is('business-name-creation-company-review*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Company Review</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('businessNameCreation.specialReview') }}"
                                    class="nav-link {{ Request::is('business-name-creation-special-review*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Special Review</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('businessNameCreation.profitSlide') }}"
                                    class="nav-link {{ Request::is('business-name-creation-profit-slide*') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Profit Slide</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item has-treeview {{ Request::routeIs('implementation.implementationIndex','example.sliderIndex','example.example1Index', 'example.example2Index','example.example3Index','example.example4Index','example.example5Index','example.example6Index','example.example7Index','example.example8Index','example.example9Index','example.example10Index','example.example11Index','example.example12Index','example.example13Index','example.example14Index','example.example15Index','example.example16Index','example.example17Index','example.example18Index','example.example19Index','example.example20Index','example.example21Index','example.reviewIndex') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::routeIs('implementation.implementationIndex','example.sliderIndex','example.example1Index', 'example.example2Index','example.example3Index','example.example4Index','example.example5Index','example.example6Index','example.example7Index','example.example8Index','example.example9Index','example.example10Index','example.example11Index','example.example12Index','example.example13Index','example.example14Index','example.example15Index','example.example16Index','example.example17Index','example.example18Index','example.example19Index','example.example20Index','example.example21Index','example.reviewIndex') ? 'active' : '' }}">
                            <i class="far fa-check-circle nav-icon"></i>
                            <p>
                                Example Section
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('implementation.implementationIndex') }}"
                                    class="nav-link {{ Request::routeIs('implementation.implementationIndex') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Implementation</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('example.sliderIndex') }}"
                                    class="nav-link {{ Request::routeIs('example.sliderIndex') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Slider Images</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('example.reviewIndex') }}"
                                    class="nav-link {{ Request::routeIs('example.reviewIndex') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Customer Review</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('example.example1Index') }}"
                                    class="nav-link {{ Request::routeIs('example.example1Index') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Example 1</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview {{ Request::routeIs('example.example2Index','example.example8Index','example.example19Index') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::routeIs('example.example2Index','example.example8Index','example.example19Index') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                        Example-2 Section
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>    
                                <ul class="nav nav-treeview sub-menu2">
                                    <li class="nav-item">
                                        <a href="{{ route('example.example2Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example2Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 2</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example8Index') }}"
                                        class="nav-link {{ Request::routeIs('example.example8Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 8</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example19Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example19Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 19</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview sub-menu {{ Request::routeIs('example.example4Index','example.example5Index','example.example6Index','example.example7Index','example.example9Index','example.example10Index','example.example11Index','example.example12Index','example.example13Index','example.example14Index','example.example15Index','example.example17Index','example.example18Index','example.example20Index') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::routeIs('example.example4Index','example.example5Index','example.example6Index','example.example7Index','example.example9Index','example.example10Index','example.example11Index','example.example12Index','example.example13Index','example.example14Index','example.example15Index','example.example17Index','example.example18Index','example.example20Index') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>
                                    Example-3 Section
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview sub-menu2">
                                    <li class="nav-item">
                                        <a href="{{ route('example.example4Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example4Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 4</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example5Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example5Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 5</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example6Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example6Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 6</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example7Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example7Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 7</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example9Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example9Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 9</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example10Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example10Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 10</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example11Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example11Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 11</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example12Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example12Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 12</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example13Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example13Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 13</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example14Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example14Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 14</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example15Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example15Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 15</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example17Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example17Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 17</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example18Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example18Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 18</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.example20Index') }}"
                                            class="nav-link {{ Request::routeIs('example.example20Index') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Example 20</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('example.example3Index') }}"
                                    class="nav-link {{ Request::routeIs('example.example3Index') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Example 4</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('example.example16Index') }}"
                                    class="nav-link {{ Request::routeIs('example.example16Index') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Example 5</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('example.example21Index') }}"
                                    class="nav-link {{ Request::routeIs('example.example21Index') ? 'active' : '' }}">
                                    <i class="far fa-square nav-icon"></i>
                                    <p>Example 6</p>
                                </a>
                            </li>
                        </ul>
                    </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('.nav-item.has-treeview > a').click(function (e) {
            e.preventDefault();
            $(this).parent().toggleClass('menu-open');
        });
    });
</script>