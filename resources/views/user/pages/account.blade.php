@extends('user.layouts.index')

@section('title', 'Account')

@section('content')
    <div>
        <!-- breadcrumb -->
        <div class="container py-4 flex items-center gap-3">
            <a href="../index.html" class="text-primary text-base">
                <i class="fa-solid fa-house"></i>
            </a>
            <span class="text-sm text-gray-400">
                <i class="fa-solid fa-chevron-right"></i>
            </span>
            <p class="text-gray-600 font-medium">Account</p>
        </div>
        <!-- ./breadcrumb -->
    </div>
@endsection
