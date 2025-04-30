<?php
global $conexao;
session_start();
require('conexao.php');

if (isset($_POST['create_usuario'])) {
    try {
        $sql = "INSERT INTO usuarios (nome, data_nascimento, preferencia_chamado, instagram, celular, ocupacao, idade, como_conheceu,
                      diabetes, hipertensao, colesterol, triglicerides, hipotireoidismo, peso_desejado, nao_consome_leite, nao_consome_frutas, 
                      nao_consome_carne, nao_consome_frango, nao_consome_peixe, nao_consome_ovo, atividade_fisica, tipo_atividade,
                      frequencia_atividade, observacoes, auriculoterapia_constipacao, auriculoterapia_ansiedade, auriculoterapia_insonia, 
                      auriculoterapia_retencao, auriculoterapia_nervosismo, auriculoterapia_dor_cabeca) 
                VALUES (:nome, :data_nascimento, :preferencia_chamado, :instagram, :celular, :ocupacao, :idade, :como_conheceu, 
                        :diabetes, :hipertensao, :colesterol, :triglicerides, :hipotireoidismo, :peso_desejado, :nao_consome_leite, 
                        :nao_consome_frutas, :nao_consome_carne, :nao_consome_frango, :nao_consome_peixe, :nao_consome_ovo, :atividade_fisica,
                        :tipo_atividade, :frequencia_atividade, :observacoes, :auriculoterapia_constipacao, :auriculoterapia_ansiedade, 
                        :auriculoterapia_insonia, :auriculoterapia_retencao, :auriculoterapia_nervosismo, :auriculoterapia_dor_cabeca)";

        $stmt = $conexao->prepare($sql);

        $stmt->execute([
            ':nome' => $_POST['nome'],
            ':data_nascimento' => $_POST['data_nascimento'],
            ':preferencia_chamado' => $_POST['preferencia_chamado'],
            ':instagram' => $_POST['instagram'],
            ':celular' => $_POST['celular'],
            ':ocupacao' => $_POST['ocupacao'],
            ':idade' => $_POST['idade'],
            ':como_conheceu' => $_POST['como_conheceu'],
            ':diabetes' => $_POST['diabetes'],
            ':hipertensao' => $_POST['hipertensao'],
            ':colesterol' => $_POST['colesterol'],
            ':triglicerides' => $_POST['triglicerides'],
            ':hipotireoidismo' => $_POST['hipotireoidismo'],
            ':peso_desejado' => $_POST['peso_desejado'],
            ':nao_consome_leite' => isset($_POST['nao_consome_leite']) ? 1 : 0,
            ':nao_consome_frutas' => isset($_POST['nao_consome_frutas']) ? 1 : 0,
            ':nao_consome_carne' => isset($_POST['nao_consome_carne']) ? 1 : 0,
            ':nao_consome_frango' => isset($_POST['nao_consome_frango']) ? 1 : 0,
            ':nao_consome_peixe' => isset($_POST['nao_consome_peixe']) ? 1 : 0,
            ':nao_consome_ovo' => isset($_POST['nao_consome_ovo']) ? 1 : 0,
            ':atividade_fisica' => isset($_POST['atividade_fisica']) ? 1 : 0,
            ':tipo_atividade' => $_POST['tipo_atividade'],
            ':frequencia_atividade' => $_POST['frequencia_atividade'],
            ':observacoes' => $_POST['observacoes'],
            ':auriculoterapia_constipacao' => isset($_POST['auriculoterapia_constipacao']) ? 1 : 0,
            ':auriculoterapia_ansiedade' => isset($_POST['auriculoterapia_ansiedade']) ? 1 : 0,
            ':auriculoterapia_insonia' => isset($_POST['auriculoterapia_insonia']) ? 1 : 0,
            ':auriculoterapia_retencao' => isset($_POST['auriculoterapia_retencao']) ? 1 : 0,
            ':auriculoterapia_nervosismo' => isset($_POST['auriculoterapia_nervosismo']) ? 1 : 0,
            ':auriculoterapia_dor_cabeca' => isset($_POST['auriculoterapia_dor_cabeca']) ? 1 : 0,
        ]);

        $_SESSION['mensagem'] = "Usuario adicionado com sucesso!";
        header("Location: home.php");
        exit();
    } catch (PDOException $e) {
        $_SESSION['mensagem'] = "Erro ao adicionar usuario: " . $e->getMessage();
        header("Location: home.php");
        exit();
    }
}

