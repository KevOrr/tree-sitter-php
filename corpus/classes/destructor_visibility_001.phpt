==========
ZE2 Ensuring destructor visibility
==========

<?php

class Base {
	private function __destruct() {
    	echo __METHOD__ . "\n";
	}
}

class Derived extends Base {
}

$obj = new Derived;

unset($obj);

?>
===DONE===
--EXPECTF--
Fatal error: Uncaught Error: Call to private Derived::__destruct() from context '' in %sdestructor_visibility_001.php:%d
Stack trace:
#0 {main}
  thrown in %sdestructor_visibility_001.php on line %d
