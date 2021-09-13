<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                    <span class="hamburger-box"><span class="hamburger-inner"></span></span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button"
                    class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu mt-5">
                <li class="mb-2">
                    <a href="#">
                        <i class=" fas fa-user"></i>
                        Users
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('createUser')}}">
                                <i class="metismenu-icon"></i>
                                Create
                            </a>
                        </li>
                        <li>
                            <a href="{{route('listUser')}}">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mb-2">
                    <a href="#">
                        <i class="fas fa-list"></i>
                        Categories
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('createCategory')}}">
                                <i class="metismenu-icon">
                                </i>Create
                            </a>
                        </li>
                        <li>
                            <a href="{{route('listCategory')}}">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mb-2">
                    <a href="#">
                        <i class="fas fa-list"></i>
                        Products
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('createProduct')}}">
                                <i class="metismenu-icon">
                                </i>Create
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('listProduct') }}">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mb-2">
                    <a href="#">
                        <i class="fas fa-list"></i>
                        Order
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('listOrder')}}">
                                <i class="metismenu-icon">
                                </i>List Order
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
