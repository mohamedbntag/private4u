<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
				<a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="{{Auth::user()->img}}"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{Auth::user()->name}}</h4>
							<span class="mb-0 text-muted">{{Auth::user()->email}}</span>
						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="side-item side-item-category">القائمة</li>
					<hr/>
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/admin' . $page='/index') }}"><span class="side-menu__label">الرئيسية</span></a>
						<a class="side-menu__item" href="{{ url('/admin' . $page='/teachers') }}"><span class="side-menu__label">المدرسين</span></a>
						<a class="side-menu__item" href="{{ url('/admin' . $page='/notes') }}"><span class="side-menu__label">المذكرات</span></a>
						<a class="side-menu__item" href="{{ url('/admin' . $page='/subjects') }}"><span class="side-menu__label">المواد الدراسية</span></a>
						<a class="side-menu__item" href="{{ url('/admin' . $page='/phases') }}"><span class="side-menu__label">المراحل الدراسية</span></a>
						<a class="side-menu__item" href="{{ url('/admin' . $page='/test') }}"><span class="side-menu__label">test</span></a>
					</li>
				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
