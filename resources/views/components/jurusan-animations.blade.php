<!-- Animation Styles -->
<style>
    .animate-fade-up {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .animate-fade-up.show {
        opacity: 1;
        transform: translateY(0);
    }

    .animate-scale {
        transform: scale(0.95);
        opacity: 0;
        transition: all 0.6s ease-out;
    }

    .animate-scale.show {
        transform: scale(1);
        opacity: 1;
    }

    .delay-100 {
        transition-delay: 100ms;
    }

    .delay-200 {
        transition-delay: 200ms;
    }

    .delay-300 {
        transition-delay: 300ms;
    }

    .program-card {
        transition: all 0.3s ease-in-out;
    }

    .program-card:hover {
        transform: translateY(-5px);
    }
</style>

<!-- Animation Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add animation classes to elements
        const animateElements = document.querySelectorAll('.animate-fade-up, .animate-scale');
        const cards = document.querySelectorAll('.program-card');
        
        // Initial animation check
        setTimeout(() => {
            animateElements.forEach(el => el.classList.add('show'));
        }, 100);

        // Scroll animation
        window.addEventListener('scroll', () => {
            animateElements.forEach(el => {
                const rect = el.getBoundingClientRect();
                const isVisible = rect.top <= window.innerHeight - 100;
                
                if (isVisible) {
                    el.classList.add('show');
                }
            });
        });

        // Card hover effects
        cards.forEach(card => {
            card.addEventListener('mouseover', () => {
                card.style.transform = 'translateY(-5px) scale(1.02)';
                card.style.boxShadow = '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)';
            });
            
            card.addEventListener('mouseout', () => {
                card.style.transform = 'translateY(0) scale(1)';
                card.style.boxShadow = '';
            });
        });
    });
</script>