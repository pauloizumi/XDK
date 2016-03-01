<?php
//Configuração do Servidor
$serve = mysql_connect('localhost', 'root', '');
if(!$serve){ echo 'erro';}
$db = mysql_select_db('registro', $serve);



//Ação Incluir
if($_GET['acao'] == 'inclusao'){

    $nome= $_GET['nome'];
    $sobrenome= $_GET['sobrenome'];
    
    $SQL= "insert INTO usuario (nome,sobrenome) VALUES ('$nome','$sobrenome') ";
    $re= mysql_query($SQL, $serve);
}



//Ação Listar
if($_GET['acao'] == 'listarusuario'){

     $SQL = "SELECT * FROM usuario";

     $re = mysql_query($SQL, $serve);
 
     $num = mysql_num_rows($re);

     if($num > 0){
 
         //Visualizar em Tela
           while($Linha = mysql_fetch_object($re)){
                  echo "<b>Nome:</b> {$Linha->nome} <b><br></b> <b>Sobrenome:</b> {$Linha->sobrenome}</br><hr>";
               
           }

      }
      else{
          echo 'nenhum usuário cadastrado.';
      }
}
?>
