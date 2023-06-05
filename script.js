const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      modeSwitch = body.querySelector('.toggle-switch');

modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");
});