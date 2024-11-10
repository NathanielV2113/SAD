<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Mctrish Customs</title>
</head>

<body style="font-family: PT Sans; background-color: #1E252B; color: #fff; justify-items:center;">
    <div class="flex flex-col justify-center px-6 py-12" style="background-color: #262D34; margin-top: 4%; width:600px; border-radius: 30px;">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm" style="text-align:center;">
            <h1 class="font-bold" style="font-size:38px; color: #F3A847;">Sign Up</h1>
        </div>
        <!-- <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>


        @endif
        </div> -->
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-4" action="{{route('register.auth')}}" method="POST">
                @csrf
                @method('post')
                <div>
                    <label for="first_name" class="block text-sm/20 font-medium">Firstname</label>
                    <div class="mt-2">
                        <input name="first_name" type="text" required class="block w-full border-0 px-4 py-4 text-gray-900 shadow-sm ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/14" style="border-radius: 30px;">
                    </div>
                    @error('first_name')
                    <span class="text-red-500">{{ $errors->first('first_name') }}</span>
                    @enderror
                </div>
                <div>
                    <label for="last_name" class="block text-sm/20 font-medium">Lastname</label>
                    <div class="mt-2">
                        <input name="last_name" type="text" required class="block w-full border-0 px-4 py-4 text-gray-900 shadow-sm ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/14" style="border-radius: 30px;">
                    </div>
                    @error('last_name')
                    <span class="text-red-500">{{ $errors->first('last_name') }}</span>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm/20 font-medium">Email address</label>
                    <div class="mt-2">
                        <input name="email" type="text" required class="block w-full border-0 px-4 py-4 text-gray-900 shadow-sm ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/14" style="border-radius: 30px;">
                    </div>
                    @error('email')
                    <span class="text-red-500">{{ $errors->first('email') }}</span>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/20 font-medium ">Password</label>
                    </div>
                    <div class="mt-2">
                        <input name="password" type="password" required class="block w-full border-0 px-4 py-4 text-gray-900 shadow-sm ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/14" style="border-radius: 30px;">
                    </div>
                    @error('password')
                    <span class="text-red-500">{{ $errors->first('password') }}</span>
                    @enderror
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password_confirmation" class="block text-sm/20 font-medium ">Confirm Password</label>
                    </div>
                    <div class="mt-2">
                        <input name="password_confirmation" type="password" required class="block w-full border-0 px-4 py-4 text-gray-900 shadow-sm ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/14" style="border-radius: 30px;">
                    </div>
                    @error('password_confirmation')
                    <span class="text-red-500">{{ $errors->first('password_confirmation') }}</span>
                    @enderror
                </div>

                <div style="justify-items: center;">
                    <button style="background-color: #3E4AA8; border-radius: 30px;" type="submit" class="mt-10 flex justify-center px-20 py-4 text-sm/20 font-bold text-white shadow-sm hover:bg-red-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>
            </form>

            <p class="mt-3 text-center text-sm/20 text-white-500">
                Already have an account?
                <a href="{{route('login')}}" style="color: #387ADF;" class="font-semibold hover:text-cyan-500">Login</a>
            </p>
        </div>
    </div>
</body>

</html>