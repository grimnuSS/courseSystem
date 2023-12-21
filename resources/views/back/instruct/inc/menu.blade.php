<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('instruct') }}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="{{asset('instruct')}}/assets/img/logo/logo.png" alt="grimCourse Logo" class="img-fluid">
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
        <li class="menu-item {{ $page == 'Instruct' ? 'active' : '' }}">
            <a href="{{ route('instruct') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Anasayfa</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Genel</span></li>
        <!-- Layouts -->
        <li class="menu-item {{ $page == 'Instruct.Courses' ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-video call"></i>
                <div data-i18n="Layouts">Kurslar</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ $subpage == 'Instruct.Courses' ? 'active' : '' }}">
                    <a href="{{ route('course_courses') }}" class="menu-link">
                        <div data-i18n="Without menu">Kurslarım</div>
                    </a>
                </li>
                <li class="menu-item {{ $subpage == 'Instruct.Create' ? 'active' : '' }}">
                    <a href="{{ route('course_create') }}" class="menu-link">
                        <div data-i18n="Without menu">Kurs Oluştur</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-navbar.html" class="menu-link">
                        <div data-i18n="Without navbar">Kurs Düzenle</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-message 24px icon summary"></i>
                <div data-i18n="Account Settings">İletişim</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link">
                        <div data-i18n="Connections">Bildirim</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link">
                        <div data-i18n="Account">Yorumlar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">Soru & Cevap</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-stats"></i>
                <div data-i18n="Authentications">İstatistikler</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Genel Bakış</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-register-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Öğrenciler</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Personal -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Hesap Ayarları</span></li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Basic">Profil</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-money"></i>
                <div data-i18n="User interface">Para Kazanma</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="ui-accordion.html" class="menu-link">
                        <div data-i18n="Accordion">İstatistikler</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-alerts.html" class="menu-link">
                        <div data-i18n="Alerts">Son İşlemler</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-badges.html" class="menu-link">
                        <div data-i18n="Badges">Ödeme Yöntemleri</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Yardım & Destek -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Yardım &amp; Destek</span></li>
        <!-- Forms -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Nasıl Yapılır?</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="forms-basic-inputs.html" class="menu-link">
                        <div data-i18n="Basic Inputs">Kurs Oluşturma</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-input-groups.html" class="menu-link">
                        <div data-i18n="Input groups">Kurs Düzenleme</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-input-groups.html" class="menu-link">
                        <div data-i18n="Input groups">Para Kazanma</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-input-groups.html" class="menu-link">
                        <div data-i18n="Input groups">Yorum İnceleme</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Destek Al</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="form-layouts-vertical.html" class="menu-link">
                        <div data-i18n="Vertical Form">Destek Bildirimleri</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="form-layouts-horizontal.html" class="menu-link">
                        <div data-i18n="Horizontal Form">Bize Ulaşın</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
