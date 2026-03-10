<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>عن المؤسسة - معًا نصنع الأمل</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&amp;display=swap" rel="stylesheet" />
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
            <section class="relative w-full bg-primary/5 py-16">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                        <div class="space-y-4 text-center md:text-right">
                            <h1 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white">عن المؤسسة</h1>
                            <p class="text-slate-600 dark:text-slate-400 text-lg">تعرف على رحلتنا، رؤيتنا، والقيم التي تحركنا.</p>
                        </div>
                        <nav class="flex items-center gap-2 text-sm font-medium text-slate-500">
                            <a class="hover:text-primary transition-colors" href="index.html">الرئيسية</a>
                            <span class="material-symbols-outlined text-base">chevron_left</span>
                            <span class="text-primary">عن المؤسسة</span>
                        </nav>
                    </div>
                </div>
            </section>
            <section class="max-w-7xl mx-auto px-6 py-24">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="space-y-12">
                        <div class="space-y-6">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/10 text-primary text-sm font-bold">
                                <span class="material-symbols-outlined text-lg">visibility</span>
                                رؤيتنا
                            </div>
                            <h2 class="text-3xl font-black text-slate-900 dark:text-white leading-tight">نسعى لنكون المنارة الأولى للعمل الخيري والتمكين المجتمعي في المنطقة.</h2>
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-lg">
                                رؤيتنا هي بناء مجتمع متكافل تسوده قيم العطاء والرحمة، حيث يحصل كل فرد على فرصة للعيش الكريم والنمو، معتمدين في ذلك على أحدث وسائل التكنولوجيا والشفافية في العمل الخيري.
                            </p>
                        </div>
                        <div class="space-y-6">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent-orange/10 text-accent-orange text-sm font-bold">
                                <span class="material-symbols-outlined text-lg">rocket_launch</span>
                                رسالتنا
                            </div>
                            <h2 class="text-3xl font-black text-slate-900 dark:text-white leading-tight">تفعيل طاقات المجتمع لتحقيق تنمية مستدامة للأسر الأكثر احتياجًا.</h2>
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-lg">
                                نحن نلتزم بتوفير منصة آمنة وشفافة تربط بين المتبرعين والمستحقين، ونعمل على تصميم برامج تنموية فعالة تشمل التعليم، الصحة، وتحسين المستوى المعيشي لخلق أثر إيجابي مستدام.
                            </p>
                        </div>
                    </div>
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-primary/10 rounded-3xl -z-10 group-hover:-inset-2 transition-all"></div>
                        <img alt="عن المؤسسة" class="w-full h-[500px] object-cover rounded-2xl shadow-2xl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDE_PZ3Znb_7nTTSRLXOFpZ3IU_HPIaET5FhbkVU5zjuIAeyo6l7cU2QtzkJ0ZlEJQqkYr23CanVLvzaweLjKy-hmMfOKPAO_A3ijsUBd3i3QJC78erCjyGyavD3mkwhGHO_ff7RZCUdDyCmsPlZxeXLX0hda-tsKZIDLjeAJ9Pql0vNA9ovPjVVfu4q0xoSxYFIC5qhfxstOd2RXR8jj4XW1xyN1M2_oBxBc3OehWzcQpPJfsO8vZY0bAnzYZ4rvTC1gNMeEqL7W6w" />
                    </div>
                </div>
            </section>
            <section class="bg-slate-50 dark:bg-slate-900/50 py-24">
                <div class="max-w-7xl mx-auto px-6 text-center">
                    <div class="space-y-4 mb-16">
                        <h2 class="text-4xl font-black text-slate-900 dark:text-white">قيمنا الأساسية</h2>
                        <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">المبادئ التي توجه كل خطوة نخطوها في مسيرتنا نحو صنع الأمل.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all group">
                            <div class="w-16 h-16 bg-primary/10 text-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined text-3xl">verified_user</span>
                            </div>
                            <h3 class="text-xl font-bold mb-4">الشفافية المطلقة</h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">نؤمن بوضوح المسار، من لحظة التبرع حتى وصول الدعم لمستحقيه بكل دقة وموثوقية.</p>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all group">
                            <div class="w-16 h-16 bg-accent-orange/10 text-accent-orange rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-accent-orange group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined text-3xl">handshake</span>
                            </div>
                            <h3 class="text-xl font-bold mb-4">العدالة والمساواة</h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">نخدم الجميع بناءً على الاحتياج الفعلي، دون تمييز أو محاباة، لضمان وصول الدعم لمن يستحق.</p>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all group">
                            <div class="w-16 h-16 bg-primary/10 text-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined text-3xl">psychology</span>
                            </div>
                            <h3 class="text-xl font-bold mb-4">الابتكار الاجتماعي</h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">نبتكر حلولاً ذكية ومستدامة للتحديات المجتمعية، متجاوزين أساليب المساعدة التقليدية.</p>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all group">
                            <div class="w-16 h-16 bg-accent-orange/10 text-accent-orange rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-accent-orange group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined text-3xl">groups</span>
                            </div>
                            <h3 class="text-xl font-bold mb-4">العمل الجماعي</h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">قوتنا في تكاتفنا؛ نعمل كفريق واحد مع المتطوعين والشركاء لتحقيق رؤيتنا المشتركة.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="max-w-7xl mx-auto px-6 py-24">
                <div class="text-center mb-16 space-y-4">
                    <h2 class="text-4xl font-black text-slate-900 dark:text-white">مجلس الإدارة وفريق العمل</h2>
                    <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">نخبة من الكفاءات المخلصة التي تسهر على تحقيق أهداف المؤسسة وتطوير خدماتها.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center group">
                        <div class="relative mb-6 mx-auto w-48 h-48 rounded-full overflow-hidden ring-4 ring-primary/10 group-hover:ring-primary transition-all duration-300">
                            <img alt="د. أحمد محمود" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhNjXnlP-_JO-tICokyCsGaMf2QY6rEbUD6N12DxU_r9e5Vk8-wLV6cHjbn_BN9DJ4C7Uyx78cGwBYCX5SV58Hg-DjDsrtvpiEfU_ahQmIDhdwcFw_umzEnDT3SwHBxOjxCBJxX41Hxq0-SgpCZTqmqAv40_2K6ceSthRUtJBxKwOr_MsnwxCHSwfxWjr6U7w5MX3fb5Vz9PpdMxRdhJ4UpnNJY4321yYyFN4TlE0Rvveha0SBnUx925lyD6_d2bQgR5lNJwFp0kI" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">د. أحمد محمود</h3>
                        <p class="text-primary font-medium text-sm">رئيس مجلس الإدارة</p>
                    </div>
                    <div class="text-center group">
                        <div class="relative mb-6 mx-auto w-48 h-48 rounded-full overflow-hidden ring-4 ring-primary/10 group-hover:ring-primary transition-all duration-300">
                            <img alt="أ. سارة إبراهيم" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8bdV2iktq9biXkJ6cYHYby_WlYTWRPAPUaVfkbtPiNFjiBRkK2uzVW-kTMTo2cUl5V0p9PPF5tOz6UQLet1MzS5QciBqzZNCPknLQuZHwMwCh_OQK_UFWbkEBxKId1D_aWMZPyjVl5sIET7dY8XczBVt-80L4YyFXiBJHqkEty5uacWnCThoLdN950qF_k9pRIY_O6-kMXAjjSMTi29Nm73cuxG-FeNzemalFvgsamJRzAhzxl2LyS5hz4wEr8IeHp1NT5FeHekI" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">أ. سارة إبراهيم</h3>
                        <p class="text-primary font-medium text-sm">المديرة التنفيذية</p>
                    </div>
                    <div class="text-center group">
                        <div class="relative mb-6 mx-auto w-48 h-48 rounded-full overflow-hidden ring-4 ring-primary/10 group-hover:ring-primary transition-all duration-300">
                            <img alt="م. خالد علي" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXT7TvVf0nRa9M9E5uITRApaca2a5Tm4a1d6Y7p9nalI1Wu5hxzTAQqGgowxjKP3q_7UDjN-jISAh-e95AloHGIy8lei5WizlO0N85X1hCD91n05ByQe34lMIpeFag4lxjt8DPwp1vTroEUTKMd6ypKnlLa0j6Z7EI1gcC58cEorIhLYvxqZ0LAyiDIIbKJZlFG1IKnl9C_QNuL4LGyoHrKiKqwuB5o9ZfcMFp117MnUU72SEjbqlqaOVNbeOdm52QB8PtfA3mIsU" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">م. خالد علي</h3>
                        <p class="text-primary font-medium text-sm">مدير العمليات والبرامج</p>
                    </div>
                    <div class="text-center group">
                        <div class="relative mb-6 mx-auto w-48 h-48 rounded-full overflow-hidden ring-4 ring-primary/10 group-hover:ring-primary transition-all duration-300">
                            <img alt="أ. ليلى حسن" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLKAFibtTVjke5giSjLO2TM82dHWfCcZyTeagihDVUdNLCWgMmB6VGlHpf82aHeghwms5oSwcP5PiGIczgXuHz9v-o48hWLK6SO9UeB_YdjRSMCCIGij86IVeDnquscTymNCSPclm7DSIC1rX35SDKcx6h4vDHW30m8p_nC2gymVIexc793U9WmW9po1Mjv5zoaS8bgkvtifmZVzFMQ3JbQcA4AQ4FINN94KWap2dxPzm9cmMHCQc9bWU7R0WnzfxI8mBUcQsZtik" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">أ. ليلى حسن</h3>
                        <p class="text-primary font-medium text-sm">مسؤولة العلاقات الخارجية</p>
                    </div>
                </div>
            </section>
            <section class="max-w-7xl mx-auto px-6 py-20">
                <div class="bg-primary rounded-3xl p-12 text-center text-white relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10 pointer-events-none">
                        <span class="material-symbols-outlined text-[300px] absolute -right-20 -bottom-20 rotate-12">volunteer_activism</span>
                    </div>
                    <div class="relative z-10 space-y-8">
                        <h2 class="text-3xl md:text-4xl font-black">كن جزءًا من عائلتنا الكبيرة</h2>
                        <p class="text-lg text-white/80 max-w-2xl mx-auto font-light">
                            سواء كنت متبرعًا، متطوعًا، أو شريكًا، فإن مساهمتك هي حجر الأساس في بناء مستقبل أفضل لمن يحتاجوننا.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <button class="bg-white text-primary hover:bg-slate-100 px-10 py-4 rounded-xl font-bold transition-all shadow-xl"><a href="signup.html">تطوع معنا</a></button>
                            <button class="bg-accent-orange text-white hover:bg-accent-orange/90 px-10 py-4 rounded-xl font-bold transition-all shadow-xl"><a href="contact.html">اتصل بنا اليوم</a></button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="bg-slate-900 text-slate-300 py-16">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12 border-b border-slate-800 pb-12">
                    <div class="space-y-6">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-primary rounded-lg text-white flex items-center justify-center">
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