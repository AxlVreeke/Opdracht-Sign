/* homepage button */

const showElement = document.getElementById('showElement');
const fullDesign = document.getElementById('fullDesign');

showElement.addEventListener('click', () => {
    if (fullDesign.style.display === "none") {
        fullDesign.style.display = "block";
    } else {
        fullDesign.style.display = "none";
    }
})

/* sort categories */
