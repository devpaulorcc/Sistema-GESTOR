document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
    const mobileMenu = document.getElementById('mobile-menu');
    
    mobileMenuButton.addEventListener('click', function() {
      mobileMenu.classList.toggle('hidden');
      
      // Alterna o ícone do menu
      const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
      mobileMenuButton.setAttribute('aria-expanded', !expanded);
      
      // Alterna o ícone do menu
      mobileMenuButton.querySelector('svg.block').classList.toggle('hidden');
      mobileMenuButton.querySelector('svg.hidden').classList.toggle('hidden');
    });
  });
  