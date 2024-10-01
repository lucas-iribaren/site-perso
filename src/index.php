<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="assets/css/output.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/logo-3.png">
    <link href="/dist/tailwind.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 text-gray-900">

    <header class="flex">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex-1 md:flex md:items-center md:gap-12">
                    <a class="block text-teal-600" href="#">
                        <span class="sr-only">Home</span>
                        <img class="logo-large" src="assets/img/logo-2.png" alt="logo lucas iribaren">
                    </a>
                </div>

                <div class="md:flex bg-red md:items-center md:gap-12">
                    <nav aria-label="Global" class="hidden md:block">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#apropos"> À propos </a>
                            </li>
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#projets"> Projets </a>
                            </li>
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#competences"> Compétences </a>
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
            <button class="p-5 rounded bg-gray-100 text-gray-600 transition hover:text-gray-600/75" id="burger">
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
    <main class=" mx-auto ">
        <section class="min-h-96 content-center text-center bg-slate-300 ">
            <h1 class="text-7xl">Lucas Iribaren</h1>
            <p class="text-4xl">Web Developer</p>
        </section>
        <section class="my-8 p-4">
            <h2 class="text-2xl font-semibold mb-4" id="apropos">À propos</h2>
            <article class="border border-slate-300 border-2 p-2 md:w-9/12 m mx-auto flex flex-wrap md:flex-nowrap ">
                <img class=" m-auto rounded size-60" src="assets/img/lucas.jpg" alt="lucas photo">
                <p class="text-lg border-black border-1 md:border-l text-center md:text-start md:ml-6 my-3 md:pl-6 p-r-3">Je m'appelle Lucas Iribaren, étudiant en développement web à La Plateforme à Marseille. Passionné par la technologie et la création de solutions innovantes, je me spécialise dans le développement front-end et back-end avec des outils comme JavaScript, PHP, et Tailwind CSS. Actuellement à la recherche d'une alternance pour septembre 2025, je suis motivé par l'apprentissage continu et l'envie de relever des défis techniques.</p>
            </article>
        </section>
        <section class="my-8 p-4">
            <h2 class="text-2xl font-semibold mb-4" id="competences">Compétences</h2>
            <div class="border border-slate-300 border-2 p-2 mx-auto md:w-3/4 place-content-evenly flex flex-wrap text-center items-center">
                <?php
                $skills = [
                    'JS',
                    'Python',
                    'PHP',
                    'SQL',
                    'Tailwind CSS',
                    'Bootstrap',
                    'React',
                    'Node',
                    'API Platform',
                    'Express',
                    'HTML',
                    'CSS',
                    'BASH',
                    'Git',
                    'GitHub',
                    'VS Code',
                    'Plesk',
                    'Figma'
                ];

                for ($i = 0; $i < count(value: $skills); $i++) {
                    echo "<div class='bg-white p-3 m-1 w-screen md:w-32 size-30 content-center'>
                <img class='m-auto border-1 object-contain border-slate-900 size-16' src='assets/img/{$skills[$i]}.png' alt='Logo de {$skills[$i]}'>
                <p class='text-sm px-3 '>" . $skills[$i] . "</p>
                </div>";
                }
                ?>
            </div>
        </section>

        <section class="my-8 p-4">
            <h2 class="text-2xl font-semibold mb-4">Mes Travaux</h2>
            <div class="w-3/4 mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php
                $projet = [
                    'cv',
                    'serenitea',
                    'ville-marseille',
                    'app-favorites',
                    'fansite',
                    'bloompetals',
                    'projet-booki'
                ];

                for ($i = 0; $i < count($projet); $i++) {
                    $project = $projet[$i];

                    // Vérifie d'abord l'existence d'un index.php, sinon un index.html
                    $link = file_exists("{$project}/index.php") ? "/{$project}/index.php" : (file_exists("{$project}/index.html") ? "/{$project}/index.html" : '#');
                    echo "<a href='{$link}'>
                            <div class= bg-white p-4 rounded shadow m-1 w-screen md:w-32 size-30 relative overflow-hidden content-center'>
                                <figure class='relative group'>
                                    <img class='m-auto border-1 object-contain border-slate-900 w-full h-auto rounded duration-300 ease-in-out group-hover:blur-sm' src='assets/img/{$projet[$i]}.png' alt='Logo de {$projet[$i]}'>
                                    <figcaption class='absolute inset-0 flex items-center justify-center bg-slate-900/50 text-white opacity-0   group-hover:opacity-100 transition duration-300 ease-in-out rounded capitalize '>{$projet[$i]}</figcaption>
                                </figure>
                            </div>
                        </a>";
                }
                ?>

            </div>
        </section>

        <section class="my-8">
            <h2 class="text-2xl font-semibold mb-4" id="/pages/contact.php">Contact</h2>
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