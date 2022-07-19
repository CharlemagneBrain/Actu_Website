
<?php

function getAll(){
    include('./connect.php');
    
    $req = "SELECT titre, contenu FROM Article";
    $result = $conn->query($req);

    if($result->num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<h1>'.$row['titre'].'</h1>';
            echo '<h3>'.$row['contenu'].'</h3>';
        }
    }
    else{
        echo "Aucun article";
    }
    }
    


function getSport(){
    include('./connect.php');
    $req="SELECT titre,contenu from Article where categorie=1";

    $result=mysqli_query($conn, $req);
    if (mysqli_num_rows($result)) {
        while ($ligne=mysqli_fetch_assoc($result)) {
            echo '<h1>'.$ligne['titre'].'</h1>';
            echo '<h3>'.$ligne['contenu'].'</h3>';
        }
    } else {
        echo "Pas d'articles de sport";
    }
}

function getSante(){
    include('./connect.php');
    $req="SELECT titre,contenu from Article where categorie=2";

    $result=mysqli_query($conn, $req);
    if (mysqli_num_rows($result)) {
        while ($ligne=mysqli_fetch_assoc($result)) {
            echo '<h1>'.$ligne['titre'].'</h1>';
            echo '<h3>'.$ligne['contenu'].'</h3>';
        }
    } else {
        echo "Pas d'articles de santé";
    }
}

    function getEducation(){
        include('./connect.php');
    $req="SELECT titre,contenu from Article where categorie=3"; 
    $result=mysqli_query($conn,$req);
    if(mysqli_num_rows($result)){
    while($ligne=mysqli_fetch_assoc($result)){
        
        echo '<h1>'.$ligne['titre'].'</h1>';
        echo '<h3>'.$ligne['contenu'].'</h3>';
    }
    }
    else{
        echo "Pas d'articles d'éducation";
    }
}

function getPolitique(){
    include('./connect.php');
    $req="SELECT titre,contenu from Article where categorie=4";
    $result=mysqli_query($conn,$req);
    if(mysqli_num_rows($result)){
    while($ligne=mysqli_fetch_assoc($result)){
        
        echo '<h1>'.$ligne['titre'].'</h1>';
        echo '<h3>'.$ligne['contenu'].'</h3>';
    }
    }
    else{
        echo "Pas d'articles de politique";
    }
}


?>