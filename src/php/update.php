<?php
require_once('config.php');
require_once('../lib/pusher-php/squeeks-Pusher-PHP/lib/Pusher.php');
require_once('../lib/pusher-php/pusher_notification_helper.php');

$pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID);
$helper = new PusherNotificationHelper($pusher);
$helper->update_notification('A widget has been updated');
?>
<link href="../styles.css" rel="stylesheet" />

Update!

<? include('nav.inc.php'); ?>