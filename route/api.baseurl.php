<?php
$base_url = base_url();

write_storage_file(
	sprintf("var base_url = \"%s\"",  $base_url),
	array(
		"storage_type" => "api",
		"filename" => "base_url.js"
	)
);

echo get_callable_token($base_url);
