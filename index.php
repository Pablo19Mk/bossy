<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Crudxd/css/style.css">
    <title>information</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="" id="form">
            <div class="information">
                <div class="icon">
                    <img src="../Crudxd/img/pika.gif" alt="">
                    <h1>Pika-Boom</h1>
                    <h4>remplir tts les champs en bas lesy eh fa tsy leh</h4>

                </div>
                <div class="div1">
                    <input type="text" name="nom"  placeholder=" Entrez votre nom  ">
                    <input type="text" name="prenom" placeholder=" Entrez votre prenom ">
                    <input type="number"   id ="age"name="age" placeholder=" Votre age ">
                </div>
                <div class="div2">
                    <input type="text"  name="race" placeholder=" Mettez ici, votre race  ">
                    <input type="text" name="pays" placeholder=" Mettez ici, votre pays ">
                </div>
                <div class="div3">
                    <input type="submit" value="Annuler" name ="annuler" >
                    <input type="submit" value="Comfirmer" name ="confirmer">
                </div>
               
            </div>
        </form>
        <?php include("../Crudxd/php/connectionBDD.php");?>
        <!-- <form  method="GET" action=""> -->
            <div class="tableau">
                <table border="0">
                    <tr>
                        <th>Rang</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                        <th>Race</th>
                        <th>PaysOrigine</th>
                        <th>Choix</th>    
                    </tr>
                    <?php afficheInfo($connection);?>    
                    <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                       
                            <td>
                                <!-- <form  method="POST" action=""> -->
                                    <a href="" > </a> 
                                    <a href="" > </a>
                                <!-- </form> -->

                            </td>
                          

                    </tr> 
                    <?php gg($connection);  ?>
                    <?php modifInfo($connection);  ?>
                </table>
            </div>
        <!-- </form> -->
    </div>
</body>
</html>