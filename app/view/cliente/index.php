<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once '/usr/share/nginx/app/view/css.php' ?>
    <title>Lista cliente</title>
</head>

<body>

    <form id="form">
        <div class="modal fade" id="cadastroCliente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="cadastroClienteLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="cadastroClienteLabel">
                            Cadastro Cliente
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <!-- Nome -->
                            <div class="col-md-6 mt-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                                    <label for="nome">Digite seu nome</label>
                                </div>
                            </div>

                            <!-- Sobrenome -->
                            <div class="col-md-6 mt-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sobre_nome" name="sobre_nome" placeholder="Digite seu sobre nome">
                                    <label for="sobre_nome">Digite seu sobrenome</label>
                                </div>
                            </div>

                            <!-- CPF -->
                            <div class="col-md-6 mt-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF">
                                    <label for="cpf">Digite seu CPF</label>
                                </div>
                            </div>

                            <!-- CEP -->
                            <div class="col-md-6 mt-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu CEP">
                                    <label for="cep">Digite seu CEP</label>
                                </div>
                            </div>

                            <!-- Número -->
                            <div class="col-md-6 mt-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite número do imóvel">
                                    <label for="numero">Digite número do imóvel</label>
                                </div>
                            </div>

                            <!-- Logradouro -->
                            <div class="col-md-6 mt-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Digite número do imóvel">
                                    <label for="logradouro">Digite o logradouro</label>
                                </div>
                            </div>

                            <!-- Bairro -->
                            <div class="col-md-6 mt-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o nome do bairro">
                                    <label for="bairro">Digite o nome do bairro</label>
                                </div>
                            </div>

                            <!-- Cidade -->
                            <div class="col-md-6 mt-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite o nome da cidade">
                                    <label for="cidade">Digite o nome da cidade</label>
                                </div>
                            </div>

                            <!-- UF -->
                            <div class="col-md-6 mt-3">
                                <div class="form-floating">
                                    <select class="form-select" id="uf" name="uf" aria-label="Selecione o estado">
                                        <option value="">Selecione...</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="EX">Estrangeiro</option>
                                    </select>
                                    <label for="uf">Selecione o Estado</label>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer mt-4">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                <i class="fa-solid fa-ban"></i> Cancelar
                            </button>
                            <button id="salvar" type="button" class="btn btn-success">
                                <i class="fa-solid fa-floppy-disk"></i> Salvar
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
                        data-bs-target="#cadastroCliente">
                        <i class="fa-solid fa-user-plus"></i> Novo Cliente
                    </button>
                </div>

                <div class="col-12">
                    <h1><i class="fa-regular fa-user"></i> Clientes Cadastrados</h1>
                    <div class="col-6 mt-3">
                        <div class="form-floating mb-3">
                            <input type="search" class="form-control fs" id="pesquisa" name="pesquisa" placeholder="Pesquisar">
                            <label for="pesquisa"><i class="fa-solid fa-magnifying-glass"></i> Digite seu Nome</label>
                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><i class="fa-solid fa-fingerprint"></i> Código</th>
                                <th><i class="fa-solid fa-user"></i> Nome</th>
                                <th><i class="fa-solid fa-id-card"></i> Sobrenome</th>
                                <th><i class="fa-solid fa-id-card"></i> CPF</th>
                                <th><i class="fa-solid fa-id-card"></i> RG</th>
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
                    </table>
                </div>
            </div>
        </div>
    </form>

    <?php include_once '/usr/share/nginx/app/view/script.php' ?>
    <script defer type="module" src="/js/listacliente.js"></script>

</body>

</html>