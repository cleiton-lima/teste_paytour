<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>
<body>
    'nome',
    'email',
    'telefone',
    'cargo_desejado',
    'escolariade',
    'observacoes',
    'arquivo',
    'data_cadastro',

    <div class="container mt-5">
        <form action="{{ route('web.curriculo.store') }}">
            <div class="mb-3">
                <label for="inputNome" class="form-label">Nome Completo</label>
                <input type="name" class="form-control">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefone </label>
                <input type="tel" class="form-control" id="telefone" aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    </div>


</body>
</html>
