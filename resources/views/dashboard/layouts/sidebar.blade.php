<aside class="codex-sidebar">
    <div class="logo-gridwrap codex-brand"><a class="codexbrand-logo d-flex" href="index.html"><img
                class="img-fluid" src="{{ asset('assets/images/logo/logo.png') }}" alt="theeme-logo"><span
                class="text-white fs-3 align-middle ms-2 fw-semibold">SINotaris</span></a>
        <div class="sidebar-action"><i data-feather="grid"> </i></div>
    </div>
    <div class="codex-menuwrapper">
        <ul class="codex-menu custom-scroll" data-simplebar>
            <li class="cdxmenu-title">
                <h5>application</h5>
            </li>
            <li class="menu-item {{ (request()->is('ppat*') ? 'active' : '') }}"><a href="{{ route('ppat.index') }}">
                    <div class="icon-item {{ (request()->is('ppat*') ? 'active' : '') }}"><i data-feather="calendar"></i></div><span>Notaris</span>
                </a></li>
        </ul>
    </div>
</aside>