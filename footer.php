 <div class="container">

  <br>
    <div class="col-md-12">
        <div class="col-md-4 col-xs-6 col-sm-4">
           
                
                 <img src="img/logo/logo1.jpg" width="60" height="70" alt="" style="float: left;margin-right: 30px;" class="thumbnail">
                
                 <p>Imparare<br><a href="#">Web</a></p>
    <a href="mailto:bollinilivio@gmail.com">Contattaci</a>
            </div>
            
             <div class="col-md-4 hidden-xs col-sm-4">
           
<!--
                <button class="btn btn-info btn-lg">contattaci</button>
                <p></p>
                <br>
            
                 <hr>
                 
                 <button class="btn btn-info btn-lg">news letter</button>
-->
              <p style="margin-left: 40px;">Menu</p>
              
                    
            </div>
            <div class="col-md-4 col-xs-6 col-sm-4 text-left" >
             <br>
              <img src="img/logo/web.jpg" width="70" height="60" alt="" style="float: left;margin-right: 30px;" class="thumbnail">
              sito realizzato da <br> 
              <a href="">web per il marketing 
             </a> <br>
                <br>
                 © Copyright.
              Tutti i diritti riervati
          
              
            </div>
            
        </div>
        
    </div>
    
    </div>



</body>



<!--flexslider per fotografia -->
<!--
<script src="plugin/flexslider/js/jquery.flexslider.js"></script>
<script src="js/flex.js"></script>
-->

<!--carosello foto-->
<!--
<script src="plugin/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="js/fancy.js"></script>
-->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/control_reg.js"></script>
 <script src="js/control_log.js"></script>
 <script src="js/control_mail.js"></script>
 
<!-- film di Ajax https://www.youtube.com/watch?v=RmibuT2JsnM-->
<script type="text/javascript">
  $("#psw_log,#email_log").on("keyup", verificata);

  function verificata() {
 
   var contenuto = $("#psw_log").val();
   var email_log = $("#email_log").val();

   $.ajax({
   type: "GET",
   cache: false, // disabilita caching ajax       
    url: "signup/psw_usr.php", 
    //data: "psw_log=" + contenuto
    data: {
     "psw_log": contenuto,
     "email_log": email_log
    },
    success: mostra

   });

  }

  function mostra(ritorno) {

   if (ritorno == "true") {

    $("#mostra").html("<h4 style='color:white; text-align:center;font-size:25px;text-shadow:3px 3px 3px black'>utente e password  validi</h4>");
    


   }
   if (ritorno == "non true") {

    $("#mostra").html("<h5 style='color:white; text-align:center;font-size:19px;text-shadow:13px 13px 13px black'>utente e/o password non validi</h5>");
    
     
    
    
    

   }
  }

 </script>


</html>