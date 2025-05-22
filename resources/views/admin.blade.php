{{-- <div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
 <h2>Hello Welcome  {{$name}}</h2>

</div> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-white shadow-md px-4 py-3 flex justify-between">
        
        <div class="text-lg font-bold hover:text-blue-700">
            Quiz System App
        </div>
        <div class="flex space-x-4">
            <a class="text-grey-700 hover:text-blue-700" href="">Category</a>
            <a class="text-grey-700 hover:text-blue-700" href="">Quiz</a>
            <a class="text-grey-700 hover:text-blue-700" href="">Welcome {{$name}}</a>
            <a class="text-grey-700 hover:text-blue-700" href="">Login</a>
            <a class="text-grey-700 hover:text-blue-700" href="/logout">Logout</a>
        </div>
        
    </nav>
    
</body>
</html>
