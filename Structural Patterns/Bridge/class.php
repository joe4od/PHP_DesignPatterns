<?php
//implementer
interface Platform {
    public function control();
}
//concrete implementer A
class AndroidPlatform implements Platform {
    public function control() {
        return 'Android';
    }
}
//concrete implementer B
class IOSPlatform implements Platform {
    public function control() {
        return 'IOS';
    }
}

//abstraction
abstract class AngryBird {
    protected $platform;
    public function __construct(Platform $platform) {
        $this->platform = $platform;
    }
    public abstract function play();
}
class AngryBirdNormal extends AngryBird{
    public function play() {
        echo '您正在玩AngryBird的Normal版，平台為：' . $this->platform->control() . '<br/>';
    }
}
class AngryBirdSpace extends AngryBird{
    public function play() {
        echo '您正在玩AngryBird的Space版，平台為：' . $this->platform->control() . '<br/>';
    }
}
class AngryBirdRio extends AngryBird{
    public function play() {
        echo '您正在玩AngryBird的Rio版，平台為：' . $this->platform->control() . '<br/>';
    }
}