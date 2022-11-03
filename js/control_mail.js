  function checkForm_mail(form)
  {
   
      if(form.nome.value == "") {
      alert("Errore: devi inserire un nome!");

      return false;
    } 
      
    if(form.email.value == "") {
      alert("Errore: la email non puo' essere bianca!");

      return false;
    }

      re=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!re.test(form.email.value)) {
      alert("Error: la email deve essere scritta correttamente!");

      return false;
    }

    if(form.oggetto.value == "") {
      alert("Errore: devi inserire un oggetto!");
 
      return false;
    }
      if(form.testo.value == "") {
      alert("Errore: devi inserire un testo!");
      
      return false;
    }
         
        alert("hai inserito tutti i dati" );
    return true; 
  }