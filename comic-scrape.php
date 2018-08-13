<?php
$ch = "https://www.findyourmidwife.co.nz/midwife/de914d17-fe56-4d4e-b780-d03ffc1cd556/lauren+scott";
$curl = shell_exec("curl -k $ch"); //get the page contents
echo $curl;

?>