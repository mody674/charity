        <header class="bg-white px-10 py-6 flex justify-between items-center shadow-sm sticky top-0 z-10">
            <div class="flex flex-col">
                <h2 class="text-2xl font-black text-slate-800">تبرع الآن - بالجنيه المصري</h2>
                <p class="text-sm text-slate-500">ساهم في دعم المشاريع التنموية في مصر</p>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 text-slate-400 hover:text-primary transition-colors relative">
                    <a href="notifications2.html"><span class="material-symbols-outlined">notifications</span></a>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
                @auth
                <div class="flex items-center gap-3">
                    <div class="text-right">
                        <div class="text-sm text-slate-600">مرحباً</div>
                        <div class="font-medium text-slate-800">{{ auth()->user()->name }}</div>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-slate-200 border-2 border-primary/20" style="background-image: url('{{ auth()->user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name='.urlencode(auth()->user()->name ?? 'User') }}'); background-size: cover;"></div>
                </div>
                @else
                <a href="{{ route('login') }}" class="text-sm text-primary">تسجيل الدخول</a>
                @endauth
            </div>
        </header>