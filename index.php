<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon"  href="img/icon.png">
    <title>PT.GARDEN TEA</title>
    <style type="text/css">
        
        a{
            text-decoration: none;
            font-size: 25px;
            color:green;
        }

        body{
            background-image: url(img/bgg.jpg);
            background-position: cover;
        }
        a:hover{
            color: white;
        }
        table{
            color: white;
            background-color: rgb(112,130,56);
            text-align: center;
        }

        table:hover{
            color: white;
        }
h1{
    text-align: center;
    font-style: italic;
    font-family: serif;
}

.navbar {
    display: flex;
    align-items: center;
}
.navbar a{
    background-color:black;
    margin: 0 10px;
}

img{
    border-radius: 100px;
}

.brand{
    border-radius: 100px;
    width: 200px;
    height: 200px;
}


    </style>
  </head>
  <body>
   
    <hr>
    <nav class="navbar">
    <a href="index.php">HOME</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page1')); ?>">ABOUT</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page2')); ?>">CONTACK</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page3')); ?>">HISTORY</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page4')); ?>">LOCATION</a> |
    <hr>
    </nav>
    <?php 
    
    if (isset($_GET['page'])) :  
        $page= base64_decode(base64_decode(filter_var($_GET['page'],FILTER_SANITIZE_URL)));
        $a= include "halaman/".$page.".php";
        if ($a==false):
          header('location:index.php');
        endif;
        ?>
 <?php else: ?>
      <center><br> <table border="1px" width="70%" cellpadding="5" cellspacing="0">
    <tr>
        <td>NAMA       : Nanda febrina</td>
    </tr>
    <tr><td>JABATAN    : DIREKTUR UTAMA</td></tr>
        <tr><td>ALAMAT : BENGKULU</td></tr>
        <tr><td>E-MAIL : nandafebrina@gmail.com</td></tr>
    <tr>
        <td style="background-color:silver; color: black" > DIREKTUR UTAMA PT.GARDEN TEA <br><img src="img/nanda.jpeg" width="400px" height="400px"></td></tr>

        
</table>

</center>

<?php endif; ?>
    
  </body>
</html>

<!--php://filter/convert.base64-encode/resource= ->
