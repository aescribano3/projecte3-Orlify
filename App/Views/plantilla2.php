<div class="flex justify-center items-center h-screen">
    <div class="orla-container bg-yellow-500 p-8 shadow-lg rounded-lg text-center">
        <h1 class="text-2xl font-semibold mb-4 text-black"><?php echo $orla[0]["name"] ?></h1>

        <div class="flex flex-wrap -mx-4">

            <?php foreach ($usersOrla as $userOrla) { ?>
                <div class="student-container w-1/2 md:w-1/4 lg:w-1/6 px-4 mb-4">
                    <div class="bg-gray-100 p-4 rounded-lg text-center student-content">
                        <img src="<?php echo $userOrla["url"]?>" alt="Nombre del estudiante" class="student-image mx-auto">
                        <p class="text-sm font-semibold student-name"><?php echo $userOrla["name"] . " " . $userOrla["lastname"]?></p>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>