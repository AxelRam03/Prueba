<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Bitácoras</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
        <img src="Imdec.png" alt="Logo" class="logo me-2" />
        Bitácoras
      </a>
    </div>
  </nav>

  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>Bitácoras</h2>
      <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#crearBitacora">+ Nueva</button>
    </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Título</th>
          <th>Contenido</th>
          <th>Fecha</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody id="tablaBitacoras">
        <tr>
          <td>Reunión inicial</td>
          <td>Se discutió el cronograma general...</td>
          <td>2025-06-01</td>
          <td>
            <button class="btn btn-sm btn-outline-warning">Editar</button>
            <button class="btn btn-sm btn-outline-danger">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Modal para crear nueva bitácora -->
  <div class="modal fade" id="crearBitacora" tabindex="-1" aria-labelledby="crearBitacoraLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="crearBitacoraLabel">Nueva Bitácora</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <form id="formBitacora">
            <div class="mb-3">
              <label for="titulo" class="form-label">Título</label>
              <input type="text" class="form-control" id="titulo" required />
            </div>
            <div class="mb-3">
              <label for="contenido" class="form-label">Contenido</label>
              <textarea class="form-control" id="contenido" rows="4" required></textarea>
            </div>
            <div class="mb-3">
              <label for="fecha" class="form-label">Fecha</label>
              <input type="date" class="form-control" id="fecha" required />
            </div>
            <button type="submit" class="btn btn-custom w-100">Guardar</button>
            <button type="button" class="btn btn-secondary w-100 mt-2" data-bs-dismiss="modal">Cancelar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS y script para manejar el formulario -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById("formBitacora").addEventListener("submit", function (e) {
      e.preventDefault();

      const titulo = document.getElementById("titulo").value;
      const contenido = document.getElementById("contenido").value;
      const fecha = document.getElementById("fecha").value;

      const nuevaFila = `
        <tr>
          <td>${titulo}</td>
          <td>${contenido}</td>
          <td>${fecha}</td>
          <td>
            <button class="btn btn-sm btn-outline-warning">Editar</button>
            <button class="btn btn-sm btn-outline-danger">Eliminar</button>
          </td>
        </tr>
      `;
      document.getElementById("tablaBitacoras").innerHTML += nuevaFila;

      // Limpiar el formulario
      this.reset();

      // Cerrar el modal
      const modal = bootstrap.Modal.getInstance(document.getElementById("crearBitacora"));
      modal.hide();
    });
  </script>
</body>
</html>
