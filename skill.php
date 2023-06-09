<?php
    $_SESSION['PAGE'] = "Skill";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Granit Bunjaku | <?= $_SESSION['PAGE'] ?></title>
</head>
<body>
    
    <div class="flex flex-col items-center pt-12">
        <div class="lg:w-[50%] w-[70%]">
            <h1 class="text-2xl font-semibold text-blue-600 language"></h1>
            <h1 class="text-3xl font-semibold mt-4 title"></h1>
            
            <img class="w-[100%] lg:rounded-3xl rounded-2xl mt-12 photo">

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-12">
                <div>
                    <h1 class="text-lg font-semibold text-blue-600 mb-4">Overview</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut atque inventore eum nihil facilis provident quo. Nostrum nam voluptatem, laboriosam vitae natus quidem placeat dolores odit? Ipsam quam eos odit.</p>
                </div>
                
                <div>
                    <h1 class="text-lg font-semibold text-blue-600 mb-4">Approach</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut atque inventore eum nihil facilis provident quo. Nostrum nam voluptatem, laboriosam vitae natus quidem placeat dolores odit? Ipsam quam eos odit.</p>
                </div>
            </div>
        </div>
        
        <?php include('footer.php') ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module">
        import skills from './skills.json' assert { type: 'json' }; 
        const params = window.location.search;
        const urlParams = new URLSearchParams(params)
        const id = urlParams.get('id');
        const skill = skills.find(skill => skill.id == id);

        $(document).ready(function() {
            $('.photo').attr('src', skill.photo)
            $('.language').text(skill.language)
            $('.title').text(skill.title)
        });
    </script>
</body>
</html>