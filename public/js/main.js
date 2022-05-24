/* homepage button */

/*
const showElement = document.getElementById('showElement');
const fullDesign = document.getElementById('fullDesign');

showElement.addEventListener('click', () => {
    if (fullDesign.style.display === "block") {
        fullDesign.style.display = "none";
    } else {
        fullDesign.style.display = "block";
    }
})

function clearForm() {
    document.getElementById("report-page-form-form").reset();
}
 */

const showElement=document.getElementById("showElement"),fullDesign=document.getElementById("fullDesign");function clearForm(){document.getElementById("report-page-form-form").reset()}showElement.addEventListener("click",()=>{"block"===fullDesign.style.display?fullDesign.style.display="none":fullDesign.style.display="block"});
