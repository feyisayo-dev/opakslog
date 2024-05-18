<?php
if ($_POST['Submit']) {
    $number = $_POST['num'];
    $pickup_num = $_POST['pickup_num'];
    $delivery_num = $_POST['delivery_num'];
    $name = $_POST['name'];
    $deliveryLocation = $_POST['deliveryLocation'];
    $pickupLocation = $_POST['pickupLocation'];
    require_once('vendor/autoload.php');
    //require_once('ultramsg.class.php');

    $token = "q2hqha2y2cbfiiia";
    $instance_id = "instance46912";
    $client = new UltraMsg\WhatsAppApi($token, $instance_id);

   if($number === $pickup_num){
    $to = $number;
    $body = "Hey, $name, You want to send out a package for delivery from $pickupLocation.";
    $api = $client->sendChatMessage($to, $body);
    print_r($api);
   }else{
    $to = $number;
    $body = "Hey, $name, You want to send out a package for delivery from $pickupLocation.";
    $api = $client->sendChatMessage($to, $body);
    print_r($api);

    $to = $pickup_num;
    $body = "Hello, Pickup! A package is to be picked from you $pickupLocation.";
    $api = $client->sendChatMessage($to, $body);
    print_r($api);
   }

    $to = $delivery_num;
    $body = "Hi, An item is to be delivered to you at $deliveryLocation.";
    $api = $client->sendChatMessage($to, $body);
    print_r($api);
}
?>
