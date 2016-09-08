<?php
include'conexao.php';
header('content-type:text/html;charset=utf-8');

$id = $_GET['id'];
$query = "select * from assunto where id = {$id}";
$result= mysqli_query($conexao,$query);
$descricao = mysqli_fetch_assoc($result);


?>

<style>
	/* parte da section 3 */
html,body{
	margin:0;
	padding:0;
}
.terceiro{
    background:#3efa45;
}

.contato{
    width:50%;
    margin:0 auto;
}
.input{
    width:100%;
    height:49px;
    font-size:20px;
    text-align:center;
}
.text-area{
    width:100%;
    height:100px;
    font-size:20px;
    text-align:center;
}
.botao{
    border: none;
    padding: 10px;
    width: 97px;
    font-size: 20px;
    background:#30bcff;
    color:#fff;
}
.botao:hover{
    box-shadow:2px 2px 3px rgba(0,0,0,.5);
    transition:2s;
    cursor:pointer;
}
form{
    padding-bottom:30px;
}


</style>

<section class="terceiro">
           <h1 style="font-size:40px;" class="center">Contato</h1>
              <div class="contato">
                 <form action="atualizar.php" method="get">
                 <input type="hidden" name="id" value="<?=$descricao['id']?>">
                     <label for="descricao">
                     <textarea class="text-area" placeholder="Assunto" name="descricao" cols="30" rows="10"><?=$descricao['descricao']?></textarea><br/>
                     </label>
                     <br/>
                     <br/><input class="botao" type="submit" value="Atualizar">
                             
      

                 </form>
              </div>
         </section>