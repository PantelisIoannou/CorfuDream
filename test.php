<html>
  <head>
  <script type="text/javascript">
  function validar()
  {
     var right = 1;

     if(document.getElementById('email').value.length==0)
     {
        right = 0;
        document.getElementById('emptymail').innerHTML = "Empty Mail o Username";
     }
     if(document.getElementById('password').value.length==0)
     {
        right = 0;
        document.getElementById('emptypass').innerHTML = "Empty Password";
     }

    if(right == 1)
    {
      document.forms["formu"].submit();
    }

  }
  </script>
  </head>
  <body>
  <form action="mailtesting.php" class=" sign-in" method="post" name="formu" id="formu">
        <div style="margin:0;padding:0"></div>
        <h3>Enter Details</h3>
        <p><font size="-1">Please enter your details</font></p><br>
        <div class="clearfix">
          <label for="">Username or email address</label><br>
          <input class="xlarge" id="email" name="email" tabindex="1" type="text" value="" /><div id="emptymail"></div>
        </div>
        <div class="clearfix">
          <label for=""><br>
            Password</label><br>
          <input class="xlarge" id="password" name="password" tabindex="2" type="password" value="" /><div id="emptypass"></div>
        </div>


        <p class="remember">&nbsp;</p>
        <p class="remember">
          <button class="btn btn-m btn-blue" id="signin_submit" name="commit" type="button" tabindex=5 onclick="validar();">Sign in</button>
        </p>

  </form>
  </body>
  </html>
