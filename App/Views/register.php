<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/main.css">
  <title>Register</title>
</head>
<body>
    <?php include "header.php" ?>
    <section>
      <div class="md:w-3/6 flex flex-col items-center justify-center px-6 py-8 mx-auto">
          <div class="w-full bg-red-600 rounded-lg shadow md:mt-0 xl:p-0">
              <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                  <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                      Crear una nova compte
                  </h1>
                  <form class="space-y-4 md:space-y-6" action="#" method="POST" enctype="multipart/form-data">
                    <div class="grid md:grid-cols-3 md:gap-4">
                      <div>
                          <label for="username" class="block mb-2 text-sm font-medium text-white">Nom Usuari</label>
                          <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Usuari" required>
                      </div>
                      <div>
                          <label for="name" class="block mb-2 text-sm font-medium text-white">Nom</label>
                          <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Pere" required>
                      </div>
                      <div>
                          <label for="lastname" class="block mb-2 text-sm font-medium text-white">Cognoms</label>
                          <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Pi" required>
                      </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                    <div>
                          <label for="password" class="block mb-2 text-sm font-medium text-white">Contrasenya</label>
                          <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                      </div>
                      <div>
                          <label for="confirm-password" class="block mb-2 text-sm font-medium text-white">Confirmar contrasenya</label>
                          <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                      </div>
                      <div>
                          <label for="email" class="block mb-2 text-sm font-medium text-white">Correu electronic</label>
                          <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="nom@domini.com" required>
                      </div>
                      <div>
                        <label class="block mb-2 text-sm font-medium text-white" for="file_input">Pujar Avatar</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help" id="file_input" type="file">
                        <p class="mt-1 text-sm text-white" id="file_input_help">SVG, PNG, JPG</p>
                      </div>
                    </div>
                      <button type="submit" class="w-full text-red-700 bg-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Crear un compte</button>
                      <p class="text-sm font-light text-white">
                      Ja tens un compte? <a href="/" class="font-medium text-white hover:underline">Inicieu sessió aquí</a>
                      </p>
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