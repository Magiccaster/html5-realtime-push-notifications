<?php
require_once('config.php');
require_once('../lib/pusher-php/squeeks-Pusher-PHP/lib/Pusher.php');
require_once('../lib/pusher-php/pusher_notification_helper.php');

$pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID);
$helper = new PusherNotificationHelper($pusher);
$helper->create_notification('A new widget has been created');
?>

Create!

<? include('nav.inc.php'); ?>