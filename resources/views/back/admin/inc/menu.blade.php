<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin') }}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="{{asset('admin')}}/assets/img/logo/logo.png" alt="grimCourse Logo" class="img-fluid">
              </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">grimCourse</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ $page == 'admin' ? 'active' : '' }}">
            <a href="{{ route('admin') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Anasayfa</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Listeler</span></li>
        <!-- Layouts -->
        <li class="menu-item {{ $page == 'admin.Courses' ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons bx bx-video call"></i>
                <div data-i18n="Layouts">Kurslar</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Account Settings">Öğrenciler</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.instructors') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Account Settings">Eğitmenler</div>
            </a>
        </li>
        <!-- Personal -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Raporlar</span></li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Basic">Kayıt Raporları</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
                <i class="menu-icon tf-icons bx bx-money"></i>
                <div data-i18n="User interface">Gelir Raporları</div>
            </a>
        </li>
    </ul>
</aside>
