<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up - Dynamic Pricing System</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

  <div class="bg-white p-8 rounded-2xl shadow w-96">
    <h2 class="text-2xl font-bold text-center mb-6">Create Account</h2>

    <form class="space-y-4">
      <input type="text" placeholder="Full Name" class="w-full p-2 border rounded" required />
      <input type="email" placeholder="Email" class="w-full p-2 border rounded" required />
      <input type="password" placeholder="Password" class="w-full p-2 border rounded" required />
      <input type="password" placeholder="Confirm Password" class="w-full p-2 border rounded" required />
      <button class="w-full bg-green-500 text-white p-2 rounded">Sign Up</button>
    </form>

    <p class="text-center mt-4 text-sm">
      Already have an account?
      <a href="#login" class="text-blue-500">Login</a>
    </p>
  </div>

</body>
</html>