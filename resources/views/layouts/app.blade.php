<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="tailwind.min.css">
    @livewireStyles
</head>

<body>

    <div class="container mx-auto md:px-10">
        <h1 class="text-3xl text-center my-10">User1</h1>
    </div>

    <div class="container mx-auto md:px-12">
        {{ $slot }}
    </div>

    @livewireScripts
</body>

</html>