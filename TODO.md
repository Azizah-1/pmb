# Task: Create Navigation Bar with Logo, Navigation Buttons, and Daftar Button with Login Check

## Steps:
1. Add routes in routes/web.php for:
   - /beranda
   - /jurusan
   - /kebijakan-beasiswa
   - /kontak
   - /daftar

2. Create simple blade views for these pages:
   - resources/views/beranda.blade.php
   - resources/views/jurusan.blade.php
   - resources/views/kebijakan-beasiswa.blade.php
   - resources/views/kontak.blade.php
   - resources/views/daftar.blade.php

3. Update resources/views/layouts/navigation.blade.php:
   - Left box: logo and company name linking to /beranda
   - Middle box: buttons for Beranda, Jurusan, Kebijakan beasiswa, Kontak linking to their routes
   - Right box: Daftar button that checks if user is logged in; if not, redirect to login page

4. Test navigation bar layout and Daftar button login detection.
