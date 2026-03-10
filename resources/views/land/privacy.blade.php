<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>سياسة الخصوصية - معًا نصنع الأمل</title>

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

        .content h2 {
            @apply text-2xl md:text-3xl font-bold text-slate-900 dark:text-white mt-12 mb-6;
        }

        .content h3 {
            @apply text-xl font-bold text-primary mt-10 mb-4;
        }

        .content p,
        .content li {
            @apply text-slate-700 dark:text-slate-300 leading-relaxed mb-5 text-lg;
        }

        .content ul,
        .content ol {
            @apply list-disc pr-8 space-y-3 mb-6;
        }

        .content strong {
            @apply text-slate-900 dark:text-white font-bold;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100">

    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">

        <!-- Navigation Bar -->
<x-land-header>
    
</x-land-header>

        <!-- Main Content -->
        <main class="flex-1">

            <!-- Page Header -->
            <section class="relative w-full bg-gradient-to-b from-primary/10 to-transparent py-16 md:py-20">
                <div class="max-w-7xl mx-auto px-6 text-center space-y-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 dark:text-white leading-tight">
                        سياسة الخصوصية
                    </h1>
                    <p class="text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                        نلتزم بحماية خصوصيتك وبياناتك الشخصية بأعلى معايير الشفافية والأمان
                    </p>
                    <p class="text-sm text-slate-500 dark:text-slate-400">
                        آخر تحديث: ١٠ مارس ٢٠٢٦
                    </p>
                </div>
            </section>

            <!-- Privacy Policy Content -->
            <section class="max-w-4xl mx-auto px-6 py-12 md:py-16 content">
                <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl shadow-primary/5 border border-primary/5 p-8 md:p-12">

                    <h2>مقدمة</h2>
                    <p>
                        مرحباً بك في منصة "معًا نصنع الأمل". نحن ندرك أهمية خصوصيتك ونلتزم بحماية المعلومات الشخصية التي تقدمها لنا سواء عند التبرع، طلب المساعدة، التطوع، أو تصفح الموقع.
                    </p>
                    <p>
                        هذه السياسة توضح كيفية جمعنا واستخدامنا وحمايتنا لمعلوماتك الشخصية وفقاً للقوانين المعمول بها في جمهورية مصر العربية وقوانين حماية البيانات الدولية ذات الصلة.
                    </p>

                    <h2>المعلومات التي نجمعها</h2>

                    <h3>١. المعلومات التي تقدمها لنا مباشرة</h3>
                    <ul>
                        <li>الاسم الكامل</li>
                        <li>رقم الهاتف والبريد الإلكتروني</li>
                        <li>بيانات الدفع (لا نحتفظ ببيانات البطاقة كاملة – تتم المعالجة عبر بوابات دفع مرخصة)</li>
                        <li>تفاصيل الحالة الإنسانية (عند طلب المساعدة)</li>
                        <li>معلومات التطوع (المهارات، الموقع، الأوقات المتاحة)</li>
                    </ul>

                    <h3>٢. المعلومات التي نجمعها تلقائياً</h3>
                    <ul>
                        <li>عنوان IP</li>
                        <li>نوع المتصفح والجهاز</li>
                        <li>صفحات الزيارة والوقت المستغرق</li>
                        <li>مصدر الزيارة (referrer)</li>
                    </ul>

                    <h2>كيف نستخدم معلوماتك</h2>
                    <ul>
                        <li>تفعيل وإدارة حسابك</li>
                        <li>معالجة التبرعات وإصدار الإيصالات</li>
                        <li>متابعة حالات طلب المساعدة والتواصل معك</li>
                        <li>ربط المتطوعين بالفرص المناسبة</li>
                        <li>إرسال تحديثات مهمة عن الحالات التي تبرعت لها (اختياري)</li>
                        <li>تحسين تجربة المستخدم وتطوير المنصة</li>
                        <li>الامتثال للالتزامات القانونية والضريبية</li>
                    </ul>

                    <h2>مشاركة المعلومات</h2>
                    <p>لا نبيع أو نؤجر أو نتاجر ببياناتك الشخصية. نشارك المعلومات فقط في الحالات التالية:</p>
                    <ul>
                        <li>مع مقدمي خدمات الدفع المرخصين (لإتمام عملية التبرع فقط)</li>
                        <li>مع الجهات الرسمية عند وجود طلب قانوني صحيح</li>
                        <li>مع المتطوعين/الجهات المنفذة للحالات بموافقة صريحة منك</li>
                        <li>مع شركاء التحليلات (Google Analytics وغيرها) بشكل مجهول</li>
                    </ul>

                    <h2>حماية البيانات</h2>
                    <p>
                        نستخدم تشفير SSL/TLS لجميع الاتصالات، ونطبق إجراءات أمنية فنية وإدارية مناسبة لحماية بياناتك.
                        ومع ذلك، لا يوجد نظام نقل أو تخزين إلكتروني آمن بنسبة 100%، لذا لا يمكننا ضمان الأمان المطلق.
                    </p>

                    <h2>حقوقك</h2>
                    <p>لديك الحق في:</p>
                    <ul>
                        <li>الاطلاع على بياناتك الشخصية</li>
                        <li>تصحيح البيانات غير الدقيقة</li>
                        <li>حذف بياناتك (مع مراعاة الالتزامات القانونية والمحاسبية)</li>
                        <li>سحب الموافقة على تلقي النشرات</li>
                        <li>تقديم شكوى للجهة الرقابية المختصة</li>
                    </ul>

                    <h2>ملفات تعريف الارتباط (Cookies)</h2>
                    <p>
                        نستخدم ملفات تعريف الارتباط الأساسية لتشغيل الموقع، وملفات إضافية لتحليل الاستخدام وتحسين الأداء.
                        يمكنك إدارة تفضيلات الكوكيز من خلال إعدادات المتصفح أو نافذة الموافقة عند الزيارة الأولى.
                    </p>

                    <h2>الاتصال بنا</h2>
                    <p>
                        إذا كانت لديك أي استفسارات حول سياسة الخصوصية أو كيفية التعامل مع بياناتك، يرجى التواصل معنا عبر:
                    </p>
                    <ul class="not-list-disc space-y-3 mt-6">
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">mail</span>
                            <span>privacy@hope-together.org</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">call</span>
                            <span dir="ltr">+20 101 234 5678</span>
                        </li>
                    </ul>

                    <div class="mt-16 pt-8 border-t border-primary/10 text-sm text-slate-500 dark:text-slate-400">
                        <p>آخر تحديث: ١٠ مارس ٢٠٢٦</p>
                        <p class="mt-2">نشكرك على ثقتك بمنصة "معًا نصنع الأمل"</p>
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