<div id="create-orla" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="md:w-3/6 flex flex-col items-center justify-center px-6 py-8 mx-auto">
            <div class="w-full bg-red-600 rounded-lg shadow md:mt-0 xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                        Crear una nova orla
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/createorla" method="POST">
                        <div class="grid md:grid-cols-3 md:gap-4">
                            <div>
                                <label for="orlaname" class="block mb-2 text-sm font-medium text-white">Nom</label>
                                <input type="text" name="orlaname" id="orlaname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nova orla" required>
                            </div>
                            <div>
                                <label for="orlagrup" class="block mb-2 text-sm font-medium text-white">Grup</label>
                                <select name="grupselected" id="orlagrup" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                    <option disabled selected>-- Seleccionar -- </option>
                                    <option value="1">4 ESO</option>
                                    <option value="2">2 DAW</option>
                                    <option value="3">2 SMX</option>
                                    <option value="4">2 AFI</option>
                                </select>
                            </div>
                            <div>
                                <label for="orlaplantilla" class="block mb-2 text-sm font-medium text-white">Plantilla</label>
                                <select name="selectedorla" id="orlaplantilla" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                    <option disabled selected>-- Seleccionar -- </option>
                                    <option value="1">Plantilla 1</option>
                                    <option value="2">Plantilla 2</option>
                                    <option value="3">Plantilla 3</option>
                                    <option value="4">Plantilla 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button id="create-orla-button" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear orla</button>
                            <button id="cancelbttnorla" data-modal-hide="create-orla" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>