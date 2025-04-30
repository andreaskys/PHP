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
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-4">
      <?php include('mensagem.php'); ?>	
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Lista de Pacientes
                <a href="usuariocreate.php" class="btn btn-primary float-end">Adicionar Paciente</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  try {
                      $sql = "SELECT * FROM usuarios";
                      $stmt = $conexao->query($sql); // Use PDO's query method
                      $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows as associative array

                      if (count($usuarios) > 0) {
                          foreach ($usuarios as $usuario) {
                  ?>
                  <tr>
                    <td><?= htmlspecialchars($usuario['nome']) ?></td>
                    <td>
                      <a href="usuario_view.php?id=<?= htmlspecialchars($usuario['id']) ?>" class="btn btn-primary btn-sm">Visualizar</a>
                      <a href="usuario_edit.php?id=<?= htmlspecialchars($usuario['id']) ?>" class="btn btn-success btn-sm">Editar</a>
                      <form action="acoes.php" method="POST" class="d-inline">
                        <button onclick="return confirm('Tem Certeza que deseja excluir?')" type="submit" name="delete_usuario" value="<?= htmlspecialchars($usuario['id']) ?>" class="btn btn-danger btn-sm">
                          Excluir
                        </button>
                      </form>
                    </td>
                  </tr>
                  <?php
                          }
                      } else {
                          echo '<h5>Nenhum Usuário encontrado</h5>';
                      }
                  } catch (PDOException $e) {
                      echo "Erro ao buscar usuários: " . $e->getMessage();
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>