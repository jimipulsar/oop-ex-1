<?php require 'prodotti.php'; ?>

 <?php $pasticcino = new Prodotto("Pasticceria")  ?>
 <?php
 $pasticcino->nomeProdotto = "Briosche";
 $pasticcino->brandProdotto = "Algida";
 $pasticcino->quantita = 100;
 $pasticcino->quantitaVendute = 60;
  ?>


 <div class="prodotto">
   <h1><?php echo $pasticcino->categoria; ?></h1>
   <ul>
     <li>Nome Prodotto: <?php echo $pasticcino->nomeProdotto; ?></li>
     <li>Marca: <?php echo $pasticcino->brandProdotto; ?></li>
     <li>Quantita acquistata: <?php echo $pasticcino->quantita; ?></li>
     <li>Quantita rimanente: <?php echo $pasticcino->rimanenze(); ?></li>
   </ul>
 </div>


 <?php $trucchi = new Prodotto("Cosmetica")  ?>
 <?php
 $trucchi->nomeProdotto = "Rossetto";
 $trucchi->brandProdotto = "L'oreal";
 $trucchi->quantita = 120;
 $trucchi->quantitaVendute = 28;
  ?>

<div class="prodotto">
   <h1><?php echo $trucchi->categoria; ?></h1>
   <ul>
     <li>Nome Prodotto: <?php echo $trucchi->nomeProdotto; ?></li>
     <li>Marca: <?php echo $trucchi->brandProdotto; ?></li>
     <li>Quantita acquistata: <?php echo $trucchi->quantita; ?></li>
     <li>Quantita rimanente: <?php echo $trucchi->rimanenze(); ?></li>
   </ul>
 </div>

 <?php $cibi = new Prodotto("Alimentari")  ?>
 <?php
 $cibi->nomeProdotto = "Latte";
 $cibi->brandProdotto = "Parmalat";
 $cibi->quantita = 200;
 $cibi->quantitaVendute = 78;
  ?>

<div class="prodotto">
   <h1><?php echo $cibi->categoria; ?></h1>
   <ul>
     <li>Nome Prodotto: <?php echo $cibi->nomeProdotto; ?></li>
     <li>Marca: <?php echo $cibi->brandProdotto; ?></li>
     <li>Quantita acquistata: <?php echo $cibi->quantita; ?></li>
     <li>Quantita rimanente: <?php echo $cibi->rimanenze(); ?></li>
   </ul>
 </div>
 
