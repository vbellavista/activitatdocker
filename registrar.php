<?php
print "<pre>"; print_r($_REQUEST); print "</pre>\n";

print "<p>Su nombre es $_REQUEST[nom]</p>\n";
print "<p>Su apellido es $_REQUEST[cognom]</p>\n";
print "<p>Su email es $_REQUEST[email]</p>\n";
print "<p>Su fecha de nacimiento es $_REQUEST[naixement]</p>\n";
print "<p>Esta estudiando $_REQUEST[estudi]</p>\n";
print "<p>Es  $_REQUEST[sexo]</p>\n";

print "<p>Quiere guardar la informacion $_REQUEST[checkbox]</p>\n";

$fitxer = 'registre.txt';
$actual = file_get_contents($fitxer);
$actual .= "$_REQUEST[nom],$_REQUEST[cognom],$_REQUEST[email],$_REQUEST[naixement],$_REQUEST[estudi],$_REQUEST[sexo],$_REQUEST[checkbox]\n";
file_put_contents($fitxer, $actual);
?>