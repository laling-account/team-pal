/* =========================================
   GROUP PORTFOLIO - MOBILE NAVIGATION
========================================= */
document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.querySelector(".gpp-menu-toggle");
  const navigation = document.querySelector(".gpp-nav");

  if (!menuButton || !navigation) return;

  menuButton.addEventListener("click", function () {
    const isOpen = navigation.classList.toggle("is-open");

    menuButton.setAttribute("aria-expanded", String(isOpen));

    menuButton.setAttribute(
      "aria-label",
      isOpen ? "Close navigation menu" : "Open navigation menu",
    );
  });

  navigation.querySelectorAll("a").forEach(function (link) {
    link.addEventListener("click", function () {
      navigation.classList.remove("is-open");

      menuButton.setAttribute("aria-expanded", "false");

      menuButton.setAttribute("aria-label", "Open navigation menu");
    });
  });
});

/* =========================================
   HERO TYPING ANIMATION
========================================= */
document.addEventListener("DOMContentLoaded", function () {
  const typingText = document.querySelector(".gpp-typing-text");

  if (!typingText) return;

  function startTyping() {
    // Reset the animation.
    typingText.classList.remove("is-typing");

    // Force browser to restart the animation.
    void typingText.offsetWidth;

    // Get the complete text width.
    const textWidth = typingText.scrollWidth;

    typingText.style.setProperty("--gpp-typing-width", textWidth + "px");

    // Start typing animation.
    typingText.classList.add("is-typing");
  }

  // Start immediately.
  startTyping();

  // Repeat every 5 seconds.
  setInterval(startTyping, 10000);
});
