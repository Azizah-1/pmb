@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-12">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Verifikasi Email</h2>

        @if(session('error'))
            <div class="mb-4 text-red-700">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ url('/verify-email-code') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Kode Verifikasi</label>
                <input type="text" name="code" value="{{ old('code') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" />
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Verifikasi</button>
                <a href="{{ route('daftar') }}" class="text-sm text-gray-600">Kembali ke pendaftaran</a>
            </div>
        </form>

        <form method="POST" action="{{ route('verify.email.code.resend') }}" class="mt-4">
            @csrf
            <input type="hidden" name="email" value="{{ old('email') ?: auth()->user()->email ?? '' }}" />
            <button type="submit" class="px-3 py-1 bg-gray-200 rounded">Kirim Ulang Kode</button>
        </form>

        {{-- Dev verification code display removed for security. Codes are delivered by email. --}}
    </div>
</div>
@endsection
