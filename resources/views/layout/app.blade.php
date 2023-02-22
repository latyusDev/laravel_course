<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
   @yield('content')

   <x-flash/>
</body>
<script>
    const btn = document.querySelector('.cancel')
    const flash = document.querySelector('.flash')
    btn.addEventListener('click', ()=>{
        flash.classList.add('hidden')

    }) 
   
</script>
</html>