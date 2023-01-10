<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <a href="/" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>Zepneus</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto mx-lg-auto py-0">
            <a href="/" class="nav-item nav-link @yield('active-accueil')">Accueil</a>
            <a href="/a-propos" class="nav-item nav-link @yield('active-apropos')">A propos</a>
            <a href="/nos-produits" class="nav-item nav-link @yield('active-nosproduits')">Nos produits</a>
            <a href="/notre-equipe" class="nav-item nav-link @yield('active-notreequipe')">Notre équipe</a>
            <a href="/nous-contacter" class="nav-item nav-link @yield('active-nouscontacter')">Nous contacter</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
