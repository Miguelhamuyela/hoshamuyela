<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        #footer {
            padding-top: 10px;
            padding-bottom: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body style='height:auto; width:100%; background: url("dashboard/assets/img/digital.canvas.png") no-repeat center;'>
hjhjhjhjhjhj



<header class="col-12 mt-2 mb-5">
    <center> <img class="img-center" src="dashboard/assets/img/digital.canvas.png" alt="" width="80"></center>



            <h3 class="text-center">HOSPITAL GERAL DE LUANDA</h3>


        </header>

        <section class="col-12">
            <b> Data </b> {{$star_students->created_at}}  <br>
            <b> Processo Nº {{$star_students->id}} </b>       <br>

            <b> Nome do Paciente</b> :{{$star_students->name}} <br> <b> Idade</b> : {{$star_students->name}}<br>
            <b> Nacionalidade</b> : {{$star_students->name}} <br>
              <b>  Profissão</b> :  {{$star_students->name}}<br>
                <b> Ocupação</b>  :{{$star_students->name}} <br>
                  <b>De onde Vem</b> : {{$star_students->name}}<br>
                   <b>Localização</b> : {{$star_students->name}} <br />
            <b> Filho de </b> {{$star_students->father}}   <b> e de </b>  {{$star_students->name}}  <b>    <br />
               <b>Telefone</b> :{{$star_students->tel}}<br>
               <b>OBS </b> :  {!! html_entity_decode($star_students->name ) !!}
        </section>

        <section class="col-12">
            <b> Data </b> {{$star_students->created_at}}  <br>
            <b> Código da Consulta: {{$star_students->id}} </b>       <br>

             <b> Nome do Paciente</b> :<br> <b> Idade</b> : {{$star_students->name}}<br> <br> <br>
             <b>    Receita:


                {!! html_entity_decode($star_students->name) !!}

           </b>


    <div class="pt-5"><p class="text-center"> <b>Assinatura:</b> <br>
    _____________________________________<br>
        <b> {{$star_students->name }}:</b></div>


        <br>
    </p>

        </section>


        <footer class="col-12 mt-2" id="footer">
            <div class="text-right">
                <img src="dashboard/assets/img/digital.canvas.png" width="130">
            </div>
        </footer>
    </body>

    </html>



