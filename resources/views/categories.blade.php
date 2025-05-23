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
     {{-- <x-navbar :name="$name"></x-navbar> --}}
        @if (Session::has('category'))
         <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
              <span class="block sm:inline">{{Session::get('category')}}</span>
         </div>
        @endif
        <div class="bg-gray-100 flex items-center flex-col min-h-screen pt-5">
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
                        @error('category')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
        
                      <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-md">Add</button>
                </form>
            </div>
             
            <div class="bg-white p-1 rounded-2xl shadow-lg w-200 max-w-md">
                <h2 class="text-2xl font-bold mb-4 text-center text-gray-800">Category List</h2>
                <ul>
                    <li class="border p-2 font-bold">
                        <ul class="flex justify-between">
                            <li class="w-30">S.No</li>
                            <li class="w-70">Name</li>
                            <li class="w-70">Creator</li>
                            <li class="w-30">Action</li>
                        </ul>
                    </li>
                    @foreach ($categories as $category) 
                    <li class="border even:bg-gray-200 p-2">
                        <ul class="flex justify-between">
                            <li class="w-30">{{$category->id}}</li>
                            <li class="w-70">{{$category->name}}</li>
                            <li class="w-70">{{$category->creator}}</li>
                            <li class="w-30">
                                <a href="/category/delete/{{$category->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#1f1f1f"><path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z"/></svg>
                                </a>
                                
                            </li>
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>  
</body>
</html>

