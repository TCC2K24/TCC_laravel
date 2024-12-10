<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Certificado</title>
    <style type='text/css'>
    
            .container {
             text-align: center;
            border:solid;
            padding: 2%;
            background-color: lightcyan;
            }
            .corpo{
                margin-top: 15%;
                margin-bottom: 20%;
                font-size: 150%;
            }
          .footer{
            font-size:125%;
            display:inline;
            text-align: right;
          }
          h1{
            margin-top: 5%;
            font-size: 40;
          }
    </style>
</head>
<body>
    <div class="container">
        <h1>CERTIFICADO</h1>
        <p class="corpo">
            O discente portador do GRR{{ $GRR}} participou das Pesquisas de Avaliação de Disciplinas, realizado no período de {{$inicio}} a {{$fim}}, 
            organizado pela Comissão Própria de Avaliação da Universidade Federal do Paraná, totalizando {{$minutos}} minutos ({{number_format($horas, 2)}}
            horas) de carga horária.
        </p>
        <footer class="footer">
            <p>Comissão Própria de Avaliação</p>
            <p>{{date('d/m/Y')}}</p>
           </footer>
    </div>
   
    
</body>
</html>