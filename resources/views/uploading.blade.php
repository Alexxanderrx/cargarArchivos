<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
  maximum-scale=5" />
    @vite('resources/css/app.css')
    @vite('resources/css/keyframe.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Uploading...</title>
</head>

<body class="flex flex-col justify-center items-center w-screen h-screen bg-[#fafafb]">
    <div style="font-family: 'Poppins', sans-serif;"
        class="flex flex-col justify-between w-[400.36px] h-[143.57px] bg-white rounded-xl border p-9 shadow-lg shadow-gray-200 ">
        <h1 class="text-left text-lg font-medium text-[#4F4F4F]">Uploading...</h1>
        <div class="h-1 w-full bg-neutral-200 rounded-md overflow-hidden">
            <div class="h-1 bg-blue-600 relative rounded-md " style="width: 30%; animation: avanzar 2s infinite;">
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 text-[#A9A9A9]">created by
        <u>
            <a href="https://github.com/Alexxanderrx">Alexxanderrx</a>
        </u>
    </div>
</body>

</html>

<script>
    setTimeout(function() {
        window.location.href = "/complete";
    }, 3000);
</script>
