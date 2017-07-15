<?php
/**
 * Created by PhpStorm.
 * User: mars
 * Time: 2017/7/15 下午10:33
 * Author: weiyongqiang <hayixia606@163.com>
 * Website: www.weiyongqiang.com
 */

namespace gmars\qrcode;


use gmars\qrcode\driver\PngCode;
use yii\base\Component;

class QrCode extends Component
{
    public function test()
    {
        $pngObj = new PngCode();
        return $pngObj->getPng();
    }

}