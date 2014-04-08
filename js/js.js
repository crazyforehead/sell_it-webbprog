
function validateMail(p1, p2) {
if (p2.value === "" || p1.value != p2.value ) {
    p2.setCustomValidity('E-postadressen är fel');
} else {
    p2.setCustomValidity('');
}
}

function validatePass(p3, p4) {
if (p4.value == '' || p3.value != p4.value) {
    p4.setCustomValidity('Lösenord är fel');
} else {
    p4.setCustomValidity('');
}
}



