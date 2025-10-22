<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Sistema de Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    body {
      background-color: #f1f3f5;
    }

    .dashboard-card {
      background: white;
      border: none;
      border-radius: 10px;
      padding: 40px 30px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
    }

    .dashboard-icon {
      font-size: 4rem;
      color: #0d6efd;
    }

    .btn-primary {
      padding: 10px 20px;
      font-weight: 500;
      border-radius: 5px;
    }

    .text-muted {
      font-size: 1rem;
    }
  </style>
</head>

<body>
  <div class="container py-4">
    <?php include_once 'menu.php' ?>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="dashboard-card text-center mt-4">

          <div class="dashboard-icon mb-3">
            <i class="bi bi-person-check"></i>
          </div>

          <h2 class="mb-3">Bem-vindo de volta!</h2>
          <p class="text-muted mb-4">
            Este é o seu painel de controle. Acesse os módulos do sistema pelo menu acima.<br>
            Gerencie clientes, visualize relatórios e acompanhe suas atividades recentes.
          </p>

          <a href="clientes.php" class="btn btn-primary">
            <i class="bi bi-people-fill me-2"></i> Ver Clientes
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
