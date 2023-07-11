<div class="header">
    <div class="logo logo-dark">
        <a href="">
            <h2 class="justify-center mt-3" style="justify-content: center;font-weight: bold;" alt="Logo">TES WEBDEV</h2>
        </a>
    </div>
    <div class="nav-wrap">
        <ul class="nav-left">
            <li class="mobile-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
        </ul>
        <ul class="nav-right">
            <li class="dropdown dropdown-animated scale-left">
                <div class="pointer" data-toggle="dropdown">
                    <div class="avatar avatar-image  m-h-10 m-r-15">
                        <img src="{{url('/'.auth()->user()->foto)}}" alt="">
                    </div>
                </div>
                <div class="p-b-15 p-t-15 dropdown-menu pop-profile">
                    <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                        <div class="d-flex m-r-50">
                            <div class="m-l-10">
                                <p class="m-b-0 text-dark font-weight-semibold">
                                    @if (auth()->check())
                                    {{ auth()->user()->nama }}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('logout') }}" class="dropdown-item d-block p-h-15 p-v-10">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                <span class="m-l-10">Logout</span>
                            </div>
                            <i class="anticon font-size-10 anticon-right"></i>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>