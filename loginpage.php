<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Dynamic Pricing System</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

  <div class="bg-white p-8 rounded-2xl shadow w-96">
    <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

    <form class="space-y-4">
      <input type="email" placeholder="Email" class="w-full p-2 border rounded" required />
      <input type="password" placeholder="Password" class="w-full p-2 border rounded" required />
      <button class="w-full bg-blue-500 text-white p-2 rounded">Login</button>
    </form>

    <p class="text-center mt-4 text-sm">
      Don't have an account?
      <a href="#signup" class="text-blue-500">Sign Up</a>
    </p>
  </div>

</body>
</html>