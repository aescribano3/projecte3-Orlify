<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/main.css">
  <title>Recuperar Contrasenya</title>
</head>
<body>
    <?php include "header.php" ?>
    <section>
      <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto">
        <div class="w-full bg-red-600 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                    Recuperar La contrasenya
                </h1>
                <form class="space-y-4 md:space-y-6" action="/doforgotpassword" method="POST">
                    <div>
                        <label for="emailRC" class="block mb-2 text-sm font-medium text-white">Correu: </label>
                        <input type="email" name="emailRC" id="emailRC" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" placeholder="tu email" required>
                    </div>
                    <button id="formaenviado" type="submit" class="w-full text-red-700 bg-white font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enviar Correu</button>
                </form>
            </div>
        </div>
      </div>
    </section>
    <script src="/js/flowbite.min.js"></script>
    <script src="/js/bundle.js"></script>
    <?php  include "footer.php" ?>
</body>
</html>