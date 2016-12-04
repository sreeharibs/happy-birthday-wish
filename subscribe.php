<?php
ini_set('display_errors', 1);
$api_key = "ce871351b260893257cbe0a21f876db2-us11";
$list_id = "e262fdad28";
include("lib/Mailchimp.php");
$Mailchimp = new Mailchimp( $api_key );
$Mailchimp_Lists = new Mailchimp_Lists( $Mailchimp );

$subscriber = $Mailchimp_Lists->subscribe( $list_id, array( 'email' => htmlentities($_POST['email']) ) );
//var_dump($subscriber)
if ( ! empty( $subscriber['leid'] ) ) {
   echo "success";
}
else
{
    echo "fail";
}