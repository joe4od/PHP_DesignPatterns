<?php
require 'class.php';

$ps2Mouse = new SimplePs2Mouse;
$ps2UsbAdapter = new Ps2UsbAdapter($ps2Mouse);

$ps2UsbAdapter->usb_connect();
$ps2UsbAdapter->usb_click();
$ps2UsbAdapter->usb_move();