<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <!-- Input field for user id -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">User ID</label>
            <input type="text" name="user_id" class="w-full px-2 py-2 border rounded-md">
        </div>

        <!-- Input field for password -->
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Password
            </label>
            <input type="password" name="password" class="w-full px-3 py-2 border rounded-md">
        </div>

        <!-- signUp button section -->
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-green-500 transition">
            login
        </button>
    </form>
</body>
</html>