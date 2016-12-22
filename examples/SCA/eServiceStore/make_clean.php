<?php
/*
+-----------------------------------------------------------------------------+
| (c) Copyright IBM Corporation 2006, 2007                                    |
| All Rights Reserved.                                                        |
+-----------------------------------------------------------------------------+
| Licensed under the Apache License, Version 2.0 (the "License"); you may not |
| use this file except in compliance with the License. You may obtain a copy  |
| of the License at -                                                         |
|                                                                             |
|                   http://www.apache.org/licenses/LICENSE-2.0                |
|                                                                             |
| Unless required by applicable law or agreed to in writing, software         |
| distributed under the License is distributed on an "AS IS" BASIS, WITHOUT   |
| WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.            |
| See the License for the specific language governing  permissions and        |
| limitations under the License.                                              |
+-----------------------------------------------------------------------------+
| Authors: Graham Charters, Matthew Peters                                    |
|                                                                             |
+-----------------------------------------------------------------------------+
$Id: make_clean.php,v 1.3 2007/02/08 16:36:49 mfp Exp $
*/

$files = scandir(dirname(__FILE__) . '/EventLogService/Events');
foreach ($files as $file) {
    $path_parts = pathinfo($file);
    if (isset($path_parts['extension']) && $path_parts['extension'] == 'xml') {
        unlink(dirname(__FILE__) . '/EventLogService/Events/' . $file);
    }
}

$files = scandir(dirname(__FILE__) . '/PaymentService/Payments');
foreach ($files as $file) {
    $path_parts = pathinfo($file);
    if (isset($path_parts['extension']) && $path_parts['extension'] == 'xml') {
        unlink(dirname(__FILE__) . '/PaymentService/Payments/' . $file);
    }
}

$files = scandir(dirname(__FILE__) . '/WarehouseService/Orders');
foreach ($files as $file) {
    $path_parts = pathinfo($file);
    if (isset($path_parts['extension']) && $path_parts['extension'] == 'xml') {
        unlink(dirname(__FILE__) . '/WarehouseService/Orders/' . $file);
    }
}

echo '<br/><br/><br/><b>All events, payments, and orders have been deleted</b>';

?>