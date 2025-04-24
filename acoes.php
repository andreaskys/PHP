<?php
session_start();
require('conexao.php');

if(isset($_POST['create_usuario'])) {

  $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
  $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
  $preferencia_chamado = mysqli_real_escape_string($conexao, trim($_POST['preferencia_chamado']));
  $instagram = mysqli_real_escape_string($conexao, trim($_POST['instagram']));
  $celular = mysqli_real_escape_string($conexao, trim($_POST['celular']));
  $ocupacao = mysqli_real_escape_string($conexao, trim($_POST['ocupacao']));
  $idade = mysqli_real_escape_string($conexao, trim($_POST['idade']));
  $como_conheceu = mysqli_real_escape_string($conexao, trim($_POST['como_conheceu']));
  $diabetes = mysqli_real_escape_string($conexao, trim($_POST['diabetes']));
  $hipertensao = mysqli_real_escape_string($conexao, trim($_POST['hipertensao']));
  $colesterol = mysqli_real_escape_string($conexao, trim($_POST['colesterol']));
  $triglicerides = mysqli_real_escape_string($conexao, trim($_POST['triglicerides']));
  $hipotireoidismo = mysqli_real_escape_string($conexao, trim($_POST['hipotireoidismo']));
  $peso_desejado = mysqli_real_escape_string($conexao, trim($_POST['peso_desejado']));
  $nao_consome_leite = isset($_POST['nao_consome_leite']) ? 1 : 0;
  $nao_consome_frutas = isset($_POST['nao_consome_frutas']) ? 1 : 0;
  $nao_consome_carne = isset($_POST['nao_consome_carne']) ? 1 : 0;
  $nao_consome_frango = isset($_POST['nao_consome_frango']) ? 1 : 0;
  $nao_consome_peixe = isset($_POST['nao_consome_peixe']) ? 1 : 0;
  $nao_consome_ovo = isset($_POST['nao_consome_ovo']) ? 1 : 0;
  $atividade_fisica = isset($_POST['atividade_fisica']) ? 1 : 0;
  $tipo_atividade = mysqli_real_escape_string($conexao, trim($_POST['tipo_atividade']));
  $frequencia_atividade = mysqli_real_escape_string($conexao, trim($_POST['frequencia_atividade']));
  $observacoes = mysqli_real_escape_string($conexao, trim($_POST['observacoes']));
  $auriculoterapia_constipacao = isset($_POST['auriculoterapia_constipacao']) ? 1 : 0;
  $auriculoterapia_ansiedade = isset($_POST['auriculoterapia_ansiedade']) ? 1 : 0;
  $auriculoterapia_insonia = isset($_POST['auriculoterapia_insonia']) ? 1 : 0;
  $auriculoterapia_retencao = isset($_POST['auriculoterapia_retencao']) ? 1 : 0;
  $auriculoterapia_nervosismo = isset($_POST['auriculoterapia_nervosismo']) ? 1 : 0;
  $auriculoterapia_dor_cabeca = isset($_POST['auriculoterapia_dor_cabeca']) ? 1 : 0;


  $sql = "INSERT INTO usuarios (nome, data_nascimento, preferencia_chamado, instagram, celular, ocupacao, idade, como_conheceu,
                      diabetes, hipertensao, colesterol, triglicerides, hipotireoidismo, peso_desejado, nao_consome_leite, nao_consome_frutas, 
                      nao_consome_carne, nao_consome_frango, nao_consome_peixe, nao_consome_ovo, atividade_fisica, tipo_atividade,
                      frequencia_atividade, observacoes, auriculoterapia_constipacao, auriculoterapia_ansiedade, auriculoterapia_insonia, 
                      auriculoterapia_retencao, auriculoterapia_nervosismo, auriculoterapia_dor_cabeca) 
  VALUES ('$nome', '$data_nascimento', '$preferencia_chamado', '$instagram', '$celular', '$ocupacao', '$idade', '$como_conheceu', 
          '$diabetes', '$hipertensao', '$colesterol', '$triglicerides', '$hipotireoidismo', '$peso_desejado', '$nao_consome_leite', 
          '$nao_consome_frutas','$nao_consome_carne', '$nao_consome_frango', '$nao_consome_peixe', '$nao_consome_ovo', '$atividade_fisica',
          '$frequencia_atividade', '$observacoes', '$tipo_atividade', '$auriculoterapia_constipacao','$auriculoterapia_ansiedade', 
          '$auriculoterapia_insonia', '$auriculoterapia_retencao', '$auriculoterapia_nervosismo','$auriculoterapia_dor_cabeca')";

  mysqli_query($conexao, $sql);

  if(mysqli_affected_rows($conexao) > 0) {
    $_SESSION['mensagem'] = "Usuario adicionado com sucesso!";
    header("Location: index.php");
  } else {
    $_SESSION['mensagem'] = "Erro ao adicionar usuario!";
    header("Location: index.php");
  }
}

