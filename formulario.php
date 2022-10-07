<!--
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewpart" content="width-device-width, initial-scale-1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">  
        
        <title>Cadastro</title>
        <style>
            body{
                font-family:Arial, Helvetica, sans-serif ;
            }
            .box{ 
                color: white; 
                position: fixed; 
                top: 50%; 
                left: 50%; 
                transform: translate(-50%, -50%); 
                background-color: rgba(0, 0, 0, 0.9); 
                padding: 15px; 
                border-radius: 15px; 
                width: 30%; 
            }
            fieldset{
                border: 3px solid  black;
            }
            legend{
                
                text-align: center;
                border-radius: 8px;    
            }
            .inputBox{
                position: relative;
                                    
                   
            }
            .caixa{
                 
            }
            
            .inputUser{
                background: white;
                border: none;
                border-bottom: 1px solid white;
                border-radius: 20px;
                outline: none;
                
                font-size: 15px;
                width: 100%;
                letter-spacing: 2px;

            }
            #submit{
                background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220)); 
                width: 100%;
                border: none;
                padding: 15px;
                color: white;
                font-size: 15px;
                cursor: pointer;
                border-radius: 20px;
            }
            #submit:hover{
                background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
            }

        </style>
    </head>
    <body>
    <?php
   if(isset($_POST['submit']))
    {  
        
       /* print_r('Login:'.$_POST['login']);
        print_r('<br>');
        print_r('Nome:' .$_POST['nome']);
        print_r('<br>');
        print_r('Unidades:' .$_POST['unidades']);
        print_r('<br>');
        print_r('Setor:' .$_POST['setor']);
        print_r('<br>');
        print_r('Senha:' .$_POST['senha']);
        print_r('email:' .$_POST['email']);
    */
    
}
    
     include_once('config.php');

     $login = $_POST['login'];
     $nome = $_POST['nome'];
     $unidades = $_POST['unidades'];
     $setor = $_POST['setor'];
     $senha = $_POST['senha'];
     $email = $_POST['email'];

     $query = "INSERT INTO usuarios(login_usuario, nome_usuario, unidades_validas, filtro_setor, senha_usuario, email_usuarios) 
     VALUES ('$login', '$nome', '$unidades', '$setor', '$senha', '$email')";

     $result = pg_query($conexao,$query);
?>

        <div class="box">
            <form autocomplete="off" action="formulario.php" method="POST">
                <fieldset>
                    <legend><b><h2>Cadastro de Usuario</h2></b></legend>
                    
                    <div class="inputBox" >

                    <input type="text" name="login" id="login" class="inputUser"  required maxlength="3" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                        <label for="login" class="labelinput"> Login</label>
                    </div>
                    
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelinput"> Nome</label>
                    </div>
                    
                    <div class="inputBox">
                    <input type="text" name="unidades" id="unidades" class="inputUser" required>
                        <label for="unidades" class="labelinput"> Unidades </label>
                    </div>
                    
                    <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <br>    
                    <label for="email" class="labelinput"> Email </label>
                    </div>
                    
                    <div class="inputBox">
                    
                    <fieldset>
                        <legend> Setor </legend>
                        <div class="caixa">
                            
                          <input type = "checkbox" id = "comercial" name = "setor" value = "comercial">
                          <label for = "comercial"> Comercial </label>
                        
                          <input type = "checkbox" id = "Controladoria" name = "setor" value = "controladoria">
                          <label for = "controladoria"> Controladoria </label>
                        
                            <input type = "checkbox" id = "contabilidade" name = "setor" value = "contabilidade">
                            <label for = "contabilidade"> Contabilidade </label>
                        
                            <input type = "checkbox" id = "financeiro" name = "setor" value = "financeiro">
                            <label for ="financeiro"> Financeiro </label>
                          
                        
                          <div>
                            <input type = "checkbox" id = "supply" name = "setor" value = "supply">
                          <label for = "supply"> Supply </label>
                        
                          <input type = "checkbox" id = "marketing" name = "setor" value = "marketing">
                          <label for = "marketing"> Marketing </label>
                        
                            <input type = "checkbox" id = "pricing" name = "setor" value = "pricing">
                            <label for = "pricing"> Pricing </label>
                        
                            <input type = "checkbox" id = "rh" name = "setor" value = "rh">
                            <label for ="rh"> RH </label>
                          </div>
                        </fieldset>
                    </div>

    

    </body>
</html>
