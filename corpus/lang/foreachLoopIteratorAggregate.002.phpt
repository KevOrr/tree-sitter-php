==========
IteratorAggregate::getIterator bad return type
==========

<?php

class bad1 implements IteratorAggregate {
	function getIterator() {
		return null;
	}
}

class bad2 implements IteratorAggregate {
	function getIterator() {
		return new stdClass;
	}
}

class bad3 implements IteratorAggregate {
	function getIterator() {
		return 1;
	}
}

class bad4 implements IteratorAggregate {
	function getIterator() {
		return array(1,2,3);
	}
}


function f($className) {
	try {
		foreach (new $className as $k=>$v) {
			echo "$k => $v\n";	
		}
	} catch (Exception $e) {
			echo $e->getLine() . ": " . $e->getMessage() ."\n";
	}
}

f("bad1");
f("bad2");
f("bad3");
f("bad4");

?>
===DONE===
--EXPECTF--
30: Objects returned by bad1::getIterator() must be traversable or implement interface Iterator
30: Objects returned by bad2::getIterator() must be traversable or implement interface Iterator
30: Objects returned by bad3::getIterator() must be traversable or implement interface Iterator
30: Objects returned by bad4::getIterator() must be traversable or implement interface Iterator
===DONE===
