<button class="btn btn-outline-success float-right mt-5"><a href="index.php?page=forum&action=add" style="color:green;text-decoration:none;">Neuer Eintrag</a></button>
<h1 class="my-4">Wiss Forum</h1>

    <div class="container">

      <?php
    foreach($this->entries as $entry){
    echo <<<EOF
      <div class="container border border-success rounded mt-2">
   	 	  <div class="container border-bottom border-success">{$entry->title} | {$entry->category} | {$entry->entry_date} | {$entry->user->username}</div>
    	  <div class="container py-2">{$entry->content}</div>
        <div class="container border-top border-success">
          <a href="index.php?page=forum&action=add&forum_id={$entry->id}" style="text-decoration:none;">Antwort</a>
EOF;
      if(count($entry->children) > 0){
        echo <<<EOF
            <a href="#answer{$entry->id}" class="float-right show" id="answer{$entry->id}">Antworten anzeigen</a>
EOF;
      }
      echo <<<EOF
        </div>
		  </div>
EOF;
      foreach($entry->children as $child){
        echo <<<EOF
          <div class="container border border-warning rounded mt-2 answer{$child->forum_id}" style="display:none;">
       	 	  <div class="container border-bottom border-warning">{$child->title} | {$child->category} | {$child->entry_date} | {$child->user->username}</div>
        	  <div class="container py-2">{$child->content}</div>
    		  </div>
EOF;
      }

} ?>

<script>
  $(".show").click(function(){
    $("."+$(this).attr('id')).toggle();
  });
</script>
