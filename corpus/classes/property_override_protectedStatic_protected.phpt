==========
Redeclare inherited protected static property as protected.
==========

<?php
  class A
  {
      protected static $p = "A::p (static)";
      static function showA()
      {
          echo self::$p . "\n";
      }
  }
  
  class B extends A
  {
      protected $p = "B::p";
      function showB()
      {
          echo $this->p . "\n";
      }
  }
  
  
  A::showA();
  
  $b = new B;
  $b->showA();
  $b->showB();
?>
--EXPECTF--

Fatal error: Cannot redeclare static A::$p as non static B::$p in %s on line 18

