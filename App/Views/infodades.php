<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/main.css">
    <title>Informació de les dades</title>
</head>
<body class="flex flex-col min-h-screen">
    <?php include "header.php" ?>
    <?php include "create-user.php" ?>
    <?php include "modifi-user.php" ?>
    <?php include "create-grup.php" ?>
    <?php include "modifi-grup.php" ?>
    <?php include "create-orla.php" ?>
    <?php include "modifi-orla.php" ?>    
    <body class="flex flex-col min-h-screen">

<div class="flex-1 flex">
<aside class="w-2/12 shadow-md w-48 bg-gray-50" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                <ul class="space-y-2 font-medium">
                <li>
                        <a href="#" class="hover:bg-red-600 hover:text-white flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="ms-3">Usuaris</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:bg-red-600 hover:text-white flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="ms-3">Grups</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:bg-red-600 hover:text-white flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="ms-3">Orles</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="w-[87.333333%] h-[80vh] overflow-auto">


        <!-- User Table -->
        <div id="UserTable" class="w-full shadow-md sm:rounded-lg hidden">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            ppi
                        </td>
                        <td class="px-6 py-4">
                            Pere
                        </td>
                        <td class="px-6 py-4">
                            Pi
                        </td>
                        <td class="px-6 py-4">
                            ppi@cendrassos.net
                        </td>
                        <td class="px-6 py-4">
                            Alumne
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-user" data-modal-toggle="modifi-user" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Grups Table -->
        <div id="GrupTable" class="w-full shadow-md sm:rounded-lg hidden">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            2DAW
                        </td>
                        <td class="px-6 py-4">
                            2022/2023
                        </td>
                        <td class="px-6 py-4">
                            Xavi Vallejo
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-grup" data-modal-toggle="modifi-grup" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Orles Table -->
        <div id="OrlaTable" class="w-full shadow-md sm:rounded-lg ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            <button data-modal-target="create-orla" data-modal-toggle="create-orla" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Afegir orla
                            </button>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nom de l'orla
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Grup de l'orla
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
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>


                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #1
                        </th>
                        <td class="px-6 py-4">
                            Grau desenvolupament d'aplicacions web
                        </td>
                        <td class="px-6 py-4">
                            2DAW - 2022/2023
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modifi-orla" data-modal-toggle="modifi-orla" class="block text-white bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                Modificar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Eliminar
                            </button>
                        </td>
                    </tr>
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