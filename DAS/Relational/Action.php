<?php
/* 
+----------------------------------------------------------------------+
| (c) Copyright IBM Corporation 2005.                                  |
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
| Author: Matthew Peters                                               |
+----------------------------------------------------------------------+
$Id: Action.php,v 1.6 2006/09/28 19:23:52 cem Exp $
*/

require_once 'SDO/DAS/Relational/DataObjectHelper.php';

/**
* represent an action that will need to be performed against the database
*
* abstract class that defines the interface that Actions must support
*
*/

abstract class SDO_DAS_Relational_Action {

    abstract function execute($dbh);
    abstract function toString();

}

?>