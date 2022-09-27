    // navbar
    var nav = document.getElementById("nav-id");
    window.addEventListener("scroll", function () {
        if (window.scrollY > 1) {
            nav.classList.add("bg-coffee", "shadow");
            nav.classList.remove("bg-transparent");
        } else if (window.innerWidth > 992 && window.scrollY < 20) {
            nav.classList.remove("bg-coffee", "shadow");
            nav.classList.add("bg-transparent");
        }
    });
    window.addEventListener("resize", function () {
        if (window.innerWidth < 992) {
            nav.classList.add("bg-coffee", "shadow");
            nav.classList.remove("bg-transparent");
        }
        else {
            nav.classList.remove("bg-coffee", "shadow");
            nav.classList.add("bg-transparent");
        }
    })