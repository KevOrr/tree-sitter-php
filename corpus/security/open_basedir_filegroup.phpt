==========
Test open_basedir configuration
==========

<?php
require_once "open_basedir.inc";
test_open_basedir("filegroup");
?>
--CLEAN--
<?php
require_once "open_basedir.inc";
delete_directories();
?>
--EXPECTF--
*** Testing open_basedir configuration [filegroup] ***
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)

Warning: filegroup(): open_basedir restriction in effect. File(../bad) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: filegroup(): open_basedir restriction in effect. File(../bad/bad.txt) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: filegroup(): open_basedir restriction in effect. File(..) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: filegroup(): open_basedir restriction in effect. File(../) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: filegroup(): open_basedir restriction in effect. File(/) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: filegroup(): open_basedir restriction in effect. File(../bad/.) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: filegroup(): open_basedir restriction in effect. File(%s/test/bad/bad.txt) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: filegroup(): open_basedir restriction in effect. File(%s/test/bad/../bad/bad.txt) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: filegroup(): open_basedir restriction in effect. File(./../.) is not within the allowed path(s): (.) in %s on line %d
bool(false)
int(%d)
int(%d)
int(%d)
int(%d)
int(%d)
*** Finished testing open_basedir configuration [filegroup] ***

