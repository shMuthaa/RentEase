const MenuBtn  = document.querySelector("#menu-btn");
const SideMenu = document.querySelector("#sidebar");
const CloseBtn = document.querySelector("#close-btn");
const ThemeToggler = document.querySelector(".theme-toggler");

/**
 * Show sidebar
 */
MenuBtn.addEventListener('click', () => {
    SideMenu.style.display = 'block'
})

/**
 * Close sidebar
 */
CloseBtn.addEventListener('click', () => {
    SideMenu.style.display = 'none'
})

/**
 * Change theme
 */
ThemeToggler.addEventListener("click", () => {
    document.body.classList.toggle('dark-theme-variables')

    ThemeToggler.querySelector('.theme-toggler__button--light').classList.toggle('theme-toggler__button--active')
    ThemeToggler.querySelector('.theme-toggler__button--dark').classList.toggle('theme-toggler__button--active')
})

// Add event listeners to each sidebar item
document.querySelector('.sidebar__item--active').addEventListener('click', () => showContent('overview-content'));
document.querySelectorAll('.sidebar__item')[1].addEventListener('click', () => showContent('tenants-content'));
// Add similar event listeners for other sidebar items

// Function to show the content for a specific sidebar item
function showContent(contentId) {
  // Hide all content forms
  const contentForms = document.querySelectorAll('.content');
  contentForms.forEach(form => form.style.display = 'none');

  // Show the content form corresponding to the clicked sidebar item
  document.getElementById(contentId).style.display = 'block';
}
