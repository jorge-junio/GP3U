<?php
 session_start();
//done
class InspecaoDao {

    function lista(conexao $conn) {
        $query = "SELECT * FROM inspecao";
        
        $result = mysqli_query($conn->conecta(), $query);

        if (mysqli_num_rows($result) > 0) {
            //while($row = mysqli_fetch_assoc($result)) {  
            while($row = mysqli_fetch_assoc($result)) { 
                echo '<tr>';        
                    echo '<td>' . $row["dataUltima"] . '</td>';
                    echo '<td>' . $row["dataProxima"] . '</td>';
                    echo '<td>' . $row["situacao"] . '</td>';
                    echo '<td>' . $row["idCautela"] . '</td>';
                    echo    '<td align="center">
                                <form name="formpolicial1" action="../view/InspecaoViewEditar.php" method="POST">
                                    <button type="submit" name="editar1" value="" class="btn btn-primary btn-xs">Editar</button>
                                    <input type="hidden" name="id" value="'.$row["id"].'">
                                </form>
                            </td>';
                    echo    '<td align="center">
                                <form name="formpolicial2" action="../controller/InspecaoController.php" method="POST">
                                    <button type="submit" name="excluir" value="" class="btn btn-danger btn-xs">Excluir</button>
                                    <input type="hidden" name="id" value="'.$row["id"].'">
                                </form>
                            </td>';
                echo '</tr>';
                
            }
        } else {
            echo "0 results";
        }
        
    }
}