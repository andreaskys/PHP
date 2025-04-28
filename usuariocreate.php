<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuario - criar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body class="bg-white">
    <?php include('navbar.php'); ?>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Adicionar Paciente
                <a href="home.php" class="btn btn-danger float-end">Voltar</a>
              </h4>
            </div>
            <div class="card-body">
              <form action="acoes.php" method="POST">
                <!-- Informações Pessoais -->
                <h1>Informações Pessoais</h1>
                <div class="mb-3">
                  <label>Nome</label>
                  <input type="text" name="nome" class="form-control border-dark">
                </div>
                <div class="mb-3">
                  <label>Como Prefere ser Chamado</label>
                  <input type="text" name="preferencia_chamado" class="form-control border-dark">
                </div>
                <div class="mb-3 d-flex">
                  <div class="col-3 pe-3">
                    <label>Data de Nascimento</label>
                    <input type="date" name="data_nascimento" class="form-control border-dark">
                  </div>
                  <div class="col-4">
                    <label>Instagram</label>
                    <input type="text" name="instagram" class="form-control border-dark">
                  </div>
                </div>
                <div class="mb-3 d-flex">
                  <div class="col-4 pe-3">
                    <label>Celular</label>
                    <input type="text" name="celular" class="form-control border-dark">
                  </div>
                  <div class="col-4">
                    <label>Ocupação</label>
                    <input type="text" name="ocupacao" class="form-control border-dark">
                  </div>
                </div>
                <div class="mb-3 d-flex">
                  <div class="col-2 pe-3">
                    <label>Idade</label>
                    <input type="text" name="idade" class="form-control border-dark">
                  </div>
                  <div class="col-4">
                    <label>Como nos Conheceu</label>
                    <input type="text" name="como_conheceu" class="form-control border-dark">
                  </div>
                </div>

                <!-- Anamnese Clínica -->
                <h1>Anamnese Clínica</h1>
                <div class="mb-3">
                  <label>Diabetes</label>
                  <input type="text" name="diabetes" class="form-control border-dark">
                </div>
                <div class="mb-3">
                  <label>Hipertensão/Hipotensão</label>
                  <input type="text" name="hipertensao" class="form-control border-dark">
                </div>
                <div class="mb-3">
                  <label>Colesterol</label>
                  <input type="text" name="colesterol" class="form-control border-dark">
                </div>
                <div class="mb-3">
                  <label>Triglicérides</label>
                  <input type="text" name="triglicerides" class="form-control border-dark">
                </div>
                <div class="mb-3">
                  <label>Hipotireoidismo</label>
                  <input type="text" name="hipotireoidismo" class="form-control border-dark">
                </div>
                <div class="mb-3">
                  <label>Peso Desejado</label>
                  <input type="text" name="peso_desejado" class="form-control border-dark">
                </div>

                <!-- Hábitos -->
                <h1>Hábitos</h1>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check">
                      <h4>Não consome:</h4>
                      <ul>
                        <div>
                          <input class="form-check-input border-dark" type="checkbox" name="nao_consome_leite" value="1">
                          <label class="form-check-label">Leite</label>
                        </div>
                        <div>
                          <input class="form-check-input border-dark" type="checkbox" name="nao_consome_frutas" value="1">
                          <label class="form-check-label">Frutas e Verduras</label>
                        </div>
                        <div>
                          <input class="form-check-input border-dark" type="checkbox" name="nao_consome_carne" value="1">
                          <label class="form-check-label">Carne</label>
                        </div>
                        <div>
                          <input class="form-check-input border-dark" type="checkbox" name="nao_consome_frango" value="1">
                          <label class="form-check-label">Frango</label>
                        </div>
                        <div>
                          <input class="form-check-input border-dark" type="checkbox" name="nao_consome_peixe" value="1">
                          <label class="form-check-label">Peixe</label>
                        </div>
                        <div>
                          <input class="form-check-input border-dark" type="checkbox" name="nao_consome_ovo" value="1">
                          <label class="form-check-label">Ovo</label>
                        </div>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <h4>Realiza atividade física:</h4>
                    <div>
                      <input type="radio" name="atividade_fisica" value="1" class="form-check-input border-dark">
                      <label class="form-check-label">Sim</label>
                    </div>
                    <div>
                      <input type="radio" name="atividade_fisica" value="0" class="form-check-input border-dark">
                      <label class="form-check-label">Não</label>
                    </div>
                    <div class="mb-3 col-8">
                      <label>Qual?</label>
                      <input type="text" name="tipo_atividade" class="form-control border-dark">
                    </div>
                    <div class="mb-3 col-8">
                      <label>Quantas vezes por semana?</label>
                      <input type="text" name="frequencia_atividade" class="form-control border-dark">
                    </div>
                    <div class="mb-3">
                      <label>Observações</label>
                      <input type="text" name="observacoes" class="form-control border-dark">
                    </div>
                  </div>
                </div>
                <!-- Hábitos -->

                <!-- auticuloterapia -->

                <h1>Auticuloterapia</h1>
                <div class="py-3">
                  <div class="row">
                    <div class="col-4">
                      <input class="form-check-input border-dark" type="checkbox" name="auriculoterapia_constipacao" value="1">
                      <label class="form-check-label">Constipação</label>
                    </div>
                    <div class="col-4">
                      <input class="form-check-input border-dark" type="checkbox" name="auriculoterapia_ansiedade" value="1">
                      <label class="form-check-label">Ansiedade</label>
                    </div>
                    <div class="col-4">
                      <input class="form-check-input border-dark" type="checkbox" name="auriculoterapia_insonia" value="1">
                      <label class="form-check-label">Insonia</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <input class="form-check-input border-dark" type="checkbox" name="auriculoterapia_retencao" value="1">
                      <label class="form-check-label">Retenção de liquido</label>
                    </div>
                    <div class="col-4">
                      <input class="form-check-input border-dark" type="checkbox" name="auriculoterapia_nervosismo" value="1">
                      <label class="form-check-label">Nervosismo</label>
                    </div>
                    <div class="col-4">
                      <input class="form-check-input border-dark" type="checkbox" name="auriculoterapia_dor_cabeca" value="1">
                      <label class="form-check-label">Dor de Cabeça</label>
                    </div>
                  </div>
                </div>

                <!-- auticuloterapia -->

                <!-- Submit Button -->
                <div class="mb-3">
                  <button type="submit" name="create_usuario" class="btn btn-primary">Salvar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>