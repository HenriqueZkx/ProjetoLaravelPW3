<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="grid text">
        <div class="container text">
            <div class=" row align-items-start">
                <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">

                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>



                <div class="row justify-content-start">
                    <div class="col">
                        <form method="POST" action="/adicionarCliente">
                            @csrf
                            <label for="nameinput" class="form-label">Nome</label>
                            <input type="text" class="form-control" name='Nome' placeholder="" required>

                            <br>

                            <label for="adressinput" class="form-label">Endereço</label>
                            <input type="text" class="form-control" name="Endereco" placeholder="" required>

                            <br>

                            <label for="bairroiput" class="form-label">Bairro</label>
                            <input type="text" class="form-control" name="Bairro" placeholder="" required>

                            <br>

                            <label for="cepinput" class="form-label">CEP</label>
                            <input type="text" class="form-control" name="CEP" placeholder="" required>

                            <br>

                            <label for="cidadeiput" class="form-label">Cidade</label>
                            <input type="text" class="form-control" name="Cidade" placeholder="" required>


                            <br>

                            <label for="estadoiput" class="form-label">Estado</label>
                            <input type="text" class="form-control" name="Estado" placeholder="" required>
                    </div>
                </div>

                <div class="row justify-content-start">
                    <div class="col">
                        <input class="btn btn-outline-primary" type="submit" value="Enviar" />
                        </form>
                    </div>
                </div>
            </div>
</body>

</html>