/* MEMBER 1 - PORTFOLIO JAVASCRIPT: smooth in-page navigation */
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.member-portfolio-shell a[href^="#"]').forEach(function (link) {
    link.addEventListener('click', function (event) {
      const selector = link.getAttribute('href');
      if (!selector || selector === '#') return;
      const target = document.querySelector(selector);
      if (target) {
        event.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
});
