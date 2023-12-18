<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/main.css">
    <title>Orla</title>
</head>

<body id="plantilla-img" class="bg-gray-100 font-sans">

    <?php if($access == false): ?>
        <div class="flex justify-center items-center h-screen">
            <div class="orla-container bg-red-600 p-8 shadow-lg rounded-lg text-center">
                <h1 class="text-2xl font-semibold mb-4 text-white">Clau d'access</h1>
                <form action="/checkkey" method="POST">
                    <label for="keyUser" class="text-white">Insereix la clau</label>
                    <input type="password" id="keyUser" name="keyUser" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="••••••••" required>
                    <button submit class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Confirmar</button>
                </form>
            </div>
        </div>
    <?php endif ?>

    <?php if($access == true): ?>
        <div class="fixed top-0 left-0 w-full flex items-center justify-center p-4">
            <button id="downloadButton" class="bg-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Descargar PDF
            </button>
        </div>

        <div id="plantilla">
            <?php include $orla[0]["url"]; ?>
        </div>
    <?php endif ?>

    <script src="/js/flowbite.min.js"></script>
    <script src="/js/bundle.js"></script>
</body>

</html>
