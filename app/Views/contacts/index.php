<?php

if(isset($records)){
    foreach($records as $record){
        echo $record->name . '<br>';
    }
}