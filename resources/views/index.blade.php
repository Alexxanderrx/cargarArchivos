<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=5" />
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Upload a File</title>
</head>

<body>
    <div class="flex flex-col justify-center items-center w-screen h-screen bg-[#fafafb]">
        <form style="font-family: 'Poppins', sans-serif;"
            class="flex flex-col justify-around items-center w-[400px] h-[200px] bg-white rounded-xl border p-6 shadow-lg shadow-gray-200 "
            action="api/upload" method="POST">
            <h1 class="text-lg font-medium text-[#4F4F4F]">Upload your file</h1>
            <p class="text-xs text-gray-500">Sin archivos seleccionados (Máximo: 40MB)</p>
            <input type="file" id="uploadFile" name="uploadFile" class="hidden" />
            <div class="flex justify-around w-full">
                <label for="uploadFile" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-xl">
                    Choose a file
                </label>
                <input id="sub" type="submit"
                    class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded-xl" value="UPLOAD" />
            </div>
        </form>
        <div class="absolute bottom-0 text-[#A9A9A9]">created by
            <u><a href="https://github.com/Alexxanderrx">Alexxanderrx</a></u>
        </div>
    </div>
</body>

</html>
