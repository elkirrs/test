<?php
/**
 * Created by PhpStorm.
 * User: kscher
 * Date: 2019-05-02
 * Time: 02:56
 */


$file = __DIR__ . '/db/db.xml';
$xml = new DOMDocument('1.0', 'utf-8');
$xml->load("$file");


$users = $xml->documentElement;
$user = $users->appendChild($xml->createElement('User'));
$data = $user->appendChild($xml->createElement('login', "$login"));
$email = $user->appendChild($xml->createElement('email', "$email"));
$pass = $user->appendChild($xml->createElement('password', "$pass"));
$name = $user->appendChild($xml->createElement('name', "$name"));
$xml->formatOutput = true;


return $xml->save("$file");