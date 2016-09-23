<?php
header('Content-Type:application/json;');
echo json_encode(array("status"=>200,"error"=>"","message"=>"Welcome","parameters"=>$params));
