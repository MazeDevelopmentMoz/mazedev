
//?========================Dark Mode=====================================

var dark = document.getElementById("darktheme")

if (localStorage.getItem("theme") == null) {

    localStorage.setItem("theme", "light")
}

let localData = localStorage.getItem("theme")

if (localData == "dark") {
    dark.src = "img/sun.png"
    document.body.classList.add("dark-theme")
} else if (localData == "light") {
    dark.src = "img/moon.png"
    document.body.classList.remove("dark-theme")
}

dark.onclick = function () {
    document.body.classList.toggle("dark-theme");
    if (document.body.classList.contains("dark-theme")) {
        dark.src = "img/sun.png"
        dark.classList.remove("fa-moon")
        dark.classList.add("fa-sun")
        localStorage.setItem("theme", "dark")
    } else {
        dark.classList.remove("fa-sun")
        dark.classList.add("fa-moon")
        localStorage.setItem("theme", "light")
    }
}

//?=====================loader==========================================
setTimeout(function () {
    $(".loader").fadeToggle();
}, 1500)
//?=====================================================================
