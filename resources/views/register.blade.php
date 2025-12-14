<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - MySneakers</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-sm1.jpg') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-900 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white rounded-sm shadow-2xl overflow-hidden max-w-5xl w-full flex flex-col md:flex-row h-auto md:h-[650px]">
        
        <div class="hidden md:flex w-1/2 bg-cover bg-center relative flex-col justify-center px-12 text-white bg-[url('/images/regisimg.jpg')]">
            <div class="absolute inset-0 bg-black/30 backdrop-blur-[2px]"></div>
            
            <div class="relative z-10">
                <h1 class="text-5xl font-bold mb-4 leading-tight">Create your<br>Account</h1>
                <p class="text-lg text-gray-200 font-light">Join our community of sneakerheads and get exclusive access to the latest drops.</p>
            </div>
        </div>

        <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center relative">
            
            <div class="max-w-md mx-auto w-full">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center md:text-left">Sign Up</h2>

                <form action="register" method="POST" class="space-y-5">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div>
                        <input type="text" id="name" name="name" required placeholder="Full Name" 
                            class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 text-sm focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition placeholder-gray-400">
                    </div>

                    <div>
                        <input type="email" id="email" name="email" required placeholder="Email address" 
                            class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 text-sm focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition placeholder-gray-400">
                    </div>

                    <div>
                        <input type="password" id="password" name="password" required placeholder="Password" 
                            class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 text-sm focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition placeholder-gray-400">
                    </div>

                    <div class="flex items-center">
                        <input id="terms" type="checkbox" required class="w-4 h-4 text-black border-gray-300 rounded focus:ring-black">
                        <label for="terms" class="ml-2 block text-xs text-gray-500">
                            I agree to the <a href="#" class="text-black font-semibold hover:underline">Terms & Conditions</a>
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-black text-white font-semibold py-4 rounded-lg hover:bg-gray-800 transition transform hover:scale-[1.02] duration-200 flex items-center justify-center gap-2">
                        Create Account
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
                
                <p class="mt-8 text-center text-sm text-gray-500">
                    Already have an account? 
                    <a href="/login" class="text-black font-semibold hover:underline">Log In</a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>