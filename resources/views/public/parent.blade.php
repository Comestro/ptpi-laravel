<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    @vite('resources/js/app.js')

    @livewireStyles

</head>

<body>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <x-sidebar />


        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <x-navbar />


            <main class="flex-1 p-4">
                
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @livewireScripts
</body>
</html>