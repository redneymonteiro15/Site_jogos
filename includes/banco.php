<pre>
<?php
    $banco = new mysqli('localhost', 'root', '', 'bg_games');
    if ($banco->connect_errno) {
        echo "Encontrei um erro $banco->errno -->$banco->connect_error";
        die();
    } 
?>
</pre>