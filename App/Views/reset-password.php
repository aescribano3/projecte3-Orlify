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
                    Nova Contrasenya
                </h1>
                <form class="space-y-4 md:space-y-6" action="/restablecercontra" method="POST">
                    <div>
                        <input type="hidden" name="token" value="<?= htmlspecialchars($token)?>">

                        <label for="password" class="block mb-2 text-sm font-medium text-white">Contrasenya Nova: </label>
                        <input type="password" name="password" id="password" data-popover-target="popover-password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" placeholder="****" required>
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-white">Repateix La Contrasenya: </label>
                        <input type="password" name="confirm-password" id="confirm-password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" placeholder="****" required>
                        <div class="p-4 mb-4 text-sm text-red-600 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert" id="errorContainerPass">
                            <span class="font-medium">alerta!</span> Les contrasenyes no coincideixen.
                          </div>
                    </div>
                    <button id="registerbttn" type="submit" class="w-full text-red-700 bg-white font-medium rounded-lg text-sm px-5 py-2.5 text-center">Restablir Contrasenya</button>
                </form>
            </div>
        </div>
      </div>
      <div data-popover id="popover-password" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
      <div class="p-3 space-y-2">
        <h3 class="font-semibold text-gray-900 dark:text-white">Requisits Minims <svg class='w-3 h-3 me-2.5 text-gray-300 dark:text-gray-400' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 14 14'><path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6'/ hidden></svg>
        <svg class='w-3.5 h-3.5 me-2 text-green-400 dark:text-green-500' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 12'>
          <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M1 5.917 5.724 10.5 15 1.5'/ hidden>
        </svg>
      </h3>
      <p>Ha de contenir:</p>
      <ul>
        <li class="flex items-center mb-1" id="length">
          Conte entre 6 i 13 caracteres
        </li>
        <li class="flex items-center mb-1" id="numero">
          Conte al menys un numero
        </li>
        <li class="flex items-center" id="lletra">
          Conte al menys una lletra
        </li>
        <li class="flex items-center" id="guio">
          Conte al menys un guio
        </li>
      </ul>
    </div>
    <div data-popper-arrow></div>
    </section>
    

    <script src="/js/flowbite.min.js"></script>
    <script src="/js/bundle.js"></script>
    <?php  include "footer.php" ?>
</body>
</html>