<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/main.css">
    <title>Configurar Orles</title>
</head>

<div id="modifi-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="md:w-3/6 flex flex-col items-center justify-center px-6 py-8 mx-auto">
            <div class="w-full bg-red-600 rounded-lg shadow md:mt-0 xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                        Modificar orles
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div>
                                <label for="orlamodifi" class="block mb-2 text-sm font-medium text-white">Orla a modificar</label>
                                <select id="orlamodifi" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                    <option>Orla 1</option>
                                    <option>Orla 2</option>
                                    <option>Orla 3</option>
                                    <option>Orla 4</option>
                                </select>
                            </div>
                            <div>
                                <label for="orlaname" class="block mb-2 text-sm font-medium text-white">Nom</label>
                                <input type="text" name="orlaname" id="orlaname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Orla modificada" required>
                            </div>
                            <div>
                                <label for="orlagrup" class="block mb-2 text-sm font-medium text-white">Grup</label>
                                <select id="orlagrup" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                    <option>Grup 1</option>
                                    <option>Grup 2</option>
                                    <option>Grup 3</option>
                                    <option>Grup 4</option>
                                </select>
                            </div>
                            <div>
                                <label for="orlaplantilla" class="block mb-2 text-sm font-medium text-white">Plantilla</label>
                                <select id="orlaplantilla" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                    <option>Plantilla 1</option>
                                    <option>Plantilla 2</option>
                                    <option>Plantilla 3</option>
                                    <option>Plantilla 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="modifi-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                            <button data-modal-hide="modifi-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<body class="bg-gray-100">
    <?php include "header.php" ?>
    <div class="flex h-screen">
        <div class="w-full overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID Orla
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nom Orla
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nom Grup
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Curs
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Modificar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Eliminar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-modal" data-modal-toggle="modifi-modal" class="block text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-modal" data-modal-toggle="modifi-modal" class="block text-white bg-rose-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <script src="/js/flowbite.min.js"></script>
    <script src="/js/bundle.js"></script>
    <?php include "footer.php" ?>
</body>

</html>