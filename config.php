<?php
/**
 * Project: Project1
 * Author: Amin Soltani
 * Date: 7/17/2018
 * Time: 6:46 PM
 */

$db = new mysqli();
$db->connect('frontendclass.c8qoctggzy3e.us-east-1.rds.amazonaws.com', 'amin', 'Ilovesoda', 'frontendclass');

if ($db->connect_error) {
    exit($db->connect_error);
}