if(isset($_POST['update_usuario'])) {
  $usuario_id = mysqli_real_escape_string($conexao, $_POST['usuario_id']);

  $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
  $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
  $preferencia_chamado = mysqli_real_escape_string($conexao, trim($_POST['preferencia_chamado']));
  $instagram = mysqli_real_escape_string($conexao, trim($_POST['instagram']));
  $celular = mysqli_real_escape_string($conexao, trim($_POST['celular']));
  $ocupacao = mysqli_real_escape_string($conexao, trim($_POST['ocupacao']));
  $idade = mysqli_real_escape_string($conexao, trim($_POST['idade']));
  $como_conheceu = mysqli_real_escape_string($conexao, trim($_POST['como_conheceu']));
  $diabetes = mysqli_real_escape_string($conexao, trim($_POST['diabetes']));
  $hipertensao = mysqli_real_escape_string($conexao, trim($_POST['hipertensao']));
  $colesterol = mysqli_real_escape_string($conexao, trim($_POST['colesterol']));
  $triglicerides = mysqli_real_escape_string($conexao, trim($_POST['triglicerides']));
  $hipotireoidismo = mysqli_real_escape_string($conexao, trim($_POST['hipotireoidismo']));
  $peso_desejado = mysqli_real_escape_string($conexao, trim($_POST['peso_desejado']));
  $nao_consome_leite = isset($_POST['nao_consome_leite']) ? 1 : 0;
  $nao_consome_frutas = isset($_POST['nao_consome_frutas']) ? 1 : 0;
  $nao_consome_carne = isset($_POST['nao_consome_carne']) ? 1 : 0;
  $nao_consome_frango = isset($_POST['nao_consome_frango']) ? 1 : 0;
  $nao_consome_peixe = isset($_POST['nao_consome_peixe']) ? 1 : 0;
  $nao_consome_ovo = isset($_POST['nao_consome_ovo']) ? 1 : 0;
  $atividade_fisica = isset($_POST['atividade_fisica']) ? 1 : 0;
  $tipo_atividade = mysqli_real_escape_string($conexao, trim($_POST['tipo_atividade']));
  $frequencia_atividade = mysqli_real_escape_string($conexao, trim($_POST['frequencia_atividade']));
  $observacoes = mysqli_real_escape_string($conexao, trim($_POST['observacoes']));
  $auriculoterapia_constipacao = isset($_POST['auriculoterapia_constipacao']) ? 1 : 0;
  $auriculoterapia_ansiedade = isset($_POST['auriculoterapia_ansiedade']) ? 1 : 0;
  $auriculoterapia_insonia = isset($_POST['auriculoterapia_insonia']) ? 1 : 0;
  $auriculoterapia_retencao = isset($_POST['auriculoterapia_retencao']) ? 1 : 0;
  $auriculoterapia_nervosismo = isset($_POST['auriculoterapia_nervosismo']) ? 1 : 0;
  $auriculoterapia_dor_cabeca = isset($_POST['auriculoterapia_dor_cabeca']) ? 1 : 0;

  $sql = "UPDATE usuarios SET nome='$nome', data_nascimento='$data_nascimento' , 
                 preferencia_chamado='$preferencia_chamado', instagram='$instagram', celular='$celular', 
                 ocupacao='$ocupacao', idade='$idade', como_conheceu='$como_conheceu',
                 diabetes='$diabetes', hipertensao='$hipertensao', colesterol='$colesterol',
                 triglicerides='$triglicerides', hipotireoidismo='$hipotireoidismo', peso_desejado='$peso_desejado', 
                 nao_consome_leite='$nao_consome_leite', nao_consome_frutas='$nao_consome_frutas', nao_consome_carne='$nao_consome_carne', 
                 nao_consome_frango='$nao_consome_frango',nao_consome_peixe='$nao_consome_peixe', nao_consome_ovo='$nao_consome_ovo',
                 atividade_fisica='$atividade_fisica', frequencia_atividade='$frequencia_atividade', observacoes='$observacoes',
                 tipo_atividade='$tipo_atividade', auriculoterapia_constipacao='$auriculoterapia_constipacao',
                 auriculoterapia_ansiedade='$auriculoterapia_ansiedade', auriculoterapia_insonia='$auriculoterapia_insonia',
                 auriculoterapia_retencao='$auriculoterapia_retencao', auriculoterapia_nervosismo='$auriculoterapia_nervosismo',
                 auriculoterapia_dor_cabeca='$auriculoterapia_dor_cabeca'";

  $sql .= " WHERE id='$usuario_id'";

  mysqli_query($conexao, $sql);

  // Handle array inputs for the table rows
  $data_consulta = $_POST['data_consulta']; // Array of dates
  $peso = $_POST['peso']; // Array of weights
  $guia = $_POST['guia']; // Array of guides
  $cintura = $_POST['cintura']; // Array of waist measurements
  $quadril = $_POST['quadril']; // Array of hip measurements
  $observacao = $_POST['observacao']; // Array of observations

  // Delete existing rows for this user in the 'consultas' table
  $delete_sql = "DELETE FROM consultas WHERE usuario_id='$usuario_id'";
  if (!mysqli_query($conexao, $delete_sql)) {
      $_SESSION['mensagem'] = "Erro ao limpar dados antigos!";
      header("Location: index.php");
      exit;
  }

  // Insert new rows for the table data
  foreach ($data_consulta as $index => $data) {
      $data = mysqli_real_escape_string($conexao, trim($data));
      $peso_value = mysqli_real_escape_string($conexao, trim($peso[$index]));
      $guia_value = mysqli_real_escape_string($conexao, trim($guia[$index]));
      $cintura_value = mysqli_real_escape_string($conexao, trim($cintura[$index]));
      $quadril_value = mysqli_real_escape_string($conexao, trim($quadril[$index]));
      $observacao_value = mysqli_real_escape_string($conexao, trim($observacao[$index]));

      $insert_sql = "INSERT INTO consultas (usuario_id, data_consulta, peso, guia, cintura, quadril, observacao) 
                     VALUES ('$usuario_id', '$data', '$peso_value', '$guia_value', '$cintura_value', '$quadril_value', '$observacao_value')";
      if (!mysqli_query($conexao, $insert_sql)) {
          $_SESSION['mensagem'] = "Erro ao salvar dados!";
          header("Location: index.php");
          exit;
      }
  }

  $_SESSION['mensagem'] = "Usuario atualizado com sucesso!";
  header("Location: index.php");
  exit;
}

if(isset($_POST['delete_usuario'])) {
  $usuario_id = mysqli_real_escape_string($conexao, $_POST['delete_usuario']);
  
  $sql = "DELETE FROM usuarios WHERE id='$usuario_id'";
  mysqli_query($conexao, $sql);

  if(mysqli_affected_rows($conexao) > 0) {
    $_SESSION['mensagem'] = "Usuario excluído com sucesso!";
    header("Location: index.php");
    exit;
  } else {
    $_SESSION['mensagem'] = "Erro ao excluir usuario!";
    header("Location: index.php");
    exit;
  }


}

?>