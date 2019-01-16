<br><h2>Results for your search</h2>
<br>
	<h3>Shop Items</h3>
    <div class="container border rounded mt-2">
<?php
	if(count($this->products) == 0){
		echo "<h4>No Products found.</h4>";
	}else{
		foreach($this->products as $product)
			echo <<<EOF
    			<a href="?page=shop&action=detail&id={$product->id}" style="text-decoration:none;color:black;"><h4>{$product->name}</h4></a>
EOF;
    }
?>
	</div>
	<br>
	<h3>Forum einträge</h3>
	<div class="container border rounded mt-2">
<?php
	if(count($this->entries) == 0){
		echo "<h4>No Entry found.</h4>";
	}else{
		foreach($this->entries as $entry){
			echo <<<EOF
	    		<a href="?page=forum" style="text-decoration:none;color:black;"><h4>{$entry->title}</h4></a>
EOF;
	    }

	}

?>
	</div>

