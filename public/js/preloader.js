const preloader = document.getElementById("preloader");
const home = document.getElementById("home");

if (!sessionStorage.getItem("doNotShow")) {
  sessionStorage.setItem("doNotShow", "true");
  setTimeout(() => {
    preloader.style.opacity = "0";
  }, 4500);

  setTimeout(() => {
    preloader.style.display = "none";
    home.style.display = "block";
  }, 5500);

  setTimeout(() => {
    home.style.opacity = "100%";
  }, 5800);
} else {
  preloader.style.display = "none";
  home.style.display = "block";
  home.style.opacity = "100%";
}