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
$Id: HelloService.php,v 1.1.2.2 2007/04/27 11:22:23 slaws Exp $
*/
include 'SCA/SCA.php';

/**
 * @service
 * @binding.jsonrpc
 */
class HelloService {

    /**
     * A method that says hello to a name
     * 
     * @param string $name (The name to say hello to)
     * @return string (The string "Hello <name>")
     */
    function sayHello($name) {
        return "Hello $name";
    }
}

?>