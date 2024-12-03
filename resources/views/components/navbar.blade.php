{{-- <nav id="demo1Navbar" class="navbar navbar-expand-lg fixed-top" style="background-color: #D8D2C2; position: fixed; top: 0; width: 100%; z-index: 1000; transition: top 0.3s;">
    <div class="container-fluid" style="color:#4A4947; font-weight:bold">
        <a class="navbar-brand ms-3" href="/">SIGEMBI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav me-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item" id="aboutEarthquakeLink">
                    <a class="nav-link active" href="/about-earthquake">Tentang Gempa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script>
    // Logika menyembunyikan/memunculkan navbar saat scroll
    let prevScrollpos = window.pageYOffset;
    const navbar = document.getElementById("demo1Navbar");

    window.onscroll = function() {
        const currentScrollPos = window.pageYOffset;

        if (prevScrollpos > currentScrollPos) {
            navbar.style.top = "0"; // Tampilkan navbar
        } else {
            navbar.style.top = "-70px"; // Sembunyikan navbar
        }

        prevScrollpos = currentScrollPos;
    };

</script> --}}
<style>
    .navbar {
        color: white;
    }
</style>


<nav id="demo1Navbar" class="navbar navbar-expand-lg"
    style="background-color: #4A4947; top: 0; width: 100%; z-index: 1000; transition: top 0.3s;">
    <div class="container-fluid" style="font-weight:bold;">
        <a class="navbar-brand ms-3" href="/" style="color: #ffffff;">SIGEMBI</a>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav me-3">
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

        if (currentPath === "/" || currentPath === "/home") {
            document.getElementById("navHome").classList.add("active");
        } else if (currentPath === "/about-earthquake") {
            document.getElementById("navAbout").classList.add("active");
        } else if (currentPath === "/berita") {
            document.getElementById("navBerita").classList.add("active");
        }
    }

    setActiveNavLink();
});


    document.addEventListener("DOMContentLoaded", setActiveNavLink);
</script>
