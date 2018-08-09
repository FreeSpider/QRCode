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

$content = 'BEGIN:VCARD'."\n";
$content = 'VERSION:2.1'."\n";
$content = 'N:张'."\n";
$content = 'FN:三'."\n";
$content = 'END:VCARD'."\n";

QRcode::png($content);