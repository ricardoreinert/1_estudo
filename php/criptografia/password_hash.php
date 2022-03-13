



<?PHP

$hash = password_hash("Fulano de Tal", PASSWORD_DEFAULT);

echo "Criptografia em HASH: ".$hash;

echo "<br/> <br/>";


$hash_verify = '$2y$10$SMnbH8qU6cLJT3MR45tG8.1YmZOhVahPFbiM0AfszA592NZAyQo0G';



if (password_verify("Fulano de Tal", $hash)) {



    echo ' senha está correta';
    
    }
    
    else {
    
        echo 'senha não confere';
    }
    ?>
?>

