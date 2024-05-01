<?php include "../validar.php"; ?>
<?php include "conexao.php"; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paciente = $_POST['paciente'];
    $medico = $_POST['medico'];
    $tipo_consulta = $_POST['tipo_consulta'];
    $data_consulta = $_POST['data_consulta'];

    $sql = "INSERT INTO consultas (paciente_id, medico_id, tipo_consulta, data_consulta) 
            VALUES ('$paciente', '$medico', '$tipo_consulta', '$data_consulta')";
    if (mysqli_query($conn, $sql)) {
        mensagem("Consulta agendada com sucesso!", 'success');
    } else {
        mensagem("Erro ao agendar consulta", 'danger');
    }
}
?>
