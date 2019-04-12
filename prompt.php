<?php
//Anderson Ismael
//12 de abril de 2019

function prompt($msg=false,$eol=true){
    if($msg){
        if($eol){
            print $msg.PHP_EOL;
        }else{
            print $msg;
        }
    }
    return rtrim( fgets( STDIN ), "\n" );
}
