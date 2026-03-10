<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>فرص التطوع - معًا نصنع الأمل</title>
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
                        "dark-navy": "#0a111a"
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
    <style type="text/tailwindcss">
        body {
            font-family: 'Cairo', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .card {
            display: block;
        }
        .hidden-card {
            display: none !important;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <x-land-header>

        </x-land-header>
        <main class="flex-1">
            <section class="bg-primary/5 py-12">
                <div class="max-w-7xl mx-auto px-6">
                    <h1 class="text-4xl font-black text-slate-900 dark:text-white mb-4">فرص التطوع</h1>
                    <p class="text-slate-600 dark:text-slate-400 max-w-2xl">كن جزءًا من التغيير الإيجابي في مجتمعك. اختر الفرصة التي تناسب مهاراتك وشغفك وساهم معنا في صنع الأمل.</p>
                </div>
            </section>
            <div class="max-w-7xl mx-auto px-6 py-12">
                <div class="flex flex-col lg:flex-row gap-8">
                    <aside class="w-full lg:w-64 space-y-8">
                        <div>
                            <h3 class="font-bold text-lg mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">filter_list</span>
                                تصنيف التطوع
                            </h3>
                            <div class="space-y-3">
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input id="all" checked class="rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" />
                                    <span class="text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">الكل</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input class="category-check rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" data-category="توزيع الطعام" />
                                    <span class="text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">توزيع الطعام</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input class="category-check rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" data-category="دعم تعليمي" />
                                    <span class="text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">دعم تعليمي</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input class="category-check rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" data-category="رعاية صحية" />
                                    <span class="text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">رعاية صحية</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input class="category-check rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" data-category="ترميم منازل" />
                                    <span class="text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">ترميم منازل</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input class="category-check rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" data-category="حماية البيئة" />
                                    <span class="text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">حماية البيئة</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input class="category-check rounded border-slate-300 text-primary focus:ring-primary" type="checkbox" data-category="دعم تقني" />
                                    <span class="text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">دعم تقني</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">location_on</span>
                                المدينة
                            </h3>
                            <select id="city-filter" class="w-full rounded-lg border-slate-300 dark:bg-slate-800 dark:border-slate-700 text-sm focus:ring-primary focus:border-primary">
                                <option value="all">كل المدن</option>
                                <option value="القاهرة">القاهرة</option>
                                <option value="الإسكندرية">الإسكندرية</option>
                                <option value="الجيزة">الجيزة</option>
                                <option value="المنصورة">المنصورة</option>
                                <option value="المنيا">المنيا</option>
                            </select>
                        </div>
                        <div class="p-6 bg-primary/10 rounded-xl">
                            <h4 class="font-bold text-primary mb-2">لديك مهارة خاصة؟</h4>
                            <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">إذا كنت ترغب في تقديم مهارة غير مدرجة، يسعدنا التواصل معك.</p>
                            <button class="text-sm font-bold text-primary hover:underline"><a href="signup.html">سجل مهاراتك الآن</a></button>
                        </div>
                    </aside>
                    <div class="flex-1">
                        <div id="opportunities-grid" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all group card" data-category="توزيع الطعام" data-city="القاهرة">
                                <div class="aspect-video relative overflow-hidden">
                                    <img alt="توزيع الطعام" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrmdDRjKJq474iEVkMnQbI08UD5GtdwW9WmILuD3qxTqYpoG4ZWAn7_7fK0_f7vn3JUlKTuS0HOCxe8AUUK-fxkGhPvBcU1z8skyFYlY_66Y-9vr5WV7DSRehkDapaXqF0Jv44uMHHsu9-09EYahW8FR1ZWY18HzlVprLMOj7F0GIVGMMGZBI6qfC-zvdt5f4TZ4trZcsmeBOsjkzpGMaNhywMaPVaSR0574SYSzpaKWRO8ouTCkp6IM01cfVN5m31B4xcAZUNwtQ" />
                                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-primary">توزيع الطعام</div>
                                </div>
                                <div class="p-6 space-y-4">
                                    <h3 class="font-bold text-xl text-slate-900 dark:text-white line-clamp-1">توزيع وجبات الإفطار</h3>
                                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed line-clamp-2">المشاركة في إعداد وتوزيع وجبات طعام طازجة للأسر الأكثر احتياجاً في الأحياء الشعبية.</p>
                                    <div class="flex items-center gap-4 text-xs text-slate-500 dark:text-slate-400">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">location_on</span>
                                            حي السيدة زينب، القاهرة
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">schedule</span>
                                            يومياً - ٤ ساعات
                                        </div>
                                    </div>
                                    <button class="w-full py-3 bg-primary text-white rounded-lg font-bold text-sm hover:bg-primary/90 transition-all"><a href="signup.html">قدم الآن</a></button>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all group card" data-category="دعم تعليمي" data-city="الجيزة">
                                <div class="aspect-video relative overflow-hidden">
                                    <img alt="دعم تعليمي" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIAdxkEpF_3LwsD448YtwjRels68euydizdreQoBwfv_ANtCIAj9oDm05-98b_5nVKzzxWi6KE6bhG2gccHmiATgsb8cJd1QGBtv8M8J2cB_TmWJ69KOGa7msckUilU-N67N8kFjtF_Eh1chGOasurrTOapD3hVip84YMgrViY6QLsnP2LxILO-MZ7R2fCc7Q-sob9Ljaol8YIRXsoYsURIzeB_cSKkCWjYQ2LTidwD5G3UfCiNG2p_Kv3IRddIY9E0N7i5mvXNgc" />
                                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-primary">دعم تعليمي</div>
                                </div>
                                <div class="p-6 space-y-4">
                                    <h3 class="font-bold text-xl text-slate-900 dark:text-white line-clamp-1">تعليم محو الأمية</h3>
                                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed line-clamp-2">مساعدة الكبار في تعلم القراءة والكتابة والمهارات الأساسية لتمكينهم في حياتهم اليومية.</p>
                                    <div class="flex items-center gap-4 text-xs text-slate-500 dark:text-slate-400">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">location_on</span>
                                            مركز التدريب، الجيزة
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">schedule</span>
                                            ٣ أيام/أسبوع
                                        </div>
                                    </div>
                                    <button class="w-full py-3 bg-primary text-white rounded-lg font-bold text-sm hover:bg-primary/90 transition-all"><a href="signup.html">قدم الآن</a></button>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all group card" data-category="رعاية صحية" data-city="المنيا">
                                <div class="aspect-video relative overflow-hidden">
                                    <img alt="رعاية صحية" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2coYhky7jp0mXk1VdmFw04FVwh0BsdhKwPLwXvJRtY4t0Tro4vo6JWwiZOiKeP4u2ndh5AZgvwrCBKXRyFpjXoDCmVGX5r9FsFEqHZxSXMU_KnH4exf2RXhu6t6MUn-CwqLfuEwbPg4M3yIicXvT1o4nv6erSQeZ5lHO2tDOzncFP4bdbN50IB79C9QJn3WwIrKg8PNC-LHr57_gC8lFNdx1DSEJd7jTlweXE7PgfJXcUAg5AdODOIpPlObX5l4JhH5_dLw8pZDA" />
                                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-primary">رعاية صحية</div>
                                </div>
                                <div class="p-6 space-y-4">
                                    <h3 class="font-bold text-xl text-slate-900 dark:text-white line-clamp-1">قافلة طبية تطوعية</h3>
                                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed line-clamp-2">تقديم المساعدة الطبية الأولية والتنظيم اللوجستي للقوافل الطبية في المناطق الريفية.</p>
                                    <div class="flex items-center gap-4 text-xs text-slate-500 dark:text-slate-400">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">location_on</span>
                                            محافظة المنيا
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">schedule</span>
                                            عطلة نهاية الأسبوع
                                        </div>
                                    </div>
                                    <button class="w-full py-3 bg-primary text-white rounded-lg font-bold text-sm hover:bg-primary/90 transition-all"><a href="signup.html">قدم الآن</a></button>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all group card" data-category="حماية البيئة" data-city="القاهرة">
                                <div class="aspect-video relative overflow-hidden">
                                    <img alt="بيئة" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGnW4qyXoLB1jZ_AONZgJkWLK_vPnZ-QAGCv4IIVh4GEi9YYgnsakEkNSEKZSn1ZYw6WUDcqEU8kTkPL-krFonAH80NwWNEBE63Q4DXCzp9abinK2UKHxZud3qQ1PHqkpo8y5RqilVIjQkjyd6vfCNk8a3nE_6uxqneh8znsK6qnyUwiruj9wZA7QUkRDpWWb6GuL5BzcffsYHBxfMm0pDAKWVvYnMCiSOsDRVs9d7hJQoEa9dddKt9yHm9kMil3vCRWgMt2-2eQU" />
                                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-primary">حماية البيئة</div>
                                </div>
                                <div class="p-6 space-y-4">
                                    <h3 class="font-bold text-xl text-slate-900 dark:text-white line-clamp-1">تشجير الأحياء السكنية</h3>
                                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed line-clamp-2">مبادرة لزراعة الأشجار وزيادة المساحات الخضراء في الأحياء المزدحمة لتحسين جودة الهواء.</p>
                                    <div class="flex items-center gap-4 text-xs text-slate-500 dark:text-slate-400">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">location_on</span>
                                            المعادي، القاهرة
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">schedule</span>
                                            كل يوم سبت
                                        </div>
                                    </div>
                                    <button class="w-full py-3 bg-primary text-white rounded-lg font-bold text-sm hover:bg-primary/90 transition-all"><a href="signup.html">قدم الآن</a></button>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all group card" data-category="ترميم منازل" data-city="الإسكندرية">
                                <div class="aspect-video relative overflow-hidden">
                                    <img alt="ترميم" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFxi_UK-Y17RLiAg8Z-uSmf2oRbs69cmdPxnZjJ9yDavyPJL1jOJZKp1OOrNjKAT5WgnTBe2067zsFf73sN_v3kGUK6W6xHyy-kbEW6bTqBTdNGjlTREnj6rM4_8eOgz6I7ndvPYiKP9GPsC5qmUVE2LnfT9FJnKL-iYddvMKFrTPPkLCkrauWElgIir2dh-wW7_w3lMMwJ2R5QQK-vps_8AadzUaJKbdDMgw-W-zV7W-i1F30Ro0jfj3Rw_XPgO9HzCUnRONxO_w" />
                                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-primary">ترميم منازل</div>
                                </div>
                                <div class="p-6 space-y-4">
                                    <h3 class="font-bold text-xl text-slate-900 dark:text-white line-clamp-1">طلاء وترميم مساكن</h3>
                                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed line-clamp-2">المساعدة في طلاء الجدران وأعمال الترميم البسيطة لمنازل الأرامل والأيتام.</p>
                                    <div class="flex items-center gap-4 text-xs text-slate-500 dark:text-slate-400">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">location_on</span>
                                            الإسكندرية
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">schedule</span>
                                            مشروع مؤقت
                                        </div>
                                    </div>
                                    <button class="w-full py-3 bg-primary text-white rounded-lg font-bold text-sm hover:bg-primary/90 transition-all"><a href="signup.html">قدم الآن</a></button>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all group card" data-category="دعم تقني" data-city="القاهرة">
                                <div class="aspect-video relative overflow-hidden">
                                    <img alt="تكنولوجيا" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDezwg5IoaTUfPJsJPJ4-gKGL1mdOXQgT-hqo47DTHfi-V_SvN52F6UKWOxHB8uwQHhPGL34H7ie2epm2o9l9hynrUhujuNwX2_PlyBBthaPOp1u3TYJ9QqzBDuIyz4p-DlPKf7OOB_2ml6wyhX_Xsai3tmYswWpy1SSD9tyvq_l1eeNA5In9FMfx2QA9hHUWid2niSIZl4RajJ-2woTjQw6HJDJX76RJK0zHaeNxrbyp0l55VG2MDzysZa0algoUh4hbPJXox0IaE" />
                                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-primary">دعم تقني</div>
                                </div>
                                <div class="p-6 space-y-4">
                                    <h3 class="font-bold text-xl text-slate-900 dark:text-white line-clamp-1">محو الأمية الرقمية</h3>
                                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed line-clamp-2">تدريب الشباب على استخدام الحاسب الآلي والبرامج الأساسية لتأهيلهم لسوق العمل.</p>
                                    <div class="flex items-center gap-4 text-xs text-slate-500 dark:text-slate-400">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">location_on</span>
                                            أونلاين / القاهرة
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">schedule</span>
                                            مسائي - ٦ ساعات/أسبوع
                                        </div>
                                    </div>
                                    <button class="w-full py-3 bg-primary text-white rounded-lg font-bold text-sm hover:bg-primary/90 transition-all"><a href="signup.html">قدم الآن</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="bg-dark-navy text-slate-300 py-16">
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

            const allCheckbox = document.getElementById('all');
            const categoryChecks = document.querySelectorAll('.category-check');
            const cityFilter = document.getElementById('city-filter');
            const cards = document.querySelectorAll('.card');

            function filterOpportunities() {
                const selectedCategories = Array.from(categoryChecks)
                    .filter(check => check.checked)
                    .map(check => check.getAttribute('data-category'));

                const isAllCategories = allCheckbox.checked || selectedCategories.length === 0;

                const selectedCity = cityFilter.value;

                cards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');
                    const cardCity = card.getAttribute('data-city');

                    const categoryMatch = isAllCategories || selectedCategories.includes(cardCategory);
                    const cityMatch = selectedCity === 'all' || cardCity.includes(selectedCity);

                    if (categoryMatch && cityMatch) {
                        card.classList.remove('hidden-card');
                        card.style.display = 'block';
                    } else {
                        card.classList.add('hidden-card');
                        card.style.display = 'none';
                    }
                });
            }

            allCheckbox.addEventListener('change', () => {
                if (allCheckbox.checked) {
                    categoryChecks.forEach(check => check.checked = false);
                }
                filterOpportunities();
            });

            categoryChecks.forEach(check => {
                check.addEventListener('change', () => {
                    if (check.checked) {
                        allCheckbox.checked = false;
                    }
                    filterOpportunities();
                });
            });

            cityFilter.addEventListener('change', filterOpportunities);

            filterOpportunities();
        </script>

    </div>
</body>

</html>