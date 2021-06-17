<?php
if(isset($_POST['Navn'])){
    $receiver = "";
$subject = "mail from " . $_POST['Navn'];
$body = $_POST['Besked'] . "\n\nsender info:\nNavn: " . $_POST['Navn'] ."\nTlf: " . $_POST['Tlf'] ."\nEmail: " . $_POST['E-mail'];
$sender = "From:kontakt@go-jagt.dk";
if(mail($receiver, $subject, $body, $sender)){
    $sucess = "Mail sent";
    $receiver = $_POST['E-mail'];
    $subject = "mail modtaget";
    $body = "dette er en automatisk mail for at bekræfte at vi har fået din besked og vil vende tilbare til dig med svar når vi ser din mail\n\nskriv ikke tilbage til denne mail";
    $sender = "From:kontakt@go-jagt.dk";
    mail($receiver, $subject, $body, $sender);
}else{
    $sucess = "Mail kunne ikke sende";
}
echo "<h5>" . $sucess . "</h5>";
}
?>