 <div class="container">
  <div class="row">
    <?php
    foreach($this->products as $product){
      echo <<<EOF
        <div class="col-lg-4 mb-4">
          <div class="card text-center" style="width:100%;height:100%;">
            <a href="?page=shop&action=detail&id=$product->id"><img class="card-img-top" src="assets/img/Products/{$product->id}.jpg" width="250px" height="250px" style="padding:1%;" alt=""></a>
            <div class="card-body text-left float">
              <h5 class="text-danger">{$product->price}.-</h5>
              <h5 class="card-title">
                <a href="#" class="text-dark" style="text-decoration:none;">{$product->name}</a>
              </h5>
            </div>
          </div>
        </div>
EOF;
    } 
    ?>
  </div>
</div>
