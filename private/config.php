<?php
$config=array(
'DB_HOST'=>'localhost',
'DB_USERNAME'=>'root',  //change back to "patel1ik_Practice1"
'DB_PASSWORD'=>'', //change back to "group1"
'DB_DATABASE'=>'patel1ik_practice1'  //change back to "patel1ik_Practice1"
);

function repopulate ( $field ) {
    if ( isset( $_POST[$field] ) ) {
        echo htmlspecialchars( $_POST[$field] );
    }
}
?>
