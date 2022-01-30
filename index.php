<?php
$doc = '[My] QA [test] string, [have] a [great] day.';
preg_match_all("/\[([^\]]*)\]/", $doc, $matches);
var_dump($matches[1]);

?>