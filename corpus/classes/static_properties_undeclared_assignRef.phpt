==========
Assigning a non-existent static property by reference
==========

<?php
Class C {}
$a = 'foo';
C::$p =& $a;
?>
--EXPECTF--
Fatal error: Uncaught Error: Access to undeclared static property: C::$p in %s:4
Stack trace:
#0 {main}
  thrown in %s on line 4
