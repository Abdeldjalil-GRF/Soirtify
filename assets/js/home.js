document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');

    toggleBtn.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
});

function confirmLogout(event) {
  event.preventDefault();
  if (confirm("Are you sure you want to logout?")) {
     
    fetch('/SPORTIFY/includes/logout.php')
      .then(() => {
        window.location.href = '/SPORTIFY/pages/home.php';
      });
  }
}