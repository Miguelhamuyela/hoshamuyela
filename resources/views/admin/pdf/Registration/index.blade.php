

<center>DIOCESE DE BENGUELA</center>
<center>SEMINÁRIO MAIOR DO BOM PASTOR</center>
<center>SECÇÃO DE FILOSOFIA</center>
<center>CP. 670 – Benguela</center>
<center>Angola</center>
<br><br>
<center>BOLETIM DE CONFIRMAÇÃO</center>

<br><br>
<center><h4>Nº</h4> {{ $registration->student->id }} Ano Lectivo {{ $registration->academic_years->name }}</center>
<br><br>
<b>Nome:</b>{{ $registration->student->name }}<b>Filho de:</b> {{ $registration->student->father }} e de {{ $registration->student->mather }}.<br>
<b>Data de Confirmação:</b>{{ $registration->created_at }}<br><b>Curso de :</b>{{ $registration->courses->name }}<b>Nível Académico:</b>{{ $registration->academic_livels->name }}<b>Ano</b>


<br><br><br>


<center>A SECRETARIA</center>
<br><br>
<center>--------------------------------------------------</center>
<center>{{ $registration->student_perfects->name }}</center>
































