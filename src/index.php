<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="src/css/output.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/logo-3.png">
</head>

<body class="bg-gray-100 text-gray-900">

    <header class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex-1 md:flex md:items-center md:gap-12">
                    <a class="block text-teal-600" href="#">
                        <span class="sr-only">Home</span>
                        <img class="logo-large" src="assets/img/logo-2.png" alt="logo lucas iribaren">
                    </a>
                </div>
                <span class="cursor-pointer ">
                    <img src="assets/img/icons8-menu-50.png" onclick="Menu()" alt="">
                </span>
                <div class="md:flex bg-red md:items-center md:gap-12">
                    <nav aria-label="Global" class="hidden md:block">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> À propos </a>
                            </li>
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Projets </a>
                            </li>
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Compétences </a>
                            </li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Contact </a>
                            </li>
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> CV </a>
                            <li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="block md:hidden">
            <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </header>


    <main class="container mx-auto p-4">
        <section class="my-8">
            <h2 class="text-2xl font-semibold mb-4">About Me</h2>
            <p class="text-lg">I am a web developer with a passion for creating beautiful and functional websites.</p>
        </section>
        <section class="my-8">
            <h2 class="text-2xl font-semibold mb-4">Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-xl font-bold mb-2">Project 1</h3>
                    <p class="text-lg">Description of project 1.</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-xl font-bold mb-2">Project 2</h3>
                    <p class="text-lg">Description of project 2.</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-xl font-bold mb-2">Project 3</h3>
                    <p class="text-lg">Description of project 3.</p>
                </div>
            </div>
        </section>
        <section class="my-8">
            <h2 class="text-2xl font-semibold mb-4">Contact</h2>

        </section>
    </main>
    <footer class="bg-white shadow mt-8">
        <div class="container mx-auto p-4 text-center">
            <p>&copy; <?php echo date(format: "Y"); ?> My Portfolio</p>
        </div>
    </footer>
    <script src="assets/js/burger.js"></script>
</body>

</html>