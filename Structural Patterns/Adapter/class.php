<?php
//Origin
interface UsbMouse {
    public function usb_click();
    public function usb_move();
    public function usb_connect();
}
class SimpleUsbMouse implements UsbMouse {
    public function usb_click() {
        echo 'USB滑鼠點一下<br/>';
    }
    public function usb_move() {
        echo 'USB滑鼠滑一下<br/>';
    }
    public function usb_connect() {
        echo 'USB滑鼠連接<br/>';
    }
}

//Adaptee
interface Ps2Mouse {
    public function ps2_click();
    public function ps2_move();
    public function ps2_connect();
}
class SimplePs2Mouse implements Ps2Mouse {
    public function ps2_click() {
        echo 'PS/2滑鼠點一下<br/>';
    }
    public function ps2_move() {
        echo 'PS/2滑鼠滑一下<br/>';
    }
    public function ps2_connect() {
        echo 'PS/2連接<br/>';
    }
}

//Adapter
class Ps2UsbAdapter implements UsbMouse {
    private $ps2Mouse;
    
    public function __construct(Ps2Mouse $ps2Mouse) {
        $this->ps2Mouse = $ps2Mouse;
    }
    public function usb_click() {
        $this->ps2Mouse->ps2_click();
    }
    public function usb_move() {
        $this->ps2Mouse->ps2_move();
    }
    public function usb_connect() {
        $this->ps2Mouse->ps2_connect();
    }
}