<?php
//Exceptional Handlings
function show_error($number){
	switch($number){
		case "500":
			http_response_code(500);
			echo "Internal Server Error!";
		break;
		case "404":
			http_response_code(404);
			echo "Location Not Found!";
		break;
		case "403":
			http_response_code(403);
			echo "Unauthorised Entry!";
		break;
		default:
		break;
	}
}