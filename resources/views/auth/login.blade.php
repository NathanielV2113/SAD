<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Mctrish Customs</title>
</head>

<body style="font-family: PT Sans; background-color: #1E252B; color: #fff; justify-items:center;">
    <div class="flex flex-col justify-center px-6 py-12" style="background-color: #262D34; margin-top: 10%; width:600px; border-radius: 30px;">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-20 w-auto" src="{{ url('/img/logo.png') }}" alt="no logo">
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
            <form class="space-y-6" action="{{route('login.auth')}}" method="POST">
            @csrf
            @method('post')
                <div>
                    <label for="email" class="block text-sm/20 font-medium">Email address</label>
                    <div class="mt-2">
                        <input name="email" type="email" autocomplete="email" required class="block w-full border-0 px-4 py-4 text-gray-900 shadow-sm ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/14" style="border-radius: 30px;">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/20 font-medium ">Password</label>
                    </div>
                    <div class="mt-2">
                        <input name="password" type="password" autocomplete="current-password" required class="block w-full border-0 px-4 py-4 text-gray-900 shadow-sm ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/14" style="border-radius: 30px;">
                    </div>
                </div>
                <div div class="text-sm">
                    <a href="#" style="color:#387ADF;" class="font-semibold hover:text-indigo-500">Forgot password?</a>
                </div>

                <div style="justify-items: center;">
                    <button style="background-color: #3E4AA8; border-radius: 30px;" type="submit" class="flex  justify-center px-20 py-4 text-sm/20 font-bold text-white shadow-sm hover:bg-red-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log in</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/20 text-white-500">
                Don't have an account?
                <a href="{{route('register')}}" style="color: #387ADF;" class="font-semibold hover:text-cyan-500">Register</a>
            </p>
        </div>
    </div>
</body>

</html>