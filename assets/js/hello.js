document.addEventListener("DOMContentLoaded", () => {
    const img = document.querySelector("#hello_img");
    const about_section = document.querySelector("#about");
    var checkInterval;

    window.addEventListener("scroll", () => {
        var topOffset = about_section.getBoundingClientRect().top; // How far away top of the element is to the top of the page
        var bottomOffset = topOffset - window.innerHeight; // How far away bottom of the elem is to the top of the page

        // window.innerHeight + about_section.offsetHeight = 100% scrolled
        console.log();

        let translatePercentage = ((bottomOffset * 100) / (window.innerHeight + about_section.offsetHeight)) * -1 - 50;
        img.style.transform = `translateY(${translatePercentage}%)`;
        if (translatePercentage >= 0) {
            img.style.transform = `translateY(0%)`;
        }
    });

    let options = {
        threshold: 0.05,
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                checkInterval = setInterval(() => {}, 100);
            } else {
                clearInterval(checkInterval);
            }
        });
    }, options);

    observer.observe(about_section);
});