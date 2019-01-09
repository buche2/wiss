<br><h2>Results for your search</h2>
    <div class="container border rounded mt-2">
<?php
    foreach($this->products as $product)
	echo <<<EOF
    	<a href="?page=shop&action=detail&id={$product->id}" style="text-decoration:none;color:black;"><h3>{$product->name}</h3></a>
EOF;
?>
	</div>

	<div class="container border rounded mt-2">
<?php
	foreach($this->entries as $entry)
	echo <<<EOF
    	<a href="?page=forum" style="text-decoration:none;color:black;"><h3>{$entry->title}</h3></a>
EOF;
?>
	</div>





