// JS to control auth panel sliding behavior
(function(){
    document.addEventListener('DOMContentLoaded', function(){
        const shell = document.getElementById('authShell');
        if (!shell) return;

        const toRegister = document.getElementById('toRegister');
        const toLogin = document.getElementById('toLogin');
        const panelContent = document.querySelector('.panel-content');
        function showRegister() {
            shell.classList.add('register-active');
            if (panelContent) panelContent.innerHTML = `<h1>Hello,<br>welcome!!</h1><p>Already have an account?</p><button id="toLogin" class="cta-btn">Login</button>`;
        }
        function showLogin() {
            shell.classList.remove('register-active');
            if (panelContent) panelContent.innerHTML = `<h1>welcome<br>back!!</h1><p>Don't have an account?</p><button id="toRegister" class="cta-btn">Register</button>`;
        }

        function bindPanelButtons(){
            const toReg = document.getElementById('toRegister');
            const toLog = document.getElementById('toLogin');
            if (toReg) {
                // pointerdown to navigate immediately (works around browser save-password overlays)
                toReg.addEventListener('pointerdown', (e) => { if (toReg.href) window.location.href = toReg.href; });
                // also keep toggle behaviour for non-anchor buttons
                if (toReg.tagName !== 'A') toReg.addEventListener('click', showRegister);
            }
            if (toLog) {
                toLog.addEventListener('pointerdown', (e) => { if (toLog.href) window.location.href = toLog.href; });
                if (toLog.tagName !== 'A') toLog.addEventListener('click', showLogin);
            }
        }

        bindPanelButtons();

    // Only intercept buttons that explicitly request in-page toggle via data-action
    const toggleButtons = document.querySelectorAll('button[data-action="open-register"]');
    toggleButtons.forEach(b => b.addEventListener('click', (e) => { e.preventDefault(); showRegister(); }));

        // rebind after dynamic content changes
        const observer = new MutationObserver((mutations) => { bindPanelButtons(); });
        if (panelContent) observer.observe(panelContent, { childList: true, subtree: true });
    });
})();
