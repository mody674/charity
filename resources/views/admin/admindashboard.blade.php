<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>لوحة التحكم - الإحصائيات العامة</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary-dark": "#1B5E20",
                        "primary": "#2E7D32",
                        "background-main": "#F8FAFC",
                        "accent-orange": "#f57c00",
                    },
                    fontFamily: {
                        "sans": ["Cairo", "sans-serif"]
                    },
                    borderRadius: {
                        "xl": "16px",
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        body {
            font-family: 'Cairo', sans-serif;
        }
        .sidebar-item {
            @apply flex items-center gap-3 px-6 py-4 transition-all hover:bg-white/10 text-white/80 hover:text-white;
        }
        .sidebar-item.active {
            @apply bg-white/10 text-white border-r-4 border-accent-orange;
        }
        .stat-card {
            @apply bg-white rounded-xl shadow-sm border border-slate-100 p-6 flex flex-col gap-2;
        }
    </style>
</head>

<body class="bg-background-main text-slate-900 min-h-screen flex">
<x-admin-slider></x-admin-slider>
    <main class="flex-1 mr-64">
 <x-admin-header></x-admin-header>
        <div class="p-10 space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="stat-card border-r-4 border-r-primary">
                    <div class="flex justify-between items-start">
                        <span class="text-slate-500 font-bold text-sm">إجمالي التبرعات (ج.م)</span>
                        <span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">payments</span>
                    </div>
                    <div class="mt-2">
                        <h3 class="text-3xl font-black text-slate-800 tracking-tight">2,450,000</h3>
                        <p class="text-emerald-600 text-xs font-bold mt-1 flex items-center gap-1">
                            <span class="material-symbols-outlined text-xs">trending_up</span>
                            +12% عن الشهر الماضي
                        </p>
                    </div>
                </div>
                <div class="stat-card border-r-4 border-r-blue-500">
                    <div class="flex justify-between items-start">
                        <span class="text-slate-500 font-bold text-sm">إجمالي المتبرعين</span>
                        <span class="material-symbols-outlined text-blue-500 bg-blue-50 p-2 rounded-lg">person_heart</span>
                    </div>
                    <div class="mt-2">
                        <h3 class="text-3xl font-black text-slate-800 tracking-tight">1,284</h3>
                        <p class="text-emerald-600 text-xs font-bold mt-1 flex items-center gap-1">
                            <span class="material-symbols-outlined text-xs">trending_up</span>
                            +8% من مستخدمين جدد
                        </p>
                    </div>
                </div>
                <div class="stat-card border-r-4 border-r-accent-orange">
                    <div class="flex justify-between items-start">
                        <span class="text-slate-500 font-bold text-sm">المشاريع النشطة</span>
                        <span class="material-symbols-outlined text-accent-orange bg-orange-50 p-2 rounded-lg">assignment_turned_in</span>
                    </div>
                    <div class="mt-2">
                        <h3 class="text-3xl font-black text-slate-800 tracking-tight">42</h3>
                        <p class="text-slate-400 text-xs font-bold mt-1">تغطي 12 محافظة مصرية</p>
                    </div>
                </div>
                <div class="stat-card border-r-4 border-r-purple-500">
                    <div class="flex justify-between items-start">
                        <span class="text-slate-500 font-bold text-sm">إجمالي قصص الأثر</span>
                        <span class="material-symbols-outlined text-purple-500 bg-purple-50 p-2 rounded-lg">auto_awesome</span>
                    </div>
                    <div class="mt-2">
                        <h3 class="text-3xl font-black text-slate-800 tracking-tight">156</h3>
                        <p class="text-emerald-600 text-xs font-bold mt-1 flex items-center gap-1">
                            <span class="material-symbols-outlined text-xs">history_edu</span>
                            تم نشر 5 قصص هذا الأسبوع
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-8">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
                    <div>
                        <h3 class="text-xl font-black text-slate-800">اتجاهات التبرعات</h3>
                        <p class="text-sm text-slate-500">تحليل مساهمات الأشهر الستة الماضية</p>
                    </div>
                    <div class="flex gap-2">
                        <button class="px-4 py-2 text-xs font-bold rounded-lg bg-primary text-white hover:bg-primary-dark"><a href="reportdetail.html">تقرير مفصل</a></button>
                    </div>
                </div>
                <div class="relative h-[400px] w-full bg-slate-50 rounded-lg p-6 flex flex-col justify-end">
                    <div class="flex items-end justify-between h-full w-full gap-4 px-4 border-b border-slate-200">
                        <div class="flex-1 flex flex-col items-center group relative">
                            <div class="w-full bg-primary/20 rounded-t-lg transition-all hover:bg-primary" style="height: 45%;"></div>
                            <span class="text-xs font-bold text-slate-500 mt-4">يناير</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center group relative">
                            <div class="w-full bg-primary/20 rounded-t-lg transition-all hover:bg-primary" style="height: 60%;"></div>
                            <span class="text-xs font-bold text-slate-500 mt-4">فبراير</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center group relative">
                            <div class="w-full bg-primary/20 rounded-t-lg transition-all hover:bg-primary" style="height: 55%;"></div>
                            <span class="text-xs font-bold text-slate-500 mt-4">مارس</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center group relative">
                            <div class="w-full bg-primary/20 rounded-t-lg transition-all hover:bg-primary" style="height: 80%;"></div>
                            <span class="text-xs font-bold text-slate-500 mt-4">أبريل</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center group relative">
                            <div class="w-full bg-primary/20 rounded-t-lg transition-all hover:bg-primary" style="height: 75%;"></div>
                            <span class="text-xs font-bold text-slate-500 mt-4">مايو</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center group relative">
                            <div class="w-full bg-primary/60 rounded-t-lg transition-all hover:bg-primary" style="height: 95%;"></div>
                            <span class="text-xs font-bold text-primary mt-4">يونيو</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-6 mt-8 justify-center text-xs font-bold text-slate-500">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-primary"></span>
                            <span>إجمالي التبرعات المحققة</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-slate-200 border border-slate-300"></span>
                            <span>المستهدف الشهري</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 text-center text-slate-400">
                <p class="text-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">verified_user</span>
                    تخضع كافة الإحصائيات لمعايير الرقابة والشفافية المعتمدة
                </p>
            </div>
        </div>
    </main>

</body>

</html>