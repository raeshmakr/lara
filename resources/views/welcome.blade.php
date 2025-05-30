<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 antialiased font-sans">
    <div class="min-h-screen flex flex-col justify-center items-center">
        <h1 class="text-5xl font-bold mb-6">Welcome to Lara App</h1>
        <p class="text-lg text-gray-600">Built with Passion</p>
        <a href="{{ url('/dashboard') }}" class="mt-6 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Go to Dashboard</a>
    </div>
</body>
</html>
