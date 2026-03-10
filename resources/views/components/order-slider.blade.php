    <aside class="w-64 bg-primary-dark min-h-screen fixed right-0 top-0 flex flex-col text-white z-20">
        <div class="p-8 flex items-center gap-3 border-b border-white/10">
            <span class="material-symbols-outlined text-3xl">volunteer_activism</span>
            <h1 class="text-xl font-black">معًا نصنع الأمل</h1>
        </div>
        <nav class="mt-8 flex-1">
            <a class="sidebar-item" href="{{ url('orderdetails') }}">
                <span class="material-symbols-outlined">home</span>
                <span class="font-bold">الرئيسية</span>
            </a>
            <a class="sidebar-item" href="{{url('needask')}}">
                <span class="material-symbols-outlined">info</span>
                <span class="font-bold">طلب مساعدة</span>
            </a>
            <a class="sidebar-item active" href="{{url('orders')}}">
                <span class="material-symbols-outlined">help_center</span>
                <span class="font-bold">طلباتي </span>
            </a>
        </nav>
        <div class="p-6 border-t border-white/10">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center gap-3 text-white/70 hover:text-white transition-colors">
                    <span class="material-symbols-outlined">logout</span>
                    <span class="font-bold">تسجيل الخروج</span>
                </button>
            </form>
        </div>
    </aside>