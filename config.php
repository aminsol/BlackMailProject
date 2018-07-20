<?php
/**
 * Project: Project1
 * Author: Amin Soltani
 * Date: 7/17/2018
 * Time: 6:46 PM
 */

$db = new mysqli();
$db->connect('frontendclass.cj62nnh71j8u.ap-northeast-1.rds.amazonaws.com', 'amin', 'Ilovesoda', 'frontendclass');

if ($db->connect_error) {
    exit($db->connect_error);
}