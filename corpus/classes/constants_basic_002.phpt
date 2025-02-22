==========
Basic class support - defining and reading a class constant.
==========

<?php
  class aclass
  {
      const myConst = "hello";
  }
  
  echo "\nRead class constant.\n";
  var_dump(aclass::myConst);
  
  echo "\nFail to read class constant from instance.\n";
  $myInstance = new aclass();
  var_dump($myInstance->myConst);
  
  echo "\nClass constant not visible in object var_dump.\n";
  var_dump($myInstance)
?>
--EXPECTF--

Read class constant.
string(5) "hello"

Fail to read class constant from instance.

Notice: Undefined property: aclass::$myConst in %s on line 12
NULL

Class constant not visible in object var_dump.
object(aclass)#%d (0) {
}
