<?
header('Content-type: application/json');
$response = [
    'status' => 200,
    'message' => 'common answer goes here',
    'action' => ['flash' => ['message'=>'Welcome', 'timeout' => '5000'], 'redirect' => "/examples/form/test.html"]
];

echo json_encode($response);

?>