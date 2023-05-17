<?php

require_once 'Book.php';
require_once 'Employe.php';


$employe = new Employe(323,"rtrr","uuu","hhii",56,67);


$book = new Book("Une si longue lettre","Mariama Bâ", "12");
echo $book->__toString();

