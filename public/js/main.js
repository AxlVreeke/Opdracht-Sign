/* homepage button */

/*
const showElement = document.getElementById('showElement');
const fullDesign = document.getElementById('fullDesign');
const cardWrapper = document.getElementById('cardWrapper');
const tableHide = document.getElementById('tableHide')


showElement.addEventListener('click', () => {
    if (fullDesign.style.display === "block") {
        fullDesign.style.display = "none";
    } else {
        fullDesign.style.display = "block";
    }
})

showElement.addEventListener('click', () => {
    if (cardWrapper.style.display === "flex") {
        cardWrapper.style.display = "none";
    } else {
        cardWrapper.style.display = "flex";
    }
})

showElement.addEventListener('click', () => {
    if (tableHide.style.display === "none") {
        tableHide.style.display = "flex";
    } else {
        tableHide.style.display = "none";
    }
})

function clearForm() {
    document.getElementById("report-page-form-form").reset();
}

*/

const showElement=document.getElementById("showElement"),fullDesign=document.getElementById("fullDesign"),cardWrapper=document.getElementById("cardWrapper"),tableHide=document.getElementById("tableHide");function clearForm(){document.getElementById("report-page-form-form").reset()}showElement.addEventListener("click",()=>{"block"===fullDesign.style.display?fullDesign.style.display="none":fullDesign.style.display="block"}),showElement.addEventListener("click",()=>{"flex"===cardWrapper.style.display?cardWrapper.style.display="none":cardWrapper.style.display="flex"}),showElement.addEventListener("click",()=>{"none"===tableHide.style.display?tableHide.style.display="flex":tableHide.style.display="none"})
