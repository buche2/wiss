<div class="container">
  <div class="row">
    <?php
    foreach($this->products as $product){
      echo <<<EOF
        <div class="col-lg-4 mb-4">
          <div class="card">
            <a href="?page=shop&action=detail&id=$product->id"><img class="card-img-top" src="https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c04938915.png" alt=""></a>
            <div class="card-body">
              <h5 class="card-title">
                <a href="#">{$product->name}</a>
              </h5>
              <h6>1699.- <small>statt vorher 1899.-</small></h6>
            </div>
          </div>
        </div>
EOF;
    } ?>
  </div>
</div>
