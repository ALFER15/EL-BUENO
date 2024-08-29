<x-app-layout>
     <div class="text-4xl font-extrabold text-red-600 dark:text-white">Listado de productos</div> <br>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripcion
                </th>
                <th scope="col" class="px-6 py-3">
                    Precio
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><a href="{{route('producto.create')}}">Crear</a></button>
            @foreach($products as $product)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="{{route('producto.show',$product->id)}}">{{$product->name}}</a>
                </th>
                <td class="px-6 py-4">
                    <a href="/show-producto">{{$product->desc}}</a>
                </td>
                <td class="px-6 py-4">
                    <a href="/show-producto">{{$product->price}}</a>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}}
</div>
    <br>
</x-app-layout>
<x-app-layout>
    <div class="text-4xl font-extrabold text-blue-600 dark:text-white mb-4">Listado de productos</div>
    
    <div class="flex justify-end mb-4">
        <button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
            <a href="{{route('producto.create')}}">Crear</a>
        </button>
    </div>
    
    <div class="relative overflow-x-auto shadow-lg rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Descripción</th>
                    <th scope="col" class="px-6 py-3">Precio</th>
                    <th scope="col" class="px-6 py-3 text-right"><span class="sr-only">Editar</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        <a href="{{route('producto.show', $product->id)}}" class="hover:underline">{{$product->name}}</a>
                    </th>
                    <td class="px-6 py-4">
                        <a href="/show-producto" class="hover:underline">{{$product->desc}}</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="/show-producto" class="hover:underline">{{$product->price}}</a>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('producto.create', ['product' => $product->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="mt-4">
        {{$products->links()}}
    </div>
</x-app-layout>