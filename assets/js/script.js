// restore website by clicking on logo

function resetPage() {
  document.addEventListener('click', () => {
    location.reload()
  })
}

// Efeito scrollspy

function scrollspy(text) {
  
  document.querySelectorAll('header nav ul li a').forEach(item => {
      item.classList.remove('active');
  });

  switch (text) {
      case 'home':
          document.querySelector('header nav ul li:nth-child(1) a').classList.add('active');
          break;
      case 'about':
          document.querySelector('header nav ul li:nth-child(2) a').classList.add('active');
          break;
      case 'portfolio':
          document.querySelector('header nav ul li:nth-child(3) a').classList.add('active');
          break;
      case 'contact':
          document.querySelector('header nav ul li:nth-child(4) a').classList.add('active');
          break;
      default:
          alert("Erro");
  }
}

document.querySelector('header nav ul li:nth-child(1) a').classList.add('active');


// Animated content texts

document.addEventListener("DOMContentLoaded", function () {
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

// navbar transition

window.addEventListener("scroll", function () {
  var header = document.querySelector("header nav");
  if (window.scrollY > 0) {
    header.style.background = "#292929ff";
  } else {
    header.style.background = "transparent";
  }
});