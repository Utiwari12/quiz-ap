<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4 text-center text-gray-800">Admin Login</h2>
        @error('user')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        <form action="/admin-login" method="post" class="space-y-4">
            @csrf
            <div>
            <label for="" class="text-gray-700">Admin Name:</label>
            <input type="text" placeholder="Enter Admin Name" name="name" 
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div>
            <div>
            <label for="" class="text-gray-700">Password:</label>
            <input type="password" placeholder="Enter Password" name="password" 
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500">
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div>
            <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-md">Login</button>
        </form>
    </div>
</body>
</html>
