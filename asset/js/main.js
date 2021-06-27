const toggles = document.querySelectorAll('.faq_toggle');

toggles.forEach(toggle => {

    toggle.addEventListener('click', () => {
        //console.log(toggle);
        toggle.parentNode.classList.toggle('active')

    });

});