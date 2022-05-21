<?php
class php{
    private $conexion;
    private $hostname="localhost";
    private $user="root";
    private $password="";
    private $DB="php";



    function __construct()
    {
        $this->conectar();
    }

    function conectar(){
        $this->conexion=mysqli_connect($this->hostname,$this->user,$this->password,$this->DB);

        if(mysqli_connect_error()){
            die ("error en la conexion");
        }
    }

    function insertaralumnos($nombre,$email,$codigocurso){
        $sql="insert into alumnos(nombre,email,codigocurso) values('$nombre','$email','$codigocurso')";
        $res= mysqli_query($this->conexion,$sql);

        if($res){
            return true;
        }else{
            return false;
        }
    }


    function cursos($nombrecurso){
        $sql="insert into cursos(nombrecurso) values('$nombrecurso')";
        $res= mysqli_query($this->conexion,$sql);


        if($res){
            return true;
        }else{
            return false;
        }
    }

    function vercurso(){
        $sql= "select *from cursos";
        $res= mysqli_query($this->conexion,$sql);


        return $res;
    }


    function findalumno($nombre){
        $sql="select codigo,email,codigocurso from alumnos where nombre='$nombre'";
        $res = mysqli_query($this->conexion,$sql);


        return $res;
    }


     function borrarcurso($nombre){
        $sql="delete from cursos where nombrecurso='$nombre'";
        $res2= mysqli_query($this->conexion,$sql);

        return $res2;
    }

    function cursoN($nombrecurso){
        $sql="select *from cursos where nombrecurso='$nombrecurso'";
        $res= mysqli_query($this->conexion,$sql);

        return $res;
    }

}
?>