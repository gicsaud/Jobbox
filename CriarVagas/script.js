document.querySelector(".jsFilter").addEventListener("click", function () {
  document.querySelector(".filter-menu").classList.toggle("active");
});

document.querySelector(".grid").addEventListener("click", function () {
  document.querySelector(".list").classList.remove("active");
  document.querySelector(".grid").classList.add("active");
  document.querySelector(".products-area-wrapper").classList.add("gridView");
  document
    .querySelector(".products-area-wrapper")
    .classList.remove("tableView");
});

document.querySelector(".list").addEventListener("click", function () {
  document.querySelector(".list").classList.add("active");
  document.querySelector(".grid").classList.remove("active");
  document.querySelector(".products-area-wrapper").classList.remove("gridView");
  document.querySelector(".products-area-wrapper").classList.add("tableView");
});

var modeSwitch = document.querySelector('.mode-switch');
modeSwitch.addEventListener('click', function () {                      document.documentElement.classList.toggle('light');
 modeSwitch.classList.toggle('active');
});

document.addEventListener('DOMContentLoaded', () => {
  const darkModeStorage = localStorage.getItem('mode-switch')
  const html = document.querySelector('html')
  const inputDarkMode = document.getElementById('input-mode-switch')


  if(darkModeStorage){
      html.setAttribute("dark", "true")
  }

  inputDarkMode.addEventListener('change', () => {
    if(inputDarkMode.checked){
        html.setAttribute("dark", "true")
        localStorage.setItem('mode-switch', true)
    }else{
        html.removeAttribute("dark")
        localStorage.removeItem('mode-switch')
    }
})
})