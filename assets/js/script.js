function toggleSidebar() {
  document.getElementById("sidebarMenu").classList.toggle("collapsed");
  document.querySelector(".content").classList.toggle("collapsed");
}

window.addEventListener("resize", function () {
  if (window.innerWidth <= 768) {
    document.getElementById("sidebarMenu").classList.add("collapsed");
    document.querySelector(".content").classList.add("collapsed");
  } else {
    document.getElementById("sidebarMenu").classList.remove("collapsed");
    document.querySelector(".content").classList.remove("collapsed");
  }
});

document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth <= 768) {
    document.getElementById("sidebarMenu").classList.add("collapsed");
    document.querySelector(".content").classList.add("collapsed");
  }
});
