<?php

$dsn = "pgsql:host=localhost;dbname=crs";
//$dsn = "mysql:host=localhost;dbname=oophp";
//$dsn = "mysql:host=localhost;dbname=oophp;port=3306";
//$dsn = "sqlite:F:/Code/oop/php/accessing-databases-with-object-oriented-php/sqlite/oophp.db";

$db = new PDO($dsn, 'postgres', 'toor');