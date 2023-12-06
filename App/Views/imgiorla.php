<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/main.css">
  <title>Imatges Orla</title>
</head>
<body class="flex flex-col min-h-screen">
<?php include "header.php" ?>

<div class="flex-1 flex">
<aside class="w-2/12 shadow-md w-48 bg-gray-50" aria-label="Sidebar">
                <ul class="space-y-2 font-medium">
                <?php
foreach ($orlas as $orla) {
?>
                    <li>
                        <a href="#" class="hover:bg-red-600 hover:text-white flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="ms-3"><?=$orla["name"];?></span>
                        </a>
                    </li>
                   
                </ul>
</aside>


<div class="w-8/12 h-[80vh] grid md:grid-cols-3 md:gap-4 ml-[5%] w-60 mr-[5%] overflow-auto">

<?php
foreach ($imgs as $img) {
?>
        <div class="d-flex align-items-center justify-content-between h-60 w-64 mt-10">
            <img class="h-60 w-60" src=<?=$img["url"];?> alt=<?=$img["IdImg"];?>>
            <a href="">Escollir imatge</a> <a class="ml-20" href="h">Informar</a>
        </div>
<?php } ?>

        
    <?php
    if($professor): ?>

        <div class="rounded-full d-flex align-items-center bg-red-600 justify-content-center h-60 w-60 mt-10">
            <form action="/afegir-usuari-foto?r=<?=$img["idUser"];?>" method="post" enctype="multipart/form-data" class="flex flex-col items-center justify-center h-full">
                <label for="imagen" class="mt-[20%]">
                    <svg class="w-48 h-48 text-gray-100 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                </label>
                <input type="file" id="imagen" name="imagen[]" accept="image/*" hidden>
                <button type="submit" class="mt-[5%] focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Confirmar</button>
            </form>
        </div>
        <?php endif;?>
    </div>
</div>
<?php  include "footer.php" ?>
<script src="/js/flowbite.min.js"></script>
    <script src="/js/bundle.js"></script>
</body>
</html>