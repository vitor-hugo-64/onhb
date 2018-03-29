<?php if(!class_exists('Rain\Tpl')){exit;}?>    <div class="container">
      <div class="row">
        <div class="col">
          <div class="text-center">
            <img src="../res/img/logo.jpg" class="img-fluid">
            <h2>FUNDAÇÃO LIBERATO</h2>
          </div>
          <br>
          <div class="text-center">
            Os participantes, já inscritos no Site da ONHB, devem preencher a ficha abaixo para contato com o Professor Orientador.
            <br>
            O nome da equipe (3 participantes) deve ser o mesmo inscrito no Site.
          </div>
          <br>
          <form method="POST" action="" data-js="form">
            <h3 class="text-center">Cadastro ONHB</h3>
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
              <input type="submit" name="enviar" value="Cadastrar" class="btn btn-success">
            </div>
            <br><br>
          </form>
        </div>
      </div>
    </div>