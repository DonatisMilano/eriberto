


<?php

function query($sql){
  global $connessione;
  return mysqli_query($connessione , $sql);
}



function conferma($risultato){
  global $connessione;
  if(!$risultato)
//  if(!$mostraCategoria)--questa Professoressa ha seminato la confussione, qui in questa riga !
  {
    die('Richiesta Fallita' . mysqli_error($connessione));
  }
}



function fetch_array($risultato){
  return mysqli_fetch_array($risultato);
}


function creaAvviso(){
  if(!empty($msg)){
    $_SESSION['messaggio'] = $msg;

  }else{
    $msg = "  ";
  }


}


function mostraAvviso(){
  if(isset($_SESSION['messaggio'])){
    echo $_SESSION['messaggio'];

    unset($_SESSION['messaggio']);

}

}






function mostraProdotti(){
  $ricercaProdotti = query('SELECT * FROM arbprodotti LIMIT 10');
  conferma($ricercaProdotti);
  while($row = fetch_array($ricercaProdotti)){
  //  echo $row['titolo'];

  $prodotti = <<<STRINGA_PDT


   <div class="card">
       <img class="card-img-top" src="foto_cd/{$row['image']}">
   <div class="card-body">
       <h4 class="card-title overflow-hidden">{$row['titolo']}</h4>
       <h6 class="overflow-hidden">{$row['autore']}</h6>
        <a href="page_B.php?=id{$row['id']}" target="_blank"><p class="card-text overflow-hidden">{$row['descrizione']}</p></a>
       <h5 class="overflow-hidden">{$row['casa-editrice']}</h5>
       <h5 class="overflow-hidden">€{$row['prezzo']}</h5>
       <h6>{$row['Cat_prodotto']}</h6>

       <a href=".php?=id{$row['id_pdt']}" target="_blank"><button type="button" class="btn btn-outline-primary btn-small">Expand</button></a><br><br>
       <a href="carrello.php?=add{$row['id_pdt']}" target="_blank"><button type="button" class="btn btn-primary btn-small">Acquista</button></a>
   </div>
   </div>

STRINGA_PDT;
echo $prodotti ;
}
}



function mostraCategoria(){
   $ricercaCategoria = query("SELECT * FROM categoriarb");

   conferma($ricercaCategoria);

   while($row = fetch_array($ricercaCategoria)){

$Categoria = <<<STRINGA_CAT

   <li class='nav-item'>
   <a class='nav-link' href='categorie-b.php?=id{$row["idCat"]}' target='_blank'>{$row["nomeCat"]}</a></li>

STRINGA_CAT;

echo $Categoria;

}

}


/*

function paginaCategoria(){
$pdtCategoria = query('SELECT * FROM categoria_a WHERE ID_Cat = {$_GET[`id`]}') ;
return($pdtCategoria);
while($row = fetch_array($pdtCategoria)){

 $pdtSingolaCat = <<<STRINGA_PDT

     <div class="card">
         <img class="card-img-top" src="#">
     <div class="card-body">

         <h4 class="card-title overflow-hidden">
         {$row['titolo']}
         </h4>

         <h6 class="overflow-hidden">{$row['autore']}</h6>

         <h6
          {$row['ID_Cat']}>
          <br>

         <p class="card-text overflow-hidden">{$row['descrizione']}</p></h6>
         <h5 class="overflow-hidden">{$row['casa-editrice']}</h5>

         <h5 class="overflow-hidden">
         €{$row['prezzo']}
         </h5>


         <h6>{$row['Cat_prodotto']}</h6>
         <a href="#" class="btn btn-primary">Acquista</a>
         <a href="cate.php?=id{$row['ID_Cat']}" class="btn btn-secondary">Dettagli Prodotto</a>
     </div>
     </div>

STRINGA_PDT;

echo $pdtSingolaCat ;
}

}








function mostrapdtSingolo(){
$risultato = query('SELECT * FROM arbprodotti WHERE id = {$_GET[`id`]}');
return($risultato);
while($row = fetch_array($risultato)){

$gsingolo = <<<STRINGA_MOM


    <div class="card">
          <img class="card-img-top img-fluid" src="photo_ab/{$row['image']}">
     <div class="card-body">
       <h4 class="card-title overflow-hidden">{$row['titolo']}</h4>
       <h6 class="overflow-hidden">{$row['autore']}</h6>

        <p class="card-text">
        {$row['descrizione']}
        </p>

       <h5 class="overflow-hidden">{$row['casa-editrice']}</h5>
       <h5 class="overflow-hidden">€{$row['prezzo']}</h5>
       <h6><{$row['Cat_prodotto']}</h6>

         <a href="#" class="btn btn-primary">Expand</a>

STRINGA_MOM;

echo $gsingolo;

}
}
*/
