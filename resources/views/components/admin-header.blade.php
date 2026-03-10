        @php
            $user = auth()->user();
            $userName = $user?->name ?: 'زائر';
            $userType = $user?->tybe ?: 'مستخدم المنصة';
            $userInitial = mb_strtoupper(mb_substr(trim($userName), 0, 1));
        @endphp

        <header class="bg-white px-10 py-6 flex justify-between items-center shadow-sm sticky top-0 z-10">
            <div class="flex flex-col">
                <h2 class="text-2xl font-black text-slate-800">لوحة التحكم - الإحصائيات العامة</h2>
                <p class="text-sm text-slate-500">مرحباً بك، إليك نظرة شاملة على أداء المنصة</p>
            </div>
            <div class="flex items-center gap-4">
                <button type="button" class="p-2 text-slate-400 hover:text-primary transition-colors relative">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
                <div class="flex items-center gap-3 border-r pr-4 border-slate-100">
                    <div class="text-left hidden md:block">
                        <p class="text-sm font-bold text-slate-800">{{ $userName }}</p>
                        <p class="text-xs text-slate-500">{{ $userType }}</p>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-primary text-white border-2 border-primary/20 flex items-center justify-center font-black">
                        {{ $userInitial }}
                    </div>
                </div>
            </div>
        </header>
