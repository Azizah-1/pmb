@once
    @push('styles')
        <style>
            :root{
                --brand-orange: #F97316; /* soft orange */
                --brand-orange-dark: #EA580C;
                --brand-cream: #FFF8F2; /* cream */
                --brand-contrast: #ffffff;
            }

            /* utility classes for brand palette */
            .text-brand { color: var(--brand-orange) !important; }
            .text-brand-dark { color: var(--brand-orange-dark) !important; }

            .bg-brand { background-color: var(--brand-orange); color: var(--brand-contrast); }
            .bg-brand-dark { background-color: var(--brand-orange-dark); color: var(--brand-contrast); }
            .bg-cream { background-color: var(--brand-cream); }

            .btn-brand { background: var(--brand-orange); color: #fff; border-radius: .5rem; padding:.6rem 1.1rem; display:inline-block; }
            .btn-brand:hover { background: var(--brand-orange-dark); }
            .border-brand { border-color: var(--brand-orange) !important; }
            .link-brand { color: var(--brand-orange); }
            .link-brand:hover { color: var(--brand-orange-dark); text-decoration: underline; }
        </style>
    @endpush
@endonce
