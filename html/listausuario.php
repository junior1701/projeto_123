<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuario</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/cdn.css" rel="stylesheet">
</head>

<body>
    

    <form id="form">
        <input type="hidden" id="id_usuario" name="id_usuario">
        <input type="hidden" id="acao" name="acao">

        <div class="modal fade" id="excluirRegistroUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="excluirRegistroUsuarioLabel" aria-hidden="true">
            <div class="modal-dialog modal-rm ">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- TITULO MODAL -->
                        <h1 class="modal-title fs-5" id="excluirRegistroUsurarioLabel">
                            Atenção
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- CORPO MODAL -->
                    <div class="modal-body">
                        Deseja realmente excluir este cliente?
                    </div>
                    <!-- BOTOES -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                            <i class="fa-solid fa-ban"></i>
                            Cancelar
                        </button>
                        <button id="excluirRegistro" type="button" id="excluirRegistro" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                            Excluir
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
                                <div class="col-6 mt-3">
                                    <div class="form-floating mb-3">
                                        <input type="search" class="form-control fs" id="senha" name="senha" placeholder="senha">
                                        <label for="senha"><i class="fa-solid fa-magnifying-glass"></i>
                                            Digite sua Senha
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
                                    <th><i class="fa-solid fa-wrench"></i>Ação</th>
                                </tr>
                            </thead>
                            <tbody id="listausuario">
                                <tr>
                                    <td>Código</td>
                                    <td>Nome</td>
                                    <td>Sbrenome</td>
                                    <td>CPF</td>
                                    <td>RG</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm btn-warning"><i
                                                class="fa-solid fa-pen"></i>Editar</button>
                                        <button type="button" class="btn btn-danger btn-sm btn-danger"><i
                                                class="fa-solid fa-trash"></i>Excluir</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
        <script src="/js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="/js/cdn.js"></script>
        <script src="/js/listausuario.js"></script>
</body>

</html>