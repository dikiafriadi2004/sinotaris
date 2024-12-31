<header class="codex-header">
    <div class="header-contian d-flex justify-content-between align-items-center">
        <div class="header-left d-flex align-items-center">
            <div class="sidebar-action navicon-wrap me-2 d-xl-none"><i data-feather="grid"></i></div>
            
        </div>
        <div class="header-right d-flex align-items-center justify-content-end">
            <ul class="nav-iconlist">
                <li class="nav-profile">
                    <div class="media">
                        <div class="user-icon"><img class="img-fluid rounded-50" src="{{ asset('assets/images/avtar/3.jpg') }}"
                                alt="logo"></div>
                        <div class="media-body">
                            <h6>{{ Auth::user()->name }}</h6><span class="text-light">{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                    <div class="hover-dropdown navprofile-drop">
                        <ul>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        <i class="me-2 align-middle" data-feather="log-out"></i>
                                        log out</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
