<!DOCTYPE html>

<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>الرئيسية - معًا نصنع الأمل</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&amp;family=Public+Sans:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#2e7d32",
                        "accent-orange": "#f57c00",
                        "background-light": "#f6f8f6",
                        "background-dark": "#141e15",
                    },
                    fontFamily: {
                        "display": ["Cairo", "Public Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <!-- Navigation Bar -->
        <x-land-header>

        </x-land-header>
        <main class="flex-1">
            <!-- Hero Section -->
            <section class="relative w-full px-4 py-8 md:px-10 lg:px-20">
                <div class="relative min-h-[560px] w-full rounded-xl overflow-hidden flex items-center justify-center p-8">
                    <div class="absolute inset-0 bg-cover bg-center" data-alt="عائلة سعيدة تبتسم في بيئة دافئة" style='background-image: linear-gradient(rgba(46, 125, 50, 0.4), rgba(20, 30, 21, 0.85)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDE_PZ3Znb_7nTTSRLXOFpZ3IU_HPIaET5FhbkVU5zjuIAeyo6l7cU2QtzkJ0ZlEJQqkYr23CanVLvzaweLjKy-hmMfOKPAO_A3ijsUBd3i3QJC78erCjyGyavD3mkwhGHO_ff7RZCUdDyCmsPlZxeXLX0hda-tsKZIDLjeAJ9Pql0vNA9ovPjVVfu4q0xoSxYFIC5qhfxstOd2RXR8jj4XW1xyN1M2_oBxBc3OehWzcQpPJfsO8vZY0bAnzYZ4rvTC1gNMeEqL7W6w");'></div>
                    <div class="relative z-10 max-w-3xl text-center space-y-8">
                        <div class="space-y-4">
                            <h1 class="text-white text-5xl md:text-7xl font-black leading-[1.2]">
                                معًا نصنع أملًا يدوم
                            </h1>
                            <p class="text-slate-100 text-lg md:text-xl font-light leading-relaxed max-w-2xl mx-auto">
                                منصة شاملة تهدف لتمكين المجتمع عبر التبرعات الشفافة، دعم الحالات الإنسانية، وفتح آفاق التطوع للجميع.
                            </p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <button class="bg-primary hover:bg-primary/90 text-white px-10 py-4 rounded-xl text-lg font-bold transition-all flex items-center justify-center gap-2 group">
                                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">favorite</span>
                                <a href="login.html"> تبرع الآن</a>
                            </button>
                            <button class="bg-accent-orange hover:bg-accent-orange/90 text-white px-10 py-4 rounded-xl text-lg font-bold transition-all flex items-center justify-center gap-2 group shadow-xl shadow-accent-orange/20">
                                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">handshake</span>
                                <a href="login.html"> اطلب مساعدة</a>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Statistics Section -->
            <section class="max-w-7xl mx-auto px-6 -mt-16 relative z-20">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white dark:bg-slate-800 p-8 rounded-xl shadow-xl shadow-primary/5 border border-primary/5 flex flex-col items-center text-center space-y-2">
                        <div class="p-3 bg-primary/10 rounded-full text-primary mb-2">
                            <span class="material-symbols-outlined text-3xl">payments</span>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400 font-medium">إجمالي التبرعات</p>
                        <p class="text-3xl font-black text-slate-900 dark:text-white">+٥٠٠,٠٠٠ ح.م</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-8 rounded-xl shadow-xl shadow-primary/5 border border-primary/5 flex flex-col items-center text-center space-y-2">
                        <div class="p-3 bg-primary/10 rounded-full text-primary mb-2">
                            <span class="material-symbols-outlined text-3xl">groups</span>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400 font-medium">عدد المستفيدين</p>
                        <p class="text-3xl font-black text-slate-900 dark:text-white">+١٠,٠٠٠</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-8 rounded-xl shadow-xl shadow-primary/5 border border-primary/5 flex flex-col items-center text-center space-y-2">
                        <div class="p-3 bg-primary/10 rounded-full text-primary mb-2">
                            <span class="material-symbols-outlined text-3xl">volunteer_activism</span>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400 font-medium">المتطوعون النشطون</p>
                        <p class="text-3xl font-black text-slate-900 dark:text-white">+١,٥٠٠</p>
                    </div>
                </div>
            </section>
            <!-- Success Stories Carousel -->
            <section class="max-w-7xl mx-auto px-6 py-20">
                <div class="flex items-end justify-between mb-10">
                    <div class="space-y-2">
                        <h2 class="text-3xl font-black text-slate-900 dark:text-white">قصص النجاح</h2>
                        <p class="text-slate-500 dark:text-slate-400">أثر عطائكم يغير حياة الكثيرين كل يوم</p>
                    </div>
                    <div class="flex gap-2">
                        <button class="size-10 rounded-full border border-primary/20 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                        <button class="size-10 rounded-full border border-primary/20 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="group bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-700 hover:shadow-2xl transition-all">
                        <div class="aspect-video w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="طفل يبتسم وهو يمسك بكتب مدرسية" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCpxT4MZCTOk5r7YHvMnWh6IxN1Tf9VcrFbKpz9rlr4EwLczz3JP-UE6e72Xc1HKb2ljAbvEXenhBXpJasW3zsPMXFk5DNWvoQecsBYbidJ_LZjZQKl-DP2xoz1I_h2eoSOtTNA_Rjk-V3p5ZSgNSjz2MTOwrg9SVgQppKdqahkl65_deK6bMA1nLgz9TG1hZHndJp5GGEff_W_hLcfy0VxiA00aMc_t0YIkoK0FPqdyVB_AMUBivPLAU-O9I2SHFFQHQ2BRjGmryT1");'></div>
                        </div>
                        <div class="p-6 space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">من اليأس إلى الأمل</h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">بفضل تبرعاتكم السخية، استطاع الطفل أحمد العودة إلى مقاعد الدراسة وتوفير كافة مستلزماته.</p>
                            <a class="inline-flex items-center text-primary font-bold gap-1 hover:gap-2 transition-all" href="readmore.html">
                                اقرأ المزيد <span class="material-symbols-outlined text-sm">west</span>
                            </a>
                        </div>
                    </div>
                    <div class="group bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-700 hover:shadow-2xl transition-all">
                        <div class="aspect-video w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="منزل تم ترميمه حديثا" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCrXiabe7APS4cI7zDxWhuScxXfXg2NfIG60p5tPoKmV_uYbmpKK-a9cgfRbFb08fJ-6aHWTMxOB1SGi5oXKnsAjUfiiFNjR2nf8rjuIME8xnfPtE72juaEgW_ZSVmWzKd6tXJKinP3HtU7iU-h0R6JkrGvUkooT77sE2yGVWsvTpb1qPIb9lCT2nnjdw4VdDpMoT-A8GGTSmUV1Re4KQjA1xbBNmXGw_yJFBksztYsYI7ES5NrrrGG3AHHAZDsPvejNYRO0w1XPpit");'></div>
                        </div>
                        <div class="p-6 space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">سقف آمن لعائلة</h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">نجحنا في ترميم منزل متهالك لعائلة مكونة من ٦ أفراد، وتوفير بيئة عيش كريمة وآمنة لهم.</p>
                            <a class="inline-flex items-center text-primary font-bold gap-1 hover:gap-2 transition-all" href="readmore.html">
                                اقرأ المزيد <span class="material-symbols-outlined text-sm">west</span>
                            </a>
                        </div>
                    </div>
                    <div class="group bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-700 hover:shadow-2xl transition-all">
                        <div class="aspect-video w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="امرأة تدير مشروعا صغيرا للخياطة" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBf1NC8kUpP7UMY5XhBzkMsS-WaNJdd5QNslKF_DFd2wqP3NvN-WLK9DFEjQ6QR_uGNIhYte-e5gA8poPdyKcHsw2ReaoYZ1WeeGavbkIu371f4XQgfplpis1igZYN8CMXnmm_rU6pMvDGUQjlklMcCahPNbFarDjr-gmPKMuH0bys4QkZXxvgnMjzXmreT0WR8c43WHZVqXjiD-xcVbjmECNcVFK-eHNmRv28-c8NPX8M_asQXW3lJAyYGZayQDyZUP821WMUkBXF5");'></div>
                        </div>
                        <div class="p-6 space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">استدامة العمل</h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">تمكين الأسر المنتجة من خلال توفير معدات مهنية ساهمت في خلق مصدر دخل ثابت لعائلتين.</p>
                            <a class="inline-flex items-center text-primary font-bold gap-1 hover:gap-2 transition-all" href="readmore.html">
                                اقرأ المزيد <span class="material-symbols-outlined text-sm">west</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Wish List Section (Urgent Cases) -->
            <section class="bg-primary/5 py-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16 space-y-4">
                        <h2 class="text-4xl font-black text-slate-900 dark:text-white">قائمة الأمنيات العاجلة</h2>
                        <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">حالات إنسانية بحاجة لتدخلكم الفوري. كن جزءًا من تحقيق أمنيتهم اليوم.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Case 1 -->
                        <div class="bg-white dark:bg-slate-800 p-5 rounded-xl border border-slate-200 dark:border-slate-700 flex flex-col h-full">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-accent-orange/10 text-accent-orange text-xs font-bold px-3 py-1 rounded-full">حالة عاجلة</span>
                                <span class="material-symbols-outlined text-slate-300">bookmark</span>
                            </div>
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2">علاج جراحي عاجل</h4>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mb-6 flex-1 line-clamp-2">تأمين تكاليف عملية قلب مفتوح لطفل في العاشرة من عمره...</p>
                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <div class="flex justify-between text-xs font-bold">
                                        <span class="text-primary">تم جمع ٧٥%</span>
                                        <span class="text-slate-400">المتبقي: ٢,٥٠٠ ر.س</span>
                                    </div>
                                    <div class="w-full bg-slate-100 dark:bg-slate-700 h-2 rounded-full overflow-hidden">
                                        <div class="bg-primary h-full rounded-full" style="width: 75%"></div>
                                    </div>
                                </div>
                                <button class="w-full py-3 bg-primary text-white rounded-lg font-bold text-sm hover:shadow-lg hover:shadow-primary/20 transition-all flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-sm">magic_button</span>
                                    <a href="login.html"> حقق أمنية</a>
                                </button>
                            </div>
                        </div>
                        <!-- Case 2 -->
                        <div class="bg-white dark:bg-slate-800 p-5 rounded-xl border border-slate-200 dark:border-slate-700 flex flex-col h-full">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-primary/10 text-primary text-xs font-bold px-3 py-1 rounded-full">تعليم</span>
                                <span class="material-symbols-outlined text-slate-300">bookmark</span>
                            </div>
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2">منحة جامعية</h4>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mb-6 flex-1 line-clamp-2">دعم طالبة متفوقة لاستكمال دراستها في الطب البشري...</p>
                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <div class="flex justify-between text-xs font-bold">
                                        <span class="text-primary">تم جمع ٤٠%</span>
                                        <span class="text-slate-400">المتبقي: ١٢,٠٠٠ ر.س</span>
                                    </div>
                                    <div class="w-full bg-slate-100 dark:bg-slate-700 h-2 rounded-full overflow-hidden">
                                        <div class="bg-primary h-full rounded-full" style="width: 40%"></div>
                                    </div>
                                </div>
                                <button class="w-full py-3 bg-primary text-white rounded-lg font-bold text-sm hover:shadow-lg hover:shadow-primary/20 transition-all flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-sm">magic_button</span>
                                    <a href="login.html"> حقق أمنية</a>
                                </button>
                            </div>
                        </div>
                        <!-- Case 3 -->
                        <div class="bg-white dark:bg-slate-800 p-5 rounded-xl border border-slate-200 dark:border-slate-700 flex flex-col h-full">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-accent-orange/10 text-accent-orange text-xs font-bold px-3 py-1 rounded-full">حالة عاجلة</span>
                                <span class="material-symbols-outlined text-slate-300">bookmark</span>
                            </div>
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2">توفير كرسي كهربائي</h4>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mb-6 flex-1 line-clamp-2">مساعدة شاب من ذوي الهمم للحصول على كرسي متحرك متطور...</p>
                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <div class="flex justify-between text-xs font-bold">
                                        <span class="text-primary">تم جمع ٩٠%</span>
                                        <span class="text-slate-400">المتبقي: ٥٠٠ ر.س</span>
                                    </div>
                                    <div class="w-full bg-slate-100 dark:bg-slate-700 h-2 rounded-full overflow-hidden">
                                        <div class="bg-primary h-full rounded-full" style="width: 90%"></div>
                                    </div>
                                </div>
                                <button class="w-full py-3 bg-primary text-white rounded-lg font-bold text-sm hover:shadow-lg hover:shadow-primary/20 transition-all flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-sm">magic_button</span>
                                    <a href="login.html"> حقق أمنية</a>
                                </button>
                            </div>
                        </div>
                        <!-- Case 4 -->
                        <div class="bg-white dark:bg-slate-800 p-5 rounded-xl border border-slate-200 dark:border-slate-700 flex flex-col h-full">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-primary/10 text-primary text-xs font-bold px-3 py-1 rounded-full">سكن</span>
                                <span class="material-symbols-outlined text-slate-300">bookmark</span>
                            </div>
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2">ترميم منزل ريفي</h4>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mb-6 flex-1 line-clamp-2">إعادة بناء سقف متهالك قبل حلول موسم الشتاء لعائلة فقيرة...</p>
                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <div class="flex justify-between text-xs font-bold">
                                        <span class="text-primary">تم جمع ٢٠%</span>
                                        <span class="text-slate-400">المتبقي: ٨,٠٠٠ ر.س</span>
                                    </div>
                                    <div class="w-full bg-slate-100 dark:bg-slate-700 h-2 rounded-full overflow-hidden">
                                        <div class="bg-primary h-full rounded-full" style="width: 20%"></div>
                                    </div>
                                </div>
                                <button class="w-full py-3 bg-primary text-white rounded-lg font-bold text-sm hover:shadow-lg hover:shadow-primary/20 transition-all flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-sm">magic_button</span>
                                    <a href="login.html"> حقق أمنية</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer class="bg-slate-900 text-slate-300 py-16">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12 border-b border-slate-800 pb-12">
                    <div class="space-y-6">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-primary rounded-lg text-white">
                                <span class="material-symbols-outlined text-2xl">volunteer_activism</span>
                            </div>
                            <h2 class="text-xl font-black text-white tracking-tight">معًا نصنع الأمل</h2>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-400">
                            مؤسسة خيرية مرخصة تهدف لنشر ثقافة العطاء والعمل التطوعي بأعلى معايير الشفافية والموثوقية.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-white font-bold mb-6">روابط سريعة</h4>
                        <ul class="space-y-4 text-sm">
                            <li><a class="hover:text-primary transition-colors" href="aboutus.html">عن المؤسسة</a></li>
                            <li><a class="hover:text-primary transition-colors" href="signup.html">تطوع معنا</a></li>
                            <li><a class="hover:text-primary transition-colors" href="privacy.html">سياسة الخصوصية</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-white font-bold mb-6">تواصل معنا</h4>
                        <ul class="space-y-4 text-sm">
                            <li class="flex items-center gap-3 cursor-pointer hover:text-primary transition-colors" id="location-trigger">
                                <span class="material-symbols-outlined text-primary text-xl">location_on</span>
                                <span>جمهورية مصر العربية</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">call</span>
                                <span dir="ltr">+201012345678</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">mail</span>
                                <span>info@hope-together.org</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <p class="text-xs text-slate-500">© 2026 معًا نصنع الأمل. جميع الحقوق محفوظة.</p>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer"
                            class="size-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors">
                            <svg class="size-5 fill-current" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                            </svg>
                        </a>
                        <a href="https://x.com" target="_blank" rel="noopener noreferrer"
                            class="size-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors">
                            <svg class="size-5 fill-current" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal / Popup للخريطة -->
        <div id="map-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 backdrop-blur-sm">
            <div class="relative bg-white dark:bg-slate-800 rounded-2xl max-w-4xl w-[90%] max-h-[90vh] overflow-hidden shadow-2xl">
                <!-- Header المودال -->
                <div class="flex items-center justify-between p-6 border-b border-slate-200 dark:border-slate-700">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white">موقعنا في جمهورية مصر العربية</h3>
                    <button id="close-modal" class="text-slate-500 hover:text-primary text-3xl transition-colors">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>

                <!-- Body المودال -->
                <div class="p-6">
                    <img
                        src="https://t3.ftcdn.net/jpg/11/12/86/76/360_F_1112867697_yuFiExjgM6IIY24YSmkhkzS96FcUdAbB.jpg"
                        alt="خريطة مصر السياسية"
                        class="w-full h-auto rounded-xl" />
                    <p class="mt-6 text-center text-slate-600 dark:text-slate-300">
                        مقرنا الرئيسي في القاهرة، ونعمل في جميع محافظات الجمهورية لخدمة المستحقين في كل مكان.
                    </p>
                </div>
            </div>
        </div>

        <!-- JavaScript للتحكم في البوب اب -->
        <script>
            const locationTrigger = document.getElementById('location-trigger');
            const mapModal = document.getElementById('map-modal');
            const closeModal = document.getElementById('close-modal');

            locationTrigger.addEventListener('click', () => {
                mapModal.classList.remove('hidden');
                mapModal.classList.add('flex');
            });

            closeModal.addEventListener('click', () => {
                mapModal.classList.add('hidden');
                mapModal.classList.remove('flex');
            });

            // إغلاق المودال عند الضغط خارج الصورة
            mapModal.addEventListener('click', (e) => {
                if (e.target === mapModal) {
                    mapModal.classList.add('hidden');
                    mapModal.classList.remove('flex');
                }
            });
        </script>

    </div>
</body>

</html>