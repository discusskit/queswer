<?php

$notify = <<<EOF
<li><a href="http://github.com/discusskit/queswer/" target="_blank">Queswer 1.0.0 发布</a></li>
EOF;

$notify = str_replace(array("\n", "\r", "\t"), '', $notify);

echo $_GET['jsoncallback'] . '({
	"notify" : "' . addslashes($notify) . '",
})';

