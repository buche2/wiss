
  <table  class="table  table-hover">
    <thead>
      <tr id="main-table" style="">
        <th>Menge</th>
        <th>Artikel</th>
        <th>Einzel Preis</th>
        <th>GesamtPreis</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $total=0;
      foreach($this->cart->getItems() as $item){
        $total+=$item->amount();
        $filename = 'assets/img/Products/'.$item->getProduct()->id.'.jpg';
        if (file_exists($filename)) {
          $filename;
        } else {
          $filename = 'assets/img/imagenotavailable.jpg';
        }
        echo <<<ITEM
        <tr>
          <td>{$item->getCount()}</td>
          <td><img src="$filename" class="rounded float-left" alt="" hspace="20" width="25" height="25">{$item->getProduct()->name}</td>
          <td>{$item->getProduct()->price}</td>
          <td>{$item->amount()}</td>
        </tr>
ITEM;
      }
      ?>
      <?php
      echo <<<ITEM
      <thead>
        <tr id="main-table" style="">
          <td></td>
          <td></td>
          <td>Kosten Insgesamt: </td>
          <td>{$total}</td>
        </tr>
        <tr id="main-table" style="">
          <td></td>
          <td></td>
          <td></td>
          <td><a href="?page=bestellung" class="btn btn-primary">Zur Kasse <i class="fas fa-cash-register"></i></a></td>
        </tr>
      </thead>
ITEM;

      ?>
    </tbody>
  </table>
