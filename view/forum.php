<button class="btn btn-outline-success float-right mt-5">Neuer Eintrag</button>
<h1 class="my-4">Wiss Forum</h1>
  
    <div class="container">  
      <div class="container border border-success rounded mt-2">
   	 	  <div class="container border-bottom border-success">Title  Category  Date  Username</div>
    	  <div class="container py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    	  </div>
        <div class="container border-top border-success">
          <a href="eintrag.php" id="Antwort">Antwort</a>
          <div class="float-right" class="show" id="answer1">Antworten anzeigen</div>
        </div>
		  </div>

      <div class="container border border-dark rounded ml-4 mt-2" class="answer1">
        <div class="container border-bottom border-dark">Title  Category  Date  Username</div>
        <div class="container py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
        <div class="container border-top border-dark"><a href="eintrag.php">Antwort</a>
        </div>
      </div>  

      <div class="container border border-success rounded mt-2">
        <div class="container border-bottom border-success">Title  Category  Date  Username</div>
        <div class="container py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
        <div class="container border-top border-success"><a href="eintrag.php" id="Antwort">Antwort</a><a href="#" onclick="" class="float-right">Antworten anzeigen</a></div>
      </div>

      <div class="container border border-dark rounded ml-4 mt-2">
        <div class="container border-bottom border-dark">Title  Category  Date  Username</div>
        <div class="container py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
        <div class="container border-top border-dark"><a href="eintrag.php" id="Antwort">Antwort</a></div>
      </div>
    </div>   
   
<!-- <script>
   var time = new Date();
   document.write(d.getDate()+"."+d.getMonth()+"."+(d.getYear()+2000));
 </script> -->

<script>
  $(".show").trigger('click', function(){
    alert("FAdsfd");
    $("."+$(this).attr('id')).toggle();
    return false;
  });


</script>