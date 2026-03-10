<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

<title>طلباتي - متابعة حالة الطلب</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
        .status-badge {
            @apply px-3 py-1 rounded-full text-[11px] font-black uppercase inline-flex items-center gap-1;
        }
        .status-under-review {
            @apply bg-blue-100 text-blue-700;
        }
        .status-approved {
            @apply bg-green-100 text-green-700;
        }
        .status-disbursed {
            @apply bg-purple-100 text-purple-700;
        }
    </style>
</head>
<body class="bg-background-main text-slate-900 min-h-screen flex">
<aside class="w-64 bg-primary-dark min-h-screen fixed right-0 top-0 flex flex-col text-white z-20">
<div class="p-8 flex items-center gap-3 border-b border-white/10">
<span class="material-symbols-outlined text-3xl">volunteer_activism</span>
<h1 class="text-xl font-black">معًا نصنع الأمل</h1>
</div>
<nav class="mt-8 flex-1">
<a class="sidebar-item" href="needdashboard.html">
<span class="material-symbols-outlined">home</span>
<span class="font-bold">الرئيسية</span>
</a>
<a class="sidebar-item" href="needask.html">
<span class="material-symbols-outlined">info</span>
<span class="font-bold">طلب مساعدة</span>
</a>
<a class="sidebar-item active" href="orders.html">
<span class="material-symbols-outlined">help_center</span>
<span class="font-bold">طلباتي </span>
</a>
</nav>
<div class="p-6 border-t border-white/10">
<button class="flex items-center gap-3 text-white/70 hover:text-white transition-colors">
<span class="material-symbols-outlined">logout</span>
<span class="font-bold">تسجيل الخروج</span>
</button>
</div>
</aside>
<main class="flex-1 mr-64">
<header class="bg-white px-10 py-6 flex justify-between items-center shadow-sm sticky top-0 z-10">
<div class="flex flex-col">
<h2 class="text-2xl font-black text-slate-800">طلباتي</h2>
<p class="text-sm text-slate-500">متابعة حالة طلبات المساعدة المقدمة وتفاصيلها</p>
</div>
<div class="flex items-center gap-4">
<div class="flex items-center gap-3 pr-4 border-r border-slate-100">
<div class="text-left">
<p class="text-xs font-bold text-slate-400">مرحباً بك</p>
<p class="text-sm font-bold text-slate-700">أحمد محمود</p>
</div>
<div class="w-10 h-10 rounded-full bg-slate-200 border-2 border-primary/20" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBAbT0SYYnQzXrSWNzzHULINA7hRm-b_yqaR9lAXiBhTn9arVFAKGswpcMc0py8VBP5gJa7aNAaT-9k6atTX9i4srOG7dw9lsWBqeYUHSbvv30ve2VgCqHA-xZ37MiUEwFrC5fFhpQVeIcet65XFcc1oDKI3GerEvDvNYHLraVq1Y-J68UOO7qoSJ8EU7jN1A4DF0vntgaGs_quz1MS53EcdiTP_Glk8krgt1j42e41xzbiRz1fNCFjnMzL-34B3xgnMYayduelKpU"); background-size: cover;'></div>
</div>
</div>
</header>
<div class="p-10 space-y-8">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
<span class="material-symbols-outlined">pending_actions</span>
</div>
<div>
<p class="text-xs font-bold text-slate-500">طلبات قيد المراجعة</p>
<p class="text-xl font-black text-slate-800">1</p>
</div>
</div>
<div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-green-50 flex items-center justify-center text-green-600">
<span class="material-symbols-outlined">check_circle</span>
</div>
<div>
<p class="text-xs font-bold text-slate-500">طلبات تمت الموافقة عليها</p>
<p class="text-xl font-black text-slate-800">2</p>
</div>
</div>
<div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-purple-50 flex items-center justify-center text-purple-600">
<span class="material-symbols-outlined">payments</span>
</div>
<div>
<p class="text-xs font-bold text-slate-500">إجمالي المساعدات المستلمة</p>
<p class="text-xl font-black text-slate-800">1,500 ج.م</p>
</div>
</div>
</div>
<div class="bg-white rounded-xl border border-slate-100 shadow-sm overflow-hidden">
<div class="p-6 border-b border-slate-100 flex justify-between items-center">
<h3 class="text-lg font-bold text-slate-800">سجل الطلبات</h3>
<div class="flex gap-2">
<button class="flex items-center gap-1 text-sm text-slate-500 border border-slate-200 px-3 py-1.5 rounded-lg hover:bg-slate-50">
<span class="material-symbols-outlined text-sm">filter_list</span>
                            تصفية
                        </button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right">
<thead class="bg-slate-50 border-b border-slate-100">
<tr>
<th class="px-6 py-4 text-xs font-bold text-slate-500">رقم الطلب</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500">التاريخ</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500">فئة المساعدة</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500">الحالة</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 text-center">الإجراءات</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100">
<tr>
<td class="px-6 py-4 font-bold text-slate-700">#REQ-8291</td>
<td class="px-6 py-4 text-sm text-slate-600">20 ديسمبر 2023</td>
<td class="px-6 py-4 text-sm text-slate-600 font-semibold">مساعدة طبية (أدوية)</td>
<td class="px-6 py-4">
<span class="status-badge status-under-review">
<span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                                        قيد المراجعة
                                    </span>
