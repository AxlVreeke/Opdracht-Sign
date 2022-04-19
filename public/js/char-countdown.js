/* char countdown */

$('textarea').keyup(updateCount);
$('textarea').keydown(updateCount);


function updateCount() {
    let maxLength = 255;
    let charsEntered = $(this).val().length;
    $('.char-amount').text(maxLength - charsEntered);
}

