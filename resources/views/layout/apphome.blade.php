<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='description' content='Lasylab  première solution de 
    réussite scolaire au Cameroun nous accompagnons les élèves
     à combler leurs lacunes et à progresser facilement.' >
    <title>Lasylab-Cours en ligne, vidéos, épreuves de 6e en Terminale</title>
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,400;0,700;0,800;0,900;1,200;1,300&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->
    <link rel="stylesheet" href="bootstrap/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EWNDF4VDLL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EWNDF4VDLL');
</script>

</head>
<body>
     <div class="container-fluid">
    
     @yield('content')
    </div>  
    <script src ="{{asset('js/app.js')}}"></script>

</body>
</html>