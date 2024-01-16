<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.ckeditor.com/4.16.0/standard-all/ckeditor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard-all/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="jquery.js"></script>
    <script src="ckeditor.js"></script>
    <script src="adapters/jquery.js"></script>

    <title>{{$title}}</title>
</head>

<body>
    <div class="flex flex-col w-[100vh]">
        <div class="w-[100vh] ">
            @include("Admin/nabar")
        </div>
    </div>
    <div class="flex bg-gray-50 w-full min-h-[100vh] h-full pt-[10vh]">
        <div class="w-[16rem] h-full">
            @include("Admin/sibar")
        </div>
        <div class="w-[calc(100vw-16rem)] h-full bg-gray-50 h-full flex justify-center items-center">
            <div class="w-[95%] h-[95%] flex justify-center items-center">
                @include($template)
            </div>
        </div>
    </div>
    @include ("menu-admin/new")
    <script src="http://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>
<script src="{{ asset('js/admin.js') }}"></script>
</html>