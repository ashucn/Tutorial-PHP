<?php
// echo phpinfo();

if (php_sapi_name() === 'cli-server') {
	echo "This is PHP web server";
} else {
	echo "This is Not PHP web server";
}
echo "<br> hello";

