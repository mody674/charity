<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>قصص النجاح - معًا نصنع الأمل</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&family=Public+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

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

        <!-- Navigation Bar (نفس الهيدر) -->
        <x-land-header>

        </x-land-header>

        <!-- Main Content -->
        <main class="flex-1">

            <!-- Page Header -->
            <section class="relative w-full bg-gradient-to-b from-primary/10 to-transparent py-16 md:py-20">
                <div class="max-w-7xl mx-auto px-6 text-center space-y-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 dark:text-white leading-tight">
                        قصص النجاح
                    </h1>
                    <p class="text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                        أثر عطائكم وكرمكم يتحول إلى قصص حقيقية تغير حياة الناس.. إليكم بعض النماذج التي صنعت بفضل دعمكم
                    </p>
                </div>
            </section>

            <!-- Stories Grid -->
            <section class="max-w-7xl mx-auto px-6 py-16 md:py-20">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">

                    <!-- Story 1 -->
                    <div class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow-xl shadow-primary/5 border border-primary/5 flex flex-col h-full transition-all hover:shadow-2xl hover:shadow-primary/10">
                        <div class="aspect-video w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center hover:scale-105 transition-transform duration-700"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCpxT4MZCTOk5r7YHvMnWh6IxN1Tf9VcrFbKpz9rlr4EwLczz3JP-UE6e72Xc1HKb2ljAbvEXenhBXpJasW3zsPMXFk5DNWvoQecsBYbidJ_LZjZQKl-DP2xoz1I_h2eoSOtTNA_Rjk-V3p5ZSgNSjz2MTOwrg9SVgQppKdqahkl65_deK6bMA1nLgz9TG1hZHndJp5GGEff_W_hLcfy0VxiA00aMc_t0YIkoK0FPqdyVB_AMUBivPLAU-O9I2SHFFQHQ2BRjGmryT1');">
                            </div>
                        </div>
                        <div class="p-6 md:p-8 flex flex-col flex-1 space-y-5">
                            <div class="flex items-center gap-3">
                                <span class="bg-primary/10 text-primary text-xs md:text-sm font-bold px-4 py-1.5 rounded-full">تعليم</span>
                                <span class="text-slate-500 dark:text-slate-400 text-sm">يناير 2026</span>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white leading-tight">
                                من اليأس إلى مقاعد الدراسة
                            </h2>
                            <p class="text-slate-600 dark:text-slate-300 leading-relaxed flex-1">
                                الطفل أحمد (١٠ سنوات) كان على وشك التوقف عن الدراسة بسبب ظروف أسرته المادية الصعبة. بفضل تبرعاتكم تم تغطية رسوم المدرسة، شراء الأدوات المدرسية، الزي المدرسي، وحتى توفير دعم غذائي شهري للأسرة لمدة عام كامل. اليوم يذهب أحمد إلى المدرسة بابتسامة واثقة ويحتل المركز الأول بين زملائه.
                            </p>
                            <div class="pt-4 border-t border-primary/10">
                                <p class="text-primary font-bold">التكلفة الكلية: ٢٨,٥٠٠ ج.م</p>
                                <p class="text-sm text-slate-500 dark:text-slate-400">تم الدعم بنسبة ١٠٠%</p>
                            </div>
                        </div>
                    </div>

                    <!-- Story 2 -->
                    <div class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow-xl shadow-primary/5 border border-primary/5 flex flex-col h-full transition-all hover:shadow-2xl hover:shadow-primary/10">
                        <div class="aspect-video w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center hover:scale-105 transition-transform duration-700"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCrXiabe7APS4cI7zDxWhuScxXfXg2NfIG60p5tPoKmV_uYbmpKK-a9cgfRbFb08fJ-6aHWTMxOB1SGi5oXKnsAjUfiiFNjR2nf8rjuIME8xnfPtE72juaEgW_ZSVmWzKd6tXJKinP3HtU7iU-h0R6JkrGvUkooT77sE2yGVWsvTpb1qPIb9lCT2nnjdw4VdDpMoT-A8GGTSmUV1Re4KQjA1xbBNmXGw_yJFBksztYsYI7ES5NrrrGG3AHHAZDsPvejNYRO0w1XPpit');">
                            </div>
                        </div>
                        <div class="p-6 md:p-8 flex flex-col flex-1 space-y-5">
                            <div class="flex items-center gap-3">
                                <span class="bg-accent-orange/10 text-accent-orange text-xs md:text-sm font-bold px-4 py-1.5 rounded-full">سكن</span>
                                <span class="text-slate-500 dark:text-slate-400 text-sm">ديسمبر 2025</span>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white leading-tight">
                                سقف آمن لعائلة من ٦ أفراد
                            </h2>
                            <p class="text-slate-600 dark:text-slate-300 leading-relaxed flex-1">
                                كانت العائلة تعيش في منزل آيل للسقوط، ومع اقتراب فصل الشتاء كان الخطر يهدد حياتهم. بفضل دعمكم تم ترميم السقف بالكامل، تعزيز الجدران، تركيب نوافذ وعزل مقاوم للرطوبة، وتوفير أثاث أساسي. الآن أصبح المنزل مكانًا آمنًا ودافئًا يستطيع الأطفال النوم فيه باطمئنان.
                            </p>
                            <div class="pt-4 border-t border-primary/10">
                                <p class="text-primary font-bold">التكلفة الكلية: ٤٥,٠٠٠ ج.م</p>
                                <p class="text-sm text-slate-500 dark:text-slate-400">تم الدعم بنسبة ١٠٠%</p>
                            </div>
                        </div>
                    </div>

                    <!-- Story 3 -->
                    <div class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow-xl shadow-primary/5 border border-primary/5 flex flex-col h-full transition-all hover:shadow-2xl hover:shadow-primary/10">
                        <div class="aspect-video w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center hover:scale-105 transition-transform duration-700"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBf1NC8kUpP7UMY5XhBzkMsS-WaNJdd5QNslKF_DFd2wqP3NvN-WLK9DFEjQ6QR_uGNIhYte-e5gA8poPdyKcHsw2ReaoYZ1WeeGavbkIu371f4XQgfplpis1igZYN8CMXnmm_rU6pMvDGUQjlklMcCahPNbFarDjr-gmPKMuH0bys4QkZXxvgnMjzXmreT0WR8c43WHZVqXjiD-xcVbjmECNcVFK-eHNmRv28-c8NPX8M_asQXW3lJAyYGZayQDyZUP821WMUkBXF5');">
                            </div>
                        </div>
                        <div class="p-6 md:p-8 flex flex-col flex-1 space-y-5">
                            <div class="flex items-center gap-3">
                                <span class="bg-primary/10 text-primary text-xs md:text-sm font-bold px-4 py-1.5 rounded-full">تمكين اقتصادي</span>
                                <span class="text-slate-500 dark:text-slate-400 text-sm">نوفمبر 2025</span>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white leading-tight">
                                مشروع خياطة منزلي مستدام
                            </h2>
                            <p class="text-slate-600 dark:text-slate-300 leading-relaxed flex-1">
                                تمكين أم لأربعة أطفال من إنشاء مشروع خياطة صغير بعد توفير ماكينة خياطة حديثة، خامات أولية، ودورة تدريبية مكثفة. خلال ستة أشهر فقط أصبح المشروع مصدر الدخل الرئيسي للأسرة، وساهمت في تدريب سيدتين أخريين من الجيران ليصبح المشروع نواة لشبكة إنتاج محلية صغيرة.
                            </p>
                            <div class="pt-4 border-t border-primary/10">
                                <p class="text-primary font-bold">التكلفة الكلية: ١٨,٧٠٠ ج.م</p>
                                <p class="text-sm text-slate-500 dark:text-slate-400">تم الدعم بنسبة ١٠٠%</p>
                            </div>
                        </div>
                    </div>

                    <!-- يمكنك إضافة المزيد من القصص هنا بنفس النمط -->

                </div>
            </section>

        </main>

        <!-- Footer (نفس الفوتر) -->
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