<!--
+-----------------------------------------------------------------------------+
| Copyright IBM Corporation 2006.                                             |
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
| Authors: Graham Charters, Megan Beynon                                      |
|                                                                             |
+-----------------------------------------------------------------------------+
$Id: HelloClient.php,v 1.2 2007/02/07 11:26:11 cem Exp $
-->

<html>
<title>SCA Component Using Data Structures</title>
<body>

<h3>SCA Component Using Data Structures</h3>

<?php

require 'SCA/SCA.php';

echo '<p>Calling BatchService locally</p>';

echo '<p>Requesting WSDL from BatchService Component</p>';
$f = file_get_contents('http://localhost/examples/SCA/Soap/SCAComponentUsingDataStructures/BatchService.php?wsdl');
file_put_contents('BatchService.wsdl',$f);

// Get proxy for BatchService
$batch_service = SCA::getService('./BatchService.wsdl');

/*****************************************************************/
/* Creating an SDO to pass to the service.  This demonstrates    */
/* how a service proxy (in this casebatch_service) acts as a     */
/* 'factory for the data structures of the target service.       */
/*****************************************************************/
$namesSDO = $batch_service->createDataObject('http://example.org/names', 'people');

// Populate the names
$namesSDO->name[]='Cathy';
$namesSDO->name[]='Bertie';
$namesSDO->name[]='Fred';
$namesSDO->name[]='Anna';

// Call the batch service
$replies = $batch_service->sayHello($namesSDO);

// Write out the replies
echo '<p>Response:<br/>';
foreach ($replies->name as $hello) {
    echo $hello. '<br/>';
}
echo '</p>';

?>
</body>
</html>