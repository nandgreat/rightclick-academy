@php
if (empty($authUser) and auth()->check()) {
$authUser = auth()->user();
}

$navBtnUrl = null;
$navBtnText = null;

if(request()->is('forums*')) {
$navBtnUrl = '/forums/create-topic';
$navBtnText = trans('update.create_new_topic');
} else {
$navbarButton = getNavbarButton(!empty($authUser) ? $authUser->role_id : null, empty($authUser));

if (!empty($navbarButton)) {
$navBtnUrl = $navbarButton->url;
$navBtnText = $navbarButton->title;
}
}
@endphp

<div id="navbarVacuum"></div>
<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
    <div class="{{ (!empty($isPanel) and $isPanel) ? 'container-fluid' : 'container'}}">
        <div class="d-flex align-items-center justify-content-between w-100">

            <a class="navbar-brand navbar-order d-flex align-items-center justify-content-center mr-0 {{ (empty($navBtnUrl) and empty($navBtnText)) ? 'ml-auto' : '' }}" href="/">
                @if(!empty($generalSettings['logo']))
                <img src="{{ $generalSettings['logo'] }}" class="img-cover" alt="site logo">
                @endif
            </a>

            <button class="navbar-toggler navbar-order" type="button" id="navbarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="mx-lg-30 d-none d-lg-flex flex-grow-1 navbar-toggle-content " id="navbarContent">
                <div class="navbar-toggle-header text-right d-lg-none">
                    <button class="btn-transparent" id="navbarClose">
                        <i data-feather="x" width="32" height="32"></i>
                    </button>
                </div>

                <ul class="navbar-nav mr-auto d-flex align-items-center">
                    @if(!empty($categories) and count($categories))
                    <li class="mr-lg-25">
                        <div class="menu-category">
                            <ul>
                                <li class="cursor-pointer user-select-none d-flex xs-categories-toggle">
                                    <i data-feather="grid" width="20" height="20" class="mr-10 d-none d-lg-block"></i>
                                    {{ trans('categories.categories') }}

                                </li>
                            </ul>
                        </div>
                    </li>
                    @endif

                    <!-- @if(!empty($navbarPages) and count($navbarPages))
                    @foreach($navbarPages as $navbarPage)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $navbarPage['link'] }}">{{ $navbarPage['title'] }}</a>
                    </li>

                    @endforeach
                    @endif -->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('classes') }}">Subjects</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Early Child Learning</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Higher Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog')}}">Blog</a>

                    </li>
                </ul>
            </div>

            <div class="nav-icons-or-start-live navbar-order">

                @if(!empty($navBtnUrl))
                <a href="{{ $navBtnUrl }}" class="d-none d-lg-flex btn btn-sm btn-primary nav-start-a-live-btn">
                    {{ $navBtnText }}
                </a>

                <a href="{{ $navBtnUrl }}" class="d-flex d-lg-none text-primary nav-start-a-live-btn font-14">
                    {{ $navBtnText }}
                </a>
                @endif

                <div class="d-none nav-notify-cart-dropdown top-navbar ">
                    @include(getTemplate().'.includes.shopping-cart-dropdwon')

                    <div class="border-left mx-15"></div>

                    @include(getTemplate().'.includes.notification-dropdown')
                </div>

            </div>
        </div>
    </div>
</nav>

@push('scripts_bottom')
<script src="/assets/default/js/parts/navbar.min.js"></script>
@endpush