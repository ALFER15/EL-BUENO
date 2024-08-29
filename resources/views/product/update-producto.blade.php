<x-app-layout>
    <div class="mt-6">
        <button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
            <a href="{{route('producto.index')}}">Regresar</a>
        </button>
    </div>
    
    <div class="mt-3"></div>
    
    <form action="{{ route('producto.store') }}" method="POST" class="max-w-sm mx-auto bg-white p-6 rounded-lg shadow-md dark:bg-gray-800">
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-bold text-blue-700 dark:text-white">Nombre Producto</label>
            <input  placeholder="{{$LastProduct->name}}" type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        
        <div class="mb-5">
            <label for="branch" class="block mb-2 text-sm font-bold text-blue-700 dark:text-white">Marca</label>
            <input  placeholder="{{$LastProduct->name}}" type="text" id="branch" name="branch" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        
        <div class="mb-5">
            <label for="product_number" class="block mb-2 text-sm font-bold text-blue-700 dark:text-white">Número de Producto</label>
            <input  placeholder="{{$LastProduct->name}}" type="text" id="product_number" name="product_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        
        <div class="mb-5">
            <label for="price" class="block mb-2 text-sm font-bold text-blue-700 dark:text-white">Precio</label>
            <input  placeholder="{{$LastProduct->name}}" type="text" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        
        <div class="mb-5">
            <label for="desc" class="block mb-2 text-sm font-bold text-blue-700 dark:text-white">Descripción</label>
            <textarea placeholder="{{$LastProduct->desc}}" id="desc" name="desc" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Descripción del producto..."></textarea>
        </div>
        
        <div class="mb-5 text-center">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Guardar</button>
        </div>
    </form>
</x-app-layout>