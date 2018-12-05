<button class="btn btn-outline-success float-right mt-5"><a href="index.php?page=forum&action=add" style="color:green;text-decoration:none;">Neuer Eintrag</a></button>
<h1 class="my-4">Wiss Forum</h1>

    <div class="container">
      <div class="container border border-success rounded mt-2">
   	 	  <div class="container border-bottom border-success">Title  Category  Date  Username</div>
    	  <div class="container py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    	  </div>
        <div class="container border-top border-success">
          <a href="index.php?page=forum&action=add" style="text-decoration:none;">Antwort</a>
          <a href="#" class="float-right show" id="answer1">Antworten anzeigen</a>
        </div>
		  </div>

      <div class="container border border-dark rounded ml-4 mt-2 answer1">
        <div class="container border-bottom border-dark">Title  Category  Date  Username</div>
        <div class="container py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
        <div class="container border-top border-dark"><a href="index.php?page=forum&action=add" style="text-decoration:none;">Antwort</a>
        </div>
      </div>

      <div class="container border border-success rounded mt-2">
        <div class="container border-bottom border-success">Title  Category  Date  Username</div>
        <div class="container py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
        <div class="container border-top border-success">
          <a href=index.php?page=forum&action=add" style="text-decoration:none;">Antwort</a>
          <a href="#" class="float-right show" id="answer2">Antworten anzeigen</a></div>
      </div>

      <div class="container border border-dark rounded ml-4 mt-2 answer2">
        <div class="container border-bottom border-dark">Title  Category  Date  Username</div>
        <div class="container py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
        <div class="container border-top border-dark"><a href=index.php?page=forum&action=add" style="text-decoration:none;">Antwort</a></div>
      </div>
    </div>

<!-- <script>
   var time = new Date();
   document.write(d.getDate()+"."+d.getMonth()+"."+(d.getYear()+2000));
 </script> -->

<script>
  $(".show").click(function(){
    $("."+$(this).attr('id')).toggle();
  });
</script>
