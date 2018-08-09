<?php
/**
 * Created by PhpStorm.
 * User: 15736
 * Date: 2018/8/9
 * Time: 20:11
 */
/**
 * 在http://phpqrcode.sourceforge.net/下载qrcode
 */
include "phpqrcode/qrlib.php";

//QRcode::png('fuck');
//QRcode::png('fuck', 'file.jpg');//文件输出
//QRcode::png('fuck', false, QR_ECLEVEL_L);//容错级别
//QRcode::png('fuck', false, QR_ECLEVEL_L, 10);//尺寸
//QRcode::png('fuck', false, QR_ECLEVEL_L, 10, 3);//边距
QRcode::png('fuck', 'ferre.jpg', QR_ECLEVEL_L, 10, 3, true);//保存且打印