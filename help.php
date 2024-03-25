<?php
echo " something" ;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "POST SET";
} else {
    echo "POST NOT SET"; 
}