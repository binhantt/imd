<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title> {{$title}}</title>
</head>

<body>
    <div class="flex flex-col w-[100vh] h-[100vh]">
        <div class="w-[100vh] h-[20vh]">
            @include("page/nabar")
        </div>
        <div class="w-[40vh] h-[85.6vh] bg-gray-50 flex overflow-hidden bg-white pt-16">
            <div>
                @include("page/sibar")

            </div>
            <div class="bg-gray-50 w-[40vh] h-ful ml-[200vh]">
                @include($template)
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var userMenuButton = document.getElementById("user-menu-button");
        var userMenu = document.getElementById("user-menu");

        userMenu.classList.remove("hidden");

        userMenuButton.addEventListener("click", function() {
            userMenu.classList.toggle("hidden");
        });

        document.addEventListener("click", function(event) {
            var targetElement = event.target;
            if (!userMenu.contains(targetElement) && !userMenuButton.contains(targetElement)) {
                userMenu.classList.add("hidden");
            }
        });
    });
</script>

</html>