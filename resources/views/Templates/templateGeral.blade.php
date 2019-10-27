<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title}}</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body, h1 {
                background-image: url("imagens/capas/fundo.jpg");
                color: #DEB887;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-repeat:no-repeat;
                background-attachment:fixed;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 20px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .imagem{
                width:150px;
                height:230px;
                float:left;
                margin-right:25px;
                margin-top:25px;
                border-style: groove;
            }

            li{
                width:150px;
            }

            footer
            {
                
                bottom: 0;   /* Fixa a div no fim da página */
                height: 10%;   /* Altura da div */
                color: #DEB887;
                text-align:;
                font-size:35px;
                margin-top:700px;
                margin-bottom:0px;
                font-weight: bold;
                background-color:rgba( 102, 80, 54, 0.5 );
             }

             input{
                 border-color:#636b6f;
                 border-style: groove;
                 
             }
             
             button{
                background-color:rgba( 102, 80, 54, 0.5 );
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
             }
             
             .buttonIconTrash{

                 background-image:url("icons/png/trash-2x.png");
                 background-repeat:no-repeat;
                 background-position:center;
                 background-color:rgba( 0, 0, 0, 0.0 );
             }
             .buttonIconPencil{

                background-image:url("icons/png/pencil-2x.png");
                background-repeat:no-repeat;
                background-position:center;
                background-color:rgba( 0, 0, 0, 0.0 );
            }

             th,tr{
                
                color:#DEB887;

             }

            form{

                 color:black;
                 width:540px; 
             }

            .input{
                margin-bottom:10px;
                width: 540px;
                
            }
            textarea{
                width: 540px;
            }

        </style>
    </head>

    <body>

        <div class="container">
        
            @yield('content')
        
        </div>

    </body>
    
</html>
