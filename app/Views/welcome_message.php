<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interfaz de Login</title>
  
  <!-- Vinculando Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Estilos personalizados -->
  <style>
    .login-container {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgb(65, 91, 117);
    }

    .login-card {
      width: 100%;
      max-width: 400px;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(168, 170, 152, 0.1);
      background-color: rgb(244, 244, 219);
    }

    .login-card h2 {
      margin-bottom: 20px;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Contenedor principal de la interfaz de login -->
  <div class="login-container">
    <div class="login-card">
      <h2>Iniciar sesión</h2>
      
      <!-- Formulario de login -->
      <form>
        <!-- Campo de correo electrónico -->
        <div class="mb-3">
          <label for="email" class="form-label">Usuario</label>
          <input type="email" class="form-control" id="email" placeholder="Introduce tu correo electrónico" required>
        </div>
        
        <!-- Campo de contraseña -->
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña" required>
        </div>

        <!-- Botón de inicio de sesión que redirige al formulario -->
        <a href="Formularios" class="btn btn-primary" role="button">Formulario</a>
        
        <!-- Enlace para recuperar la contraseña -->
        <div class="mt-3 text-center">
          <a href="#">¿Olvidaste tu contraseña?</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Vinculando Bootstrap JS y Popper.js (para interactividad de ciertos componentes) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  
</body>
</html>
