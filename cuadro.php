<?php
    $nom = (isset ($_POST["Nombre"]) && $_POST["Nombre"] !="") ?$_POST["Nombre"]: "No específicó";
    $AP = (isset ($_POST["ApPat"]) && $_POST["ApPat"] !="") ?$_POST["ApPat"]: "No específicó";
    $AM = (isset ($_POST["ApMat"])&& $_POST["ApMat"] !="") ?$_POST["ApMat"]:"No específicó";
    $sexo = (isset ($_POST["sexo"]) && $_POST["sexo"]!="") ?$_POST["sexo"]:"No específicó";
    $edad = (isset ($_POST["edad"]) && $_POST["edad"]!="") ?$_POST["edad"]:"No específicó";
    $correo = (isset ($_POST["correo"]) && $_POST["correo"]!="") ?$_POST["correo"]:"No específicó";
    $tel = (isset ($_POST["tel"]) && $_POST["tel"] !="") ?$_POST["tel"]:"No específicó";
    $cel = (isset ($_POST["cel"]) && $_POST["cel"] !="") ?$_POST["cel"]:"No específicó";
    $escuela = (isset ($_POST["Escuela"]) && $_POST["Escuela"]!="") ?$_POST["Escuela"]:"No específicó";
    $prom = (isset ($_POST["promedio"]) && $_POST["promedio"] !="") ?$_POST["promedio"]:"No específicó";
    $op1 = (isset ($_POST["op1"]) && $_POST["op1"] !="") ?$_POST["op1"]:"No específicó";
    $op2 = (isset ($_POST["op2"]) && $_POST["op2"] !="") ?$_POST["op2"]:"No específicó";
    
    
    echo "<table border=1>";
        echo "<thead >";
            echo "<tr>";
                echo "<th colspan=\"4\" ><h2>Solicitud de ingreso a la Universidad</h2></th>";
            echo "<tr>";
        echo "</thead>";
        echo "<tbody align=\"center\">";
            echo "<tr>";
                echo "<td>$AP</td>";
                echo "<td>$AM</td>";
                echo "<td colspan=\"2\">$nom</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td><u><strong>Apellido paterno</strong></u></td>";
                echo "<td><u><strong>Apellido materno</strong></u></td>";
                echo "<td colspan=\"2\"><u><strong>Nombre(s)</strong></u></td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td><u><strong>Sexo:</strong></u></td>";
                echo "<td>$sexo</td>";
                echo "<td><u><strong>Edad</strong></u></td>";
                echo "<td>$edad</td>";
            echo "</tr>";
                echo "<td colspan=\"2\">$correo</td>";
                echo "<td>$tel</td>";
                echo "<td colspan=\"2\">$cel</td>";
            echo "<tr>";
                echo "<td colspan=\"2\"><u><strong>Correo electrónico</strong></u></td>";
                echo "<td><u><strong>Teléfono</strong></u></td>";
                echo "<td><u><strong>Celular</strong></u></td>";
            echo "</tr>";
                echo "<td><u><strong>Escuela de procedencia</strong></u></td>";
                echo "<td>$escuela</td>";
                echo "<td><u><strong>Promedio</strong></u></td>";
                echo "<td>$prom</td>";
            echo "<tr>";
                echo "<td colspan=\"2\"><u><strong>Primera opción</strong></u></td>";
                echo "<td colspan=\"2\">$op1</td>";
            echo "</tr>";
               
            echo "<tr>";
                echo "<td colspan=\"2\"><u><strong>Segunda opción</strong></u></td>";
                echo "<td colspan=\"2\">$op2</td>";
            echo "</tr>";
           
                

        echo "</tbody>";

    echo "</table>";

?>