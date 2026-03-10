<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>اتصل بنا - معًا نصنع الأمل</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet" />
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
                        "display": ["Cairo", "sans-serif"]
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
    <style type="text/tailwindcss">
        body {
            font-family: 'Cairo', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <x-land-header>

        </x-land-header>
        <main class="flex-1">
            <section class="bg-primary/10 py-16">
                <div class="max-w-7xl mx-auto px-6 text-center">
                    <h1 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white mb-4">اتصل بنا</h1>
                    <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto text-lg">
                        نحن هنا للإجابة على استفساراتكم. تواصلوا معنا لمزيد من المعلومات حول برامجنا وكيفية المساهمة في صنع الأمل.
                    </p>
                </div>
            </section>
            <section class="max-w-7xl mx-auto px-6 py-20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                    <div class="bg-white dark:bg-slate-800 p-8 md:p-10 rounded-2xl shadow-xl shadow-slate-200/50 dark:shadow-none border border-slate-100 dark:border-slate-700">
                        <h3 class="text-2xl font-bold mb-8 text-slate-900 dark:text-white">أرسل لنا رسالة</h3>
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-slate-700 dark:text-slate-300">الاسم بالكامل</label>
                                    <input class="w-full bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 focus:ring-primary focus:border-primary transition-all" placeholder="أدخل اسمك هنا" type="text" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-slate-700 dark:text-slate-300">البريد الإلكتروني</label>
                                    <input class="w-full bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 focus:ring-primary focus:border-primary transition-all" placeholder="example@mail.com" type="email" />
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 dark:text-slate-300">الموضوع</label>
                                <input class="w-full bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 focus:ring-primary focus:border-primary transition-all" placeholder="ما هو موضوع رسالتك؟" type="text" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 dark:text-slate-300">الرسالة</label>
                                <textarea class="w-full bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 focus:ring-primary focus:border-primary transition-all" placeholder="اكتب تفاصيل استفسارك هنا..." rows="5"></textarea>
                            </div>
                            <button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2 group" type="submit">
                                <span class="material-symbols-outlined group-hover:translate-x-[-4px] transition-transform">send</span>
                                إرسال الرسالة
                            </button>
                        </form>
                    </div>
                    <div class="space-y-12">
                        <div class="space-y-8">
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white">معلومات التواصل</h3>
                            <div class="space-y-6">
                                <div class="flex items-start gap-4">
                                    <div class="size-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary flex-shrink-0">
                                        <span class="material-symbols-outlined">location_on</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 dark:text-white mb-1">الموقع</h4>
                                        <p class="text-slate-600 dark:text-slate-400">حي المعادي، القاهرة، جمهورية مصر العربية</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-4">
                                    <div class="size-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary flex-shrink-0">
                                        <span class="material-symbols-outlined">call</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 dark:text-white mb-1">رقم الهاتف</h4>
                                        <p class="text-slate-600 dark:text-slate-400" dir="ltr">+20 101 234 5678</p>
                                        <p class="text-slate-600 dark:text-slate-400" dir="ltr">+20 2 2456 7890</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-4">
                                    <div class="size-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary flex-shrink-0">
                                        <span class="material-symbols-outlined">mail</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 dark:text-white mb-1">البريد الإلكتروني</h4>
                                        <p class="text-slate-600 dark:text-slate-400">info@hope-together.org</p>
                                        <p class="text-slate-600 dark:text-slate-400">support@hope-together.org</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-80 bg-slate-200 dark:bg-slate-700 rounded-2xl overflow-hidden relative border border-slate-100 dark:border-slate-700">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.8666666666667!2d31.3157!3d30.0333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583c9f5c5c5c5d%3A0x5c5c5c5c5c5c5c5c!2sMaadi%2C%20Cairo%20Governorate%2C%20Egypt!5e0!3m2!1sen!2seg!4v1698765432100!5m2!1sen!2seg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="space-y-4">
                            <h4 class="font-bold text-slate-900 dark:text-white">تابعنا على وسائل التواصل</h4>
                            <div class="flex gap-4">
                                <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="size-11 rounded-xl bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-primary hover:text-white transition-all">
                                    <svg class="size-5 fill-current" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                                    </svg>
                                </a>
                                <a href="https://x.com" target="_blank" rel="noopener noreferrer" class="size-11 rounded-xl bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-primary hover:text-white transition-all">
                                    <svg class="size-5 fill-current" viewBox="0 0 24 24">
                                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                                    </svg>
                                </a>
                                <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="size-11 rounded-xl bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-primary hover:text-white transition-all">
                                    <svg class="size-5 fill-current" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="bg-slate-900 text-slate-300 py-16">
            <div class="max-w-7xl mx-auto px-6 text-center md:text-right">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12 border-b border-slate-800 pb-12">
                    <div class="space-y-6">
                        <div class="flex items-center gap-3 justify-center md:justify-start">
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
                        <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="size-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors">
                            <svg class="size-5 fill-current" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                            </svg>
                        </a>
                        <a href="https://x.com" target="_blank" rel="noopener noreferrer" class="size-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors">
                            <svg class="size-5 fill-current" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </footer>

        <div id="map-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 backdrop-blur-sm">
            <div class="relative bg-white dark:bg-slate-800 rounded-2xl max-w-4xl w-[90%] max-h-[90vh] overflow-hidden shadow-2xl">
                <div class="flex items-center justify-between p-6 border-b border-slate-200 dark:border-slate-700">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white">موقعنا في جمهورية مصر العربية</h3>
                    <button id="close-modal" class="text-slate-500 hover:text-primary text-3xl transition-colors">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                <div class="p-6">
                    <img src="https://t3.ftcdn.net/jpg/11/12/86/76/360_F_1112867697_yuFiExjgM6IIY24YSmkhkzS96FcUdAbB.jpg" alt="خريطة مصر السياسية" class="w-full h-auto rounded-xl" />
                    <p class="mt-6 text-center text-slate-600 dark:text-slate-300">
                        مقرنا الرئيسي في القاهرة، ونعمل في جميع محافظات الجمهورية لخدمة المستحقين في كل مكان.
                    </p>
                </div>
            </div>
        </div>

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