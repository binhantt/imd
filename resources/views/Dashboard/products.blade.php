<div class="overflow mt-5 ">
    <div class="flex justify-center flex-col bg-white p-4 rounded-md">
        <div class="flex flex-col w-full">
            <div class="flex justify-center">
                <h1 class="text-blue-500 font-bold text-3xl mb-2">Danh Sách Sản phẩn </h1>
            </div>
            <div class=" p-2">
                <button type="button" onclick=" created()" class="text-white bg-blue-700 hover:bg-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">THÊM</button>
            </div>
        </div>

        <table id="myTable" class="display" style="width:100%">
            <thead class=" text-xs text-gray-700 uppercase bg-white dark:bg-white">
                <tr>
                    <th scope="col" class=" px-6 py-3 nosort">
                        id
                    </th>
                    <th scope="col" class="  px-6 py-3">
                        tên sản phẩm
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        loai
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        gia
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        img
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        mota
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class=" 2  px-6 py-3">
                        Thao tac
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $val_product)

                <tr class="bg-white  dark:bg-white dark:border-white ">
                    <td class="px-6  py-4 ">
                        {{$val_product['id'] }}
                    </td>
                    <th scope="row" class=" px-6 py-4  py-4 ">
                        {{ $val_product['name'] }}
                    </th>
                    <td class="">
                        {{$val_product['cate_id ']  }}
                    </td>
                    <td class="">
                        {{$val_product['gia'] }}
                    </td>
                    <td class="px-6   py-4 w-[2vh]">
                        {{ $val_product['img'] }}

                    </td>
                    <td class=" ">
                        {{ $val_product['des']}}

                    </td>
                    <td class="px-6   py-4">

                    </td>
                    <td class="flex px-6  ">
                        <button itemid="{{$val_product['id']}}" onclick="updatedModel('{{json_encode($val_product)}}')" type="button" class="button-edit text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            SỬA
                        </button>
                        <button data-id="{{ $val_product['id'] }}" data-token="{{ csrf_token() }}" type="button" class="delete-button text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
                            XÓA
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
