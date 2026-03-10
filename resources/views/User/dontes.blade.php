<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>تبرعاتي - معًا نصنع الأمل</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
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
        @apply bg-white p-6 rounded-xl shadow-sm border border-slate-100 flex flex-col gap-2;
    }
</style>
</head>

<body class="bg-background-main text-slate-900 min-h-screen flex">
    <x-user-slider>
    </x-user-slider>

    <main class="flex-1 mr-64">

        <x-user-header/>

        <div class="p-10 max-w-6xl mx-auto space-y-10">

            <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-6 border-b border-slate-50 flex justify-between items-center">
                    <h3 class="text-xl font-bold text-slate-800">ملخص تبرعاتي</h3>
                    <select class="border border-slate-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                        <option>السنة كلها</option>
                        <option>2025</option>
                        <option>2024</option>
                        <option>آخر 30 يوم</option>
                    </select>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
                    <div class="stat-card">
                        <span class="text-slate-500 font-bold">إجمالي ما تبرعت به</span>
                        <span class="text-4xl font-black text-primary">4,500 ج.م</span>
                        <span class="text-sm text-emerald-600 font-bold">+900 ج.م هذا العام</span>
                    </div>
                    <div class="stat-card">
                        <span class="text-slate-500 font-bold">عدد التبرعات</span>
                        <span class="text-4xl font-black text-slate-800">17</span>
                        <span class="text-sm text-slate-500">آخر تبرع: منذ 3 أيام</span>
                    </div>
                    <div class="stat-card">
                        <span class="text-slate-500 font-bold">أكثر حملة دعماً</span>
                        <span class="text-2xl font-bold text-slate-800 mt-2">حملة الشتاء الدافئ</span>
                        <span class="text-sm text-slate-500">1,800 ج.م</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-6 border-b border-slate-50">
                    <h4 class="text-xl font-bold text-slate-800">سجل التبرعات</h4>
                </div>
                <div class="divide-y divide-slate-50">
                    <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-slate-50 transition-colors">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl bg-orange-100 flex items-center justify-center text-accent-orange text-2xl">
                                <span class="material-symbols-outlined">favorite</span>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800">حملة الشتاء الدافئ 2025</p>
                                <p class="text-sm text-slate-500">تبرع نقدي • 15 فبراير 2025</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="font-black text-primary text-xl">800 ج.م</span>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-slate-50 transition-colors">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600 text-2xl">
                                <span class="material-symbols-outlined">volunteer_activism</span>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800">دعم علاج طفل - مستشفى أبو الريش</p>
                                <p class="text-sm text-slate-500">تبرع شهري • 1 فبراير 2025</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="font-black text-primary text-xl">300 ج.م</span>
                            <span class="text-xs text-slate-500 block">شهرياً</span>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-slate-50 transition-colors">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-700 text-2xl">
                                <span class="material-symbols-outlined">payments</span>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800">حملة إفطار صائم</p>
                                <p class="text-sm text-slate-500">تبرع عبر فيزا • 20 مارس 2024</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="font-black text-primary text-xl">1,200 ج.م</span>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-slate-50 transition-colors">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl bg-purple-100 flex items-center justify-center text-purple-600 text-2xl">
                                <span class="material-symbols-outlined">card_giftcard</span>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800">كفالة يتيم - 6 أشهر</p>
                                <p class="text-sm text-slate-500">تبرع دوري • بدأ في 10 أكتوبر 2024</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="font-black text-primary text-xl">1,500 ج.م</span>
                            <span class="text-xs text-slate-500 block">مدفوع حتى الآن</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

</body>

</html>