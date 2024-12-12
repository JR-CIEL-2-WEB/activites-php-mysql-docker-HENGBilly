nom = document.querySelector('[name="name"]');
pre = document.querySelector('[name="prénom"]');
email = document.querySelector('[name="email"]');
pswd = document.querySelector('[name="password"]');
verif = document.querySelectorAll('small');
msg = document.querySelector('[name="message"]');
age = document.getElementById('formCheck-1');
age2 = document.querySelector('label');

function isValidEmail(email) {
    const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return regex.test(email);
}

function verifierFormulaire(event) {
    let isValid = true;

    if (pre.value === '') {
        pre.classList.remove('valide');
        pre.classList.add('pas-valide');
        isValid = false;
    } else {
        pre.classList.add('valide');
        pre.classList.remove('pas-valide');
    }

    if (nom.value === '') {
        nom.classList.remove('valide');
        nom.classList.add('pas-valide');
        isValid = false;
    } else {
        nom.classList.add('valide');
        nom.classList.remove('pas-valide');
    }

    if (isValidEmail(email.value)) {
        email.classList.add('valide');
        email.classList.remove('pas-valide');
    } else {
        email.classList.remove('valide');
        email.classList.add('pas-valide');
        isValid = false;
    }

    if (pswd.value.length >= 8) {
        pswd.classList.add('valide');
        pswd.classList.remove('pas-valide');
        verif[0].classList.add('invisible');
    } else {
        pswd.classList.remove('valide');
        pswd.classList.add('pas-valide');
        verif[0].classList.remove('invisible');
        isValid = false;
    }

    if (msg.value === '') {
        msg.classList.remove('valide');
        msg.classList.add('pas-valide');
        isValid = false;
    } else {
        msg.classList.add('valide');
        msg.classList.remove('pas-valide');
    }

    if (age.checked) {
        age2.classList.add('tvalide');
        age2.classList.remove('tpas-valide');
    } else {
        age2.classList.remove('tvalide');
        age2.classList.add('tpas-valide');
        isValid = false;
    }

    if (!isValid) {
        event.preventDefault();
        alert('Veuillez remplir tous les champs correctement');
    } else {
        alert('Formulaire validé');
    }
}
