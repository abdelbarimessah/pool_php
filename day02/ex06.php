<?php
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $address = $_POST["address"];
    $ville = $_POST["ville"];
    $code_postal = $_POST["code_postal"];
    echo '<table>
    <tr><th>nom</th><th>prenom</th><th>address</th><th>ville</th><th>code postal</th></tr>
    <tr><td>'.$nom.'</td><td>'.$prenom.'</td><td>'.$address.'</td><td>'.$ville.'</td><td>'.$code_postal.'</td></tr>
    </table>';

?>