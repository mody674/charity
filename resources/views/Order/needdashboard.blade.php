<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

<title>طلب مساعدة - نحن معك</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary-dark": "#1B5E20",
                        "primary": "#2E7D32",
                        "background-main": "#F8FAFC",
                        "accent-orange": "#f57c00",
                        "accent-orange-hover": "#e67300",
                    },
                    fontFamily: {
                        "sans": ["Cairo", "sans-serif"]
                    },
                    borderRadius: {
                        "xl": "16px",
                        "2xl": "24px",
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
        .aid-card {
            @apply bg-white p-8 rounded-2xl border border-slate-100 shadow-sm transition-all hover:shadow-md hover:border-primary/20 flex flex-col items-center text-center gap-4;
        }
        .icon-box {
            @apply w-16 h-16 rounded-full bg-primary/10 text-primary flex items-center justify-center mb-2;
        }
    </style>
</head>
<body class="bg-background-main text-slate-900 min-h-screen flex">
<aside class="w-64 bg-primary-dark min-h-screen fixed right-0 top-0 flex flex-col text-white z-20">
<div class="p-8 flex items-center gap-3 border-b border-white/10">
<span class="material-symbols-outlined text-3xl">volunteer_activism</span>
<h1 class="text-xl font-black leading-tight">معًا نصنع الأمل</h1>
</div>
<nav class="mt-8 flex-1">
<a class="sidebar-item active" href="needdashboard.html">
<span class="material-symbols-outlined">home</span>
<span class="font-bold">الرئيسية</span>
</a>
<a class="sidebar-item" href="needask.html">
<span class="material-symbols-outlined">info</span>
<span class="font-bold">طلب مساعدة</span>
</a>
<a class="sidebar-item" href="orders.html">
<span class="material-symbols-outlined">help_center</span>
<span class="font-bold">طلباتي </span>
</a>
</nav>
</aside>
<main class="flex-1 mr-64">
<header class="bg-white px-10 py-6 flex justify-between items-center shadow-sm sticky top-0 z-10">
<div class="flex flex-col">
<h2 class="text-2xl font-black text-slate-800">بوابة طلب المساعدة</h2>
<p class="text-sm text-slate-500">نحن هنا لنساندك في تخطي الصعاب</p>
</div>
<div class="flex items-center gap-4">
<div class="text-left">
<p class="text-xs font-bold text-slate-400">مرحباً بك</p>
<p class="text-sm font-bold text-slate-700">أحمد محمود</p>
</div>
<div class="w-10 h-10 rounded-full bg-slate-200 border-2 border-primary/20" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBAbT0SYYnQzXrSWNzzHULINA7hRm-b_yqaR9lAXiBhTn9arVFAKGswpcMc0py8VBP5gJa7aNAaT-9k6atTX9i4srOG7dw9lsWBqeYUHSbvv30ve2VgCqHA-xZ37MiUEwFrC5fFhpQVeIcet65XFcc1oDKI3GerEvDvNYHLraVq1Y-J68UOO7qoSJ8EU7jN1A4DF0vntgaGs_quz1MS53EcdiTP_Glk8krgt1j42e41xzbiRz1fNCFjnMzL-34B3xgnMYayduelKpU"); background-size: cover;'></div>
</div>
</div>
</header>
<div class="p-10 space-y-12">
<section class="relative overflow-hidden rounded-3xl bg-primary-dark text-white p-12 min-h-[400px] flex items-center">
<div class="absolute inset-0 opacity-20 pointer-events-none" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBaX5VRLPPZOyf8hMB1ZjA_pUtvrAeQGhED9xzrFm-wtkpMrMcBgg_k4KuIP4D5-Hxe2_mwlTCQQXLjRWgyUKGysn7rNuVsndyoe3DX3qbAJNKzoH6esvsiS8B8Qkd0jpAcIIAoo_MinZ-g9Om6fvyF1_kIq7S2oZtUPCGBNA_2wTG__LocT3k1aN_z4ChvM556Tvrx00n2OB3W43W0dN0nKibWv1xpko7JZPBMUXXDqpv6JaKeyF9D89X79t0IrVzxSe4Fsi4iuts");'></div>
<div class="relative z-10 max-w-2xl">
<h2 class="text-5xl font-black mb-6 leading-tight">نحن معك.. <br/><span class="text-accent-orange">لأنك لست وحدك</span></h2>
<p class="text-xl text-white/80 mb-10 leading-relaxed">
                    نؤمن أن يد العون هي حق لكل من يحتاج إليها. نقدم خدماتنا بكرامة وخصوصية تامة لنبني معاً مستقبلاً أفضل لك ولأسرتك.
                </p>
<div class="flex flex-wrap gap-4">
<button class="bg-accent-orange hover:bg-accent-orange-hover text-white px-10 py-4 rounded-xl font-black text-lg shadow-lg shadow-accent-orange/30 transition-all flex items-center gap-3">
<span class="material-symbols-outlined">send</span>
                      <a href="needask.html">  تقديم طلب مساعدة الآن</a>
                    </button>
<button class="bg-white/10 hover:bg-white/20 text-white border border-white/30 px-8 py-4 rounded-xl font-bold transition-all">
                       <a href="orders.html">تتبع حالة طلب سابق</a> 
                    </button>
</div>
</div>
<div class="absolute left-12 bottom-0 top-0 items-center justify-center hidden lg:flex">
<div class="w-80 h-80 rounded-full border-8 border-white/5 flex items-center justify-center relative">
<span class="material-symbols-outlined text-[160px] text-white/10">handshake</span>
<div class="absolute -top-4 -right-4 w-24 h-24 bg-accent-orange/20 rounded-full blur-2xl"></div>
</div>
</div>
</section>
<section>
<div class="text-center mb-12">
<h3 class="text-3xl font-black text-slate-800 mb-4">مجالات المساعدة المتاحة</h3>
<p class="text-slate-500 max-w-xl mx-auto">اختر الفئة التي تندرج تحتها احتياجاتك لبدء عملية تقديم الطلب</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="aid-card group">
<div class="icon-box group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-4xl">medical_services</span>
</div>
<h4 class="text-xl font-black text-slate-800">مساعدات طبية</h4>
<p class="text-sm text-slate-500 leading-relaxed">توفير الأدوية، العمليات الجراحية، والأجهزة التعويضية لغير القادرين.</p>
</div>
<div class="aid-card group">
<div class="icon-box group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-4xl">restaurant</span>
</div>
<h4 class="text-xl font-black text-slate-800">مساعدات غذائية</h4>
<p class="text-sm text-slate-500 leading-relaxed">كراتين غذائية شهرية ووجبات ساخنة للأسر الأكثر احتياجاً في مصر.</p>
</div>
<div class="aid-card group">
<div class="icon-box group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-4xl">school</span>
</div>
<h4 class="text-xl font-black text-slate-800">مساعدات تعليمية</h4>
<p class="text-sm text-slate-500 leading-relaxed">سداد المصروفات الدراسية وتوفير المستلزمات المدرسية للطلاب.</p>
</div>
<div class="aid-card group">
<div class="icon-box group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-4xl">home_work</span>
</div>
<h4 class="text-xl font-black text-slate-800">سكن وإيواء</h4>
<p class="text-sm text-slate-500 leading-relaxed">ترميم المنازل المتهالكة، وتوفير سكن آمن للأسر المحتاجة.</p>
</div>
</div>
</section>
<section class="bg-white rounded-3xl p-10 border border-slate-100 shadow-sm">
<div class="flex flex-col md:flex-row items-center justify-between gap-10">
<div class="md:w-1/2 space-y-6">
<h3 class="text-3xl font-black text-slate-800 leading-tight">كيف تعمل منظومة طلب المساعدة؟</h3>
<ul class="space-y-4">
<li class="flex gap-4">
<span class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-sm">١</span>
<div>
<h5 class="font-black text-slate-800">تقديم الطلب إلكترونياً</h5>
<p class="text-sm text-slate-500">املأ استمارة البيانات بدقة مع إرفاق المستندات المطلوبة.</p>
</div>
</li>
<li class="flex gap-4">
<span class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-sm">٢</span>
<div>
<h5 class="font-black text-slate-800">بحث الحالة ميدانياً</h5>
<p class="text-sm text-slate-500">سيقوم فريقنا بالتواصل معك لزيارة الحالة والتأكد من الاحتياج.</p>
</div>
</li>
<li class="flex gap-4">
<span class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-sm">٣</span>
<div>
<h5 class="font-black text-slate-800">توصيل المساعدة</h5>
<p class="text-sm text-slate-500">بعد الموافقة، يتم توجيه الدعم اللازم مباشرة للمستفيد.</p>
</div>
</li>
</ul>
</div>
<div class="md:w-1/2 bg-slate-50 rounded-2xl p-8 border border-slate-200 flex flex-col items-center text-center">
<span class="material-symbols-outlined text-6xl text-primary/40 mb-4">description</span>
<h4 class="text-xl font-black text-slate-800 mb-2">هل أعددت أوراقك؟</h4>
<p class="text-sm text-slate-500 mb-6">تأكد من وجود صورة بطاقة الرقم القومي سارية وشهادات الميلاد والتقارير الطبية (إن وجدت) لتسريع عملية فحص الطلب.</p>
</div>
</div>
</section>
<footer class="pt-8 pb-4">
<div class="flex flex-col md:flex-row justify-between items-center gap-6 border-t border-slate-200 pt-8">
<p class="text-slate-400 text-sm flex items-center gap-2">
<span class="material-symbols-outlined text-sm">verified_user</span>
                    جميع بياناتك الشخصية محمية ومؤمنة بأحدث تقنيات التشفير
                </p>

<p class="text-center text-slate-300 text-xs mt-8">حقوق الطبع محفوظة © 2026 مؤسسة معًا نصنع الأمل - جمهورية مصر العربية</p>
</footer>
</div>
</main>

<script>
document.getElementById('downloadGuide').addEventListener('click', () => {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF({
        orientation: 'portrait',
        unit: 'mm',
        format: 'a4'
    });

    doc.setFont("Amiri-Regular", "normal");

    doc.setFontSize(24);
    doc.setTextColor(27, 94, 32);
    doc.text("دليل المستندات المطلوبة لطلب المساعدة", 105, 30, { align: "center" });

    doc.setFontSize(14);
    doc.setTextColor(75, 85, 99);
    doc.text("مؤسسة معًا نصنع الأمل - إصدار مارس 2026", 105, 45, { align: "center" });

    doc.setLineWidth(0.7);
    doc.setDrawColor(46, 125, 50);
    doc.line(20, 55, 190, 55);

    doc.setFontSize(18);
    doc.setTextColor(46, 125, 50);
    doc.text("المستندات الأساسية المطلوبة", 20, 75);

    doc.setFontSize(13);
    doc.setTextColor(31, 41, 55);

    let y = 90;
    const lines = [
        "• صورة بطاقة الرقم القومي (وجه وظهر): صورة واضحة جدًا وبجودة عالية - إلزامي - بدونها لن يتم قبول الطلب",
        "• شهادة الميلاد (للأطفال إن وجد): صورة شهادة ميلاد حديثة لكل طفل مشمول في الطلب",
        "• تقرير طبي حديث (للحالات الطبية): تقرير من طبيب مختص يوضح التشخيص والعلاج المطلوب والتكلفة التقريبية",
        "• فواتير أو إيصالات داعمة: فواتير علاج، رسوم دراسية، إيجار، أو أي مستند يثبت الاحتياج",
        "• صور توضيحية (اختياري ولكن مفيد): صور للوضع الحالي (المنزل، الأجهزة، الحالة الصحية...)"
    ];

    lines.forEach(line => {
        const split = doc.splitTextToSize(line, 170);
        doc.text(split, 25, y);
        y += 8 * split.length + 4;
    });

    y += 10;
    doc.setFontSize(18);
    doc.setTextColor(46, 125, 50);
    doc.text("ملاحظات هامة جدًا", 20, y);
    y += 12;

    doc.setFontSize(13);
    doc.setTextColor(31, 41, 55);

    const notes = [
        "• جميع المستندات يجب أن تكون واضحة تمامًا وقابلة للقراءة بدون تشويش",
        "• يفضل رفع الملفات بصيغة JPG أو PNG أو PDF وحجم مناسب (لا يزيد عن 5 ميجا)",
        "• سيتم التواصل معك خلال 48 ساعة عمل بعد تقديم الطلب الكامل",
        "• جميع البيانات والمستندات سرية تمامًا ولا تُستخدم إلا لأغراض المساعدة",
        "• في حالة عدم اكتمال المستندات، قد يتأخر الرد أو يُرفض الطلب مؤقتًا"
    ];

    notes.forEach(note => {
        const split = doc.splitTextToSize(note, 170);
        doc.text(split, 25, y);
        y += 8 * split.length + 2;
    });

    doc.setFontSize(11);
    doc.setTextColor(107, 114, 128);
    doc.text("مؤسسة معًا نصنع الأمل - جميع الحقوق محفوظة © 2026", 105, 280, { align: "center" });
    doc.text("جمهورية مصر العربية", 105, 287, { align: "center" });

    doc.save("دليل_المستندات_طلب_مساعدة.pdf");
});
</script>

</body>
</html>