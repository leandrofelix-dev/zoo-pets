<?php
    session_start();
    require('conect.php');
    require('./cabecalho.php');
?>

    <form id="login-form" class="flex">
    <a href="" onclick="fechar_login()"><img src="icons/close.svg" alt=""></a>
    <div class="form-group">
      <label for="exampleInputEmail1">ENDEREÇO DE E-MAIL</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
      <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">SENHA</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

<script>
    function abrir_login(){
        document.getElementById("login-form").style.display = "block";
}
    function fechar_login(){
        document.getElementById("login-form").style.display = "none";
}
</script>
