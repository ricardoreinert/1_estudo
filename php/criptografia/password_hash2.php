<?php  

$hash = password_hash("Fulano de Tal", PASSWORD_ARGON2ID);

echo "Criptografia em HASH: ".$hash;

echo "<br/> <br/>";

$hash_verify = '$argon2id$v=19$m=65536,t=4,p=1$UndZaHNxWG5uMkhFM2ROSQ$JLm/z0k1HgZHMBDW9pUK+9wS2Ohout4IbCF9EvNH7KA';

if(password_verify("Fulano de Tal", $hash_verify)) {
	echo "As senhas correspondem";
} else {
	echo "As senhas NÃO correspondem";
}

?>