==========
output buffering - ob_get_flush
==========

<?php
ob_start();
echo "foo\n";
var_dump(ob_get_flush());
?>

---

(program  (expression_statement (function_call_expression (qualified_name (name)) (arguments))) (echo_statement (string)) (expression_statement (function_call_expression (qualified_name (name)) (arguments (function_call_expression (qualified_name (name)) (arguments))))))

