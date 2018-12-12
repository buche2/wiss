<button class="btn btn-outline-success float-right mt-5"><a href="index.php?page=forum&action=add" style="color:green;text-decoration:none;">Neuer Eintrag</a></button>
<h1 class="my-4">Wiss Forum</h1>

    <div class="container">

      <?php
    foreach($this->entries as $entry){
    echo <<<EOF
      <div class="container border border-success rounded mt-2">
   	 	  <div class="container border-bottom border-success">{$entry->title} | {$entry->category} | "Date" | {$entry->user->username}</div>
    	  <div class="container py-2">{$entry->content}</div>
        <div class="container border-top border-success">
          <a href="index.php?page=forum&action=add" style="text-decoration:none;">Antwort</a>
          <a href="#" class="float-right show" id="answer1">Antworten anzeigen</a>
        </div>
		  </div>
EOF;
} ?>

<!-- <script>
   var time = new Date();
   document.write(d.getDate()+"."+d.getMonth()+"."+(d.getYear()+2000));
 </script> -->

<script>
  $(".show").click(function(){
    $("."+$(this).attr('id')).toggle();
  });
</script>
