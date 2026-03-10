<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ config('app.name', 'Laravel') }}</title>

<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet"/>

<style>
body{
font-family: 'Cairo', sans-serif;
}
</style>

</head>

<body class="bg-gray-100">

{{ $slot }}

</body>
</html>
