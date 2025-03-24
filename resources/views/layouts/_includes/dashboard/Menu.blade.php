<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Menu Principal</span>
                </li>
                <li class="submenu active">
                    <a href="#"><i class="feather-grid"></i> <span>Painel Administrativo</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.user.index') }}" class="active">Cadastro de Usuario</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-building"></i> <span> Departmento</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.departments.index') }}">Adicinar <br>Novo Departmento</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book"></i>
                        <span>Curso</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.course.index') }}">Adicionar Novo Curso</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-cog"></i>
                        <span>Adicioar nas Tabela</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.municipe.create') }}">Municipio</a></li>
                        <li><a href="{{ route('admin.province.create') }}">Província</a></li>
                        <li><a href="{{ route('admin.classe.create') }}">Nova Turma</a></li>
                        <li><a href="{{ route('admin.classroom.create') }}">Sala de Aula</a></li>
                        <li><a href="{{ route('admin.aproveitaments.create') }}">Tipo de Provetamento</a></li>
                        <li><a href="{{ route('admin.type_payments.create') }}">Tipo de Pagamento</a></li>
                        <li><a href="{{ route('admin.donations.create') }}">Tipo Donativo</a></li>
                        <li><a href="{{ route('admin.subject.create') }}">Disciplina</a></li>

                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span>Candidatura</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.students.index') }}">Candidaturatrtrt<br>Estudante</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-code"></i> <span>Matricula</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.student_academic_years.index') }}">Fazer Matricula <br>ou Confirmação</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="feather feather-award"></i> <span>Finalista</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.finalist_academic_years.create') }}">Adicionar Finalista</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="feather feather-award"></i> <span>Quandro de Honra</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.honor_academic_years.index') }}">Adicionar <br>Quandro de Honra</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fab fa-get-pocket"></i>
                        <span>Pedido de Aluno</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.request_documents.create') }}">Tipo de Pedido</a></li>
                        <li><a href=" {{ route('admin.transfers.create') }}">Tipo de Transferencia</a></li>
                        <li><a href="{{ route('admin.resquest_academic_years.create') }}">Pedido de Documento</a>
                        <li><a href="{{ route('admin.student_transfers.index') }}">Transferencia</a></li>
                        <li><a href="{{ route('admin.student_cards.create') }}">QWWEQWEQWEWQ</a></li>
                    </ul>
                </li>

                    <li class="submenu">
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i>
                            <span>Professor</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{ route('admin.teachers.index') }}">Candidatura do <br>Inscrição</a></li>
                            <li><a href="{{ route('admin.teacher_academic_years.index') }}">Professor Admitido </a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fas fa-baseball-ball"></i>
                            <span> Exame</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{ route('admin.exams.index') }}">Tipo de Exame</a></li>
                            <li><a href="{{ route('admin.teacher_exames.create') }}">Marcar Exame</a></li>
                        </ul>
                    </li>

                <li class="submenu">
                    <a href="#"><i class="fab fa-get-pocket"></i>
                        <span> Dormitório</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.rooms.create') }}">Tipo de Dormitório</a></li>
                        <li><a href="{{ route('admin.room_academic_years.create') }}">Estudante <br>por Dormitório</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-bus"></i>
                        <span>Transporte</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.transports.create') }}">Novo Transporte</a></li>
                        <li><a href="{{ route('admin.transport_academic_years.create') }}">Estudante  Transporte</a>
                        </li>
                </li>
            </ul>
            </li>

            <li class="submenu">
                <a href="#"><i class="fas fa-comment-dollar"></i>
                    <span>Finanças</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="{{ route('admin.payment_academic_years.create') }}">Propina</a></li>
                   <li><a href="{{ route('admin.fees_academic_years.create') }}">Pag</a></li>
                  //  <li><a href="{{ route('admin.trans_payment_academic_years.create') }}">Pagamento Transporte</a>
                </ul>
            </li>
            <li class="submenu">
                <a href="#"><i class="fas fa-holly-berry"></i>
                    <span>Feriado</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="{{ route('admin.holidays.create') }}">Tipo de Feriado</a></li>
                    <li><a href="{{ route('admin.seminar_academic_years.create') }}">Feriado</a></li>
                </ul>
            </li>

            <li class="submenu">
                <a href="#"><i class="fas fa-table"></i>
                    <span>Entrada/Doação</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="{{ route('admin.donations.create') }}">Tipo de Doação</a></li>
                    <li><a href="{{ route('admin.appetizer_academic_years.create') }}">Adicionar Doação</a></li>
                    <li><a href="{{ route('admin.several_academic_years.create') }}">Pagamento Diverso</a></li>
                    <li><a href="{{ route('admin.salary_academic_years.create') }}">QWEWQEQWWQ</a></li>
                </ul>
            </li>

            </ul>
        </div>
    </div>
</div>
