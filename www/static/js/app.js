document.addEventListener('DOMContentLoaded', () => {
    const mainContent = document.getElementById('main-content');

/*
    // -------------------------------SPA Navigation-----------------------------------
    // SPA Navigation Handling
    document.body.addEventListener('click', async (e) => {
        if (e.target.matches('[data-link]')) {
            e.preventDefault();
            const path = e.target.getAttribute('href');

            // Update URL without reload
            window.history.pushState({}, '', path);

            // Load dynamic content
            navigateTo(path);
        }
    });

    // Route Navigation Function
    async function navigateTo(path) {
        try {
            const response = await fetch(path);
            if (!response.ok) throw new Error('Network response was not ok');

            const data = await response.text();
            const parser = new DOMParser();
            const doc = parser.parseFromString(data, "text/html");
            const newContent = doc.querySelector("#main-content").innerHTML;

            mainContent.innerHTML = newContent;

            // Update Page Title Dynamically
            const newTitle = doc.querySelector('title').innerText;
            document.title = newTitle;
        } catch (err) {
            const response = await fetch('/pages/404.php');
            const data = await response.text();
            mainContent.innerHTML = data;
            document.title = '404 - Page Not Found';
        }
    }

    // Handle Browser Back/Forward
    window.onpopstate = () => navigateTo(window.location.pathname);

    // ----------------- Form Handling: Bypass SPA for Form Submissions -------------------
    document.body.addEventListener('submit', (e) => {
        const form = e.target;
        if (form.hasAttribute('data-no-spa')) {
            // Allow native form submission (reload page)
            e.stopPropagation();
            return;
        } else {
            // Prevent default for SPA-like handling if needed
            e.preventDefault();
            console.log('Form submitted in SPA mode');
        }
    });

    // Initial Page Load
    navigateTo(window.location.pathname);

    */

    // -------------------------------Language Switcher-----------------------------------
    
    const languageToggle = document.querySelector('.language-toggle');
    const defaultLang = localStorage.getItem('lang') || 'en';
    
    // Apply initial language
    switchLanguage(defaultLang);

    // Toggle Language Button
    languageToggle.addEventListener('click', () => {
        const newLang = languageToggle.textContent === 'EN' ? 'FR' : 'EN';
        switchLanguage(newLang.toLowerCase());
    });

    // Function to switch language
    function switchLanguage(lang) {
        const elements = document.querySelectorAll('[data-lang-en]');

        elements.forEach(el => {
            el.innerHTML = el.getAttribute(`data-lang-${lang}`);
        });

        // Update toggle button and localStorage
        languageToggle.textContent = lang.toUpperCase();
        localStorage.setItem('lang', lang);
    }

    // -------------------------------Hamburger Menu-----------------------------------
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('toggle');
    });
});
