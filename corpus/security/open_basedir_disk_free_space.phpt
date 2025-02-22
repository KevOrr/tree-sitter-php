==========
Test open_basedir configuration
==========

<?php
require_once "open_basedir.inc";
$initdir = getcwd();
test_open_basedir_before("disk_free_space");
test_open_basedir_error("disk_free_space");     

var_dump(disk_free_space($initdir."/test/ok"));
test_open_basedir_after("disk_free_space");
?>
--CLEAN--
<?php
require_once "open_basedir.inc";
delete_directories();
?>
--EXPECTF--
*** Testing open_basedir configuration [disk_free_space] ***
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)

Warning: disk_free_space(): open_basedir restriction in effect. File(../bad) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: disk_free_space(): open_basedir restriction in effect. File(../bad/bad.txt) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: disk_free_space(): open_basedir restriction in effect. File(..) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: disk_free_space(): open_basedir restriction in effect. File(../) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: disk_free_space(): open_basedir restriction in effect. File(/) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: disk_free_space(): open_basedir restriction in effect. File(../bad/.) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: disk_free_space(): open_basedir restriction in effect. File(%s/test/bad/bad.txt) is not within the allowed path(s): (.) in %s on line %d
bool(false)

Warning: disk_free_space(): open_basedir restriction in effect. File(%s/test/bad/../bad/bad.txt) is not within the allowed path(s): (.) in %s on line %d
bool(false)
float(%s)
*** Finished testing open_basedir configuration [disk_free_space] ***
