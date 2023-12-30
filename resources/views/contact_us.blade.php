<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Success Message Styles */
        .alert-success {
            background-color: #4CAF50; /* Green background color */
            color: #fff; /* White text color */
            font-weight: bold; /* Bold text */
            padding: 15px; /* Padding for better readability */
            border-radius: 5px; /* Rounded corners */
            margin-bottom: 15px; /* Margin between alerts */
        }

        /* Error Message Styles */
        .alert-danger {
            background-color: #FF6347; /* Red background color */
            color: #fff; /* White text color */
            font-weight: bold; /* Bold text */
            padding: 15px; /* Padding for better readability */
            border-radius: 5px; /* Rounded corners */
            margin-bottom: 15px; /* Margin between alerts */
        }

    </style>
</head>
<body>
<section class="text-gray-600 body-font bg-yellow-100">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Super Champ Competition (Go Back To Form)</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container flex flex-col md:flex-row lg:max-w-5xl w-full px-5 py-12 md:py-24 mx-auto section" id="contact-form">
        <div class="md:w-1/3 w-full">
            <h1 class="text-4xl text-gray-800 sm:text-4xl font-bold title-font mb-4">Contact Us</h1>
            <p class="leading-relaxed text-xl text-gray-900">
            In order to resolve a complaint regarding the Services or to receive further information regarding use of the Services, please contact us at:
                <br><br>
                You can also email us. Click here to reveal email address
                   <a href="{{ route('home') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Super Champ Competition</a>
            </p>
            
            <p class="leading-relaxed text-xl text-gray-900">
                <a href="#" >Mob:</a>7988223255, 9050851556
            </p>
            
        
            <p> <a href="#">Email : sjsjsociety@gmail.com </a> </p>
            
            <p class="leading-relaxed text-xl text-gray-900">
                <a href="#" >Address :</a> Shikshit Jivan Surkshit Jivan Society Bure
                <br>
                Haryana, ( 125001 )
                <br
            Email : 'sjsjsociety@gmail.com'
            </p>
            
            <p class="leading-relaxed text-xl text-gray-900 mt-8">
                <a href="{{route('terms.policies')}}">Terms & policies</a>  /  <a href="{{route('home')}}">Back To Form</a>
            </p>
            
        </div>
        <div class="md:w-2/3 w-full mt-10 md:mt-0 md:pl-28">

            <h1 class="text-4xl text-gray-800 sm:text-4xl font-bold title-font mb-4">Contact Us</h1>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <form action="{{ route('contact.save') }}" method="post" id="submit-contact-form">
                @csrf
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="name" class="leading-7 py-4 text-lg text-gray-900">Your Name</label>
                        <input type="text" id="name" name="name" required="" class="w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="email" class="leading-7 py-4 text-lg text-gray-900">Your Email</label>
                        <input type="email" id="email" name="email" required=""
                            class="w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="message" class="leading-7 py-4 text-lg text-gray-900">Your Message</label>
                        <textarea id="message" name="message" required=""
                            class="w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-900 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out "></textarea>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <button type="submit"
                        class="flex text-white bg-gray-900 border-0 py-4 px-6 focus:outline-none hover:bg-blue-900 rounded text-xl font-bold shadow-lg mx-0 flex-col text-center g-recaptcha">
                        Send Message ✉
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>