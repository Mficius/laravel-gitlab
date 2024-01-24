<!--**********************************
            Sidebar start
        ***********************************-->
<style>
    .li-menu {
        border-top: 1px solid #eaeaea;
        margin-left: 15px;
        margin-right: 15px;
        text-transform: uppercase;
    }
</style>

<div class="deznav">
    <div class="deznav-scroll">
        <div class="main-profile">
            <div class="image-bx">
                <img src="{{ asset('backend/images/Untitled-1.jpg') }}" alt="">
                <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </div>
            <h5 class="name"><span class="font-w400">Hello,</span> KEYTA</h5>
            <p class="email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95f8f4e7e4e0f0efefefefd5f8f4fcf9bbf6faf8">[email&#160;protected]</a></p>
        </div>
        <ul class="metismenu" id="menu">
            <li style="margin-left: 15px; margin-right: 15px; text-transform: uppercase;">
                <a href="{{ route('admin.dashboard') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-096-dashboard"></i>
                    <span class="nav-text">Tableau de bord</span>
                </a>
            </li>
            <li class="li-menu">
                <a href="{{ route('admin.news.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-newspaper"></i>
                    <span class="nav-text">Actualités</span>
                </a>
            </li>
            <li class="li-menu">
                <a href="{{ route('admin.abouts.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-044-file"></i>
                    <span class="nav-text">A Propos</span>
                </a>
            </li>
            <li class="li-menu">
                <a href="{{ route('admin.carousels.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-077-menu-1"></i>
                    <span class="nav-text" style="text-transform: uppercase;">Carousel</span>
                </a>
            </li>
            <li class="li-menu">
                <a href="{{ route('admin.teams.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-user-9"></i>
                    <span class="nav-text">Personnel</span>
                </a>
            </li>
            <li class="li-menu">
                <a href="{{ route('admin.municipalities.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-home-3"></i>
                    <span class="nav-text">Ma Commune</span>
                </a>
            </li>
            <li class="li-menu">
                <a href="{{ route('admin.mayor-words.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Mot du Maire</span>
                </a>
            </li>
            <li class="li-menu">
                <a href="{{ route('admin.services.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-6"></i>
                    <span class="nav-text">Services</span>
                </a>
            </li>
            <li class="li-menu">
                <a href="{{ route('admin.municipality-types.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-menu-3"></i>
                    <span class="nav-text" style="text-transform: uppercase;">Catégories</span>
                </a>
            </li>
        </ul>
        <div class="copyright">
            {{--<p><strong>Site web de la Mairie d'Owendo</strong> © 2024 Tous droits reservés</p>
            <p class="fs-12">Développé par <span class="heart"></span> <a href="https://www.initialde.com/">INITIAL Développement</a></p>--}}
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
