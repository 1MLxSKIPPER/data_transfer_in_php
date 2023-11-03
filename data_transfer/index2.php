<?php
$stock=[['id'=>1,'libelle'=>'hp','prix'=>7000,'image'=>'image/hp1.jpg'],['id'=>2,'libelle'=>'dell','prix'=>9000,'image'=>'image/dell.jpg']];
$id=$_GET['p'];
if($id==1){
    $produit=$stock[0];
}else{
    $produit=$stock[1];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reception page</title>
</head>
<body>
    <h1>
        details de produit <?=$produit['libelle']?>
    </h1>
    <img src="<?=$produit['image']?>" width="200px" alt="">
    <p>
        prix du produit <?=$produit['prix']?>
    </p>
</body>
</html>