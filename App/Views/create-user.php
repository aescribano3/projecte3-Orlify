<div id="create-user" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="md:w-3/6 flex flex-col items-center justify-center px-6 py-8 mx-auto">
            <div class="w-full bg-red-600 rounded-lg shadow md:mt-0 xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                        Crear un usuari
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
                            <label for="usergrup" class="block mb-2 text-sm font-medium text-white">Grup</label>
                            <select id="usergrup" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                <option>4 ESO</option>
                                <option>2 SMX</option>
                                <option>2 DAW</option>
                                <option>2 AFI</option>
                            </select>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-white" for="file_input">Pujar Avatar</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help" id="file_input" type="file">
                            <p class="mt-1 text-sm text-white" id="file_input_help">SVG, PNG, JPG</p>
                        </div>
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="create-user" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear usuari</button>
                            <button data-modal-hide="create-user" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>