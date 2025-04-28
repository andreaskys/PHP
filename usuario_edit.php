<?php
global $conexao;
session_start();
require('conexao.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuario - Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body class="bg-white">
    <?php include('navbar.php'); ?>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Editar Usuario
                <a href="home.php" class="btn btn-danger float-end"">Voltar</a>
              </h4>
            </div>
            <div class="card-body">
              <?php
              if(isset($_GET['id'])){
                $usuario_id = mysqli_real_escape_string($conexao, $_GET['id']);
                $sql = "SELECT * FROM usuarios WHERE id='$usuario_id'";
                $query = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($query) > 0) {
                  $usuario = mysqli_fetch_array($query);

                  // Fetch all consultations for the user
                  $consultas_query = "SELECT * FROM consultas WHERE usuario_id='$usuario_id'";
                  $consultas_result = mysqli_query($conexao, $consultas_query);
                  $consultas = mysqli_fetch_all($consultas_result, MYSQLI_ASSOC); // Fetch all rows as an associative array
                } else {
                  $usuario = null;
                  $consultas = [];
                }
              ?>
             
              <form action="acoes.php" method="POST">

                 <!-- Informaçoes Pessoais -->
                <input type="hidden" name="usuario_id" value="<?=$usuario['id']?>">
                <div class="mb-3">
                  <label>Nome</label>
                        <input type="text" name="nome" value="<?=$usuario['nome']?>" class="form-control border-dark">
                </div>
                <div class="mb-3">
                  <label>Como Prefere ser Chamado</label>
                        <input type="text" name="preferencia_chamado" value="<?=$usuario['preferencia_chamado']?>" class="form-control border-dark">
                </div>
                <div class="mb-3 d-flex">
                  <div class="col-4 pe-3">
                    <label>Data de Nascimento</label>
                          <input type="date" name="data_nascimento" value="<?=$usuario['data_nascimento']?>" class="form-control border-dark">
                  </div>
                  <div class="col-4">
                    <label>Instagram</label>
                          <input type="text" name="instagram" value="<?=$usuario['instagram']?>" class="form-control border-dark">
                  </div>
                </div>
                <div class="mb-3 d-flex">
                  <div class="col-4 pe-3">
                    <label>Celular</label>
                          <input type="text" name="celular" value="<?=$usuario['celular']?>" class="form-control border-dark">
                  </div>
                  <div class="col-4">
                    <label>Ocupação</label>
                    <input type="text" name="ocupacao" value="<?=$usuario['ocupacao']?>" class="form-control border-dark">
                  </div>
                </div>
                <div class="mb-3 d-flex">
                  <div class="col-4 pe-3">
                    <label>Idade</label>
                    <input type="text" name="idade" value="<?=$usuario['idade']?>" class="form-control border-dark">
                  </div>
                  <div class="col-4">
                    <label>Como nos Conheceu</label>
                    <input type="text" name="como_conheceu" value="<?=$usuario['como_conheceu']?>" class="form-control border-dark">
                  </div>
                </div>
                <!-- Informaçoes Pessoais -->

                <!-- Anamnese Clínica -->
                <div class="mb-3">
                  <label>Diabetes</label>
                  <input type="text" name="diabetes" value="<?=$usuario['diabetes']?>" class="form-control border-dark">
                </div>
                <div class="mb-3">
                  <label>Hipertensão/Hipotensão</label>
                  <input type="text" name="hipertensao" value="<?=$usuario['hipertensao']?>" class="form-control border-dark">
                </div>
                <div class="mb-3">
                  <label>Colesterol</label>
                  <input type="text" name="colesterol" value="<?=$usuario['colesterol']?>" class="form-control border-dark">
                </div>
                <div class="mb-3">
                  <label>Triglicérides</label>
                        <input type="text" name="triglicerides" value="<?=$usuario['triglicerides']?>" class="form-control border-dark">
                </div>
                <div class="mb-3">
                  <label>Hipotireoidismo</label>
                  <input type="text" name="hipotireoidismo" value="<?=$usuario['hipotireoidismo']?>" class="form-control border-dark">
                </div>
                <div class="mb-3">
                  <label>Peso Desejado</label>
                  <input type="text" name="peso_desejado" value="<?=$usuario['peso_desejado']?>" class="form-control border-dark">
                </div>
                 <!-- Anamnese Clínica -->

                 <!-- habitos -->
                 <h1>Hábitos</h1>
                <div class="row">
                <div class="col-md-6">
                <div class="form-check">
                  <h4>Nao consome:</h4>
                    <ul>
                      <div>
                        <input class="form-check-input border-dark" type="checkbox" name="nao_consome_leite" value="1" 
                        <?php if (isset($usuario) && $usuario['nao_consome_leite'] == 1) echo 'checked'; ?>>
                        <label class="form-check-label" > Leite </label>
                      </div>
                      <div>
                        <input class="form-check-input border-dark" type="checkbox" name="nao_consome_frutas" value="1" 
                        <?php if (isset($usuario) && $usuario['nao_consome_frutas'] == 1) echo 'checked'; ?>>
                        <label class="form-check-label" > Frutas e Verduras </label>
                      </div>
                      <div>
                        <input class="form-check-input border-dark" type="checkbox" name="nao_consome_carne" value="1" 
                        <?php if (isset($usuario) && $usuario['nao_consome_carne']== 1) echo 'checked'; ?>>
                        <label class="form-check-label" > Carne </label>
                      </div>
                      <div>
                        <input class="form-check-input border-dark" type="checkbox" name="nao_consome_frango" value="1" 
                        <?php if (isset($usuario) && $usuario['nao_consome_frango'] == 1) echo 'checked'; ?>>
                        <label class="form-check-label" > Frango </label>
                      </div>
                      <div>
                        <input class="form-check-input border-dark" type="checkbox" name="nao_consome_peixe" value="1" 
                        <?php if (isset($usuario) && $usuario['nao_consome_peixe'] == 1) echo 'checked'; ?>>
                        <label class="form-check-label" > Peixe </label>
                      </div>
                      <div>
                        <input class="form-check-input border-dark" type="checkbox" name="nao_consome_ovo" value="1" 
                        <?php if (isset($usuario) && $usuario['nao_consome_ovo'] == 1) echo 'checked'; ?>>
                        <label class="form-check-label" > Ovo </label>
                      </div>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                    <h4>Realiza atividade física:</h4>
                    <div>
                      <input type="radio" name="atividade_fisica" value="1" class="form-check-input border-dark"
                      <?php if (isset($usuario) && $usuario['atividade_fisica'] == 1) echo 'checked'; ?>>
                      <label class="form-check-label">Sim</label>
                    </div>
                    <div>
                      <input type="radio" name="atividade_fisica" value="0" class="form-check-input border-dark"
                      <?php if (isset($usuario) && $usuario['atividade_fisica'] == 0) echo 'checked'; ?>>
                      <label class="form-check-label">Não</label>
                    </div>
                    <div class="mb-3 col-8">
                      <label>Qual?</label>
                      <input type="text" name="tipo_atividade" class="form-control border-dark" value="<?=$usuario['tipo_atividade']?>">
                    </div>
                    <div class="mb-3 col-8">
                      <label>Quantas vezes por semana?</label>
                      <input type="text" name="frequencia_atividade" class="form-control border-dark" value="<?=$usuario['frequencia_atividade']?>">
                    </div>
                    <div class="mb-3">
                      <label>Observações</label>
                      <input type="text" name="observacoes" class="form-control border-dark" value="<?=$usuario['observacoes']?>">
                    </div>
                  </div>
                </div>
                 
                <!-- habitos -->

                  <!--Auriculoterapia-->

                  <h1>Auticuloterapia</h1>
                  <div class="py-3">
                      <div class="row">
                          <div class="col-4">
                              <input class="form-check-input border-dark" type="checkbox" name="auriculoterapia_constipacao" value="1"
                                  <?php if (isset($usuario) && $usuario['auriculoterapia_constipacao'] == 1) echo 'checked'; ?>>
                              <label class="form-check-label">Constipação</label>
                          </div>
                          <div class="col-4">
                              <input class="form-check-input border-dark" type="checkbox" name="auriculoterapia_ansiedade" value="1"
                                  <?php if (isset($usuario) && $usuario['auriculoterapia_ansiedade'] == 1) echo 'checked'; ?>>
                              <label class="form-check-label">Ansiedade</label>
                          </div>
                          <div class="col-4">
                              <input class="form-check-input border-dark" type="checkbox" name="auriculoterapia_insonia" value="1"
                                  <?php if (isset($usuario) && $usuario['auriculoterapia_insonia'] == 1) echo 'checked'; ?>>
                              <label class="form-check-label">Insonia</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-4">
                              <input class="form-check-input border-dark" type="checkbox" name="auriculoterapia_retencao" value="1"
                                  <?php if (isset($usuario) && $usuario['auriculoterapia_retencao'] == 1) echo 'checked'; ?>>
                              <label class="form-check-label">Retenção de liquido</label>
                          </div>
                          <div class="col-4">
                              <input class="form-check-input border-dark" type="checkbox" name="auriculoterapia_nervosismo" value="1"
                                  <?php if (isset($usuario) && $usuario['auriculoterapia_nervosismo'] == 1) echo 'checked'; ?>>
                              <label class="form-check-label">Nervosismo</label>
                          </div>
                          <div class="col-4">
                              <input class="form-check-input border-dark" type="checkbox" name="auriculoterapia_dor_cabeca" value="1"
                                  <?php if (isset($usuario) && $usuario['auriculoterapia_dor_cabeca'] == 1) echo 'checked'; ?>>
                              <label class="form-check-label">Dor de Cabeça</label>
                          </div>
                      </div>
                  </div>

                <!--GUIA-->
                <div class="container mt-4 pt-5 pb-5">
                <h2 class="mb-3 justify-content-center d-flex">GUIA</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable"> 
                        <thead class="bg-dark text-white">
                        <tr>
                            <th>DATA</th>
                            <th>PESO</th>
                            <th>GUIA</th>
                            <th>CINTURA</th>
                            <th>QUADRIL</th>
                            <th>OBSERVAÇÃO</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($consultas)): ?>
                            <?php foreach ($consultas as $consulta): ?>
                                <tr>
                                    <td><input type="date" name="data_consulta[]" value="<?= $consulta['data_consulta'] ?>" class="form-control border-dark"></td>
                                    <td><input type="text" name="peso[]" value="<?= $consulta['peso'] ?>" class="form-control border-dark"></td>
                                    <td><input type="text" name="guia[]" value="<?= $consulta['guia'] ?>" class="form-control border-dark"></td>
                                    <td><input type="text" name="cintura[]" value="<?= $consulta['cintura'] ?>" class="form-control border-dark"></td>
                                    <td><input type="text" name="quadril[]" value="<?= $consulta['quadril'] ?>" class="form-control border-dark"></td>
                                    <td><input type="text" name="observacao[]" value="<?= $consulta['observacao'] ?>" class="form-control border-dark"></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td><input type="date" name="data_consulta[]" class="form-control border-dark"></td>
                                <td><input type="text" name="peso[]" class="form-control border-dark"></td>
                                <td><input type="text" name="guia[]" class="form-control border-dark"></td>
                                <td><input type="text" name="cintura[]" class="form-control border-dark"></td>
                                <td><input type="text" name="quadril[]" class="form-control border-dark"></td>
                                <td><input type="text" name="observacao[]" class="form-control border-dark"></td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                    <div class="justify-content-center d-flex">
                        <button id="addrowbtn" class="btn btn-primary add-row-btn">Adicionar Linha</button>
                    </div>
                </div>
            </div>

                <!--GUIA-->

                <div class="mb-3 justify-content-center d-flex">
                  <button type="submit" name="update_usuario" class="btn btn-primary">Salvar</button>
                </div>
              </form>
              <?php
              } else {
                echo "<h5>Usuario não encontrado</h5>";
              }
            
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const addrowbtn = document.getElementById('addrowbtn');
        const tablebody = document.querySelector('#dataTable tbody');

        addrowbtn.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent form submission

            const newrow = document.createElement('tr');

            newrow.innerHTML = `
                <td><input type="date" name="data_consulta[]" class="form-control border-dark"></td>
                <td><input type="text" name="peso[]" class="form-control border-dark"></td>
                <td><input type="text" name="guia[]" class="form-control border-dark"></td>
                <td><input type="text" name="cintura[]" class="form-control border-dark"></td>
                <td><input type="text" name="quadril[]" class="form-control border-dark"></td>
                <td><input type="text" name="observacao[]" class="form-control border-dark"></td>
            `;

            tablebody.appendChild(newrow);
            newrow.scrollIntoView({behavior: 'smooth'});
        });
    });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>