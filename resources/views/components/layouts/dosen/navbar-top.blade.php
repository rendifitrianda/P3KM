<div class="navbars-top">
    <div class="top-left">
        <a href="#" class="brand">
            <img src="{{ asset('public/img/logo.png') }}" alt="logo">
            <div class="brand-text">
                <span>Politeknik</span>
                <span> Negeri Ketapang</span>
            </div>
        </a>
        <button class="nav-btn-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="top-right">
        <ul class="menu">

            <li class="menu-item dropdown">
                <a href="#" class="item gap-2" data-bs-toggle="dropdown">
                    <img src="{{ asset('public/img/user1.jpg') }}" alt="notification" class="rounded-full w-7 h-7">
                    <div class="flex flex-col items-start justify-center">
                        <span class="text-xs font-medium uppercase">{{ Auth::guard('role')->user()->nama }}</span>
                        <span class="text-xs font-normal uppercase">{{ Auth::guard('role')->user()->nidn }}</span>
                    </div>
                </a>
                <ul class="dropdown-menu">
                    <ul class="nav-custom-dropdown">
                        <li>
                            <a href="#">
                                <i class="bi bi-person-circle"></i>
                                <span>Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </ul>
            </li>

        </ul>
    </div>
</div>
