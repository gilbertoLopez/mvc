<?php
foreach (glob(basePath.'lib/classes/*.class.php') as $class) {
	require_once($class);
}