<header>
    
    <nav class="bg-red-600 border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/" class="flex items-center">
                <div class="bg-white rounded-lg w-44 h-12 flex justify-center items-center">
                    <img src="/imgs/logo.png" class="mr-3 h-6 sm:h-9" alt="Cendrassos Logo" />
                </div>
            </a>
            <div class="flex items-center lg:order-2">

            <?php if(!$logged) : ?>
    <a href='/login' class='text-white hover:bg-white hover:text-primary-700 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2  focus:outline-none'>Log in</a>
    <a href='/register' class='text-white hover:bg-green-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 '>Register</a>
<?php else : ?>
    <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation">
        <img src=<?= $user["avatar"] ?> class="h-12 w-12 rounded-full">
    </button>

    <!-- Dropdown menu -->
    <div id="dropdownInformation" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
            <div><?= $user["name"] ?></div>
            <div class="font-medium truncate"><?= $user["email"] ?> </div>
        </div>
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
            <li>
                <a href="/mis-datos" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mis Dades</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
            </li>
        </ul>
        <div class="py-2">
            <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Tanacar Sesio</a>
        </div>
    </div>
<?php endif; ?>


            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            </div>
        </div>
    </nav>
</header>