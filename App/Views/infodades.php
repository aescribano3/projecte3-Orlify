<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/main.css">
    <title>Panell de Control</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php include "header.php" ?>
    <?php include "create-user.php" ?>
    <?php include "modifi-user.php" ?>
    <?php include "create-grup.php" ?>
    <?php include "modifi-grup.php" ?>
    <?php include "create-orla.php" ?>
    <?php include "modifi-orla.php" ?>
    <?php include "toast-success.php" ?>
    <?php include "toast-error.php" ?>
    <?php include "loading.php" ?>
    <body class="flex flex-col min-h-screen">
        <div class="flex-1 flex">
            <aside class="w-2/12 shadow-md w-48 bg-gray-50" aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    <ul class="space-y-2 font-medium">
                        <li>
                            <a href="#" id="UsersLink" class="hover:bg-red-600 hover:text-white flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="ms-3">Usuaris</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" id="GrupsLink" class="hover:bg-red-600 hover:text-white flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="ms-3">Grups</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" id="OrlesLink" class="hover:bg-red-600 hover:text-white flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="ms-3">Orles</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="w-[87.333333%] h-[80vh] overflow-auto">


                <!-- User Table -->
                <div id="UserTable" class="w-full shadow-md sm:rounded-lg hidden">
                    <table id="TableUser" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-4">
                                    <button data-modal-target="create-user" data-modal-toggle="create-user" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                        Afegir Usuari
                                    </button>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Username
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nom
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Cognoms
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Rol
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
                        <?php foreach($users as $i => $user) { ?>
                            <tr id="<?=$user["idUser"]?>" class="GetIdUser odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <a href="/imatges-usuari?r=<?=$user["idUser"]?>" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">

                                     
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
<div class="flex"><p class="mr-2">Modificar</p> <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
    <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
  </svg></div>
</span>


                           
                                         </a>    
                                </th>
                                <td class="px-6 py-4">
                                    <?=$user["username"]?>
                                </td>
                                <td class="px-6 py-4">
                                    <?=$user["name"]?>
                                </td>
                                <td class="px-6 py-4">
                                    <?=$user["lastname"]?>
                                </td>
                                <td class="px-6 py-4">
                                    <?=$user["email"]?>
                                </td>
                                <td class="px-6 py-4">
                                    <?=$user["rol"]?>
                                </td>
                                <td class="px-6 py-4">
                                    <button data-modal-target="modifi-user" id="modifi-user" data-modal-toggle="modifi-user" class="bttn-M-U block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                        Modificar
                                    </button>
                                </td>
                                <td class="px-6 py-4">
                                    <button  class="drop-button-user block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- Grups Table -->
                <div id="GrupTable" class="w-full shadow-md sm:rounded-lg hidden">
                    <table id="TableGrup" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-4">
                                    <button data-modal-target="create-grup" data-modal-toggle="create-grup" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                        Afegir Grup
                                    </button>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nom del grup
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Curs del grup
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tutor assignat
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
                        <?php foreach($grups as $i => $grup) { ?>
                            <tr id="<?=$grup["idGrup"]?>" class="GetIdGrup odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="idGrup px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?=$grup["idGrup"]?>
                                </th>
                                <td class="px-6 py-4">
                                    <?=$grup["name"]?>
                                </td>
                                <td class="px-6 py-4">
                                    <?=$grup["curs"]?>
                                </td>
                                <td class="px-6 py-4">
                                    <?=$grup["idTeacher"]?>
                                </td>
                                <td class="px-6 py-4">
                                    <button data-modal-target="modifi-grup" data-modal-toggle="modifi-grup" class="bttn-M-G block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                        Modificar
                                    </button>
                                </td>
                                <td class="px-6 py-4">
                                    <button class="drop-button-grup block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                
                <!-- Orles Table -->
                <div id="OrlaTable" class="w-full shadow-md sm:rounded-lg hidden">
                    <table id="TableOrla" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-4">
                                    <button data-modal-target="create-orla" data-modal-toggle="create-orla" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                        Afegir Orla
                                    </button>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nom de l'orla
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Grup de l'orla
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Plantilla de l'orla
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
                        <?php foreach($orles as $i => $orla) { ?>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?=$orla["idOrla"]?>
                                </th>
                                <td class="px-6 py-4">
                                    <?=$orla["name"]?>
                                </td>
                                <td class="px-6 py-4">
                                    <?=$orla["idGrup"]?>
                                </td>
                                <td class="px-6 py-4">
                                    <?=$orla["idPlantilla"]?>
                                </td>
                                <td class="px-6 py-4">
                                    <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                        Modificar
                                    </button>
                                </td>
                                <td class="px-6 py-4">
                                    <button class="drop-button block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>


        <script src="/js/flowbite.min.js"></script>
        <script src="/js/bundle.js"></script>
        <?php include "footer.php" ?>
    </body>

</html>