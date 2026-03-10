@php
    $isHome = request()->is('home');
    $isDonate = request()->is('donate');
    $isDontes = request()->is('dontes');
    $isStories = request()->is('stories') || request()->is('storiesmange');
    $isSettings = request()->is('settings');
@endphp

<aside class="w-64 bg-primary-dark min-h-screen fixed right-0 top-0 flex flex-col text-white">
<div class="p-8 flex items-center gap-3 border-b border-white/10">
<span class="material-symbols-outlined text-3xl">volunteer_activism</span>
<h1 class="text-xl font-black">معًا نصنع الأمل</h1>
</div>
<nav class="mt-8 flex-1">
<a class="sidebar-item {{ $isHome ? 'active' : '' }}" href="{{ route('home') }}">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-bold">الرئيسية</span>
</a>

<a class="sidebar-item {{ $isDonate ? 'active' : '' }}" href="{{ route('donate') }}">
<span class="material-symbols-outlined">favorite</span>
<span class="font-bold"> تبرع الآن</span>
</a>
<a class="sidebar-item {{ $isDontes ? 'active' : '' }}" href="{{ route('dontes') }}">
<span class="material-symbols-outlined">favorite</span>
<span class="font-bold">تبرعاتي</span>
</a>
<a class="sidebar-item {{ $isStories ? 'active' : '' }}" href="{{ route('stories') }}">
<span class="material-symbols-outlined">auto_awesome</span>
<span class="font-bold">قصص الأثر</span>
</a>
<a class="sidebar-item {{ $isSettings ? 'active' : '' }}" href="{{ route('settings') }}">
<span class="material-symbols-outlined">settings</span>
<span class="font-bold">الإعدادات</span>
</a>
    </nav>
    <div class="p-6 border-t border-white/10">
        @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex items-center gap-3 text-white/70 hover:text-white transition-colors">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-bold">تسجيل الخروج</span>
            </button>
        </form>
        @else
        <a href="{{ route('login') }}" class="flex items-center gap-3 text-white/70 hover:text-white transition-colors">
            <span class="material-symbols-outlined">login</span>
            <span class="font-bold">تسجيل الدخول</span>
        </a>
        @endauth
    </div>
</aside>
