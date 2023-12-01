<div id="create-user" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="md:w-3/6 flex flex-col items-center justify-center px-6 py-8 mx-auto">
            <div class="w-full bg-red-600 rounded-lg shadow md:mt-0 xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                        Crear un usuari
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/create-user" method="POST" enctype="multipart/form-data">
                        <div class="grid md:grid-cols-3 md:gap-4">
                            <div>
                                <label for="username-C" class="block mb-2 text-sm font-medium text-white">Nom Usuari</label>
                                <input type="text" name="username" id="username-C" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Usuari" required>
                            </div>
                            <div>
                                <label for="name-C" class="block mb-2 text-sm font-medium text-white">Nom</label>
                                <input type="text" name="name" id="name-C" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Pere" required>
                            </div>
                            <div>
                                <label for="lastname-C" class="block mb-2 text-sm font-medium text-white">Cognoms</label>
                                <input type="text" name="lastname" id="lastname-C" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Pi" required>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <label for="password-C" class="block mb-2 text-sm font-medium text-white">Contrasenya</label>
                            <input type="password" name="password" id="password-C" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                        </div>
                        <div>
                            <label for="email-C" class="block mb-2 text-sm font-medium text-white">Correu electronic</label>
                            <input type="email" name="email" id="email-C" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="nom@domini.com" required>
                        </div>
                        <div>
                            <label for="userrol-C" class="block mb-2 text-sm font-medium text-white">Rol</label>
                            <select name="userrol" id="userrol-C" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                <option value="alumne">Alumne</option>
                                <option value="professor">Professor</option>
                                <option value="equip directiu">Equip Directiu</option>
                                <option value="administrador">Administrador</option>
                            </select>
                        </div>
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button id="create-user-button" type="button" class="mx-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear usuari</button>
                            <button class="mx-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Generar usuari</button>
                            <button id="cancelbttnuser" data-modal-hide="create-user" type="button" class="mx-2 text-black bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-200 dark:hover:bg-gray-300 dark:focus:ring-gray-400">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>