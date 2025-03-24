@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhe do Reitor')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                   
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-info">
                                <h4>
                                    Perfil
                                    <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                                </h4>
                            </div>
                            <div class="student-profile-head">
                                <div class="profile-bg-img">
                                    <img src="/dashboard/assets/img/profile1.png" alt="Profile">
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="profile-user-box">
                                            <div class="profile-user-img">
                                                <img src="/dashboard/assets/img/profiles/avatar-18.jpg" alt="Profile" />
                                                <div class="form-group students-up-files profile-edit-icon mb-0">
                                                    <div class="uplod d-flex">
                                                        <label class="file-upload profile-upbtn mb-0">
                                                            <i class="feather-edit-3"></i><input type="file" />
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="names-profiles">
                                                <h4>{{ $rectors->name }}</h4>
                                                <h5>Electronics</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="student-personals-grp">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="heading-detail">
                                            <h4>Dados Pessoais :</h4>
                                        </div>
                                        <div class="personal-activity">
                                            <div class="personal-icons">
                                                <i class="feather-user"></i>
                                            </div>
                                            <div class="views-personal">
                                                <h4>Nome do Reitor</h4>
                                                <h5>{{ $rectors->name }}</h5>
                                            </div>
                                        </div>
                                        <div class="personal-activity">
                                            <div class="personal-icons">
                                                <i class="feather-phone-call"></i>
                                            </div>
                                            <div class="views-personal">
                                                <h4>Nº do Telefone</h4>
                                                <h5>{{ $rectors->phone }}</h5>
                                            </div>
                                        </div>
                                        <div class="personal-activity">
                                            <div class="personal-icons">
                                                <i class="feather-mail"></i>
                                            </div>
                                            <div class="views-personal">
                                                <h4>Email</h4>
                                                <h5>
                                                    {{ $rectors->email }}
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="personal-activity">
                                            <div class="personal-icons">
                                                <i class="feather-calendar"></i>
                                            </div>
                                            <div class="views-personal">
                                                <h4>Data de Nascimento</h4>
                                                <h5>{{ $rectors->dateBirth }}</h5>
                                            </div>
                                        </div>
                                        <div class="personal-activity">
                                            <div class="personal-icons">
                                                <i class="feather-italic"></i>
                                            </div>
                                            <div class="views-personal">
                                                <h4>Língua</h4>
                                                <h5>{{ $rectors->linguage }}</h5>
                                            </div>
                                        </div>
                                        <div class="personal-activity mb-0">
                                            <div class="personal-icons">
                                                <i class="feather-map-pin"></i>
                                            </div>
                                            <div class="views-personal">
                                                <h4>Endereço</h4>
                                                <h5>{{ $rectors->address }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="student-personals-grp">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="heading-detail">
                                            <h4>Acerca o Reitor</h4>
                                        </div>
                                        <div class="hello-park">
                                            <h5>Ola eu Sou{{ $rectors->name }}</h5>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex commodo consequat. Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse cillum dolore

                                            </p>
                                        </div>
                                        <div class="hello-park">
                                            <h5>Educação</h5>
                                            <div class="educate-year">
                                                <h6>{{ $rectors->dateBirth}}</h6>
                                            </div>
                                            <div class="educate-year">

                                                <h6>{{ $rectors->SecondarySchooling }}</h6>
                                                <p>
                                                   Ensino Secundário
                                                </p>
                                            </div>

                                            <div class="educate-year">
                                                <h6>{{$rectors->superior}}</h6>
                                                <p>
                                                   Ensino Superior.
                                                </p>
                                            </div>
                                            <div class="educate-year">
                                                <h6>{{$rectors->specialty}}</h6>
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>Copyright © 2022 Dreamguys.</p>
        </footer>
    </div>
    </div>
@endsection
