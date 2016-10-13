<?php
interface AngryBird {
    public function play();
}
class AndroidAngryBirdNormal implements AngryBird {
    public function play() {
        echo '您正在玩Android系統Angry Bird的Normal版<br/>';
    }
}
class AndroidAngryBirdSpace implements AngryBird {
    public function play() {
        echo '您正在玩Android系統Angry Bird的Space版<br/>';
    }
}
class AndroidAngryBirdRio implements AngryBird {
    public function play() {
        echo '您正在玩Android系統Angry Bird的Rio版<br/>';
    }
}

class IOSAngryBirdNormal implements AngryBird {
    public function play() {
        echo '您正在玩IOS系統Angry Bird的Normal版<br/>';
    }
}
class IOSAngryBirdSpace implements AngryBird {
    public function play() {
        echo '您正在玩IOS系統Angry Bird的Space版<br/>';
    }
}
class IOSAngryBirdRio implements AngryBird {
    public function play() {
        echo '您正在玩IOS系統Angry Bird的Rio版<br/>';
    }
}