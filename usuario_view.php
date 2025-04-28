<?php
global $conexao;
require('conexao.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuario - Visualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body class="bg-white">
    <?php include('navbar.php'); ?>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Visualizar Paciente
                <a href="home.php" class="btn btn-danger float-end"">Voltar</a>
              </h4>
            </div>
            <div class="card-body">
              <?php
              if(isset($_GET['id'])) {
                $usuario_id = mysqli_real_escape_string($conexao, $_GET['id']);
                $sql = "SELECT * FROM usuarios WHERE id='$usuario_id'";
                $query = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($query) > 0) {
                  $usuario = mysqli_fetch_array($query);
                ?>
              <!-- Informaçoes Pessoais -->
                <div class="mb-3">
                  <label>Nome</label>
                  <p class="form-control border-dark">
                  <?= $usuario['nome'] ?>
                  </p>
                </div>
                <div class="mb-3">
                  <label>Como Prefere ser chamado</label>
                  <p class="form-control border-dark">
                  <?= $usuario['preferencia_chamado'] ?>
                  </p>
                </div>
                <div class="mb-3 d-flex">
                  <div class="col-4 pe-3">
                    <label>Data Nascimento</label>
                    <p class="form-control border-dark">
                    <?=date('d/m/Y', strtotime($usuario['data_nascimento']));?>
                    </p>
                  </div>
                  <div class="col-4">
                  <label>Instagram</label>
                    <p class="form-control border-dark">
                    <?= $usuario['instagram']?>
                    </p>
                  </div>
                </div>
                <div class="mb-3 d-flex">
                  <div class="col-4 pe-3">
                    <label>Celular</label>
                    <p class="form-control border-dark">
                    <?= $usuario['celular']?>
                    </p>
                  </div>
                  <div class="col-4">
                  <label>Ocupação</label>
                    <p class="form-control border-dark">
                    <?= $usuario['ocupacao']?>
                    </p>
                  </div>
                </div>
                <div class="mb-3 d-flex">
                  <div class="col-4 pe-3">
                    <label>Idade</label>
                    <p class="form-control border-dark">
                    <?= $usuario['idade']?>
                    </p>
                  </div>
                  <div class="col-4">
                  <label>Como nos Conheceu</label>
                    <p class="form-control border-dark">
                    <?= $usuario['como_conheceu']?>
                    </p>
                  </div>
                </div> 
              <!-- Informaçoes Pessoais -->

              <!-- Anamnese Clínica -->
                  <div class="mb-3">
                    <label>Diabetes</label>
                    <p class="form-control border-dark">
                    <?= $usuario['diabetes'] ?>
                    </p>
                  </div>
                  <div class="mb-3">
                    <label>Hipertensão/Hipotensão</label>
                    <p class="form-control border-dark">
                    <?= $usuario['hipertensao'] ?>
                    </p>
                  </div>
                  <div class="mb-3">
                    <label>Colesterol</label>
                    <p class="form-control border-dark">
                    <?= $usuario['colesterol'] ?>
                    </p>
                  </div>
                  <div class="mb-3">
                    <label>triglicérides</label>
                    <p class="form-control border-dark">
                    <?= $usuario['triglicerides'] ?>
                    </p>
                  </div>
                  <div class="mb-3">
                    <label>Hipotireoidismo</label>
                    <p class="form-control border-dark">
                    <?= $usuario['hipotireoidismo'] ?>
                    </p>
                  </div>
                  <div class="mb-3">
                    <label>Peso Desejado</label>
                    <p class="form-control border-dark">
                    <?= $usuario['peso_desejado'] ?>
                    </p>
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
                        <input disabled class="form-check-input border-dark" type="checkbox" name="nao_consome_leite" value="1" 
                        <?php if (isset($usuario) && $usuario['nao_consome_leite'] == 1) echo 'checked'; ?> >
                        <label class="form-check-label" > Leite </label>
                      </div>
                      <div>
                        <input disabled class="form-check-input border-dark" type="checkbox" name="nao_consome_frutas" value="1" 
                        <?php if (isset($usuario) && $usuario['nao_consome_frutas'] == 1) echo 'checked'; ?>>
                        <label class="form-check-label" > Frutas e Verduras </label>
                      </div>
                      <div>
                        <input disabled class="form-check-input border-dark" type="checkbox" name="nao_consome_carne" value="1" 
                        <?php if (isset($usuario) && $usuario['nao_consome_carne']== 1) echo 'checked'; ?>>
                        <label class="form-check-label" > Carne </label>
                      </div>
                      <div>
                        <input disabled class="form-check-input border-dark" type="checkbox" name="nao_consome_frango" value="1" 
                        <?php if (isset($usuario) && $usuario['nao_consome_frango'] == 1) echo 'checked'; ?>>
                        <label class="form-check-label" > Frango </label>
                      </div>
                      <div>
                        <input disabled class="form-check-input border-dark" type="checkbox" name="nao_consome_peixe" value="1" 
                        <?php if (isset($usuario) && $usuario['nao_consome_peixe'] == 1) echo 'checked'; ?>>
                        <label class="form-check-label" > Peixe </label>
                      </div>
                      <div>
                        <input disabled class="form-check-input border-dark" type="checkbox" name="nao_consome_ovo" value="1" 
                        <?php if (isset($usuario) && $usuario['nao_consome_ovo'] == 1) echo 'checked'; ?>>
                        <label class="form-check-label" > Ovo </label>
                      </div>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                    <h4>Realiza atividade física:</h4>
                    <div>
                      <input disabled type="radio" name="atividade_fisica" value="1" class="form-check-input border-dark"
                      <?php if (isset($usuario) && $usuario['nao_consome_leite'] == 1) echo 'checked'; ?> >>
                      <label class="form-check-label">Sim</label>
                    </div>
                    <div>
                      <input disabled type="radio" name="atividade_fisica" value="0" class="form-check-input border-dark"
                      <?php if (isset($usuario) && $usuario['nao_consome_leite'] == 0) echo 'checked'; ?> >>
                      <label class="form-check-label">Não</label>
                    </div>
                    <div class="mb-3 col-8">
                      <label>Qual?</label>
                      <p class="form-control border-dark">
                        <?= $usuario['tipo_atividade'] ?>
                      </p>
                    </div>
                    <div class="mb-3 col-8">
                      <label>Quantas vezes por semana?</label>
                      <p class="form-control border-dark">
                        <?= $usuario['frequencia_atividade'] ?>
                      </p>
                    </div>
                    <div class="mb-3">
                      <label>Observações</label>
                      <p class="form-control border-dark">
                        <?= $usuario['observacoes'] ?>
                      </p>
                    </div>
                  </div>
                </div>

              <!-- habitos -->

              <!-- auriculoterapai-->

              <h1>Auticuloterapia</h1>
                <div class="py-3">
                  <div class="row">
                    <div class="col-4">
                      <input disabled class="form-check-input border-dark" type="checkbox" name="auriculoterapia_constipacao" value="1"
                      <?php if (isset($usuario) && $usuario['auriculoterapia_constipacao'] == 1) echo 'checked'; ?>>>
                      <label class="form-check-label">Constipação</label>
                    </div>
                    <div class="col-4">
                      <input disabled class="form-check-input border-dark" type="checkbox" name="auriculoterapia_ansiedade" value="1"
                      <?php if (isset($usuario) && $usuario['auriculoterapia_ansiedade'] == 1) echo 'checked'; ?>>>
                      <label class="form-check-label">Ansiedade</label>
                    </div>
                    <div class="col-4">
                      <input disabled class="form-check-input border-dark" type="checkbox" name="auriculoterapia_insonia" value="1"
                      <?php if (isset($usuario) && $usuario['auriculoterapia_insonia'] == 1) echo 'checked'; ?>>>
                      <label class="form-check-label">Insonia</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <input disabled class="form-check-input border-dark" type="checkbox" name="auriculoterapia_retencao" value="1"
                      <?php if (isset($usuario) && $usuario['auriculoterapia_retencao'] == 1) echo 'checked'; ?>>>
                      <label class="form-check-label">Retenção de liquido</label>
                    </div>
                    <div class="col-4">
                      <input disabled class="form-check-input border-dark" type="checkbox" name="auriculoterapia_nervosismo" value="1"
                      <?php if (isset($usuario) && $usuario['auriculoterapia_nervosismo'] == 1) echo 'checked'; ?>>>
                      <label class="form-check-label">Nervosismo</label>
                    </div>
                    <div class="col-4">
                      <input disabled class="form-check-input border-dark" type="checkbox" name="auriculoterapia_dor_cabeca" value="1"
                      <?php if (isset($usuario) && $usuario['auriculoterapia_dor_cabeca'] == 1) echo 'checked'; ?>>>
                      <label class="form-check-label">Dor de Cabeça</label>
                    </div>
                  </div>
                </div>

                <!-- auriculoterapai-->

                <?php
                } else {
                  echo "<h5>Usuario não encontrado</h5>";
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>