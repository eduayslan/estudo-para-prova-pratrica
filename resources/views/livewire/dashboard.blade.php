<div>
    <div class="container mt-4">

        <div class="row justify-content-between">
            <div class="col-md-4 mb-3">
                <div class="card text-center h-100 shadow-sm border rounded" style="width: 20rem; height: 20rem; background-color: #f8f9fa;">
                    <div class="card-header bg-primary text-white fs-5 fw-bold">Funcionários</div>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <a href="{{ route('funcionarios.index') }}" class="btn btn-outline-primary mb-3 fw-semibold">Ver Funcionários</a>
                        <a href="{{ route('funcionarios.create') }}" class="btn btn-outline-primary mb-3 fw-semibold">Cadastrar Funcionário</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center h-100 shadow-sm border rounded" style="width: 20rem; height: 20rem; background-color: #f8f9fa;">
                    <div class="card-header bg-primary text-white fs-5 fw-bold">Alunos</div>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <a href="{{ route('alunos.index') }}" class="btn btn-outline-primary mb-3 fw-semibold">Ver Alunos</a>
                        <a href="{{ route('alunos.create') }}" class="btn btn-outline-primary mb-3 fw-semibold">Cadastrar Aluno</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center h-100 shadow-sm border rounded" style="width: 20rem; height: 20rem; background-color: #f8f9fa;">
                    <div class="card-header bg-primary text-white fs-5 fw-bold">Disciplinas</div>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <a href="#" class="btn btn-outline-primary mb-3 fw-semibold">Ver Disciplinas</a>
                        <a href="#" class="btn btn-outline-primary mb-3 fw-semibold">Cadastrar Disciplina</a>
                    </div>
                </div>
            </div>
        </div>

    <div class="card mb-3 shadow-sm border rounded">
        <div class="card-header d-flex align-items-center gap-2">
            <i class="bi bi-person-circle fs-4 text-primary"></i>
            <span class="fw-semibold">Informações do Usuário</span>
        </div>
        <div class="card-body">
            <h5><i class="bi bi-envelope-paper-fill me-2 text-secondary"></i>Email: {{ auth()->user()->email }} </h5>
            <h5><i class="bi bi-credit-card-2-back-fill me-2 text-secondary"></i>ID: {{ auth()->user()->id }} </h5>
            <h5><i class="bi bi-person-badge me-2 text-secondary"></i>User: {{ auth()->user()->user_type }} </h5>
            <h5><i class="bi bi-credit-card-2-front-fill me-2 text-secondary"></i>CPF: {{ auth()->user()->admin->cpf ?? 'CPF não encontrado' }}</h5>
        </div>
    </div>

        <div class="card mb-3 shadow-sm border rounded">
            <div class="card-header d-flex align-items-center gap-2">
                <i class="bi bi-people-fill fs-4 text-primary"></i>
                <span class="fw-semibold">Usuários Ativos</span>
            </div>
            <div class="card-body">
                <p>{{ $usuariosAtivos }}</p>
            </div>
        </div>
        <div class="card shadow-sm border rounded">
            <div class="card-header d-flex align-items-center gap-2">
                <i class="bi bi-journal-text fs-4 text-primary"></i>
                <span class="fw-semibold">Logs de Atividades</span>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    @foreach ($logsAtividades as $log)
                    @php
                        $icon = 'bi-check-circle-fill text-success';
                        if (stripos($log, 'logou no sistema') !== false) {
                            $icon = 'bi bi-box-arrow-in-right text-primary';
                        } elseif (stripos($log, 'atualizou dados') !== false) {
                            $icon = 'bi bi-pencil-square text-warning';
                        } elseif (stripos($log, 'criou nova turma') !== false) {
                            $icon = 'bi bi-journal-plus text-info';
                        }
                    @endphp
                    <li><i class="bi {{ $icon }} me-2"></i>{{ $log }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>