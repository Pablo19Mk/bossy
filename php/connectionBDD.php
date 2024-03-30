
<?php
$hote = "localhost";
$baseDonne = "Bddinformation";
$user = "root";
$password = "";

try{
    $connection= new PDO ("mysql:host =" .$hote . ";dbname=" .$baseDonne , $user ,$password);
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo"error : ". $e ->getMessage();
}


//eto lay m-inserer anley valeur anty champs 
// function entreInfo($connection){
    if (isset($_POST["confirmer"])){
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $age =  $_POST["age"];
        $race = $_POST["race"];
        $pays = $_POST["pays"];

        //verification ppour que les champs soit diff du vide et age qui devrait etre sup a 0
        if ($nom != "" && $prenom != "" && $age != "" && $race !="" && $pays !="" ){
            if ( $age > 0  ){
               $insert = $connection -> prepare("INSERT INTO profile_personne(Nom, Prenom,Age,Race, PaysOrigine) VALUES(?,?,?,?,?)");
               $insert -> execute([$nom, $prenom, $age,$race, $pays]);
            }else{echo "<script> alert (' age doit etre normal lesy eh') </script>";}
        }else {echo "<script> alert ('fenoy le champ tompoko') </script>";}
    }
// }

//pour afficher les element dans le tab sql vers form html bla bla
function afficheInfo($connection){
    $select = $connection -> prepare("SELECT * FROM profile_personne ");
    $select -> execute();
    $tableauSelect = $select -> fetchAll();
    $nombreTableau = count($tableauSelect);
    for ($i=0; $i < $nombreTableau; $i++){
         echo  " <div class='tableau'> <tr> <td>" . $tableauSelect[$i]["Rang"] . "</td>" ; 
         echo  "<td>" . $tableauSelect[$i]["Nom"] . "</td>" ;
         echo  "<td>" . $tableauSelect[$i]["Prenom"] . "</td>";
         echo   "<td>" . $tableauSelect[$i]["Age"] . "</td>" ;
         echo   "<td>" . $tableauSelect[$i]["Race"] . "</td>" ;
         echo   "<td>" . $tableauSelect[$i]["PaysOrigine"] . "</td>";
         echo " <td>" ."<a href='index.php?idm=".$tableauSelect[$i]['Rang']."'> Modifier</a>"."  "."<a  href='index.php?id=".$tableauSelect[$i]['Rang']."'>supprimer</a> </td> </tr> </div>" ;  
         
        
    } 
   
   
}
// code suppression ty 
function gg($connection){
    if (isset($_GET["id"])){
        $ra=$_GET["id"]; 
        $delete = "DELETE FROM profile_personne  WHERE Rang=$ra ";
        $del = $connection -> prepare($delete);
        $del -> bindParam(':id', $ra);
        $del -> execute();        
        //redirige vers index 
        header("location: index.php");
    }
}
// code modification 
function modifInfo($connection){
    if (isset($_GET["idm"])){
        $ran = $_GET["idm"];
        $select = $connection -> prepare("SELECT * FROM profile_personne  Where rang=$ran");
        $select -> bindParam(':idm', $ran);
        $select -> execute();
        $sel =  $select -> fetch(PDO::FETCH_ASSOC);

      
             // az gaga fa juste micree form ato @ code php fotsn io
             //html sy css ao reo de + anley element anty tableau selectionne @ alalan rang
           echo "<form method='POST' action='' >
           <h2 style='display: flex; justify-content: center; margin:18px;'> Modification d'information de  ".$sel['Nom']." <h2>
           <div style='  display: flex; justify-content: center; flex-direction: row; margin:8px;' >
           <input type='text' name='nom'   value='".$sel['Nom']."' style='background-color: #333222; width:100px ;color :white;'>
           <input type='text' name='prenom' value='".$sel['Prenom']."' ' style='background-color: rgba(71, 71, 71, 0.498); width:100px; color :white;'>
           <input type='number' name='age' value='".$sel['Age']."' ' style='background-color: rgba(71, 71, 71, 0.498); width:60px ;color :white;'>
           <input type='text' name='race' value='".$sel['Race']."' ' style='background-color: rgba(71, 71, 71, 0.498); width:99px ;color :white;'>
           <input type='text' name='pays' value='".$sel['PaysOrigine']."' ' style='background-color: rgba(71, 71, 71, 0.498); width:99px ;color :white;'>
           <input type='submit' name='modifierr' value='Okey'' style='background-color: turquoise ; box-shadow: 0 1px 5px rgba(71, 71, 71, 0.498);font-weight: bolder; width:80px; color :white; cursor: pointer;'>
           </div>
           </form>";

           
    }
    //fanovana modification @ le champs ery ambany
    if(isset($_POST['modifierr'])){
        extract($_POST);
        //verification @lay form 
        if(isset($nom) && isset($prenom) && isset($age) && isset($pays) && isset($race)){  
            //requete et blabla 
          $update = $connection->prepare("UPDATE profile_personne SET Nom=:nom, Prenom=:prenom, Age=:age, Race=:race, PaysOrigine=:pays WHERE Rang=$ran");
          $update->bindParam(':nom', $nom);
          $update->bindParam(':prenom', $prenom);
          $update->bindParam(':age', $age);
          $update->bindParam(':race', $race);
          $update->bindParam(':pays', $pays);
          $update->execute();
        }
     } 
}


// et oui , rah mipend modif enao de  clickeo indroa amzay le okey d modifier io
//ref maita solusak zay vo manatsar s manala bug ambony
