
<style>
    .navbar {
        color: white;
    }
</style>

<nav id="demo1Navbar" class="navbar navbar-expand-lg"
    style="background-color: #4A4947; top: 0; width: 100%; z-index: 1000; transition: top 0.3s;">
    <div class="container-fluid" style="font-weight:bold;">
        {{-- <a class="navbar-brand ms-3" href="/"><img src="../assets/bg3.svg" alt="Logo"></a> --}}
        <a class="navbar-brand ms-3" href="/" style="color: #ffffff; font-size: 25px">
            {{-- <img src="../assets/logoKita.svg" alt="Logo" height="28" class="d-inline-block align-text-top"> --}}
            Sigembi
          </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav me-3" style="font-weight: 40;">
                <li class="nav-item">
                    <a id="navHome" class="nav-link" href="/" style="color: #ffffff;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a id="navAbout" class="nav-link" href="/about-earthquake" style="color: #ffffff;">Tentang
                        Gempa</a>
                </li>
                <li class="nav-item">
                    <a id="navBerita" class="nav-link" href="/berita" style="color: #ffffff;">Berita</a>
                </li>
                <li class="nav-item">
                    <a id="navStat" class="nav-link" href="/statistic" style="color: #ffffff;">Statistik</a>
                </li>
            </ul>
        </div>
    </div>
</nav>




<script>
    document.addEventListener("DOMContentLoaded", () => {
    function setActiveNavLink() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => link.classList.remove('active'));

        if (currentPath === "/" || currentPath === "") {
            document.getElementById("navHome").classList.add("active");
        } else if (currentPath === "/about-earthquake") {
            document.getElementById("navAbout").classList.add("active");
        } else if (currentPath === "/berita") {
            document.getElementById("navBerita").classList.add("active");
        } else if (currentPath === "/statistic") {
            document.getElementById("navStat").classList.add("active");
        }
    }

    setActiveNavLink();
});


    document.addEventListener("DOMContentLoaded", setActiveNavLink);
</script>
