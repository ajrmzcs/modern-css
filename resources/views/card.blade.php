<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/card.css">

    <link rel="stylesheet" href="">
</head>
<body class="flex items-center justify-center">
    <div class="card flex rounded">

        {{--left--}}
        <div class="card-left flex flex-col justify-between rounded p-6 items-center text-center text-white">
            <a href="#" class="card-skill-button text-xs rounded-full py-1 px-6">PHP</a>

            <img
                src="https://laracasts.s3.amazonaws.com/series/thumbnails/testing-jargon.png"
                alt="" width="120px" height="120px">

            <span class="card-difficulty text-xs">Intermediate Difficulty</span>

        </div>

        {{--right--}}
        <div class="card-right flex flex-col text-gray-600 p-6">
            <h3 class="card-title text-black font-light text-3xl mb-3"><a href="#">Testing Jargon</a></h3>
            <p class="card-excerpt flex-1">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda autem deserunt libero quod rem, vel
                vero.
            </p>
            <div class="card-meta flex text-sm">
                <div class="flex items-center mr-4">
                    <img
                        src="/images/icons/books.svg"
                        alt=""
                        width="15px"
                        height="15px"
                        class="mr-2"
                    >
                    5 lessons
                </div>
                <div class="flex items-center">
                    <img
                        src="/images/icons/clock.svg"
                        alt=""
                        width="15px"
                        height="15px"
                        class="mr-2"
                    >
                    53:10 min
                </div>
            </div>
        </div>

    </div>
</body>
</html>
