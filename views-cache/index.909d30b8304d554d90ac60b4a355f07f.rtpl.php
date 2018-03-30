<?php if(!class_exists('Rain\Tpl')){exit;}?>    <div class="container">
      <div class="row">
        <div class="col-sm-1 col-lg-1"></div>
        <div class="col px-5 py-3 bg-white">
          <div class="text-center">
            <img src="../res/img/logo.jpg" class="img-fluid">
            <h2>FUNDAÇÃO LIBERATO</h2>
          </div>
          <hr>
          <div class="text-center">
            Os participantes, já inscritos no Site da ONHB, devem preencher a ficha abaixo para contato com o Professor Orientador.
            <br>
            O nome da equipe (3 participantes) deve ser o mesmo inscrito no Site.
          </div>
          <hr>
          <form method="POST" action="/cadastrar" data-js="form">
            <h3 class="text-center">Cadastro ONHB</h3>
            <br>
            <div class="form-group">
              <label for="nome">Nome: </label>
              <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" data-js="input">
            </div>
            <div class="form-group">
              <label for="turma">Turma: </label>
              <input type="number" name="turma" id="turma" class="form-control" placeholder="Turma" data-js="input">
            </div>
            <div class="form-group">
              <label for="email">Email: </label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email" data-js="input">
            </div>
            <div class="form-group">
              <label class="nome-grupo">Nome do Grupo: </label>
              <input type="text" name="nome-grupo" id="nome-grupo" class="form-control" placeholder="Nome do Grupo" data-js="input">
            </div>
            <div class="text-center">
              <input type="submit" name="enviar" value="Cadastrar" class="btn btn-primary">
            </div>
            <br><br>
          </form>
        </div>
        <div class="col-sm-1 col-lg-1"></div>
      </div>
    </div>

<div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">Sucesso!</h5>
      </div>
      <div class="modal-body">
        Seu cadastro foi realizado com sucesso!
      </div>
      <div class="modal-footer">
        <a href="/" class="btn btn-success"  data-dismiss="modal">OK</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Erro!</h5>
      </div>
      <div class="modal-body">
        Desculpe, não foi possível efetuar o seu cadastro!
      </div>
      <div class="modal-footer">
        <a href="/" class="btn btn-success"  data-dismiss="modal">OK</a>
      </div>
    </div>
  </div>
</div>    