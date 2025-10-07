@once
    @push('styles')
        <style>
            /* Minimal animation helpers */
            .animate-up { opacity: 0; transform: translateY(18px) rotateX(0.01deg); transition: opacity 520ms cubic-bezier(.2,.9,.2,1), transform 520ms cubic-bezier(.2,.9,.2,1); will-change: transform, opacity; }
            .animate-up.visible { opacity: 1; transform: translateY(0) rotateX(0); }

            /* Hover lift */
            .tilt-on-hover { transition: transform 260ms ease, box-shadow 260ms ease; }
            .tilt-on-hover:hover { transform: translateY(-8px) scale(1.01); box-shadow: 0 18px 36px rgba(16,24,40,0.08); }

            /* subtle 3D tilt (transform origin set via JS) */
        </style>
    @endpush

    @push('scripts')
        <script>
            (function(){
                if (typeof window === 'undefined') return;
                try {
                    // Intersection Observer with stagger: when multiple elements enter, reveal with small delays
                    var els = Array.prototype.slice.call(document.querySelectorAll('.animate-up'));
                    if ('IntersectionObserver' in window && els.length) {
                        var io = new IntersectionObserver(function(entries){
                            // sort entries to keep consistent order
                            var visibleEntries = entries.filter(function(en){ return en.isIntersecting; });
                            visibleEntries.sort(function(a,b){ return (Array.prototype.indexOf.call(els,a.target) - Array.prototype.indexOf.call(els,b.target)); });
                            visibleEntries.forEach(function(e, idx){
                                setTimeout(function(){
                                    e.target.classList.add('visible');
                                }, idx * 80); // stagger 80ms between items
                                io.unobserve(e.target);
                            });
                        }, {root: null, rootMargin: '0px 0px -8% 0px', threshold: 0.08});
                        els.forEach(function(el){ io.observe(el); });
                    } else {
                        // fallback: reveal after small timeout
                        setTimeout(function(){ els.forEach(function(el){ el.classList.add('visible'); }); }, 300);
                    }

                    // Lightweight tilt-on-hover (no deps) — disabled for touch devices
                    var isTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
                    if (!isTouch) {
                        document.querySelectorAll('.tilt-on-hover').forEach(function(card){
                            card.style.transformOrigin = 'center';
                            var bounds = null;
                            card.addEventListener('pointermove', function(ev){
                                if (!bounds) bounds = card.getBoundingClientRect();
                                var px = (ev.clientX - bounds.left) / bounds.width - 0.5; // -0.5 .. 0.5
                                var py = (ev.clientY - bounds.top) / bounds.height - 0.5;
                                var rx = (py * -6); // rotateX
                                var ry = (px * 8); // rotateY
                                card.style.transform = 'perspective(800px) rotateX(' + rx + 'deg) rotateY(' + ry + 'deg) translateZ(0)';
                            });
                            card.addEventListener('pointerleave', function(){
                                card.style.transform = '';
                                bounds = null;
                            });
                        });
                    }
                } catch (err) {
                    console.warn('Animation init failed', err);
                }
            })();
        </script>
    @endpush
@endonce
