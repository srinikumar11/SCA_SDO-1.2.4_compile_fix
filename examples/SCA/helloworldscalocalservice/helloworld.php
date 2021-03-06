<?php
/*
+----------------------------------------------------------------------+
| Copyright IBM Corporation 2007.                                      |
| All Rights Reserved.                                                 |
+----------------------------------------------------------------------+
|                                                                      |
| Licensed under the Apache License, Version 2.0 (the "License"); you  |
| may not use this file except in compliance with the License. You may |
| obtain a copy of the License at                                      |
| http://www.apache.org/licenses/LICENSE-2.0                           |
|                                                                      |
| Unless required by applicable law or agreed to in writing, software  |
| distributed under the License is distributed on an "AS IS" BASIS,    |
| WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or      |
| implied. See the License for the specific language governing         |
| permissions and limitations under the License.                       |
+----------------------------------------------------------------------+
| Author: SL                                                           |
+----------------------------------------------------------------------+
$Id: helloworld.php,v 1.1.2.1 2007/04/27 11:17:46 slaws Exp $
*/
include 'SCA/SCA.php';

$greeting_service  = SCA::getService('./Greeting.php');
$reversing_service = SCA::getService('./Reversing.php');

$name              = $_REQUEST["inputtext"];

$greeting          = $greeting_service->greet($name);
$reversed_greeting = $reversing_service->reverse($greeting);

echo "Name: " . $name . "<br/>";
echo "Greeting: " . $greeting . "<br/>";
echo "Reversed: " . $reversed_greeting. "<br/>"; 
?>
