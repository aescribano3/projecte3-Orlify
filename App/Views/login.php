<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/main.css">
  <title>Login</title>
</head>
<body>
    <?php include "header.php" ?>
    <section>
      <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto">
        <div class="w-full bg-red-600 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                    Inicieu la sessió al vostre compte
                </h1>
                <form class="space-y-4 md:space-y-6" action="#">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-white">Nom Usuari</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" placeholder="nom@domini.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-white">Contrasenya</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="#" class="text-sm font-medium text-white hover:underline">Has oblidat la contrasenya?</a>
                    </div>
                    <button type="submit" class="w-full text-red-700 bg-white font-medium rounded-lg text-sm px-5 py-2.5 text-center">Inicia sessió</button>
                    <p class="text-sm font-light text-white">
                      Encara no tens un compte? <a href="/register" class="font-medium text-white hover:underline">Registra't</a>
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