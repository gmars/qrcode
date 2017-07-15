<?php
/**
 * Created by PhpStorm.
 * User: mars
 * Time: 2017/7/15 下午10:33
 * Author: weiyongqiang <hayixia606@163.com>
 * Website: www.weiyongqiang.com
 */

namespace gmars\qrcode;


include './phpqrcode/qrlib.php';

class QrCode
{
    public function test()
    {
        return \QRcode::png('test');
    }

}