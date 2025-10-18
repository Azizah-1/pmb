@props(['active' => 'login'])
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Auth</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Inline critical CSS fallback (copied from resources/css/auth-panel.css) --}}
        <style>
        /* Styles for auth sliding panel */
        .auth-shell { position:relative; width:100%; min-height:100vh; overflow:hidden; font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; }
    .auth-inner { display:flex; width:100%; height:100vh; position:relative; z-index:2; pointer-events:none; }
    .side { width:50%; padding:4rem; box-sizing:border-box; display:flex; align-items:center; justify-content:center; }
    .auth-inner > .side:last-child { justify-content:flex-end; padding-right:6rem; }

        /* Orange panel that slides */
    .orange-panel { position:absolute; left:0; top:0; width:50%; height:100%; background:#ff9a59; color:#111827; border-radius:0 140px 140px 0; display:flex; align-items:center; justify-content:center; padding:4rem; transition:transform .7s cubic-bezier(.2,.8,.2,1); box-shadow: inset -40px 0 60px rgba(0,0,0,0.02); z-index:999 }
        .auth-shell.register-active .orange-panel { transform: translateX(100%); border-radius:140px 0 0 140px; }

        .panel-content { max-width:560px; text-align:center; }
        .panel-content h1 { font-size:5rem; line-height:0.95; font-weight:900; margin:0 0 0.5rem; letter-spacing:-1px }
        .panel-content p { margin:0 0 1rem; font-weight:700; }
        .cta-btn { display:inline-block; background:rgba(255,255,255,0.22); padding:1rem 2.6rem; border-radius:8px; font-weight:800; color:#111827; box-shadow: 0 3px 0 rgba(0,0,0,0.06); font-size:1.25rem }

        /* Forms */
        .form-wrap { width:100%; max-width:520px; }
        .auth-form { background:transparent; display:flex; flex-direction:column; gap:1rem; }
        .auth-input { width:100%; padding:1.05rem 1.25rem; border-radius:8px; border:none; background:#ffb889; color:#111827; font-weight:700; }
        .auth-input::placeholder { color:rgba(17,24,39,0.6); font-weight:600 }
        .submit-btn { background:#ff9a59; padding:1rem 1.5rem; border-radius:8px; font-weight:900; color:#111827; border:none; cursor:pointer; box-shadow:0 6px 0 rgba(0,0,0,0.06); font-size:1.15rem }

    /* input icon fallback styles */
    .input-with-icon { position:relative; }
    .input-with-icon .auth-input { padding-right:3.2rem; }
    .input-icon { position:absolute; right:0.6rem; top:50%; transform:translateY(-50%); width:1.6rem; height:1.6rem; display:inline-flex; align-items:center; justify-content:center; pointer-events:none; }
    .input-icon svg { width:0.95rem; height:0.95rem; fill:#111827; }

    /* allow clicks inside forms while auth-inner covers layout visually */
    .auth-form, .auth-form * , .submit-btn, .cta-btn { pointer-events:auto; }

    /* visibility toggles depending on active state */
    .left-page, .right-page { width:100%; max-width:520px; }
    /* Default: show right-page (login), hide left-page (register) */
    .auth-shell:not(.register-active) .left-page { opacity:0; transform:translateX(-20px); pointer-events:none; transition:all .45s; }
    .auth-shell:not(.register-active) .right-page { opacity:1; transform:none; pointer-events:auto; transition:all .45s .1s; }
    /* When register-active: show left-page (register), hide right-page (login) */
    .auth-shell.register-active .left-page { opacity:1; transform:none; pointer-events:auto; transition:all .45s .1s; }
    .auth-shell.register-active .right-page { opacity:0; transform:translateX(20px); pointer-events:none; transition:all .45s; }

        /* small screens: stack vertically */
        @media (max-width: 900px) {
            .auth-inner { flex-direction:column; }
            .side { width:100%; min-height:50vh; }
            .orange-panel { width:100%; height:50%; border-radius:0 0 40px 40px; }
            .auth-shell.register-active .orange-panel { transform: translateY(0); }
        }

        /* page background to match design */
        body { background: #fcdccf; }
        </style>
    </head>
    <body>

    <div id="authShell" class="auth-shell {{ $active === 'register' ? 'register-active' : '' }}">
        <div class="orange-panel" aria-hidden="true">
            <div class="panel-content">
                @if($active === 'login')
                    <h1>welcome<br>back!!</h1>
                    <p>Don't have an account?</p>
                    <a id="toRegister" class="cta-btn" href="{{ route('register') }}">Register</a>
                @else
                    <h1>Hello,<br>welcome!!</h1>
                    <p>Already have an account?</p>
                    <a id="toLogin" class="cta-btn" href="{{ route('login') }}">Login</a>
                @endif
            </div>
        </div>

        <div class="auth-inner">
            <div class="side">
                <div class="form-wrap left-page">
                    <!-- Register form (left side when register-active) -->
                    <h2 class="text-3xl font-extrabold mb-6">Registration</h2>
                    <form method="POST" action="{{ route('register') }}" class="auth-form" autocomplete="on">
                        @csrf
                        {{-- mark this form as the applicant "daftar-sekarang" action so controller requires verification --}}
                        <input type="hidden" name="action" value="daftar-sekarang">
                        <div class="input-with-icon">
                            <input id="name" name="name" type="text" placeholder="Full name" required class="auth-input" value="{{ old('name') }}" autocomplete="name" autocapitalize="words">
                            <span class="input-icon icon-user">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 12a5 5 0 1 0-0.001-9.999A5 5 0 0 0 12 12zm0 2c-5.33 0-8 2.667-8 4v2h16v-2c0-1.333-2.67-4-8-4z"/></svg>
                            </span>
                        </div>
                        @error('name') <div class="text-sm text-red-600">{{ $message }}</div> @enderror

                        <div class="input-with-icon">
                            <input id="email_r" name="email" type="email" placeholder="Email" required class="auth-input" value="{{ old('email') }}" autocomplete="email" inputmode="email">
                            <span class="input-icon icon-mail">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2 6l10 7L22 6v12H2z"/></svg>
                            </span>
                        </div>
                        @error('email') <div class="text-sm text-red-600">{{ $message }}</div> @enderror

                        <div class="input-with-icon">
                            <input id="password_r" name="password" type="password" placeholder="Password" required class="auth-input" autocomplete="new-password" spellcheck="false">
                            <span class="input-icon icon-lock">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17 8V7a5 5 0 0 0-10 0v1H5v12h14V8h-2zm-8-1a3 3 0 0 1 6 0v1H9V7z"/></svg>
                            </span>
                        </div>
                        @error('password') <div class="text-sm text-red-600">{{ $message }}</div> @enderror

                        <div class="input-with-icon">
                            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password" required class="auth-input" autocomplete="new-password" spellcheck="false">
                            <span class="input-icon icon-lock">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17 8V7a5 5 0 0 0-10 0v1H5v12h14V8h-2zm-8-1a3 3 0 0 1 6 0v1H9V7z"/></svg>
                            </span>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="submit-btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="side">
                <div class="form-wrap right-page">
                    <!-- Login form (right side when not register-active) -->
                    <h2 class="text-3xl font-extrabold mb-6">Login</h2>
                    <form method="POST" action="{{ route('login') }}" class="auth-form" autocomplete="on">
                        @csrf
                        <div class="input-with-icon">
                            <input id="email" name="email" type="email" placeholder="Email" required class="auth-input" value="{{ old('email') }}" autocomplete="email" inputmode="email">
                            <span class="input-icon icon-mail">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2 6l10 7L22 6v12H2z"/></svg>
                            </span>
                        </div>
                        @error('email') <div class="text-sm text-red-600">{{ $message }}</div> @enderror

                        <div class="input-with-icon">
                            <input id="password" name="password" type="password" placeholder="Password" required class="auth-input" autocomplete="current-password" spellcheck="false">
                            <span class="input-icon icon-lock">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17 8V7a5 5 0 0 0-10 0v1H5v12h14V8h-2zm-8-1a3 3 0 0 1 6 0v1H9V7z"/></svg>
                            </span>
                        </div>
                        @error('password') <div class="text-sm text-red-600">{{ $message }}</div> @enderror

                        <label class="flex items-center gap-2"><input type="checkbox" name="remember"> <span class="text-sm">Remember me</span></label>

                        <div class="mt-4 flex items-center justify-between">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-sm underline">Forgot password?</a>
                            @endif
                            <button type="submit" class="submit-btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- behavior moved to resources/js/auth-panel.js and imported via @vite/app.js --}}
    </body>
    <script>
    // Inline fallback behavior (same as resources/js/auth-panel.js)
    (function(){
        try{
            const shell = document.getElementById('authShell');
            if (!shell) return;
            const panelContent = document.querySelector('.panel-content');
            function showRegister(){
                shell.classList.add('register-active');
                if (panelContent) panelContent.innerHTML = `<h1>Hello,<br>welcome!!</h1><p>Already have an account?</p><button id="toLogin" class="cta-btn">Login</button>`;
            }
            function showLogin(){
                shell.classList.remove('register-active');
                if (panelContent) panelContent.innerHTML = `<h1>welcome<br>back!!</h1><p>Don't have an account?</p><button id="toRegister" class="cta-btn">Register</button>`;
            }
            function bindPanelButtons(){
                const toReg = document.getElementById('toRegister');
                const toLog = document.getElementById('toLogin');
                if (toReg) {
                    toReg.addEventListener('pointerdown', (e) => { if (toReg.href) window.location.href = toReg.href; });
                    if (toReg.tagName !== 'A') toReg.addEventListener('click', showRegister);
                }
                if (toLog) {
                    toLog.addEventListener('pointerdown', (e) => { if (toLog.href) window.location.href = toLog.href; });
                    if (toLog.tagName !== 'A') toLog.addEventListener('click', showLogin);
                }
            }
            bindPanelButtons();
            const toggleButtons = document.querySelectorAll('button[data-action="open-register"]');
            toggleButtons.forEach(b => b.addEventListener('click', (e) => { e.preventDefault(); showRegister(); }));
            // rebind when panel content replaced
            const observer = new MutationObserver(() => bindPanelButtons());
            if (panelContent) observer.observe(panelContent, { childList: true, subtree: true });
        }catch(e){ console.error(e) }
    })();
    </script>
</html>
