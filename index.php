<?php
/**
 * Created by PhpStorm.
 * User: denisefremov
 * Date: 24.07.2020
 * Time: 17:17
 */

use Demo\HelloWorldService;

require_once 'vendor/autoload.php';

$service = new HelloWorldService();
$service->welcome();