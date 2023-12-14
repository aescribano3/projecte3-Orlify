<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="/main.css">
<title>Mis Datos</title>
</head>
<body >
    <?php include "header.php" ?>
    <div class="columns-1 md:columns-2">
    
    <div class="w-full p-4 flex items-center justify-center relative group h-[80vh]">
        <div class="flex flex-col items-center justify-center">
            <div id="imgInput" class="relative overflow-hidden rounded-lg">
                <img class="w-64 h-64 rounded-full transition duration-300 transform hover:scale-110" src="<?=$user["avatar"];?>" alt="Rounded avatar">
                <div class="absolute inset-0 rounded-full flex items-center justify-center opacity-0 hover:opacity-100 bg-gray-800 bg-opacity-75 text-white transition duration-300">
                    <form id="infouserupdate" enctype="multipart/form-data" class="flex flex-col items-center justify-center h-full">
                    <label for="imagen" class="mt-[20%]">
                        Cambiar imagen
                    </label>
                    <input type="file" id="imagen" name="imagen[]" accept="image/*" hidden>
                    <input type="hidden" id="capturedImageData" name="capturedImageData" />
                </div>
            </div>
            <div class="mt-4">
                <p id="capture-btn" class="hidden cursor-pointer">Capturar imatge</p>
            </div>
            <div class="mt-4">
                <video id="camera-preview" class="w-64 h-64 rounded-full hidden" autoplay></video>
            </div>
            <div class="mt-4">
                <p id="toogleInput" class="cursor-pointer">Canviar input de l'imatge</p>
            </div>
        </div>
    </div>
    <div class="w-full p-4 ">  
    <canvas id="captured-image" width="460" height="460" class="rounded-full m-1"></canvas>
        <div class="relative z-0 w-full mb-4 group">
            <input type="text" name="floating_username" id="floating_username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" value=<?=$user["username"];?> readonly />
            <label for="floating_username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom d'usuari</label>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-4 group">
                <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " value=<?=$user["name"];?> required />
                <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom</label>
            </div>
            <div class="relative z-0 w-full mb-4 group">
                <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " value=<?=$user["lastname"];?> required />
                <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cognom</label>
            </div>
        </div>
        <div class="relative z-0 w-full mb-4 group">
            <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " value=<?=$user["email"];?> required />
            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correu</label>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-4 group">
            <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" "  />
            <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contrasenya</label>
        </div>
        <div class="relative z-0 w-full mb-4 group">
            <label for="confirm-password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirmar contrasenya</label>
            <input type="password" name="confirm-password" id="confirm-password" placeholder=" " class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" required>
            
            <div class="p-4 mb-4 text-sm text-red-600 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert" id="errorContainerPass">
                <span class="font-medium">alerta!</span> Les contrasenyes no coincideixen.
            </div>            
        </div>
    
        </div>
        <div class="relative z-0 w-full group">

            <div id="errorContainerX" class="p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"  role="alert">
                <span class="font-medium">Error!</span> Contrasenya Incorrecta
            </div>
        </div>
        <button id="updateuserinfo" type="button" class="text-white bg-green-700 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Actualizar</button>            
        <button  class="text-white bg-gray-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Cancelar</button>
    </form>

        </div>
    </div>
    
    <script src="/js/flowbite.min.js"></script>
    <script src="/js/bundle.js"></script>
    <?php  include "footer.php" ?>
</body>
</html>