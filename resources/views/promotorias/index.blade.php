<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Promotorias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Lista de Promotorias</h1>
        
        <!-- Tabela para exibir os dados -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Município</th>
                    <th>Grupo de Promotoria</th>
                    <th>Promotoria</th>
                    <th>Promotor Titular</th>
                    <th>Promotor Designado</th>
                    <th>Evento</th>
                    <th>Tipo de Evento</th>
                    <th>Período</th>
                </tr>
            </thead>
            <tbody>
                <!-- Iteração para exibir as promotorias -->
                @foreach ($promotorias as $promotoria)
                    <tr>
                        <td>{{ $promotoria->municipio }}</td>
                        <td>{{ $promotoria->grupo_promotoria }}</td>
                        <td>{{ $promotoria->promotoria }}</td>
                        <td>{{ $promotoria->promotor_titular }}</td>
                        <td>{{ $promotoria->promotor_designado ?? 'Não Designado' }}</td>
                        <td>{{ $promotoria->evento }}</td>
                        <td>{{ $promotoria->tipo_evento }}</td>
                        <td>Início: {{ $promotoria->periodo_inicio }} - Fim: {{ $promotoria->periodo_fim }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
