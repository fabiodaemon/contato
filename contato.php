<?php
    $msg = 0;
    $msg = $_REQUEST['msg'];
?>


<!doctype html>
<html>
<head>
<title>SA IMOVEIS</title>
</head>
<body>
    <?php if($msg==enviado): ?>
    <h1>Mensagem Enviada. Agradecemos seu contato</h1>
    <?php else: ?>
    <fieldset>
        <legend><h2>CONTATO</h2></legend>

        <form action="formulario.php" method="post">
          <label for="nome">Nome Completo</label><br>
          <input type="text" name="nome" required>
          <label for="email">E-mail</label><br>
          <input type="text" name="email" required>
          <label for="telefone">Telefone</label><br>
          <input type="text" name="telefone" required>
          <br>
         <select name="contato">
              <option value="alugar">Alugar</option>
              <option value="anunciar">Anunciar</option>
              <option value="comprar">Comprar</option>
              <option value="outros">Outros</option>
          </select>
          <br>
          <textarea name="comentario" style="width:400px; height:200px">
          </textarea>
          <br>  
          <input type="submit">
        </form>
    </fieldset>
</body>
</html>