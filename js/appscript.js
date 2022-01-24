
//?========================Dark Mode=====================================

var dark = document.getElementById("darktheme")
var brand = document.getElementById("brand")

if (localStorage.getItem("theme") == null) {

    localStorage.setItem("theme", "light")
    dark.classList.remove("fa-sun")
    dark.classList.add("fa-moon")
    brand.src = "img/brand1.png"
}

let localData = localStorage.getItem("theme")
dark.classList.remove("fa-sun")
dark.classList.add("fa-moon")

if (localData == "dark") {

    brand.src = "img/brand.png"
    dark.classList.remove("fa-moon")
    dark.classList.add("fa-sun")
    document.body.classList.add("dark-theme")

} else if (localData == "light") {

    dark.classList.remove("fa-sun")
    dark.classList.add("fa-moon")
    document.body.classList.remove("dark-theme")
}

dark.onclick = function () {

    document.body.classList.toggle("dark-theme");

    if (document.body.classList.contains("dark-theme")) {
        brand.src = "img/brand.png"
        dark.classList.remove("fa-moon")
        dark.classList.add("fa-sun")
        localStorage.setItem("theme", "dark")

    } else {
        brand.src = "img/brand2.png"
        dark.classList.remove("fa-sun")
        dark.classList.add("fa-moon")
        localStorage.setItem("theme", "light")
    }
}

//?=====================loader==========================================
setTimeout(function () {
    $(".loader").fadeToggle();
    $(".page").fadeIn(1500);
}, 1500)
//?=====================================================================


