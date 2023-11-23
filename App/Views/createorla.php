<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/main.css">

    <title>Crear Orla</title>
</head>

<body class="pag-body">
    <?php include "header.php" ?>
    <div class="flex h-screen">
        <aside id="sidebar-multi-level-sidebar" class="shadow-md w-48 transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="#" class="hover:bg-red-600 hover:text-white flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="ms-3">Crear orles</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:bg-red-600 hover:text-white flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="ms-3">Modificar orles</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <section class="w-full">
            <div class="md:w-3/6 flex flex-col items-center justify-center px-6 py-8 mx-auto">
                <div class="w-full bg-red-600 rounded-lg shadow md:mt-0 xl:p-0">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                            Crear una nova orla
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div class="grid md:grid-cols-3 md:gap-4">
                            <div>
                                <label for="orlaname" class="block mb-2 text-sm font-medium text-white">Nom orla</label>
                                <input type="text" name="orlaname" id="orlaname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nova orla" required>
                            </div>
                            <div>
                                <label for="orlagrup" class="block mb-2 text-sm font-medium text-white">Grup de l'orla</label>
                                <select id="orlagrup" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                    <option>Grup 1</option>
                                    <option>Grup 2</option>
                                    <option>Grup 3</option>
                                    <option>Grup 4</option>
                                </select>
                            </div>
                            <div>
                                <label for="orlaplantilla" class="block mb-2 text-sm font-medium text-white">Plantilla orla</label>
                                <select id="orlaplantilla" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                    <option>Orla 1</option>
                                    <option>Orla 2</option>
                                    <option>Orla 3</option>
                                    <option>Orla 4</option>
                                </select>
                            </div>
                            </div>
                            <button type="submit" class="w-full text-red-700 bg-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Crear nova orla</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <script src="/js/flowbite.min.js"></script>
    <script src="/js/bundle.js"></script>
    <?php include "footer.php" ?>
</body>

</html>