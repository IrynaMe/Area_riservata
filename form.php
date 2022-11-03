
<?php
//entra in questa pagina solo se sono loggato  cioe se stata creata la sessione ['id']
if (!isset($_SESSION['email'])){
  header('location:index.php');
}

?>

<div class="inner contact">
    <br>
    <h1 style="text-align:center" id="title">Inserisci qui <br> il testo della mail che vuoi inviare</h1>
    <br>
    <!-- Form Area -->
    <div class="contact-form">
        <!-- Form -->

        <form role="form" id="contact-us" action="mail/mail_invio.php" method="post" onsubmit="return checkForm_mail(this);">
            <!-- Left Inputs -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow animated slideInLeft" data-wow-delay=".5s">
                        <!-- Name -->
             
                        <input type="text" name="nome" id="nome" class="form" placeholder="Nome"  value="" />

                        <!-- Email -->
                        <input type="text" name="email" id="email" class="form" placeholder="Email" value="" />
                        <!-- Subject -->
                        <input type="text" name="oggetto" id="oggetto" class="form" placeholder="oggetto" value="" />
                    </div><!-- End Left Inputs -->
                    <!-- Right Inputs -->
                    <div class="col-md-6   wow animated slideInRight" data-wow-delay=".5s">
                        <!-- Message -->

                        <textarea name="testo" id="testo" class="form textarea" placeholder="scrivi il tuo messaggio" value=""></textarea>

                    </div><!-- End Right Inputs -->
                </div>
            </div>
            <!-- Bottom Submit -->
            <div class="relative col-md-12 col-xs-12">
                <!-- Send Button -->
                <button type="submit" id="submit" name="submit" class="form-btn semibold btn-block">Invia messaggio</button>
           
               
        <div style="text-align:center;" id="invio">
            <?php
            if (isset($_SESSION['mail_invio'])){
                //la metto in una variabile
                //controllo valore
                //se valore=1  echo email e inviata con sucesso
                // else if valore=0 email non inviata
                $mail=$_SESSION['mail_invio'];
                if ($mail==1) {
                    echo "Email inviata con sucesso!";
                    unset($_SESSION['mail_invio']);
                }else{
                    echo "Email NON inviata";
                    unset($_SESSION['mail_invio']);
                }

            }
            ?>

        </div>         <br><br>
           
            </div><!-- End Bottom Submit -->
            <!-- Clear -->
            
        
         
  
            <div class="clear"></div>
        </form>
        
         <div class="relative col-md-12 col-xs-12">
        	    <a href="esci.php">
         	    <button type="reset" id="reset" name="submit" class="form-btn semibold btn-block">reinserisci email smtp <br> </button>
         	  </a>    
         </div>
        <br>


    </div><!-- End Contact Form Area -->
</div>
