<?php namespace App\Controller\Component;

use Cake\Controller\Component;

class PointComponent extends Component {

    public function getPoint() {
        return $this->request->session()->read('point');
    }

    public function getPointText() {
        $point = $this->request->session()->read('point');
        $strPoint = sprintf($point,0x03);
        $strLenPoint = strlen($point);

        $str = "<ul>";
        for($i = 10; $i >  0; $i--) {
            if($i > $strLenPoint) {
                $str .= "<li><span>0</span></li>";
            } else {
                if(isset($strPoint[$strLenPoint-$i])) {
                    $str .= "<li><span>". $strPoint[$strLenPoint-$i] ."</span></li>";
                } else {
                    $str .= "<li><span>0</span></li>";
                }
            }
        }
        $str .= "</ul>";
        return $str;
    }

    public function setPoint($point) {
        $this->request->session()->write('point',$point);
    }
}