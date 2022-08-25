<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Currículo Paytour</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>


</head>

<body>

    <h2>Envio de Currículo Paytour</h2>

    <div class="container mt-5">
        <form action="{{ route('web.curriculo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="inputNome" class="form-label">Nome Completo</label>
                <input type="text" name="nome" class="form-control" id="nome" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" name="email" class="form-control" id="email" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="##########"
                    required>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cargo Desejado</label>
                <input type="text" name="cargo_desejado" class="form-control" id="cargo_desejado" required>

            </div>
            <div class="mb-3">
                <select class="form-select" name="escolaridade" required>
                    <option selected>Escolaridade</option>
                    <option value="Fundamental">Fundamental</option>
                    <option value="Médio">Médio</option>
                    <option value="Superior">Superior</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Observações</label>
                <textarea class="form-control" name="observacoes" id="observacoes" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label for="arquivo" class="form-label">Escolha o seu arquivo .doc, .docx ou .pdf</label>
                <input class="form-control" name="arquivo" type="file" id="arquivo">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>
