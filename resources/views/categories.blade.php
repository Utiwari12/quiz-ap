{{-- <div>
    <h2>Admin Category</h2>
</div> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Categories</title>
    @vite('resources/css/app.css')
</head>
<body >
   <x-navbar name={{$name}}></x-navbar>
   @if (Session::has('category'))
   <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
    <span class="block sm:inline">{{Session::get('category')}}</span>
   </div>
   @endif
   <div class="bg-gray-100 flex items-center justify-center pt-12">
   <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold mb-4 text-center text-gray-800">Add Categories</h2>
    {{-- @error('user')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror --}}
    <form action="/add-category" method="post" class="space-y-4">
        @csrf
        <div>
        {{-- <label for="" class="text-gray-700">Add Category:</label> --}}
        <input type="text" placeholder="Enter Category Name" name="category" 
        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500">
        {{-- @error('name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror --}}
        </div>
        
        <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-md">Add</button>
    </form>
</div>
  </div>  
</body>
</html>

