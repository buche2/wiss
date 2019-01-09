<form class="warenkorb" action="index.html" method="post">
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

      foreach($this->cart->getItems() as $item){
        echo <<<ITEM
        <tr>
          <td>{$item->getCount()}</td>
            <td><img src="Bildpfad" >{$item->getProduct()->name}</td>
            <td>{$item->getProduct()->price}</td>
            <td>{$item->amount()}</td>
          </tr>

ITEM;
      }
      ?>
      </tbody>
  </table>
</form>
