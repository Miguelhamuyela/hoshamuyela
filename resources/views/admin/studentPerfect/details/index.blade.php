
@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhe do Professor')
@section('content')



<br><b><br><b>

 <div class="dashboard-content-one">

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                  <h3>Perfeito dos Estudos</h3><hr>
                </div>
               
            </div>
            <div class="single-info-details">
                <div class="item-img">

                    <img src="/storage/{{ $student_perfects->image }}" alt="teacher">
                </div>
                <div class="item-content">


                    <div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                <tr>
                                    <td>ID:</td>
                                    <td class="font-medium text-dark-medium">{{ $student_perfects->id }}</td>
                                </tr>
                                <tr>
                                    <td>Nome:</td>
                                    <td class="font-medium text-dark-medium">{{ $student_perfects->name }}</td>
                                </tr>
                                <tr>
                                    <td>Apelido:</td>
                                    <td class="font-medium text-dark-medium">{{ $student_perfects->lastName }}</td>
                                </tr>
                                <tr>
                                    <td>Telefone:</td>
                                    <td class="font-medium text-dark-medium">{{ $student_perfects->tel }}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td class="font-medium text-dark-medium">{{ $student_perfects->email }}</td>
                                </tr>
                                <tr>
                                    <td>Grau Académico:</td>
                                    <td class="font-medium text-dark-medium">{{ $student_perfects->academic }}</td>
                                </tr>
                                <tr>
                                    <td>Data de Cadastro:</td>
                                    <td class="font-medium text-dark-medium">{{ $student_perfects->created_at }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Table Area End Here -->
    <footer class="footer-wrap-layout1">
        <div class="copyright">© Copyrights <a href="#">Séminário Maior de Benguela</a>Todos Direitos Reservados <a href="#">smb</a></div>
    </footer>
</div>
@endsection