</td>
<td class="px-6 py-4 text-center">
<div class="flex items-center justify-center gap-3">
<button class="text-blue-600 hover:text-blue-800 transition-colors" title="عرض التفاصيل">
<span class="material-symbols-outlined text-xl">visibility</span>
</button>
<button class="text-amber-600 hover:text-amber-800 transition-colors" title="تعديل الطلب">
<span class="material-symbols-outlined text-xl">edit</span>
</button>
</div>
</td>
</tr>
<tr>
<td class="px-6 py-4 font-bold text-slate-700">#REQ-7542</td>
<td class="px-6 py-4 text-sm text-slate-600">05 ديسمبر 2023</td>
<td class="px-6 py-4 text-sm text-slate-600 font-semibold">كفالة تعليمية</td>
<td class="px-6 py-4">
<span class="status-badge status-disbursed">
<span class="w-1.5 h-1.5 rounded-full bg-purple-600"></span>
                                        تم الصرف
                                    </span>
</td>
<td class="px-6 py-4 text-center">
<div class="flex items-center justify-center gap-3">
<button class="text-blue-600 hover:text-blue-800 transition-colors" title="عرض التفاصيل">
<span class="material-symbols-outlined text-xl">visibility</span>
</button>
<button class="text-slate-400 cursor-not-allowed" title="لا يمكن التعديل بعد الصرف">
<span class="material-symbols-outlined text-xl">edit_off</span>
</button>
</div>
</td>
</tr>
<tr>
<td class="px-6 py-4 font-bold text-slate-700">#REQ-6120</td>
<td class="px-6 py-4 text-sm text-slate-600">15 نوفمبر 2023</td>
<td class="px-6 py-4 text-sm text-slate-600 font-semibold">مؤن غذائية شهرية</td>
<td class="px-6 py-4">
<span class="status-badge status-approved">
<span class="w-1.5 h-1.5 rounded-full bg-green-600"></span>
                                        تمت الموافقة
                                    </span>
</td>
<td class="px-6 py-4 text-center">
<div class="flex items-center justify-center gap-3">
<button class="text-blue-600 hover:text-blue-800 transition-colors" title="عرض التفاصيل">
<span class="material-symbols-outlined text-xl">visibility</span>
</button>
<button class="text-amber-600 hover:text-amber-800 transition-colors" title="تعديل الطلب">
<span class="material-symbols-outlined text-xl">edit</span>
</button>
</div>
</td>
</tr>
<tr>
<td class="px-6 py-4 font-bold text-slate-700">#REQ-5981</td>
<td class="px-6 py-4 text-sm text-slate-600">28 أكتوبر 2023</td>
<td class="px-6 py-4 text-sm text-slate-600 font-semibold">مساعدة طبية (فحوصات)</td>
<td class="px-6 py-4">
<span class="status-badge status-disbursed">
<span class="w-1.5 h-1.5 rounded-full bg-purple-600"></span>
                                        تم الصرف
                                    </span>
</td>
<td class="px-6 py-4 text-center">
<div class="flex items-center justify-center gap-3">
<button class="text-blue-600 hover:text-blue-800 transition-colors" title="عرض التفاصيل">
<span class="material-symbols-outlined text-xl">visibility</span>
</button>
<button class="text-slate-400 cursor-not-allowed" title="لا يمكن التعديل بعد الصرف">
<span class="material-symbols-outlined text-xl">edit_off</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-6 bg-slate-50 border-t border-slate-100 flex items-center justify-between">
<p class="text-sm text-slate-500 font-semibold">عرض 4 من أصل 4 طلبات</p>
<div class="flex gap-2">
<button class="w-8 h-8 flex items-center justify-center rounded bg-white border border-slate-200 text-slate-400 cursor-not-allowed">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
<button class="w-8 h-8 flex items-center justify-center rounded bg-primary text-white font-bold text-xs">1</button>
<button class="w-8 h-8 flex items-center justify-center rounded bg-white border border-slate-200 text-slate-400 cursor-not-allowed">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
</div>
</div>
</div>
<div class="bg-primary/5 p-6 rounded-xl border border-primary/10 flex items-start gap-4">
<span class="material-symbols-outlined text-primary text-3xl">info</span>
<div>
<h4 class="font-bold text-primary-dark mb-1">هل تحتاج لمساعدة في متابعة طلبك؟</h4>
<p class="text-sm text-slate-600 leading-relaxed">
                        يتم تحديث حالة الطلب فور مراجعته من قبل اللجنة المختصة. في حال وجود نقص في المستندات، سيصلك تنبيه لتحديث الطلب. يمكنك دائماً التواصل معنا عبر الرقم الموحد للاستفسارات.
                    </p>
</div>
</div>
<div class="pt-8 text-center text-slate-400">
<p class="text-xs flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">verified</span>
                    جميع البيانات المسجلة محمية وتستخدم لغرض تقديم المساعدة فقط
                </p>
</div>
</div>
</main>

</body>
</html>