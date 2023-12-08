/**
 * Robet Portfolio
 * V1.0
 */

function sendMessage() {
    let subject = encodeURIComponent(`Mail from : ` + document.getElementById("name").value)
    let body = encodeURIComponent(document.getElementById("message").value)
    location.href = `mailto:mail@robet.me?&subject=${subject}&body=${body}`
}

document.addEventListener("DOMContentLoaded", function () {

    var header = document.querySelector("header");

    function scroll(elementId) {
        var targetElement = document.getElementById(elementId);

        if (targetElement) window.scrollTo({
            top: targetElement.offsetTop - header.offsetHeight,
            behavior: "smooth"
        });
    }

    addEventListener("click", function (event) {
        if (event.target.tagName === "A") {
            let href = event.target.getAttribute("href")
            if (href.includes("#")) {
                event.preventDefault()
                scroll(href.replaceAll("#", ""))
            }
        }
    });

    let age = Math.abs((new Date(Date.now() - new Date("12/25/2001"))).getUTCFullYear() - 1970)
    document.getElementById("age").innerHTML = `${age}`
});