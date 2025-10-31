<?php
// NOMBRE DE LA CLASE 
class clsServicios
{

    // PROGRAMACIÓN DE MÉTODOS
    public function sp_Acceso($usu, $pwd)
    {

        // Se estructura el comando SQL para ejecutar 
        $cmdSql = "call sp_Acceso('$usu','$pwd');";

        // -------------------------------------------------
        // Variable para recepción de estatus+datos
        $datos = array();
        //if($conn = mysqli_connect("127.0.0.1", "root", "root", "BD_PROSOFT", 3306) ){
        if ($conn = mysqli_connect("dbprogweb.c0d5kxeggcx3.us-east-1.rds.amazonaws.com", "admin", "ProgWeb_25.", "BD_PROSOFT", 3306)) {
            // Ejecución del comando SQL y recibir resultados (recordset)
            $renglon = mysqli_query($conn, $cmdSql);

            if (mysqli_num_rows($renglon) > 0) {
                // Ciclo para lectura de registros
                while ($resultado = mysqli_fetch_assoc($renglon)) {
                    $datos[0]["BAN"] = $resultado["usu_ban"];
                    if ($datos[0]["BAN"] == "1") {
                        // El usuario existe en BD, extraer los demás datos
                        $datos[1]["CVE"] = $resultado["usu_cve_usuario"];
                        $datos[2]["NOM"] = $resultado["usu_nombre"];
                        $datos[3]["USU"] = $resultado["usu_usuario"];
                        $datos[4]["ROL"] = $resultado["rol_nombre"];
                    }
                }
            } else
                $datos[0]["BAN"] = "0";

            // Cerrar conexión
            mysqli_close($conn);
        }
        // Retornar el arreglo formateado y con los datos de resultado
        return $datos;
    }
    // -------------------------


    // VISTA vwRptArticulos
    public function vwRptArticulos()
    {
        // Variable para recepción de estatus+datos
        $datos = array();

        // Se estructura el comando SQL para ejecutar 
        $cmdSql = "select * from vwRptArticulos;";

        $i = 0; // <------ variable para controlar los registros del arreglo

        //if($conn = mysqli_connect("127.0.0.1", "root", "root", "BD_PROSOFT", 3306) ){
        if ($conn = mysqli_connect("dbproweb.c0fwxjrgyi8c.us-east-1.rds.amazonaws.com", "admin", "ProgWeb_25.", "BD_PROSOFT", 3306)) {
            // Ejecución del comando SQL y recibir resultados (recordset)
            $renglon = mysqli_query($conn, $cmdSql);

            // Ciclo para lectura de registros

            while ($resultado = mysqli_fetch_assoc($renglon)) {
                // Vaciado de datos en el arreglo de salida                
                $datos[$i]["clave"] = $resultado["clave"];
                $datos[$i]["nombre"] = $resultado["nombre"];
                $datos[$i]["descripcion"] = $resultado["descripcion"];
                $datos[$i]["existencias"] = $resultado["existencias"];
                $datos[$i]["precio"] = $resultado["precio"];
                $datos[$i]["foto"] = $resultado["foto"];
                $datos[$i]["modelo"] = $resultado["modelo"];
                $datos[$i]["familia"] = $resultado["familia"];
                $i++;
            }
            // Cerrar conexión
            mysqli_close($conn);
        }
        // Retornar el arreglo formateado y con los datos de resultado
        return $datos;
    }
}
