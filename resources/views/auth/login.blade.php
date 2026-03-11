@extends('layouts.guest')

@section('title', 'تسجيل الدخول - معًا نصنع الأمل')

@section('content')
<div class="min-h-screen flex flex-col md:flex-row overflow-hidden">
    <!-- Left Side: Image & Text -->
    <div class="hidden md:flex md:w-1/2 relative">
        <div class="absolute inset-0 bg-cover bg-center" style='background-image: linear-gradient(rgba(46, 125, 50, 0.7), rgba(46, 125, 50, 0.7)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDE_PZ3Znb_7nTTSRLXOFpZ3IU_HPIaET5FhbkVU5zjuIAeyo6l7cU2QtzkJ0ZlEJQqkYr23CanVLvzaweLjKy-hmMfOKPAO_A3ijsUBd3i3QJC78erCjyGyavD3mkwhGHO_ff7RZCUdDyCmsPlZxeXLX0hda-tsKZIDLjeAJ9Pql0vNA9ovPjVVfu4q0xoSxYFIC5qhfxstOd2RXR8jj4XW1xyN1M2_oBxBc3OehWzcQpPJfsO8vZY0bAnzYZ4rvTC1gNMeEqL7W6w");'></div>
        <div class="relative z-10 flex flex-col items-center justify-center w-full px-12 text-center text-white">
            <div class="p-4 bg-white/20 backdrop-blur-md rounded-full mb-8">
                <span class="material-symbols-outlined text-6xl">volunteer_activism</span>
            </div>
            <h1 class="text-4xl font-black mb-6 leading-tight">عطاؤك يصنع الفرق في حياة الآخرين</h1>
            <p class="text-lg font-light text-slate-100 max-w-md">نحن هنا لنربط بين القلوب الرحيمة والاحتياجات الملحة، لنبني معاً مستقبلاً مليئاً بالأمل.</p>
        </div>
    </div>

    <!-- Right Side: Form -->
    <div class="w-full md:w-1/2 flex items-center justify-center p-6 sm:p-12 lg:p-20 bg-white dark:bg-slate-900">
        <div class="w-full max-w-md">
            <div class="flex items-center gap-3 mb-10 md:mb-12">
                <div class="p-2 bg-primary rounded-lg text-white">
                    <span class="material-symbols-outlined text-3xl">volunteer_activism</span>
                </div>
                <h2 class="text-2xl font-black text-primary tracking-tight">معًا نصنع الأمل</h2>
            </div>

            <div class="space-y-2 mb-10">
                <h3 class="text-3xl font-black text-slate-900 dark:text-white">مرحبًا بعودتك</h3>
                <p class="text-slate-500">سجّل دخولك لمتابعة تبرعاتك أو طلب المساعدة</p>
            </div>

            @if (session('status'))
            <div class="mb-6 rounded-[16px] border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
                {{ session('status') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="mb-6 rounded-[16px] border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                {{ $errors->first('email') ?: $errors->first('password') ?: $errors->first() }}
            </div>
            @endif

            <form class="space-y-6" id="loginForm" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-700 dark:text-slate-300 block" for="email">البريد الإلكتروني</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">person</span>
                        <input name="email" class="w-full pr-12 pl-4 py-3.5 bg-slate-50 dark:bg-slate-800 border {{ $errors->has('email') ? 'border-red-300' : 'border-slate-200 dark:border-slate-700' }} rounded-[16px] focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" id="email" placeholder="example@mail.com" type="email" value="{{ old('email') }}" />
                    </div>
                </div>

                <div class="space-y-2">
                    <div class="flex justify-between items-center">
                        <label class="text-sm font-bold text-slate-700 dark:text-slate-300 block" for="password">كلمة المرور</label>
                        <a class="text-sm font-bold text-primary hover:underline" href="{{ route('password.request') }}">نسيت كلمة المرور؟</a>
                    </div>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
                        <button id="togglePassword" class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 transition-colors" type="button">visibility</button>
                        <input name="password" class="w-full pr-12 pl-12 py-3.5 bg-slate-50 dark:bg-slate-800 border {{ $errors->has('password') ? 'border-red-300' : 'border-slate-200 dark:border-slate-700' }} rounded-[16px] focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" id="password" placeholder="أدخل كلمة المرور" type="password" />
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <input name="remember" class="w-5 h-5 rounded border-slate-300 text-primary focus:ring-primary" id="remember" type="checkbox" />
                    <label class="text-sm text-slate-600 dark:text-slate-400 font-medium cursor-pointer" for="remember">تذكرني على هذا الجهاز</label>
                </div>

                <button id="submitBtn" class="w-full py-4 bg-primary hover:bg-primary/95 text-white rounded-[16px] text-lg font-bold transition-all shadow-lg shadow-primary/20 active:scale-[0.98]" type="submit">
                    تسجيل الدخول
                </button>
            </form>

            <div class="mt-10 pt-10 border-t border-slate-100 dark:border-slate-800">
                <p class="text-center text-slate-600 dark:text-slate-400 font-medium">
                    ليس لديك حساب؟
                    <a class="text-primary font-black hover:underline mr-1" href="{{ route('register') }}">إنشاء حساب جديد</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
