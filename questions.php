<!---1ro se realiza la conexion a la base de datos--->
<?php 
	//include 'conexion/Conexion.php';
	$conexion=mysqli_connect('localhost','root','','test');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="estilos/estilos_questions.css">
	<script src="js/questions.js"></script>
    <title>Yachayqay Test</title>
</head>
<body>

	<div class="contenedor">
    
		<header>
            <img src="imagenes/UC-Horizontal-White 1.png">
        </header>
        <!---contenido del cuestionario/test--->
        <div id="questions" class="contenido">
            <section  accion="guardar" id="form1">
            <!--- base de datos--->
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=1";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><button style="background-color:black;color:white;height:40px " onclick="ocultarform1();mostrarform2();"><?php echo $mostrar ['opcion1']?></button></center> 
                        <br>
                        <center><button style="background-color:black;color:white;height:40px " onclick="ocultarform1();mostrarform2();"><?php echo $mostrar ['opcion2']?></button></center> 
                    </div>	                    
                <?php
            }
            ?>
            </section>

			<form accion="guardar" id="form2" style="display:none;">
            <a href="javascript:history.go(form1)" class="button">Atrás</a>
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=2";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform2();mostrarform3();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform2();mostrarform3();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form3" style="display: none;">
            <a href="javascript:history.go(form2)" class="button">Atrás</a>
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=3";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform3();mostrarform4();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform3();mostrarform4();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form4" style="display: none;">
            <a href="javascript:history.go(form3)" class="button">Atrás</a>
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=4";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform4();mostrarform5();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform4();mostrarform5();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form5" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=5";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform5();mostrarform6();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform5();mostrarform6();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form6" style="display: none;" >
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=6";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform6();mostrarform7();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform6();mostrarform7();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form7" style="display: none;" >
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=7";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform7();mostrarform8();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform7();mostrarform8();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form8" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=8";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform8();mostrarform9();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform8();mostrarform9();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form9" style="display: none;" >
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=9";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform9();mostrarform10();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform9();mostrarform10();" onclick="ocultarform1();mostrarform2();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form10" style="display: none;" >
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=10";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform10();mostrarform11();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform10();mostrarform11();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form11" style="display: none;" >
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=11";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform11();mostrarform12();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform11();mostrarform12();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form12" style="display: none;" >
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=12";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform12();mostrarform13();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform12();mostrarform13();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form13" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=13";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform13();mostrarform14();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform13();mostrarform14();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form14" style="display: none;" >
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=14";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform14();mostrarform15();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform14();mostrarform15();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form15" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=15";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform15();mostrarform16();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform15();mostrarform16();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form16" style="display: none;" >
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=16";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform16();mostrarform17();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform16();mostrarform17();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form17" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=17";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform17();mostrarform18();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform17();mostrarform18();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form18" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=18";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform18();mostrarform19();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform18();mostrarform19();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form19" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=19";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform19();mostrarform20();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform19();mostrarform20();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form20" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=20";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform20();mostrarform21();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform20();mostrarform21();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form21" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=21";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform21();mostrarform22();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform21();mostrarform22();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form22" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=22";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform22();mostrarform23();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform22();mostrarform23();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form23" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=23";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform23();mostrarform24();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform23();mostrarform24();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form24" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=24";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform24();mostrarform25();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform24();mostrarform25();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form25" style="display: none;" >
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=25";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform25();mostrarform26();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform25();mostrarform26();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form26" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=26";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform26();mostrarform27();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform26();mostrarform27();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form27" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=27";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform27();mostrarform28();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform27();mostrarform28();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form28" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=28";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform28();mostrarform29();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform28();mostrarform29();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form29" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=29";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform29();mostrarform30();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform29();mostrarform30();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form30" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=30";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform30();mostrarform31();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform30();mostrarform31();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form31" style="display: none;" >
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=31";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform31();mostrarform32();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform31();mostrarform32();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form32" style="display: none;" >
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=32";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform32();mostrarform33();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform32();mostrarform33();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form33" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=33";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform33();mostrarform34();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform33();mostrarform34();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form34" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=34";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform34();mostrarform35();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform34();mostrarform35();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form35" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=35";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform35();mostrarform36();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform35();mostrarform36();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form36" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=36";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform36();mostrarform37();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform36();mostrarform37();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form37" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=37";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform37();mostrarform38();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform37();mostrarform38();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form38" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=38";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform38();mostrarform39();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform38();mostrarform39();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form39" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=39";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform39();mostrarform40();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform39();mostrarform40();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form40" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=40";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform40();mostrarform41();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform40();mostrarform41();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form41" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=41";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform41();mostrarform42();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform41();mostrarform42();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form42" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=42";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform42();mostrarform43();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform42();mostrarform43();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form43" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=43";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform43();mostrarform44();" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="ocultarform43();mostrarform44();" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
            <form id="form44" style="display: none;">
                <?php
                $sql="SELECT idpregunta,enunciado,opcion1,opcion2 FROM tblpreguntas WHERE idpregunta=44";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <div >
                        <center>
                            <h2>
                                <?php echo $mostrar ['enunciado']?>
                            </h2>
                        </center> 
                        <br>                            
                    </div>
                    
                    <div>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="" value="<?php echo $mostrar ['opcion1']?>"></a></center> 
                        <br>
                        <center><a><input type="button" style="background-color:black;color:white;height:40px " onclick="" value="<?php echo $mostrar ['opcion2']?>"></a></center> 
                    </div>
                    
                <?php
            }
            ?>
            </form>
        </div>
        <div class="footer">
         <!--  <h1>1 de 44</h1>--> 
        </div>
	</div>

</body>

</html>