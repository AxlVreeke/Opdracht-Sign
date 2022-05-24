/* char countdown */

/*
$('textarea').keyup(updateCount);
$('textarea').keydown(updateCount);


function updateCount() {
    let maxLength = 255;
    let charsEntered = $(this).val().length;
    $('.char-amount').text(maxLength - charsEntered);
}
 */

function updateCount(){let t=$(this).val().length;$(".char-amount").text(255-t)}$("textarea").keyup(updateCount),$("textarea").keydown(updateCount);
