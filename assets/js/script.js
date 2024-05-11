// restore website by clicking on logo

function resetPage() {
    document.addEventListener('click', () => {
        location.reload()
    })
}

// Efeito scrollspy

// Animated content texts

document.addEventListener("DOMContentLoaded", function() {
    var container = document.getElementById("container-text");
    var texts = container.getElementsByTagName("p");
    var currentIndex = 0;

    function toggleText() {
        texts[currentIndex].classList.remove("visible");
        currentIndex = (currentIndex + 1) % texts.length;
        texts[currentIndex].classList.add("visible");
    }

    setInterval(toggleText, 3500);
});