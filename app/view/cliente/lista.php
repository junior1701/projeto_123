<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Clientes</title>
</head>

<body>
<form id="form">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mt-3 mb-3">
                <button type="button" onclick="" class="btn btn-primary btn-sm btn-success" data-bs-toggle="modal"
                    data-bs-target="#cadastroCliente"><i class="fa-solid fa-user-plus"></i>
                    Novo Cliente
                </button>
            </div>
            <div class="col-12">
                <h1><i class="fa-regular fa-user"></i>
                    Clientes Cadastrados
                </h1>
                <div class="col-6 mt-3">
                    <div class="form-floating mb-3">
                        <input type="search" class="form-control fs" id="pesquisa" name="pesquisa" placeholder="Pesquisar">
                        <label for="pesquisa"><i class="fa-solid fa-magnifying-glass"></i>
                            Digite seu Nome
                        </label>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><i class="fa-solid fa-fingerprint"></i>Código</th>
                            <th><i class="fa-solid fa-user"></i>Nome</th>
                            <th><i class="fa-solid fa-id-card"></i>Sobrenome</th>
                            <th><i class="fa-solid fa-id-card"></i>CPF</th>
                            <th><i class="fa-solid fa-id-card"></i>RG</th>

                        </tr>
                    </thead>
                    <tbody id="listacliente">
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>CPF</th>
                            <th>RG</th>
                        </tr>

                        <tr>
                            <td>001</td>
                            <td>Lucas</td>
                            <td>Silva</td>
                            <td>123.456.789-00</td>
                            <td>12.345.678-9</td>
                        </tr>

                        <tr>
                            <td>002</td>
                            <td>Mariana</td>
                            <td>Souza</td>
                            <td>987.654.321-00</td>
                            <td>98.765.432-1</td>
                        </tr>

                        <tr>
                            <td>003</td>
                            <td>Felipe</td>
                            <td>Almeida</td>
                            <td>456.789.123-00</td>
                            <td>45.678.912-3</td>
                        </tr>

                        <tr>
                            <td>004</td>
                            <td>Ana</td>
                            <td>Carvalho</td>
                            <td>321.654.987-00</td>
                            <td>32.165.498-7</td>
                        </tr>

                        <tr>
                            <td>005</td>
                            <td>João</td>
                            <td>Pereira</td>
                            <td>159.753.486-00</td>
                            <td>15.975.348-6</td>
                        </tr>
                    </tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>

    <?php include_once '/usr/share/nginx/app/view/script.php' ?>

</body>

</html>