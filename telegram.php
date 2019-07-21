<?php
 /*https://api.telegram.org/bot777487072:AAExFIGqd4EIWhOJaqE3kuz2RlOBVWqJIvQ/getUpdates*/


$name = $_POST['user_name'];
/*$phone = $_POST['user_phone'];
$type-of_apartment = $_POST[];
$quantity-of-human = $_POST[];
$date-of-arrival = $_POST[];
$date-of-departure = $_POST[];
$Comments = $_POST[];
$transfer-of_Melik = $_POST[];
*/


$token = "777487072:AAExFIGqd4EIWhOJaqE3kuz2RlOBVWqJIvQ";


$chat_id = "774582555";


$arr = array(
  'Имя пользователя: ' => $name,

 /* 'Телефон: ' => $phone,*/
);


foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "Thank you";
} else {
  echo "Error";
}
?>