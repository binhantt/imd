<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('images/user-solid.svg') }}">
    <title class="font-extrabold"> Đăng nhập Admin</title>
</head>

<body>
    <div class="">
        <div class="flex justify-between items-center h-[100vh] items-center ">
            <div class="bg-v">
                <img src="{{ asset('images/shopsell.vn.png') }}" alt="" class="ml-[20vh] w-[60vh] h-[60vh]">
            </div>
            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 items-center mr-[5vh] flex flex-col justify-center items-center border-solid border h-[100vh] p-[20vh]">
                <h1 class="block text-center text-white font-bold text-[2rem] ml-[5rem] mb-3 md:mb-3">Đăng nhập Admin</h1>
                <form action="{{ route('get') }}" method="POST" class="w-full max-w-sm">
                    {{ csrf_field() }}
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Tài khoản
                            </label>
                        </div>
                        <div class="md:w-[50vh]">
                            <input name="email" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Jane Doe">
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                Mật khẩu
                            </label>
                        </div>
                        <div class="md:w-[50vh]">
                            <input name="password" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="******************">
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6 w-[50vh] ml-[18vh]">
                        <label class="md:w-2/3 block text-white font-bold">
                            <input class=" p-[30vh] mr-2 leading-tight" type="checkbox">
                            <span class="text-sm">
                                Nhớ mật khẩu
                            </span>
                        </label>
                    </div>
                    <div class="md:flex md:items-center mb-6 w-[50vh] ml-[15vh]">
                        <div class="md:w-2/3">
                            <button class="shadow w-[40vh] bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                                Dăng nhập
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>
    </div>
    </section>
</body>
<style>

</style>

</html>