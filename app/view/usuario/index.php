<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuario</title>
    <?php include_once '/usr/share/nginx/app/view/css.php'; ?>

</head>

<body>


    <form id="form">

        <div class="modal fade" id="cadastroUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="cadastroUsuarioLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="cadastroUsuarioLabel">
                            Cadastro Usuario
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 mt-3">
                                <div class="form-floating mb-3">
                                    <input type="search" class="form-control fs" id="nome" name="nome" placeholder="nome">
                                    <label for="nome"><i class="fa-solid fa-magnifying-glass"></i>
                                        Digite seu Nome
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="form-floating mb-3">
                                    <input type="search" class="form-control fs" id="sobrenome" name="sobrenome" placeholder="sobrenome">
                                    <label for="sobrenome"><i class="fa-solid fa-magnifying-glass"></i>
                                        Digite seu sobrenome
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="form-floating mb-3">
                                    <input type="search" class="form-control fs" id="cpf" name="cpf" placeholder="cpf">
                                    <label for="cpf"><i class="fa-solid fa-magnifying-glass"></i>
                                        Digite seu CPF
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="form-floating mb-3">
                                    <input type="search" class="form-control fs" id="rg" name="rg" placeholder="rg">
                                    <label for="rg"><i class="fa-solid fa-magnifying-glass"></i>
                                        Digite seu Rg
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                <i class="fa-solid fa-ban"></i>
                                Cancelar
                            </button>
                            <button id="salvarRegistro" type="button" class="btn btn-success">
                                <i class="fa-solid fa-floppy-disk"></i>
                                Salvar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 mt-3 mb-3">
                    <button type="button" class="btn btn-primary btn-sm btn-success" data-bs-toggle="modal"
                        data-bs-target="#cadastroUsuario"><i class="fa-solid fa-user-plus"></i>
                        Novo Usuario
                    </button>
                </div>
                <div class="col-12">
                    <h1><i class="fa-regular fa-user"></i>
                        Usuarios Cadastrados
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
                                <th><i class="fa-solid fa-user"></i>Sobrenome</th>
                                <th><i class="fa-solid fa-id-card"></i>CPF</th>
                                <th><i class="fa-solid fa-id-card"></i>Rg</th>
                            </tr>
                        </thead>
                        <tbody id="listacliente">
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
    <?php include_once '/usr/share/nginx/app/view/script.php'; ?>

</body>

</html>