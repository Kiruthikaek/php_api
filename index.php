<?php
require_once __DIR__ . '/config.php';
class API{
function Select(){
$db = new Connect;
$users = array();
$data = $db->prepare('SELECT * FROM profile ORDER BY id');
$data -> execute();
while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
$profile[$OutputData['id']] = array(
'id' => $OutputData['id'],
'name' => $OutputData['name'],
'email' => $OutputData['email'],
'age' => $OutputData['age'],
//'Description' => $OutputData['Description'],
//'RAM' => $OutputData['RAM'],
//'Processor' => $OutputData['Processor'],
//'Type' => $OutputData['Type'],

);

}

return json_encode($profile);

}

}

$API = new API;
header('Content-Type: application/json');
echo $API->Select();



?>