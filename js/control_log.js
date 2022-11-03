function checkForm_log(form) {
    if (form.email_log.value == "") {
        alert("Errore: la mail non deve essere bianca");
        return false;
    }
    re = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
    if (!re.test(form.email_log.value)) {
        alert("Errore: la mail deve essere scritta correttamente");
        return false;
    }

    if (form.psw_log.value != "") {
        if (form.psw_log.value.length < 6) {
            alert("Errore: la password deve contenere almeno 6 caratteri!");
            return false;
        }
    }
    re = /[a-z]/;
    if (!re.test(form.psw_log.value)) {
        alert("Errore: la password deve contenere almeno uma lettera minuscola");
        return false;
    }

    re = /[A-Z]/;
    if (!re.test(form.psw_log.value)) {
        alert("Errore: la password deve contenere almeno uma lettera maiuscola");
        return false;
    }

    var checkBox = document.getElementById('checkbox-form');
    if (checkBox.checked !== true) {
        alert("Errore: Devi acettare la privacy");
        return false;
    }
    alert("hai inserito una password valida:" + form.psw_log.value);
    return true;

}