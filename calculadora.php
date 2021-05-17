<!DOCTYPE html>
  <html lang="es" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Calculadora</title>
      <link rel="shortcut icon" href="img\logoPequeño.png" type="image/x-icon">
      <link rel="stylesheet" href="CSS\estilosCalculadora.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

    </head>

    <body>
      <main>
        <h1>Calculo recomendado</h1>
        <form action="" class="formulario" id="formulario">

          <!--ingreso1-->
        <div class="formulario__grupo" id="grupo__valor1">
          <label for="valor1" class="formulario__label">ingreso mes:</label>
          <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="valor1" id="valor1">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
          </div>
          <p class="formulario__input-error">Este campo solo puede contener numeros y el maximo son 14 dígitos.</p>
        </div>

        <!--ingreso2-->
        <div class="formulario__grupo" id="grupo__valor2">
            <label for="valor2" class="formulario__label">otros ingresos:</label>
            <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="valor2" id="valor2">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
          <p class="formulario__input-error">Este campo solo puede contener numeros y el maximo son 14 dígitos.</p>
        </div>

        <button type="submit" class="botonCalcular" value="Calcular" onclick="Calcular()">Calcular</button>
        <input type="button" class="botonLimpiar" value="Limpiar" onclick="Limpiar()">
        <div class="formulario__porcentajes">
          <p id="porcentaje1"></p>
          <p id="porcentaje2"></p>
          <p id="porcentaje3"></p>
        </div>

        <div class="logo">
          <a href="index.php" id="logo">
            <img src="img\logoOscuro.png" alt="">
          </a>
        </div>
      </form>
    </main>
    <script type="text/javascript" src="js/calculadora.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  </body>
</html>
