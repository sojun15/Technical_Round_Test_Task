<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Store Url</title>
</head>
<body class="bg-gray-100 min-h-screen  flex items-center justify-center">
    {{-- we define name route in this way: {{route('name')}} --}}
    <form action="{{ route('storeUrl') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md w-1/3">
        @csrf

        <h2 class="text-2xl font-semibold text-center mb-6">Store Url</h2>

        <!-- Input field for user id -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">User ID</label>
            <input type="number" name="user_id" class="w-full px-2 py-2 border rounded-md">
        </div>

        <!-- Input field for url id -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Url ID</label>
            <input type="number" name="url_id" class="w-full px-3 py-2 border rounded-md">
        </div>

        <!-- Input field for original url -->
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">Original Url</label>
            <input type="text" name="original_url" class="w-full px-3 py-2 border rounded-md">
        </div>

        <!-- Input field for shorter url -->
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">Shorter Url</label>
            <input type="text" name="shorter_url" class="w-full px-3 py-2 border rounded-md">
        </div>

        <!-- submit button section -->
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-green-500 transition">
            Submit
        </button>

    </form>

</body>
</html>
