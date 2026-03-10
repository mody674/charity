        <header class="bg-white px-10 py-6 flex justify-between items-center shadow-sm sticky top-0 z-10">
            <div class="flex flex-col">
                <h2 class="text-2xl font-black text-slate-800">طلباتي</h2>
                <p class="text-sm text-slate-500">متابعة حالة طلبات المساعدة المقدمة وتفاصيلها</p>
            </div>
            <div class="flex items-center gap-4">
                @auth
                <div class="flex items-center gap-3 pr-4 border-r border-slate-100">
                    <div class="text-left">
                        <p class="text-xs font-bold text-slate-400">مرحباً بك</p>
                        <p class="text-sm font-bold text-slate-700">{{ auth()->user()->name }}</p>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-slate-200 border-2 border-primary/20" style="background-image: url('{{ auth()->user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name='.urlencode(auth()->user()->name ?? 'User') }}'); background-size: cover;"></div>
                </div>
                @else
                <div class="flex items-center gap-3 pr-4 border-r border-slate-100">
                    <div class="text-left">
                        <p class="text-xs font-bold text-slate-400">مرحباً</p>
                        <a href="{{ route('login') }}" class="text-sm font-bold text-primary">تسجيل الدخول</a>
                    </div>
                </div>
                @endauth
            </div>
        </header>