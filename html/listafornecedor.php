<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista cliente</title>
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link href="/css/cdn.css" rel="stylesheet">
</head>

<body>

  <form id="form">
    <?php include_once 'menu.php' ?>
    <input type="hidden" id="id_fornecedor" name="id_fornecedor">
    <input type="hidden" id="acao" name="acao">

    <div class="modal fade" id="excluirRegistroFornecedor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="excluirRegistrofornecedorLabel" aria-hidden="true">
      <div class="modal-dialog modal-rm ">
        <div class="modal-content">
          <div class="modal-header">
            <!-- TITULO MODAL -->
            <h1 class="modal-title fs-5" id="excluirRegistroFornecedorLabel">
              Atenção
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- CORPO MODAL -->
          <div class="modal-body">
            Deseja realmente excluir este Fornecedor?
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
    </div>

    <div class="modal fade" id="cadastroFornecedor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="cadastroFornecedorLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="cadastroFornecedorLabel">
              Cadastro Cliente
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-6 mt-3">
                <div class="form-floating mb-3">
                  <input type="search" class="form-control fs" id="nome" name="nome" placeholder="nome">
                  <label for="nome"><i class="fa-solid fa-magnifying-glass"></i>
                    Digite seu Nome ou Razão Social
                  </label>
                </div>
              </div>
              <div class="col-6 mt-3">
                <div class="form-floating mb-3">
                  <input type="search" class="form-control fs" id="razao_social" name="razao_social" placeholder="razao_social">
                  <label for="razao_social"><i class="fa-solid fa-magnifying-glass"></i>
                    Digite seu sobrenome ou Nome Fantasia
                  </label>
                </div>
              </div>
              <div class="col-6 mt-3">
                <div class="form-floating mb-3">
                  <input type="search" class="form-control fs" id="cnpj" name="cnpj" placeholder="cnpj">
                  <label for="cnpj"><i class="fa-solid fa-magnifying-glass"></i>
                    Digite seu CPF ou CNPJ
                  </label>
                </div>
              </div>
              <div class="col-6 mt-3">
                <div class="form-floating mb-3">
                  <input type="search" class="form-control fs" id="ie" name="ie" placeholder="ie">
                  <label for="ie"><i class="fa-solid fa-magnifying-glass"></i>
                    Digite seu RG ou Inscrição Estadual
                  </label>
                </div>
              </div>
              <div id="campo_status" class="col-6 mt-3 d-none">
                <div class="form-floating mb-3">
                  <select class="form-select fs" id="status" name="status" aria-label="Status do Cliente">
                    <option value="" selected="">Escolha o status</option>
                    <option value="true">Ativo</option>
                    <option value="false">Inativo</option>
                  </select>
                  <label for="status"><svg class="svg-inline--fa fa-magnifying-glass" data-prefix="fas" data-icon="magnifying-glass" role="img" viewBox="0 0 512 512" aria-hidden="true" data-fa-i2svg="">
                      <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376C296.3 401.1 253.9 416 208 416 93.1 416 0 322.9 0 208S93.1 0 208 0 416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                    </svg><!-- <i class="fa-solid fa-magnifying-glass"></i> Font Awesome fontawesome.com --> Status do Cliente</label>
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
            data-bs-target="#cadastroFornecedor"><i class="fa-solid fa-user-plus"></i>
            Novo Fornecedor
          </button>
        </div>
        <div class="col-12">
          <h1><i class="fa-regular fa-user"></i>
            Fornecedores Cadastrados
          </h1>
          <div class="col-6 mt-3">
            <div class="form-floating mb-3">
              <input type="search" class="form-control fs" id="pesquisa" name="pesquisa" placeholder="Pesquisar">
              <label for="pesquisa"><i class="fa-solid fa-magnifying-glass"></i>
                Digite seu Nome ou Razão Social
              </label>
            </div>
          </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th><i class="fa-solid fa-fingerprint"></i>Código</th>
                <th><i class="fa-solid fa-user"></i>Razão Social</th>
                <th><i class="fa-solid fa-id-card"></i>Nome Fantasia</th>
                <th><i class="fa-solid fa-id-card"></i>CNPJ</th>
                <th><i class="fa-solid fa-id-card"></i>IE</th>
                <th><i class="fa-solid fa-circle-user"></i>Status</th>
                <th><i class="fa-solid fa-wrench"></i>Ação</th>
              </tr>
            </thead>
            <tbody id="listafornecedor"></tbody>
          </table>
        </div>
      </div>
    </div>
  </form>
  <script src="/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="/js/cdn.js"></script>
  <script src="/js/listaFornecedor.js"></script>
</body>

</html>