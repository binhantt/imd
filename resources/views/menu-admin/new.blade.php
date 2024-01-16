<dialog id="my_modal_1" class="modal w-[70vw] h-[70vw] p-[2vw]">
    <form method="dialog" class="modal-backdrop w-full ">
        <div class="flex justify-end">
            <button class="border-2  rounded-full bg-blue-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 ">
                <i class="fa-solid fa-xmark text-white"></i>
            </button>
        </div>
        <div class="flex justify-center">
            <h1 class="text-blue-800 text-[2vw] font-bold ">

            </h1>
        </div>
    </form>
    <form action="{{ route('products/mewpost') }}" method="post" class="w-full">
        @csrf
        <div class=" w-full">
            <div class="relative mb-6">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <i class="fa-solid fa-signature"></i>
                </div>
                <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="TÊN SẢN PHẨM" require>
            </div>
            <div class="relative mb-6">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <i class="fa-solid fa-money-bill"></i>
                </div>
                <input type="number" id="gia" name="gia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="GIá" required>
            </div>

            <!-- <div class="relative mb-6">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <i class="fa-solid fa-signature"></i>
                </div>
                <input type="text" id="input-group-1" name="sort" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Loại">
            </div> -->
            <div class="flex flex-col ">
                <div class="flex mb-6 items-center justify-center w-full">
                    <label for="img" class="flex flex-col items-center justify-center w-full h-24 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> img</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="img" name="img" type="file"  />
                    </label>
                </div>
                <div class="relative mb-6 h-[14vw]">
                    <textarea id="des" name="des" class="w-[20vw] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="mota"></textarea>
                </div>
                <div>
                    <input type="hidden" value="0" name="update" id="update">
                    <input type="hidden" value="0" name="id" id="id">
                    <button type="submit" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Thêm
                    </button>
                </div>
            </div>

    </form>
</dialog>