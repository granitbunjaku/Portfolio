<?php 
    $_SESSION['PAGE'] = "Homepage";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Granit Bunjaku | <?= $_SESSION['PAGE'] ?></title>
    </head>

    <body>
        <div class="flex flex-col items-center">
            <div class="flex flex-col items-center font-mono py-24 px-8">
                <h1 class="text-2xl font-semibold text-blue-600 mb-6 hidden text"> Granit Bunjaku </h1>
                <h1 class="text-3xl font-semibold text-center hidden text"> I'm a Software Developer from Kosova </h1>
            </div>
            <div class="flex flex-col items-center font-mono px-8">
                <h1 class="text-2xl font-semibold text-blue-600 mb-6 hidden text"> My Skills </h1>
                <div class="skills">
                    <div class="skill1 grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-6">
                        <a href="skill.php?id=1"><div class="w-56 h-56 bg-cover hidden bg-[url(photos/htmlcss.jpg)] skill rounded-lg"></div></a>
                        <a href="skill.php?id=2"><div class="w-56 h-56 bg-cover hidden bg-no-repeat bg-[url(photos/tailwind.png)] skill rounded-lg"></div></a>
                        <a href="skill.php?id=3"><div class="w-56 h-56 bg-cover hidden bg-no-repeat bg-[url(photos/js.png)] skill rounded-lg"></div></a>
                        <a href="skill.php?id=4"><div class="w-56 h-56 bg-cover hidden bg-no-repeat bg-[url(photos/jquery.png)] skill rounded-lg"></div></a>
                        <a href="skill.php?id=5"><div class="w-56 h-56 bg-cover hidden bg-no-repeat bg-[url(photos/php.png)] skill rounded-lg"></div></a>
                        <a href="skill.php?id=6"><div class="w-56 h-56 bg-cover hidden bg-no-repeat bg-[url(photos/laravel.jpg)] skill rounded-lg"></div></a>
                        <a href="#"><div class="w-56 h-56 bg-cover hidden bg-no-repeat bg-[url(photos/vue.png)] skill rounded-lg"></div></a>
                        <a href="skill.php?id=8"><div class="w-56 h-56 bg-cover hidden bg-no-repeat bg-[url(photos/python.jpg)] skill rounded-lg"></div></a>
                        <a href="#"><div class="w-56 h-56 bg-cover hidden bg-no-repeat bg-[url(photos/django.png)] skill rounded-lg"></div></a>
                        <a href="skill.php?id=10"><div class="w-56 h-56 bg-cover hidden bg-no-repeat bg-[url(photos/fastapi.jpg)] skill rounded-lg"></div></a>
                        <a href="#"><div class="w-56 h-56 bg-cover hidden bg-no-repeat bg-[url(photos/java.jpg)] skill rounded-lg"></div></a>
                        <a href="#"><div class="w-56 h-56 bg-cover hidden bg-no-repeat bg-[url(photos/springboot.png)] skill rounded-lg"></div></a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-[80%] text-center items-center font-mono py-24 px-8">
                <h1 class="text-2xl font-semibold text-blue-600 mb-6"> About </h1>
                <p>A dedicated and certified full stack developer with a strong foundation in HTML, CSS, JavaScript, React, PHP, Laravel, Python, Django, and Java. Committed to delivering high-quality software solutions that meet client requirements and enhance user experiences. Skilled in developing and maintaining responsive web applications utilizing various frameworks and libraries.</p>
            </div>

            <div class="flex flex-col lg:w-[80%] w-[100%] text-center items-center font-mono px-8">
                <h1 class="text-2xl font-semibold text-blue-600 mb-6"> Connect with me </h1>
                <div class="grid lg:grid-cols-4 md:grid-cols-2 w-[100%] gap-4 lg:gap-10">
                    <a href="https://www.linkedin.com/in/granitbunjaku" target="_blank">
                        <div class="flex items-center gap-2 border-2 rounded border-blue-600 p-2">
                            <img class="w-12 rounded-md" src="photos/linkedin.png" alt="LinkedIn Logo">
                            <p>My LinkedIn</p>
                        </div>
                    </a>
                    <a href="https://github.com/granitbunjaku" target="_blank">
                        <div class="flex items-center gap-2 border-2 rounded border-blue-600 p-2">
                            <img class="w-12 rounded-md rounded-xl" src="photos/github.png" alt="Github Logo"> 
                            <p>My Github</p>
                        </div>
                    </a>
                    <a href="https://www.facebook.com/granit.bunjaku" target="_blank">
                        <div class="flex items-center gap-2 border-2 rounded border-blue-600 p-2">
                            <img class="w-12 rounded-md" src="photos/facebook.png" alt="Facebook Logo">
                            <p>My Facebook</p>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/granittbunjaku" target="_blank">
                        <div class="flex items-center gap-2 border-2 rounded border-blue-600 p-2">
                            <img class="w-12 rounded-md" src="photos/instagram.png" alt="Instagram Logo">
                            <p>My Instagram</p>
                        </div>
                    </a>
                </div>
            </div>

            <?php include('footer.php') ?>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>

        <script>
            $(document).ready(
                $(window).on('load', () => {
                    $(".text").fadeIn(1000)
                    
                    $(".skill").each(function(index) {
                        $(this).delay(100*index).fadeIn();
                    })
                })
            )
        </script>
    </body>
</html>