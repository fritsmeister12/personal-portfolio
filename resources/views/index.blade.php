<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/01c0a35ff3.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 16pt;
            line-height: 1.5714;
            background-color: #282a36;
            color: #f8f8f2;
            position: relative;
        }

        a {
            color: #c9a7fa;
            text-decoration-line: underline;
        }
    </style>
    <title>matthew — developer</title>
</head>
<body style="background-color: #282a36">
    <div class="container mx-auto lg:px-24 lg:mt-40 mt-8 px-8">

        {{-- Bio section --}}
        <h1 class="text-4xl">matthew groenendijk</h1>

        <section class="mt-8">
            <p class="px-1 lg:text-xl font-bold lg:w-max" style="background-color: #363948; font-family: monospace">frontend developer, student, <a href="https://www.google.com/maps/place/Rotterdam/@51.9285966,4.4219903,12.14z/data=!4m5!3m4!1s0x47c5b7605f54c47d:0x5229bbac955e4b85!8m2!3d51.9244201!4d4.4777326" target="_blank">rotterdam</a></p>
            <dl class="mt-4">
                <div class="text-xl lg:text-2xl">
                    <dt class="inline">email:</dt>
                    <dd class="inline"><a href="mailto:contact@matthewgroenendijk.com">contact@matthewgroenendijk.com</a></dd>
                </div>
                <div class="text-xl lg:text-2xl">
                    <dt class="inline">projects i've worked on:</dt>
                    <dd class="inline"><a href="https://loopreizen.nl" target="_blank">loopreizen.nl</a>, <a href="https://globalrunning.com" target="_blank">globalrunning.com</a>, <a href="https://loopreizenradio.nl" target="_blank">loopreizenradio.nl</a></dd>
                </div>
                <div class="text-xl lg:text-2xl">
                    <dt class="inline">own projects:</dt>
                    <dd class="inline"><a href="#" target="_blank">coming soon</a></dd>
                </div>
                <div class="text-xl lg:text-2xl">
                    <dt class="inline">others:</dt>
                    <dd class="inline"><a href="https://www.linkedin.com/in/matthew-groenendijk-5b0753177/" target="_blank">linkedin</a>, <a href="https://github.com/fritsmeister12" target="_blank">github</a></dd>
                </div><div class="text-xl lg:text-2xl">
                    <dt class="inline">current status:</dt>
                    <dd class="inline p-1 font-bold lg:text-xl" style="background-color: #363948; font-family: monospace"><a href="https://loopreizen.nl" target="_blank">on intership</a></dd>
                </div>
            </dl>
        </section>

        {{-- Posts section --}}
        <div class="mt-8">
            <div class="mb-8"> 
                <h2 class="inline text-3xl">projects</h2>
                <h3 class="inline ml-2"><a href="#" target="_blank"><i class="fas fa-pizza-slice" style="color: #ffb86c;"></i></a></h3>
            </div>
            <ul class="text-xl lg:text-2xl">
                {{-- @foreach ($posts as $post) --}}
                <li class="my-4">
                    <time class="block lg:text-xl" datetime="2021-02-24">24 February 2021</time>
                    <a href="#" class="inline-block">My intership at loopreizen.nl recap</a>
                </li>

                <li class="my-4">
                    <p class="text-gray-600 text-sm" style="font-family: monospace">More content coming soon!</p>
                </li>
                {{-- @endforeach --}}
            </ul>
        </div>
    </div>
</body>
</html>