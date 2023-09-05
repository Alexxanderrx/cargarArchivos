<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
  maximum-scale=5" />
    {{-- <link rel="icon" href="devchallenges.png" />
    <link rel="shortcut icon" type="image/x-icon" href="https://devchallenges.io/" /> --}}
    @vite('resources/css/app.css')
    {{-- <link href="../dist/output.css" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Uploading Complete</title>
</head>

<body class="flex flex-col justify-center items-center w-screen h-screen bg-[#fafafb]">
    <div style="font-family: 'Poppins', sans-serif;"
        class="flex flex-col justify-around items-center w-[400.36px] h-[270px] bg-white rounded-xl border p-9 shadow-lg shadow-gray-200 ">
        <svg class="animate-bounce h-10 w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="green"
            class="w-6 h-6">
            <path fill-rule="evenodd"
                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                clip-rule="evenodd" />
        </svg>

        <h1 class="text-lg font-medium text-[#4F4F4F]">Uploading Successfully!</h1>

        <a href="/" class="bg-blue-500 hover:bg-blue-700 text-white mr-1 py-2 px-4 rounded-xl text-sm">
            New Upload
        </a>

    </div>
    <div class="absolute bottom-0 text-[#A9A9A9]">created by
        <u>
            <a href="https://github.com/Alexxanderrx">Alexxanderrx</a>
        </u>
    </div>
</body>

</html>
