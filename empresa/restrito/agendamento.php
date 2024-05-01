<?php include "../validar.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agendamento de Consultas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Agendamento de Consultas</h1>
            <form action="agendamento_script.php" method="POST">
                <div class="form-group">
                    <label for="paciente">Paciente</label>
                    <input type="text" class="form-control" name="paciente" required>
                </div>
                <div class="form-group">
                    <label for="medico">Médico</label>
                    <select class="form-control" name="medico" required>
                        <option value="">Selecione o médico</option>
                        <option value="1">Dr. José Silva</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tipo_consulta">Tipo de Consulta</label>
                    <select class="form-control" name="tipo_consulta" required>
                        <option value="">Selecione o tipo de consulta</option>
                        <option value="Rotina">Rotina</option>
                        <option value="Especialista">Especialista</option>
                        <option value="Exame">Exame</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="data_consulta">Data da Consulta</label>
                    <input type="date" class="form-control" name="data_consulta" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
            <a href="index.php" class="btn btn-info">Voltar para o início</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
