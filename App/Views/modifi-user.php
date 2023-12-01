<div id="modifi-user" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="md:w-3/6 flex flex-col items-center justify-center px-6 py-8 mx-auto">
            <div class="w-full bg-red-600 rounded-lg shadow md:mt-0 xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                        Modificar usuari
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#" method="POST" enctype="multipart/form-data">
                        <div class="grid md:grid-cols-3 md:gap-4">
                            <div>
                                <label for="username-M" class="block mb-2 text-sm font-medium text-white">Nom Usuari</label>
                                <input type="text" name="username" id="username-M" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Usuari" required>
                            </div>
                            <div>
                                <label for="name-M" class="block mb-2 text-sm font-medium text-white">Nom</label>
                                <input type="text" name="name" id="name-M" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Pere" required>
                            </div>
                            <div>
                                <label for="lastname-M" class="block mb-2 text-sm font-medium text-white">Cognoms</label>
                                <input type="text" name="lastname" id="lastname-M" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Pi" required>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <label for="email-M" class="block mb-2 text-sm font-medium text-white">Correu electronic</label>
                            <input type="email" name="email" id="email-M" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="nom@domini.com" required>
                        </div>
                        <div>
                            <label for="userrol-M" class="block mb-2 text-sm font-medium text-white">Rol</label>
                            <select name="userrol" id="userrol-M" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                <option value="alumne">Alumne</option>
                                <option value="professor">Professor</option>
                                <option value="equip directiu">Equip Directiu</option>
                                <option value="administrador">Administrador</option>
                            </select>
                        </div>
                        <div>
                            <label for="userrol-M" class="block mb-2 text-sm font-medium text-white">Grup</label>
                            <button id="dropDownGrups" data-dropdown-toggle="dropdown" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Selecciona els grups <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
                            </button>
                            <div id="dropdown" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
                                <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropDownGrups">
                                <?php foreach($grups as $i => $grup) { ?>
                                    <li>
                                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="<?=$grup["idGrup"]?>" type="checkbox" name="<?=$grup["idGrup"]?>" value="<?=$grup["idGrup"]?>" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="<?=$grup["idGrup"]?>" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300"><?php echo $grup["name"] . " " . $grup["curs"]?></label>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button id="modifi-user-button" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modificar usuari</button>
                            <button data-modal-hide="modifi-user" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>