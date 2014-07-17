<?php
include_once 'php/mconexao.php';

$sql=  mysql_query("select * from motos order by nome");

while($rows = mysql_fetch_array($sql)){
    print "<div id='moto'>
                        
                            <a href='#'><img src='{$rows['foto']}' height='100' width='150'>
                            <span>{$rows['nome']}</span>
                            </a>
                    </div>";
}
?>