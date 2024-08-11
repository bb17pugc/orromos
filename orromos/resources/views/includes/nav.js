// Wait until the DOM is fully loaded
document.addEventListener("DOMContentLoaded", function() {
    // Get the navbar and the overlay element
    const navbarToggle = document.querySelector('.w-dropdown-toggle');
    const navbarDropdown = document.querySelector('.navbar_menu-dropdown');
    
    // Check if the navbar is open
    if (navbarDropdown.classList.contains('w--open')) {
        // Close the navbar
        navbarDropdown.classList.remove('w--open');
        navbarToggle.setAttribute('aria-expanded', 'false');
    }
});
