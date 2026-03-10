<!DOCTYPE html>
<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>لوحة تحكم المتبرع - معًا نصنع الأمل</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
<header class="bg-white px-10 py-6 flex justify-between items-center shadow-sm sticky top-0 z-10">
<h2 class="text-2xl font-black text-slate-800">أهلاً بك، أحمد ابراهيم</h2>
<div class="flex items-center gap-4">
<button class="p-2 text-slate-400 hover:text-primary transition-colors relative">
<a href="notifications2.html"><span class="material-symbols-outlined">notifications</span></a>
<span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
</button>
<div class="w-10 h-10 rounded-full bg-slate-200 border-2 border-primary/20" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCLt2LHnGfMjdo_6u4wW7gMFjFGDHevmift3qM8VjVFwpwxnF3TxirDjpucArf1R2rI7nnhFEL17eshjF3PFq4l4UfnFU84Me4mEw5yjYbj9Fxuatj58yt9dsTPf_hsfAQnGO-7iH0pU6wY8T8hV8cF2lKWWoem-JVmGngR5IN9u-Z5HrnoFOm4AWyNTZm0C4eQbmptVAAfUnIyqJiD6z8SoJ94XeM7uxo68nN5S6lYst_AKHP6cH2QbPLeTOVmiD0_vErAP23xLfEo"); background-size: cover;'></div>
</div>
</header>
<div class="p-10 max-w-6xl mx-auto space-y-8">
<div class="bg-gradient-to-l from-primary to-primary-dark text-white p-10 rounded-xl shadow-lg relative overflow-hidden group">
<div class="relative z-10">
<h3 class="text-3xl font-black mb-4">عطاؤك أحدث فرقاً!</h3>
<p class="text-xl text-white/90 max-w-md">ساهمت في دعم 12 أسرة محتاجة خلال هذا الشهر. شكراً لكونك جزءاً من التغيير.</p>
<button class="mt-8 bg-white text-primary px-8 py-3 rounded-lg font-bold hover:bg-slate-50 transition-colors">
                     <a href="donate.html">  تبرع الآن</a>
                    </button>
</div>
<span class="material-symbols-outlined absolute left-[-20px] bottom-[-20px] text-[240px] opacity-10 rotate-12 group-hover:rotate-0 transition-transform duration-700">volunteer_activism</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="stat-card">
<div class="flex items-center justify-between mb-2">
<span class="text-slate-500 font-bold">إجمالي التبرعات</span>
<div class="p-2 bg-emerald-100 text-emerald-700 rounded-lg">
<span class="material-symbols-outlined">payments</span>
</div>
</div>
<span class="text-3xl font-black text-slate-800">4,500 ج.م</span>
<span class="text-xs text-emerald-600 font-bold">+15% عن الشهر الماضي</span>
</div>
<div class="stat-card">
<div class="flex items-center justify-between mb-2">
<span class="text-slate-500 font-bold">عدد الحالات المدعومة</span>
<div class="p-2 bg-blue-100 text-blue-700 rounded-lg">
<span class="material-symbols-outlined">groups</span>
</div>
</div>
<span class="text-3xl font-black text-slate-800">12 حالة</span>
<span class="text-xs text-slate-400 font-bold">في 3 مدن مختلفة</span>
</div>
<div class="stat-card">
<div class="flex items-center justify-between mb-2">
<span class="text-slate-500 font-bold">ساعات التطوع</span>
<div class="p-2 bg-orange-100 text-orange-700 rounded-lg">
<span class="material-symbols-outlined">schedule</span>
</div>
</div>
<span class="text-3xl font-black text-slate-800">24 ساعة</span>
<span class="text-xs text-orange-600 font-bold">باقي 6 ساعات للوسام التالي</span>
</div>
</div>
<div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
<div class="p-6 border-b border-slate-50 flex justify-between items-center">
<h4 class="text-xl font-bold text-slate-800">آخر النشاطات</h4>

</div>
<div class="divide-y divide-slate-50">
<div class="p-6 flex items-center justify-between hover:bg-slate-50 transition-colors">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-primary">
<span class="material-symbols-outlined">favorite</span>
</div>
<div>
<p class="font-bold text-slate-800">تبرع نقدي لحملة الشتاء</p>
<p class="text-sm text-slate-500">منذ ساعتين</p>
</div>
</div>
<div class="text-left">
<span class="font-black text-primary">500 ج.م</span>
</div>
</div>
<div class="p-6 flex items-center justify-between hover:bg-slate-50 transition-colors">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-blue-600">
<span class="material-symbols-outlined">volunteer_activism</span>
</div>
<div>
<p class="font-bold text-slate-800">المشاركة في توزيع الوجبات</p>
<p class="text-sm text-slate-500">أمس، 04:30 م</p>
</div>
</div>
<div class="text-left">
<span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">تطوع ميداني</span>
</div>
</div>
<div class="p-6 flex items-center justify-between hover:bg-slate-50 transition-colors">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-accent-orange">
<span class="material-symbols-outlined">auto_stories</span>
</div>
<div>
<p class="font-bold text-slate-800">قرأت قصة نجاح "أسرة الأمل"</p>
<p class="text-sm text-slate-500">قبل يومين</p>
</div>
</div>

</div>
</div>
</div>
</div>
</main>

</body></html>
