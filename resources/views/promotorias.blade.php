<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Promotorias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Promotorias</h1>
        
        <!-- Tabela para exibir os dados -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome da Promotoria</th>
                    <th>Promotor Titular</th>
                    <th>Grupo de Promotoria</th>
                    <th>Município</th>
                </tr>
            </thead>
            <tbody>
                <!-- Iteração para exibir as promotorias -->
                @foreach ($promotorias as $promotoria)
                    <tr>
                        <td>{{ $promotoria->id }}</td>
                        <td>{{ $promotoria->nome }}</td>
                        <td>{{ $promotoria->promotorTitular->nome }}</td>
                        <td>{{ $promotoria->grupoPromotoria->nome }}</td>
                        <td>{{ $promotoria->grupoPromotoria->municipio->nome }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
