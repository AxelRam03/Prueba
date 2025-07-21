<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cronogramas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fffaf2;
      color: #7B767A;
    }
    .btn-custom {
      background-color: #E3268B;
      border-color: #E3268B;
      color: white;
    }
    .btn-custom:hover {
      background-color: #c61b74;
      border-color: #c61b74;
    }
    .logo {
      height: 50px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-light bg-light shadow mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="Imdec.png" alt="Logo" class="logo me-2">
        Cronogramas
      </a>
    </div>
  </nav>

  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>Cronogramas del Usuario</h2>
      <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#crearCronograma">+ Nuevo</button>
    </div>

    <!-- Ejemplo de tabla de cronogramas -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Título</th>
          <th>Descripción</th>
          <th>Inicio</th>
          <th>Fin</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Plan Proyecto A</td>
          <td>Organización de tareas del Proyecto A</td>
          <td>2025-06-01</td>
          <td>2025-06-30</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Ver</button>
            <button class="btn btn-sm btn-outline-danger">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Modal para crear nuevo cronograma -->
  <div class="modal fade" id="crearCronograma" tabindex="-1" aria-labelledby="crearCronogramaLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Nuevo Cronograma</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="titulo" class="form-label">Título</label>
              <input type="text" class="form-control" id="titulo">
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción</label>
              <textarea class="form-control" id="descripcion"></textarea>
            </div>
            <div class="mb-3">
              <label for="fechaInicio" class="form-label">Fecha de inicio</label>
              <input type="date" class="form-control" id="fechaInicio">
            </div>
            <div class="mb-3">
              <label for="fechaFin" class="form-label">Fecha de fin</label>
              <input type="date" class="form-control" id="fechaFin">
            </div>
            <button type="submit" class="btn btn-custom w-100">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
