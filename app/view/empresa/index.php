<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once '/usr/share/nginx/app/view/css.php'; ?>

    <title>Lista Empresa</title>
</head>

<body>

    <form id="form">

        <div class="modal fade" id="cadastroEmpresa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="cadastroEmpresaLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="cadastroEmpresaLabel">
                            Cadastro Empresa
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 mt-3">
                                <div class="form-floating mb-3">
                                    <input type="search" class="form-control fs" id="nome" name="nome" placeholder="nome">
                                    <label for="nome"><i class="fa-solid fa-magnifying-glass"></i>
                                        Digite o Nome ou Razão Social da Empresa
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="form-floating mb-3">
                                    <input type="search" class="form-control fs" id="razao_social" name="razao_social" placeholder="razao_social">
                                    <label for="razao_social"><i class="fa-solid fa-magnifying-glass"></i>
                                        Digite o Nome Fantasia da Empresa
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="form-floating mb-3">
                                    <input type="search" class="form-control fs" id="cnpj" name="cnpj" placeholder="cnpj">
                                    <label for="cnpj"><i class="fa-solid fa-magnifying-glass"></i>
                                        Digite o CNPJ da Empresa
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="form-floating mb-3">
                                    <input type="search" class="form-control fs" id="ie" name="ie" placeholder="ie">
                                    <label for="ie"><i class="fa-solid fa-magnifying-glass"></i>
                                        Digite a Inscrição Estadual
                                    </label>
                                </div>
                            </div>
                            <div id="campo_status" class="col-6 mt-3 d-none">
                                <div class="form-floating mb-3">
                                    <select class="form-select fs" id="status" name="status" aria-label="Status da Empresa">
                                        <option value="" selected="">Escolha o status</option>
                                        <option value="true">Ativa</option>
                                        <option value="false">Inativa</option>
                                    </select>
                                    <label for="status">
                                        <i class="fa-solid fa-magnifying-glass"></i> Status da Empresa
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
                    <button type="button" onclick="" class="btn btn-primary btn-sm btn-success" data-bs-toggle="modal"
                        data-bs-target="#cadastroEmpresa"><i class="fa-solid fa-building"></i>
                        Nova Empresa
                    </button>
                </div>
                <div class="col-12">
                    <h1><i class="fa-regular fa-building"></i>
                        Empresas Cadastradas
                    </h1>
                    <div class="col-6 mt-3">
                        <div class="form-floating mb-3">
                            <input type="search" class="form-control fs" id="pesquisa" name="pesquisa" placeholder="Pesquisar">
                            <label for="pesquisa"><i class="fa-solid fa-magnifying-glass"></i>
                                Pesquise pelo Nome ou Razão Social da Empresa
                            </label>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <tbody id="listacliente">
                            <tr>
                                <th><i class="fa-solid fa-fingerprint"></i> Código</th>
                                <th><i class="fa-solid fa-user"></i> Razão Social</th>
                                <th><i class="fa-solid fa-id-card"></i> Nome Fantasia</th>
                                <th><i class="fa-solid fa-id-card"></i> CNPJ</th>
                            </tr>

                            <tr>
                                <td>001</td>
                                <td>Alpha Comércio Ltda</td>
                                <td>Alpha Store</td>
                                <td>12.345.678/0001-90</td>
                            </tr>

                            <tr>
                                <td>002</td>
                                <td>Beta Indústria e Serviços</td>
                                <td>BetaTech</td>
                                <td>98.765.432/0001-12</td>
                            </tr>

                            <tr>
                                <td>003</td>
                                <td>Gamma Soluções Empresariais</td>
                                <td>Gamma Solutions</td>
                                <td>56.789.123/0001-45</td>
                            </tr>

                            <tr>
                                <td>004</td>
                                <td>Delta Comércio Digital</td>
                                <td>Delta Web</td>
                                <td>32.165.498/0001-78</td>
                            </tr>

                            <tr>
                                <td>005</td>
                                <td>Omega Consultoria e Treinamentos</td>
                                <td>Omega Group</td>
                                <td>15.975.348/0001-56</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </form>
    <?php include_once '/usr/share/nginx/app/view/script.php' ?>

</body>

</html>
