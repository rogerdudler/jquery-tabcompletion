<?php

$q = $_REQUEST['q'];
$commands = array('create', 'delete', 'insert', 'help', 'select');
$response = array();
$length = strlen($q);
while(list($key, $proposal) = each($commands)) {
	if (strtolower($q) == strtolower(substr($proposal, 0, $length))) {
		$response['suggestion'] = $proposal;
		break;
	}
}

echo json_encode($response);

?>
