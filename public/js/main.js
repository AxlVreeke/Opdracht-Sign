/* homepage button */

const showElement = document.getElementById('showElement');
const fullDesign = document.getElementById('fullDesign');

showElement.addEventListener('click', () => {
    if (fullDesign.style.display === "block") {
        fullDesign.style.display = "none";
    } else {
        fullDesign.style.display = "block";
    }
})

/* sort categories */
