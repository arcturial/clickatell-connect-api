#!/usr/bin/php
<?php

require_once 'config.php';
require_once '../lib/clickatell-connect-api.php';

$oClickatell = new ClickatellConnectApi($sToken);
print_r($oClickatell->authenticate_user(array(
    'user'          => 'test',
    'password'      => 'abc123',
)));