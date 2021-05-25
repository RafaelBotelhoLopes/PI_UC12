<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
?>

<menu>
<!--    <a href="index.php"> <img id="fotomenu" src="imagens/logosite.jpg" alt="Logo Footer"/> </a>-->

    <div class="menu1">



        <a href="index.php"><button  class="btnMenu">Início</button></a>
        <a href="quemsomos.php"><button   class="btnMenu">Quem somos</button></a>





        <?php
        if (isset($_SESSION['logado']) &&
                $_SESSION['logado'] == TRUE) {
            ?>
            <a class="menu1" href="frmReservar.php">
                <button class="btnMenu">Reservar</button></a>

            <a class="menu1" href="biblioteca.php">
                <button class="btnMenu">Material de Estudo</button></a>

            <?php
//          echo '<button id="ola" class="btnMenu"></button></a>';



            if (isset($_SESSION['admin']) && $_SESSION['admin'] == TRUE) {


                echo '  <a  href="CadMatSala.php"><button class="btnMenu" id="materialsala">Cadastrar Material / Sala</button></a>';
                echo '  <a  href="frmUsuario.php">

                        <button id="cadastrar" class="btnMenu" >Cadastrar</button></a>
                    <a class="menu1" href="usuario.php">
                        <button id="usuarios" class="btnMenu">Usuários</button></a>';
                echo '<a href="sair.php"><button id="sair" class="btnMenu">Sair</button></a>';


                echo '<p id="ola">Olá, ' . $_SESSION['nome'] . '</p>';
            } else {

                echo '<p id="ola"> Olá, ' . $_SESSION['nome'];

                echo '<a href="sair.php"><button id="sair" class="btnMenu" style="margin-left: 30px; ">Sair</button></a>';
            }
        } else {
            ?>

            <form class="login" action="entrar.php" method="POST" >
                    <!--            <label> <i id="ilog" for="txtLogin"></i> </label>-->
                <input  type="text" name="txtLogin" id="txtLogin" style="margin-left: 60%; margin-bottom: 90%" required
                        placeholder="Usuário ou E-mail: " />


                <input  type="password" name="txtSenha" id="txtSenha" style="margin-top: 3px; margin-left: 10px; margin-bottom: 10px;"
                        placeholder="Senha: " required />

                <input  type="submit" id="btnEntrar"  value="Entrar" />
            </form>




            <?php
        }
        ?>


    </div>

</menu>



<!--
<style>
    #menu{
        background-color: #819FF7;






    }


    #frmMenu{

        background-color: white;
        float: right;
        size: 1px;

    }
    /*    .menu{
            float: left;
        }*/
    #menu img{


        margin: auto 60px;
        width: 186px;
        max-width: 100%;
        margin: 25px 40px;
        border: solid #819FF7;
        border-radius: 20px;


    }
    #menu a{




        margin-left: 100px;

    }
    #txtLogin{
        border-radius: 7px;
        padding: 20px;

        font-size: 15px;


    }
    #txtSenha{
        border-radius: 7px;
        padding: 20px;

        font-size: 15px;

    }
    /*    #ilog{
            padding: 12px;
            background-color: black;
        }*/

</style>-->



