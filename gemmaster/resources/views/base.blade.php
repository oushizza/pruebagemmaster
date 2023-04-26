<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="w-contain">
        <div class="w-full bg-purple-500 flex justify-center h-20 text-white items-center text-lg">
            Productos
        </div>
        <div class="bg-white flex flex-row">
            
            <div class="w-full   justify-center items-center">
                <div class="flex flex-row justify-center  items-center">
                    
                    <a class="p-2 border border-gray-200 text-black m-2" href="{{ route('productos-disponibles') }}">Bienes disponibles</a>
                    
                        
                    
                </div>
                <div class="w-full h-screen bg-gray-200 m-2 flex  flex-col ">
                    @yield('content')
                </div>
                
            </div>
        </div>
        
    </div>
    
</body>
</html>