document.addEventListener('DOMContentLoaded', () => {
    
    // My name typing code
    const heroSectionTitle = document.querySelector("#hero-title");
    const textToType = "Quinho Pereira";

    let index = 0;
    let isDeleting = false;

    function typing() {
        if (heroSectionTitle) {
            if (!isDeleting) {
                if (index < textToType.length) {
                    heroSectionTitle.textContent += textToType.charAt(index);
                    index++;
                    setTimeout(typing, 100); // Adjust the typing speed here
                } else {
                    isDeleting = true;
                    setTimeout(typing, 5000); // Wait before deleting
                }
            } else {
                if (index > 0) {
                    heroSectionTitle.textContent = textToType.substring(0, index - 1);
                    index--;
                    setTimeout(typing, 50); // Adjust the deleting speed here
                } else {
                    isDeleting = false;
                    setTimeout(typing, 500); // Wait before typing again
                }
            }
        }
    }

    typing();
    // End my name typing code

    const accordions = document.querySelectorAll('.accordion');

    accordions.forEach((accordion)=> {
        const accordionHeader = accordion.querySelector('.accordion-header');

        if(accordionHeader){
            accordionHeader.addEventListener('click', function(){
                const content = accordionHeader.nextElementSibling;
                const icon = accordionHeader.querySelector(".icon");
                if(icon){
                    console.log("icon")
                    icon.classList.toggle("active");
                }
                if(content){
                    content.classList.toggle('active');
                }
            });
        }
    });


});