<?php

// Constants
define('STORAGE_LOCATION', 'todos.json');
define('INPUT_STREAM', 'php://input');
define('ITEM_URL_BASE', 'http://dev15ylbm/bphp/todo.php');

// Functions
function loadData() {
    $data = array();
    if (file_exists(STORAGE_LOCATION)) {
        $data = json_decode(file_get_contents(STORAGE_LOCATION), true);
    }
    return $data;
}

function saveData($data) {
	$data='123';
    file_put_contents(STORAGE_LOCATION, json_encode($data));
	echo STORAGE_LOCATION;
	echo $data;
}

function getPayload() {
    return json_decode(file_get_contents(INPUT_STREAM), true);
}

function readCollection($data) {
    return json_encode(array_values($data));
}

function deleteCollection($data) {
    return array();
}

function createItem($data, $id) {
    $data[ $id ] = array(
        'completed' => false,
        'url' => ITEM_URL_BASE.$id,
    );
    return $data;
}

function readItem($data, $id) {
    return json_encode($data[$id]);
}

function updateItem($data, $id, $payload) {
    $acceptableKeys = array('title', 'order', 'completed', 'url');

    $item = $data[ $id ];
    foreach ($acceptableKeys as $key) {
        if (array_key_exists($key, $payload)) {
            $item[ $key ] = $payload[ $key ];
        }
    }
    $data[ $id ] = $item;
    return $data;
}

function deleteItem($data, $id) {
    unset($data[$id]);
    return $data;
}

// CORS
header('Access-Control-Allow-Origin: *');
$requestedHeaders = null;
if (array_key_exists('HTTP_ACCESS_CONTROL_REQUEST_HEADERS', $_SERVER)) {
    $requestedHeaders = $_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'];
    header('Access-Control-Allow-Headers: '.$requestedHeaders);
}
echo "t";
// Load data
$data = loadData();
$id = null;
if (array_key_exists('id', $_GET)) {
    $id = $_GET['id'];
}
$method = $_SERVER['REQUEST_METHOD'];

if (null === $id) { // Collection
    switch ($method) {
        case 'GET':
		echo "eg";
		$payload = getPayload();
		 $data = createItem('d1', '1');
		  saveData($data);
            echo readCollection($data);
            break;
        case 'POST':
            $payload = getPayload();
            $id = uniqid();
            $data = createItem($data, $id);
            $data = updateItem($data, $id, $payload);
            saveData($data);
            echo readItem($data, $id);
            break;
        case 'DELETE':
            $data = deleteCollection($data);
            saveData($data);
            break;
        case 'OPTIONS':
            header('Access-Control-Allow-Methods: GET,POST,DELETE,OPTIONS');
            break;
        default:
            throw new InvalidArgumentException('Unsupported HTTP verb: '.$method);
    }
} else { // Item
    if (!array_key_exists($id, $data)) {
        throw new InvalidArgumentException('Unknown item: '.$id);
    }
    switch ($method) {
        case 'GET':
            echo readItem($data, $id);
            break;
        case 'DELETE':
            $data = deleteItem($data, $id);
            saveData($data);
            break;
        case 'PATCH':
            $payload = getPayload();
            $data = updateItem($data, $id, $payload);
            saveData($data);
            echo readItem($data, $id);
            break;
        case 'OPTIONS':
            header('Access-Control-Allow-Methods: GET,DELETE,PATCH,OPTIONS');
            break;
        default:
            throw new InvalidArgumentException('Unsupported HTTP verb: '.$method);
    }
}