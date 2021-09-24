<?php
$data = $_GET;
if(empty($data['name']) || empty($data['age']) || empty($data['mail'])) {
    echo 'Errore';
} else if(strlen($data['name']) <= 3 || is_numeric($data['name'])){
    echo 'Nome utente errato';
} else if(!is_numeric($data['age']) || $data['age'] < 18){
    echo 'Età non consentita';
} else if(!strpos($data['mail'], '@') || !strpos($data['mail'], '.')){
    echo 'Mail non valida';
} else {
    echo 'Accesso riuscito';
}

?>