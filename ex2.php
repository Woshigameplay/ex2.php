<!DOCTYPE html>
<html lang="en">

<body>
<?php 

//iniciar variaveis

$nome = 'fulano';

switch($nome)  {
    case  'fulano' :
        echo 'E ai fulano!' ;
        break;
    case 'sicrano':
        echo  'e ai sicrano!' ;
        break;
    case 'boltrano':
        echo 'E ai beltrano!';
        break;
    default :
    echo 'Qual é o seu nome?';
    break;
}
//resultado é : E ai fulano!
?>
</body>
</html>
