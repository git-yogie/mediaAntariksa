<div class="auth-main">
    <div class="auth-wrapper v3">
        <div class="auth-form">
            <div class="auth-header">
                <a href="{{ route('welcome.index') }}">Kembali ke halaman utama</a>
            </div>
            <div class="card my-5">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-end mb-4">
                        <h3 class="mb-0"><b>Login</b></h3>
                        <a href="{{ route("auth.register") }}"  class="link-primary">Don't have an account?</a>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Email Address</label>
                        <input wire:model='email' type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email Address">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Password</label>
                        <input wire:model='password' type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex mt-1 justify-content-between">
                        <div class="form-check">
                            <input wire:model='remember' class="form-check-input input-primary" type="checkbox"
                                id="customCheckc1" checked="">
                            <label class="form-check-label text-muted" for="customCheckc1">Keep me sign in</label>
                        </div>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="button" wire:click='try' wire:loading class="btn btn-primary">Login</button>
                    </div>

                </div>
            </div>
            <div class="auth-footer row">
                <!-- <div class=""> -->
                <div class="col my-1">
                    <p class="m-0">Copyright © <a href="#">MediaAntariksa</a></p>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
