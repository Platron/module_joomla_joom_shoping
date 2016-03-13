<?php
$name = "Platron payment method";

$element = "platron";
$version = "1.0.0";

$addon = JTable::getInstance('addon', 'jshop');
$addon->loadAlias($element);
$addon->set('name',$name);
$addon->set('version',$version);
$addon->set('uninstall','/components/com_jshopping/addons/'.$element.'/uninstall.php');
$cache = addslashes('{"creationDate":"03.04.2015","author":"Platron","authorEmail":"it@platron.ru","authorUrl":"http://www.platron.ru","version":"'.$version.'"}');
$addon->store();