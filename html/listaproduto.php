<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista Produto</title>
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link href="/css/cdn.css" rel="stylesheet">
</head>

<body>

  <form id="form">
    <input type="hidden" id="id_produto" name="id_produto">
    <input type="hidden" id="acao" name="acao">

    <div class="modal fade" id="excluirRegistroProduto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="excluirRegistroProdutoLabel" aria-hidden="true">
      <div class="modal-dialog modal-rm ">
        <div class="modal-content">
          <div class="modal-header">
            <!-- TITULO MODAL -->
            <h1 class="modal-title fs-5" id="excluirRegistroClienteLabel">
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
    </div>

    <div class="modal fade" id="cadastroProduto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="cadastroClienteLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="cadastroProdutoLabel">
              Cadastro Produto
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
                  <input type="search" class="form-control fs" id="compra" name="compra" placeholder="compra">
                  <label for="compra"><i class="fa-solid fa-magnifying-glass"></i>
                    Digite o valor da compra
                  </label>
                </div>
              </div>
              <div class="col-6 mt-3">
                <div class="form-floating mb-3">
                  <input type="search" class="form-control fs" id="venda" name="venda" placeholder="venda">
                  <label for="venda"><i class="fa-solid fa-magnifying-glass"></i>
                    Digite o valor da venda
                  </label>
                </div>
              </div>
              <div class="col-6 mt-3">
                <div class="form-floating mb-3">
                  <input type="search" class="form-control fs" id="grupo" name="grupo" placeholder="grupo">
                  <label for="grupo"><i class="fa-solid fa-magnifying-glass"></i>
                    Digite o grupo
                  </label>
                </div>
              </div>
              <div class="col-6 mt-3">
                <div class="form-floating mb-3">
                  <input type="search" class="form-control fs" id="marca" name="marca" placeholder="marca">
                  <label for="marca"><i class="fa-solid fa-magnifying-glass"></i>
                    Digite a marca do produto
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
            data-bs-target="#cadastroProduto"><i class="fa-solid fa-user-plus"></i>
            Novo Produto
          </button>
        </div>
        <div class="col-12">
          <h1><i class="fa-regular fa-user"></i>
            Produtos  Cadastrados
          </h1>
          <div class="col-6 mt-3">
            <div class="form-floating mb-3">
              <input type="search" class="form-control fs" id="pesquisa" name="pesquisa" placeholder="Pesquisar">
              <label for="pesquisa"><i class="fa-solid fa-magnifying-glass"></i>
                Digite o nome do produto
              </label>
            </div>
          </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th><i class="fa-solid fa-fingerprint"></i>Código</th>
                <th><i class="fa-solid fa-user"></i>Nome do Produto</th>
                <th><i class="fa-solid fa-id-card"></i>Valor de compra</th>
                <th><i class="fa-solid fa-id-card"></i>Valor de venda</th>
                <th><i class="fa-solid fa-id-card"></i>Grupo</th>
                <th><i class="fa-solid fa-user-check"></i>Marca</th>
                <th><i class="fa-solid fa-wrench"></i>Ação</th>
              </tr>
            </thead>
            <tbody id="listaproduto">
              <tr>
                <td>Código</td>
                <td>Nome Completo</td>
                <td>CPF</td>
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
  <script src="/js/listaproduto.js"></script>
</body>

</html>