    @php
        $user = auth()->user();
        $userName = $user?->name ?: 'زائر';
        $userType = $user?->tybe ?: 'مستخدم المنصة';
        $userInitial = mb_strtoupper(mb_substr(trim($userName), 0, 1));
    @endphp

    <aside class="w-64 bg-primary-dark min-h-screen fixed right-0 top-0 flex flex-col text-white z-20">
        <div class="p-8 flex items-center gap-3 border-b border-white/10">
            <span class="material-symbols-outlined text-3xl">volunteer_activism</span>
            <h1 class="text-xl font-black">معًا نصنع الأمل</h1>
        </div>
        <nav class="mt-8 flex-1">
            <a class="sidebar-item {{ request()->routeIs('admindashboard') ? 'active' : '' }}" href="{{ route('admindashboard') }}">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-bold">الإحصائيات العامة</span>
            </a>
            <a class="sidebar-item {{ request()->routeIs('donatesmanage') ? 'active' : '' }}" href="{{ route('donatesmanage') }}">
                <span class="material-symbols-outlined">favorite</span>
                <span class="font-bold">التبرعات</span>
            </a>
            <a class="sidebar-item {{ request()->routeIs('usermanage') ? 'active' : '' }}" href="{{ route('usermanage') }}">
                <span class="material-symbols-outlined">groups</span>
                <span class="font-bold">المستخدمين</span>
            </a>
            <a class="sidebar-item {{ request()->routeIs('reports', 'reportdetail') ? 'active' : '' }}" href="{{ route('reports') }}">
                <span class="material-symbols-outlined">assignment</span>
                <span class="font-bold"> التقارير</span>
            </a>
            <a class="sidebar-item {{ request()->routeIs('projectmanagement') ? 'active' : '' }}" href="{{ route('projectmanagement') }}">
                <span class="material-symbols-outlined">assignment</span>
                <span class="font-bold">المشاريع النشطة</span>
            </a>
            <a class="sidebar-item {{ request()->routeIs('storiesmange') ? 'active' : '' }}" href="{{ route('storiesmange') }}">
                <span class="material-symbols-outlined">auto_awesome</span>
                <span class="font-bold">قصص الأثر</span>
            </a>
            <a class="sidebar-item {{ request()->routeIs('systemsettings') ? 'active' : '' }}" href="{{ route('systemsettings') }}">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-bold">الإعدادات</span>
            </a>
        </nav>
        <div class="p-6 border-t border-white/10 space-y-4">
            <div class="flex items-center gap-3 rounded-2xl bg-white/5 px-3 py-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-full bg-white/10 font-black text-lg">
                    {{ $userInitial }}
                </div>
                <div class="min-w-0">
                    <p class="truncate font-bold text-white">{{ $userName }}</p>
                    <p class="truncate text-sm text-white/70">{{ $userType }}</p>
                </div>
            </div>

            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex w-full items-center gap-3 text-white/70 hover:text-white transition-colors">
                        <span class="material-symbols-outlined">logout</span>
                        <span class="font-bold">تسجيل الخروج</span>
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="flex w-full items-center gap-3 text-white/70 hover:text-white transition-colors">
                    <span class="material-symbols-outlined">login</span>
                    <span class="font-bold">تسجيل الدخول</span>
                </a>
            @endauth
        </div>
    </aside>
