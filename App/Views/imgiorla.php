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
                        <a href="/ver-aquesta-orla?r=<?=$orla["idOrla"];?>" class="hover:bg-red-600 hover:text-white flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="ms-3"><?=$orla["name"];?></span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
</aside>


<div class="w-8/12 h-[80vh] grid md:grid-cols-3 md:gap-4 ml-[5%] w-60 mr-[5%] overflow-auto">

<?php
foreach ($imgs as $img) {
?>
        <div class="relative d-flex align-items-center justify-content-between h-60 w-64 mt-10">
            <?php if($img["Selecionada"]){?>
                    <span class="bg-blue-200 text-xs font-medium text-blue-800 text-center p-0.5 leading-none rounded-full px-2 dark:bg-blue-900 dark:text-blue-200 absolute -translate-y-1/2 translate-x-1/2 left-auto top-0 right-0">Selecionada</span>
           <?php }?>

           <?php if($img["Informada"]){?>
            <span class="bg-red-500 text-xs font-medium text-gray-50 text-center p-0.5 leading-none rounded-full px-2 dark:bg-blue-900 dark:text-blue-200 absolute translate-y-1/2 translate-x-1/2 bottom-0 right-1/2">!</span>
            <?php }?>
                <img class="h-60 w-60" src=<?=$img["url"];?> alt=<?=$img["idImg"];?>>
                <?php
            if($user["rol"]=="alumne"): ?>    
                <a href="/selecionarimatge?r=<?=$img["idImg"];?>">Escollir imatge</a> <a class="ml-20" href="/informarimatge?r=<?=$img["idImg"];?>">Informar</a>
                <?php else:  ?>
                  <a class="ml-20"  href="/esborrar-img?r=<?=$img["idImg"];?>">Esborrar</a> 
            <?php endif;?>

        </div>
<?php } ?>

        
    <?php
            if($user["rol"]!="alumne"): ?>    
              <div id="miDropzone" class="relative rounded-full d-flex align-items-center bg-red-600 justify-content-center h-60 w-60 mt-10">
    <form id="miFormulario" action="/afegir-usuari-foto?r=<?=$img["idUser"];?>" method="post" enctype="multipart/form-data" class=" flex flex-col items-center justify-center h-full">   
     <p class="text-2xl text-stone-50">Afegir imatge</p>
     <p class="text-lg text-stone-50">Fer clic o arrosegar</p>
      <input type="file" id="imagen" name="imagen[]" accept="image/*" style="display: none;" multiple>
      <button id="enviarFormularioButton" type="button" class="mt-[5%] focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Confirmar</button>
    </form>
  </div>

        <?php endif;?>
    </div>
</div>

<script src="/js/flowbite.min.js"></script>
    <script src="/js/bundle.js"></script>

    <?php  include "footer.php" ?>
</body>
</html>