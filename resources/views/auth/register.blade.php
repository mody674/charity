@extends('layouts.guest')

@section('title', 'إنشاء حساب - معًا نصنع الأمل')

@section('content')
<div class="flex min-h-screen w-full flex-col lg:flex-row">
    <!-- Image Section -->
    <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style='background-image: linear-gradient(rgba(46, 125, 50, 0.6), rgba(20, 30, 21, 0.8)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCpxT4MZCTOk5r7YHvMnWh6IxN1Tf9VcrFbKpz9rlr4EwLczz3JP-UE6e72Xc1HKb2ljAbvEXenhBXpJasW3zsPMXFk5DNWvoQecsBYbidJ_LZjZQKl-DP2xoz1I_h2eoSOtTNA_Rjk-V3p5ZSgNSjz2MTOwrg9SVgQppKdqahkl65_deK6bMA1nLgz9TG1hZHndJp5GGEff_W_hLcfy0VxiA00aMc_t0YIkoK0FPqdyVB_AMUBivPLAU-O9I2SHFFQHQ2BRjGmryT1");'></div>
        <div class="relative z-10 flex flex-col justify-center px-20 text-white">
            <div class="flex items-center gap-3 mb-12">
                <div class="p-3 bg-white rounded-xl text-primary">
                    <span class="material-symbols-outlined text-3xl">volunteer_activism</span>
                </div>
                <h2 class="text-3xl font-black tracking-tight">معًا نصنع الأمل</h2>
            </div>
            <div class="space-y-6">
                <h1 class="text-5xl font-black leading-tight">عطاؤك يصنع فرقًا حقيقيًا في حياة الآخرين</h1>
                <p class="text-xl text-slate-100 font-light leading-relaxed max-w-lg">
                    انضم إلى مجتمعنا اليوم وساهم في رسم البسمة على وجوه المحتاجين، أو احصل على الدعم الذي تحتاجه بكرامة وشفافية.
                </p>
            </div>
            <div class="mt-16 flex items-center gap-6">
                <p class="text-sm font-medium">+١٥٠٠ متطوع انضموا إلينا بالفعل</p>
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <div class="flex-1 flex flex-col items-center justify-center p-6 md:p-12 lg:p-20 bg-background-light dark:bg-background-dark">
        <div class="w-full max-w-lg">
            <div class="bg-white dark:bg-slate-800 p-8 md:p-10 rounded-[16px] shadow-2xl shadow-primary/5 border border-primary/5">
                <div class="mb-10 text-center lg:text-right">
                    <h2 class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white mb-3">انضم إلينا وكن جزءًا من التغيير</h2>
                    <p class="text-slate-500 dark:text-slate-400">سجّل الآن لتتبرع، تتطوع، أو تطلب المساعدة بكل سهولة</p>
                </div>

                <form class="space-y-6" id="signupForm" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="space-y-3">
                        <label class="text-sm font-bold text-slate-700 dark:text-slate-300">نوع الحساب</label>
                        <div class="segmented-control flex p-1 bg-slate-100 dark:bg-slate-700 rounded-xl">
                            <input {{ old('tybe', 'أريد التبرع') === 'أريد التبرع' ? 'checked' : '' }} class="hidden" id="donate" name="tybe" type="radio" value="أريد التبرع"/>
                            <label class="flex-1 py-2.5 text-center text-sm font-bold rounded-lg cursor-pointer transition-all text-slate-600 dark:text-slate-300 hover:bg-white/50 dark:hover:bg-white/5" for="donate">أريد التبرع</label>
                            
                            <input {{ old('tybe') === 'طلب مساعدة' ? 'checked' : '' }} class="hidden" id="help" name="tybe" type="radio" value="طلب مساعدة"/>
                            <label class="flex-1 py-2.5 text-center text-sm font-bold rounded-lg cursor-pointer transition-all text-slate-600 dark:text-slate-300 hover:bg-white/50 dark:hover:bg-white/5" for="help">طلب مساعدة</label>
                            
                            <input {{ old('tybe') === 'التطوع' ? 'checked' : '' }} class="hidden" id="volunteer" name="tybe" type="radio" value="التطوع"/>
                            <label class="flex-1 py-2.5 text-center text-sm font-bold rounded-lg cursor-pointer transition-all text-slate-600 dark:text-slate-300 hover:bg-white/50 dark:hover:bg-white/5" for="volunteer">التطوع</label>
                        </div>
                        @error('tybe') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="grid grid-cols-1 gap-5">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="name">الاسم الكامل</label>
                            <input name="name" class="w-full px-4 py-3 rounded-xl border-slate-200 dark:border-slate-600 dark:bg-slate-700 focus:ring-primary focus:border-primary transition-all" id="name" placeholder="أدخل اسمك الثلاثي" type="text" value="{{ old('name') }}"/>
                            @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="email">البريد الإلكتروني</label>
                            <input name="email" class="w-full px-4 py-3 rounded-xl border-slate-200 dark:border-slate-600 dark:bg-slate-700 focus:ring-primary focus:border-primary transition-all text-left" dir="ltr" id="email" placeholder="example@mail.com" type="email" value="{{ old('email') }}"/>
                            @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="phone">رقم الموبايل</label>
                            <div class="relative">
                                <input name="phone" class="w-full px-4 py-3 rounded-xl border-slate-200 dark:border-slate-600 dark:bg-slate-700 focus:ring-primary focus:border-primary transition-all text-left pr-16" dir="ltr" id="phone" placeholder="1xxxxxxxx" type="tel" maxlength="11" value="{{ old('phone') }}"/>
                                <div class="absolute inset-y-0 right-0 flex items-center px-3 border-r border-slate-200 dark:border-slate-600 text-slate-500 font-bold text-sm">+20</div>
                            </div>
                            @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="password">كلمة المرور</label>
                                <input name="password" class="w-full px-4 py-3 rounded-xl border-slate-200 dark:border-slate-600 dark:bg-slate-700 focus:ring-primary focus:border-primary transition-all text-left" dir="ltr" id="password" type="password"/>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="password_confirmation">تأكيد كلمة المرور</label>
                                <input name="password_confirmation" class="w-full px-4 py-3 rounded-xl border-slate-200 dark:border-slate-600 dark:bg-slate-700 focus:ring-primary focus:border-primary transition-all text-left" dir="ltr" id="password_confirmation" type="password"/>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <input name="terms" class="size-5 rounded border-slate-300 text-primary focus:ring-primary" id="terms" type="checkbox" required/>
                        <label class="text-sm text-slate-600 dark:text-slate-400" for="terms">
                            أوافق على <a class="text-primary font-bold hover:underline" href="#">الشروط والأحكام</a>
                        </label>
                    </div>

                    <button class="w-full py-4 bg-primary hover:bg-primary/90 text-white rounded-xl text-lg font-bold transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-2" type="submit">
                        إنشاء حساب
                    </button>
                </form>

                <div class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-700 text-center">
                    <p class="text-slate-600 dark:text-slate-400">
                        لديك حساب بالفعل؟ 
                        <a class="text-primary font-bold hover:underline mr-1" href="{{ route('login') }}">تسجيل الدخول</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
