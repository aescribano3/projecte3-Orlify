<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/main.css">

    <title>Carnet</title>
</head>

<body>
    <?php include "header.php" ?>

    <!--mobile first-->
    <div class="flex items-center justify-center">
        <div class="flex items-center flex-col md:flex-row m-4 md:m-20 border-solid border-2 border-black p-4 w-fit rounded-xl">
            <img class="w-72 md:w-50 mb-4 md:mb-0" src="<?php echo $user["avatar"] ?>" alt="imagen del usuario" />
            <div class="flex flex-col items-center md:items-start">
                <div class="w-96 flex-col">
                    <p class="border mb-4 border-black p-2"><span class="font-bold">Nom:</span> <?php echo $user["name"] ?> </p>
                    <p class="border mb-4 border-black p-2"><span class="font-bold	">Cognoms: </span><?php echo $user["lastname"] ?></p>
                </div>
                <p class="border border-black p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Rem at culpa quae dolor ratione dignissimos
                </p>
            </div>
        </div>
    </div>
    <script src="/js/flowbite.min.js"></script>
    <script src="/js/bundle.js"></script>
    <?php include "footer.php" ?>
</body>

</html>