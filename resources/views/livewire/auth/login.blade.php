<div class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card shadow-sm p-5 rounded" style="width: 400px; max-width: 90%;">
        <h3 class="text-center mb-4 text-primary fw-bold">Login</h3>
        @if(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="login">
            <div class="mb-4">
                <label for="email" class="form-label fw-semibold"><i class="bi bi-envelope-fill me-2 text-primary"></i>Email</label>
                <input type="email" id="email" wire:model="email" class="form-control" placeholder="Ex.: test@gmail.com" autofocus>
                @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="form-label fw-semibold"><i class="bi bi-lock-fill me-2 text-primary"></i>Senha</label>
                <input type="password" wire:model="password" id="password" class="form-control" placeholder="Informe sua senha">
                @error('password')
                <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
           
            <button type="submit" class="btn btn-primary w-100 fw-semibold"><i class="bi bi-box-arrow-in-right me-2"></i>Entrar</button>
        </form>
    </div>
</div>