if (isset($_POST['update_usuario'])) {
    try {
        $usuario_id = $_POST['usuario_id'];

        // Update the main user data
        $sql = "UPDATE usuarios SET nome = :nome, data_nascimento = :data_nascimento, preferencia_chamado = :preferencia_chamado, 
                instagram = :instagram, celular = :celular, ocupacao = :ocupacao, idade = :idade, como_conheceu = :como_conheceu, 
                diabetes = :diabetes, hipertensao = :hipertensao, colesterol = :colesterol, triglicerides = :triglicerides, 
                hipotireoidismo = :hipotireoidismo, peso_desejado = :peso_desejado, nao_consome_leite = :nao_consome_leite, 
                nao_consome_frutas = :nao_consome_frutas, nao_consome_carne = :nao_consome_carne, nao_consome_frango = :nao_consome_frango, 
                nao_consome_peixe = :nao_consome_peixe, nao_consome_ovo = :nao_consome_ovo, atividade_fisica = :atividade_fisica, 
                tipo_atividade = :tipo_atividade, frequencia_atividade = :frequencia_atividade, observacoes = :observacoes, 
                auriculoterapia_constipacao = :auriculoterapia_constipacao, auriculoterapia_ansiedade = :auriculoterapia_ansiedade, 
                auriculoterapia_insonia = :auriculoterapia_insonia, auriculoterapia_retencao = :auriculoterapia_retencao, 
                auriculoterapia_nervosismo = :auriculoterapia_nervosismo, auriculoterapia_dor_cabeca = :auriculoterapia_dor_cabeca 
                WHERE id = :id";

        $stmt = $conexao->prepare($sql);

        $stmt->execute([
            ':id' => $usuario_id,
            ':nome' => $_POST['nome'],
            ':data_nascimento' => $_POST['data_nascimento'],
            ':preferencia_chamado' => $_POST['preferencia_chamado'],
            ':instagram' => $_POST['instagram'],
            ':celular' => $_POST['celular'],
            ':ocupacao' => $_POST['ocupacao'],
            ':idade' => $_POST['idade'],
            ':como_conheceu' => $_POST['como_conheceu'],
            ':diabetes' => $_POST['diabetes'],
            ':hipertensao' => $_POST['hipertensao'],
            ':colesterol' => $_POST['colesterol'],
            ':triglicerides' => $_POST['triglicerides'],
            ':hipotireoidismo' => $_POST['hipotireoidismo'],
            ':peso_desejado' => $_POST['peso_desejado'],
            ':nao_consome_leite' => isset($_POST['nao_consome_leite']) ? 1 : 0,
            ':nao_consome_frutas' => isset($_POST['nao_consome_frutas']) ? 1 : 0,
            ':nao_consome_carne' => isset($_POST['nao_consome_carne']) ? 1 : 0,
            ':nao_consome_frango' => isset($_POST['nao_consome_frango']) ? 1 : 0,
            ':nao_consome_peixe' => isset($_POST['nao_consome_peixe']) ? 1 : 0,
            ':nao_consome_ovo' => isset($_POST['nao_consome_ovo']) ? 1 : 0,
            ':atividade_fisica' => isset($_POST['atividade_fisica']) ? 1 : 0,
            ':tipo_atividade' => $_POST['tipo_atividade'],
            ':frequencia_atividade' => $_POST['frequencia_atividade'],
            ':observacoes' => $_POST['observacoes'],
            ':auriculoterapia_constipacao' => isset($_POST['auriculoterapia_constipacao']) ? 1 : 0,
            ':auriculoterapia_ansiedade' => isset($_POST['auriculoterapia_ansiedade']) ? 1 : 0,
            ':auriculoterapia_insonia' => isset($_POST['auriculoterapia_insonia']) ? 1 : 0,
            ':auriculoterapia_retencao' => isset($_POST['auriculoterapia_retencao']) ? 1 : 0,
            ':auriculoterapia_nervosismo' => isset($_POST['auriculoterapia_nervosismo']) ? 1 : 0,
            ':auriculoterapia_dor_cabeca' => isset($_POST['auriculoterapia_dor_cabeca']) ? 1 : 0,
        ]);

        // Delete existing rows for this user in the 'consultas' table
        $delete_sql = "DELETE FROM consultas WHERE usuario_id = :usuario_id";
        $delete_stmt = $conexao->prepare($delete_sql);
        $delete_stmt->execute([':usuario_id' => $usuario_id]);

        // Insert new rows for the table data
        $data_consulta = $_POST['data_consulta']; // Array of dates
        $peso = $_POST['peso']; // Array of weights
        $guia = $_POST['guia']; // Array of guides
        $cintura = $_POST['cintura']; // Array of waist measurements
        $quadril = $_POST['quadril']; // Array of hip measurements
        $observacao = $_POST['observacao']; // Array of observations

        $insert_sql = "INSERT INTO consultas (usuario_id, data_consulta, peso, guia, cintura, quadril, observacao) 
                       VALUES (:usuario_id, :data_consulta, :peso, :guia, :cintura, :quadril, :observacao)";
        $insert_stmt = $conexao->prepare($insert_sql);

        foreach ($data_consulta as $index => $data) {
            $insert_stmt->execute([
                ':usuario_id' => $usuario_id,
                ':data_consulta' => $data,
                ':peso' => $peso[$index],
                ':guia' => $guia[$index],
                ':cintura' => $cintura[$index],
                ':quadril' => $quadril[$index],
                ':observacao' => $observacao[$index],
            ]);
        }

        $_SESSION['mensagem'] = "Usuario atualizado com sucesso!";
        header("Location: home.php");
        exit();
    } catch (PDOException $e) {
        $_SESSION['mensagem'] = "Erro ao atualizar usuario: " . $e->getMessage();
        header("Location: home.php");
        exit();
    }
}

if (isset($_POST['delete_usuario'])) {
    try {
        $usuario_id = $_POST['delete_usuario'];

        $stmt = $conexao->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->execute([':id' => $usuario_id]);

        if ($stmt->rowCount() > 0) {
            $_SESSION['mensagem'] = "Usuario excluído com sucesso!";
        } else {
            $_SESSION['mensagem'] = "Erro ao excluir usuario!";
        }
        header("Location: home.php");
        exit();
    } catch (PDOException $e) {
        $_SESSION['mensagem'] = "Erro ao excluir usuario: " . $e->getMessage();
        header("Location: home.php");
        exit();
    }
}
?>