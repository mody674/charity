<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>قصص الأثر - معًا نصنع الأمل</title>
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
    .impact-card {
        @apply bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden flex flex-col transition-transform hover:shadow-md;
    }
    .progress-pill {
        @apply flex items-center gap-1 px-3 py-1 rounded-full text-xs font-bold;
    }
</style>
</head>
<body class="bg-background-main text-slate-900 min-h-screen flex">
    <x-user-slider>
</x-user-slider>
<main class="flex-1 mr-64">
<header class="bg-white px-10 py-6 flex justify-between items-center shadow-sm sticky top-0 z-10">
<div class="flex flex-col">
<h2 class="text-2xl font-black text-slate-800">قصص الأثر</h2>
<p class="text-sm text-slate-500">شاهد كيف غيّر تبرعك حياة الآخرين</p>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-slate-400 hover:text-primary transition-colors relative">
<a href="notifications2.html"><span class="material-symbols-outlined">notifications</span></a>
<span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
</button>
<div class="w-10 h-10 rounded-full bg-slate-200 border-2 border-primary/20" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDxzxtrnnTRyxDxG-SM9Lw_YspAaDGeh8sH84v3tNmPNi3z4dBxS17gS75slAofb8CzdDIxGm-ZvJEJfgntpSYH2Th4Xg-LcE_OhijfBUM2EuSjulQ1Ah91jnBTC1oOTHSXFcMlHFEJFBo8_0aSRChtO4UL_UVI4GLY3KvYGNXd6_vUVQEZPPHbozFZLFRavc3H_FMSco_3W3QZ4pQaZpaZOAuzE5K33gt5rYc28q_KOcQlPxJJirIy3TFomFoHNaRCLYX6KQnADKY"); background-size: cover;'></div>
</div>
</header>
<div class="p-10 max-w-7xl mx-auto">
<div class="mb-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
<div class="flex items-center gap-4 bg-white p-2 rounded-xl border border-slate-200">
<button data-filter="all" class="px-6 py-2 bg-primary text-white rounded-lg font-bold shadow-sm active-filter">الكل</button>
<button data-filter="مياه" class="px-6 py-2 text-slate-600 hover:bg-slate-50 rounded-lg font-bold transition-colors">مشاريع المياه</button>
<button data-filter="صحة" class="px-6 py-2 text-slate-600 hover:bg-slate-50 rounded-lg font-bold transition-colors">الصحة</button>
<button data-filter="تعليم" class="px-6 py-2 text-slate-600 hover:bg-slate-50 rounded-lg font-bold transition-colors">التعليم</button>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute right-3 top-2.5 text-slate-400">search</span>
<input id="searchStories" class="pr-10 pl-4 py-2 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none w-64" placeholder="البحث عن قصة..." type="text"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="storiesGrid">
<div class="impact-card" data-category="صحة">
<div class="h-52 w-full relative">
<img alt="Story Image" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNL9HxlwpbhKotHnhvm5idp2mbXynShPkD_hXsR47Cm4hVLMdEG8MZ87lYkBGriN4WuCEl7CD85M_R14hZa9TmL0Fr098dN8BetnbCugfxCD2wrtfZfA_jp7JDRJPuUeIer8Bk3PZF_rXre2zHS5DqeCq9tH9ZgN8uVBBSdkkop-DTZP4kErN8H4KvBfQqcEk9ekBkAa-Ek9yztmBzNqfye384UOMmRmXtmGy7tqgF4SS2LmjEgX7HRuHeZ3REiYl2dhWCVZJygFI"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-lg text-primary text-xs font-bold">حملة الشفاء</div>
</div>
<div class="p-6 flex flex-col flex-1">
<h3 class="text-xl font-bold text-slate-800 mb-2 leading-tight">استعادة الابتسامة: رحلة الطفل سيف</h3>
<p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">بعد سنوات من المعاناة مع ضعف البصر، نجحت عملية سيف بفضل تبرعاتكم، والآن يعود لمقاعد الدراسة بابتسامة تملأ وجهه. كان سيف يعاني من مشكلة في النظر منذ صغره، لكن بفضل حملة "الشفاء" تمكن من إجراء عملية جراحية ناجحة غيرت حياته تماماً. اليوم يشارك أصدقاءه في الفصل ويحلم بأن يصبح طبيباً ليعيد الجميل للمجتمع.</p>
<div class="mt-auto space-y-4">
<div class="flex items-center justify-between">
<span class="text-xs text-slate-400 font-bold uppercase tracking-wider">مؤشر التقدم</span>
<div class="flex gap-2">
<span class="progress-pill bg-slate-100 text-slate-500">قبل</span>
<span class="material-symbols-outlined text-sm text-slate-300">arrow_back</span>
<span class="progress-pill bg-emerald-100 text-emerald-700">بعد</span>
</div>
</div>
<div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
<div class="bg-primary h-full w-full"></div>
</div>
<button class="show-full-story w-full py-3 bg-white border-2 border-primary text-primary font-black rounded-xl hover:bg-primary hover:text-white transition-all" data-title="استعادة الابتسامة: رحلة الطفل سيف" data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuBNL9HxlwpbhKotHnhvm5idp2mbXynShPkD_hXsR47Cm4hVLMdEG8MZ87lYkBGriN4WuCEl7CD85M_R14hZa9TmL0Fr098dN8BetnbCugfxCD2wrtfZfA_jp7JDRJPuUeIer8Bk3PZF_rXre2zHS5DqeCq9tH9ZgN8uVBBSdkkop-DTZP4kErN8H4KvBfQqcEk9ekBkAa-Ek9yztmBzNqfye384UOMmRmXtmGy7tqgF4SS2LmjEgX7HRuHeZ3REiYl2dhWCVZJygFI" data-desc="بعد سنوات من المعاناة مع ضعف البصر، نجحت عملية سيف بفضل تبرعاتكم، والآن يعود لمقاعد الدراسة بابتسامة تملأ وجهه. كان سيف يعاني من مشكلة في النظر منذ صغره، لكن بفضل حملة الشفاء تمكن من إجراء عملية جراحية ناجحة غيرت حياته تماماً. اليوم يشارك أصدقاءه في الفصل ويحلم بأن يصبح طبيباً ليعيد الجميل للمجتمع. العملية كلفت 45,000 جنيه، وتم جمعها خلال أسبوعين فقط بفضل تضافر جهود المتبرعين. سيف الآن يدرس بتفوق ويشارك في أنشطة المدرسة بحماس كبير.">عرض القصة كاملة</button>
</div>
</div>
</div>
<div class="impact-card" data-category="مياه">
<div class="h-52 w-full relative">
<img alt="Story Image" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmfp0QCwXmJgPyLhLs5Ooy6Vzk5S5xhik8HIceeN142r90AsbcBpkZoCxWjux0j3KMIZojtzETQ9DBR3jTfiZ0rXk4JWscVF1W-ZoOJPlZCJNWm9aAGTH1CC20yKX-Fz1diBcZXSNmuRaJo-P1kFekY2uEptlUq8usGCroP1pa55voyJtqJN-iNlq6JOJi6o2WyO0Xe7g1j4qqwzi1DQo9KceLNuJzvObjKQlcfSrnNvlD1Oadm3pCUAqoXfjlIYtJ-GbFf2RVmuM"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-lg text-primary text-xs font-bold">سقيا الخير</div>
</div>
<div class="p-6 flex flex-col flex-1">
<h3 class="text-xl font-bold text-slate-800 mb-2 leading-tight">بئر جديد في قرية "المنيا"</h3>
<p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">انتهى عناء السير لمسافات طويلة للحصول على مياه شرب نظيفة. اليوم، يستفيد أكثر من 500 منزل من مياه البئر الجديد بفضل دعمكم. كانت القرية تعاني من شح المياه لسنوات، مما أثر على الصحة والتعليم. بفضل حملة سقيا الخير تم حفر بئر ارتوازي بعمق 120 متر، وتركيب مضخة شمسية وشبكة توزيع داخلية. الآن الأطفال يذهبون إلى المدرسة بدلاً من جلب المياه، والأسر تستطيع الزراعة بشكل أفضل.</p>
<div class="mt-auto space-y-4">
<div class="flex items-center justify-between">
<span class="text-xs text-slate-400 font-bold uppercase tracking-wider">مؤشر التقدم</span>
<div class="flex gap-2">
<span class="progress-pill bg-slate-100 text-slate-500">قبل</span>
<span class="material-symbols-outlined text-sm text-slate-300">arrow_back</span>
<span class="progress-pill bg-emerald-100 text-emerald-700">بعد</span>
</div>
</div>
<div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
<div class="bg-primary h-full w-full"></div>
</div>
<button class="show-full-story w-full py-3 bg-white border-2 border-primary text-primary font-black rounded-xl hover:bg-primary hover:text-white transition-all" data-title="بئر جديد في قرية المنيا" data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuBmfp0QCwXmJgPyLhLs5Ooy6Vzk5S5xhik8HIceeN142r90AsbcBpkZoCxWjux0j3KMIZojtzETQ9DBR3jTfiZ0rXk4JWscVF1W-ZoOJPlZCJNWm9aAGTH1CC20yKX-Fz1diBcZXSNmuRaJo-P1kFekY2uEptlUq8usGCroP1pa55voyJtqJN-iNlq6JOJi6o2WyO0Xe7g1j4qqwzi1DQo9KceLNuJzvObjKQlcfSrnNvlD1Oadm3pCUAqoXfjlIYtJ-GbFf2RVmuM" data-desc="انتهى عناء السير لمسافات طويلة للحصول على مياه شرب نظيفة. اليوم، يستفيد أكثر من 500 منزل من مياه البئر الجديد بفضل دعمكم. كانت القرية تعاني من شح المياه لسنوات، مما أثر على الصحة والتعليم. بفضل حملة سقيا الخير تم حفر بئر ارتوازي بعمق 120 متر، وتركيب مضخة شمسية وشبكة توزيع داخلية. الآن الأطفال يذهبون إلى المدرسة بدلاً من جلب المياه، والأسر تستطيع الزراعة بشكل أفضل. المشروع كلف 320,000 جنيه وتم تمويله خلال 45 يوم فقط.">عرض القصة كاملة</button>
</div>
</div>
</div>
<div class="impact-card" data-category="تعليم">
<div class="h-52 w-full relative">
<img alt="Story Image" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVDojNQUbmh0gsDWgsEy4Ej8UqKAtTR5V-sEk00fCXKwfGQcwauOAI5moixTBZYNXItKas24rRDVNSURgh_WmlSAiTRH0RGt4eZ5oGY2ZMYxi3ObK0d1n0N4xLW5P09FYsKLNsB6zZYdQOpxtZfWIJt-SDcIHZrba4oUfKRU5o0yY8khBDmJLu_GOtFt80BvL7DN_TBzyFMEltW-M-lxcjjvcDA7rdcKXY6xjHPhO_YcOYMn6TZoAnu9I8sNVnUfTqZRP3BkPsjuU"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-lg text-primary text-xs font-bold">بناء الغد</div>
</div>
<div class="p-6 flex flex-col flex-1">
<h3 class="text-xl font-bold text-slate-800 mb-2 leading-tight">إعادة تأهيل مدرسة السلام</h3>
<p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">من جدران متهالكة إلى فصول دراسية مجهزة بأحدث الوسائل التعليمية. تبرعكم صنع بيئة آمنة لإبداع الطلاب وتفوقهم. المدرسة كانت على وشك الإغلاق بسبب حالتها السيئة، لكن حملة بناء الغد أعادت ترميمها بالكامل: سقف جديد، نوافذ، أبواب، كراسي، سبورات ذكية، وحتى مكتبة صغيرة. اليوم يدرس فيها 320 طالب بكل أمان وراحة.</p>
<div class="mt-auto space-y-4">
<div class="flex items-center justify-between">
<span class="text-xs text-slate-400 font-bold uppercase tracking-wider">مؤشر التقدم</span>
<div class="flex gap-2">
<span class="progress-pill bg-slate-100 text-slate-500">قبل</span>
<span class="material-symbols-outlined text-sm text-slate-300">arrow_back</span>
<span class="progress-pill bg-emerald-100 text-emerald-700">بعد</span>
</div>
</div>
<div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
<div class="bg-primary h-full w-full"></div>
</div>
<button class="show-full-story w-full py-3 bg-white border-2 border-primary text-primary font-black rounded-xl hover:bg-primary hover:text-white transition-all" data-title="إعادة تأهيل مدرسة السلام" data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuCVDojNQUbmh0gsDWgsEy4Ej8UqKAtTR5V-sEk00fCXKwfGQcwauOAI5moixTBZYNXItKas24rRDVNSURgh_WmlSAiTRH0RGt4eZ5oGY2ZMYxi3ObK0d1n0N4xLW5P09FYsKLNsB6zZYdQOpxtZfWIJt-SDcIHZrba4oUfKRU5o0yY8khBDmJLu_GOtFt80BvL7DN_TBzyFMEltW-M-lxcjjvcDA7rdcKXY6xjHPhO_YcOYMn6TZoAnu9I8sNVnUfTqZRP3BkPsjuU" data-desc="من جدران متهالكة إلى فصول دراسية مجهزة بأحدث الوسائل التعليمية. تبرعكم صنع بيئة آمنة لإبداع الطلاب وتفوقهم. المدرسة كانت على وشك الإغلاق بسبب حالتها السيئة، لكن حملة بناء الغد أعادت ترميمها بالكامل: سقف جديد، نوافذ، أبواب، كراسي، سبورات ذكية، وحتى مكتبة صغيرة. اليوم يدرس فيها 320 طالب بكل أمان وراحة. المشروع كلف 680,000 جنيه وتم الانتهاء منه في 4 أشهر.">عرض القصة كاملة</button>
</div>
</div>
</div>
<div class="impact-card" data-category="صحة">
<div class="h-52 w-full relative">
<img alt="Story Image" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDW8YPCRIuLKeiAtjIejeTBtpEhKqVrrwHhPHKFO-dNWqm5YaqmjDaeb7Cu9NnkJufaof4QG_WTGwUZBGO39rWXA5ij-c4AeQSErsqgiGMa5YUMoEvylh3COo4nuXeqn3IEf7ZkHwvD3S2BUePji002RzBM85_0ngolbPHGiqYrre6xsMWR_kiI1yTaxEk2aB0T3jcauuBLNnQYcm7bBctNr7P-il4giSrnILX0TSiGEx4YgECg3KBrmxlGT7yVDLGAKP1VtHJxV00"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-lg text-primary text-xs font-bold">الرعاية العاجلة</div>
</div>
<div class="p-6 flex flex-col flex-1">
<h3 class="text-xl font-bold text-slate-800 mb-2 leading-tight">توفير الأدوية لمرضى القلب</h3>
<p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">ساهمت التبرعات في تأمين جرعات الدواء لـ 50 مسنّاً يعانون من أمراض القلب المزمنة، مما أنقذ حياتهم وخفف آلامهم. كان العديد منهم يتوقف عن العلاج بسبب غلاء الأدوية، لكن حملة الرعاية العاجلة وفرت الدواء لمدة سنة كاملة مع متابعة طبية دورية. النتيجة: تحسن ملحوظ في الحالة الصحية وانخفاض حالات الطوارئ بنسبة 70% بين المستفيدين.</p>
<div class="mt-auto space-y-4">
<div class="flex items-center justify-between">
<span class="text-xs text-slate-400 font-bold uppercase tracking-wider">مؤشر التقدم</span>
<div class="flex gap-2">
<span class="progress-pill bg-slate-100 text-slate-500">قبل</span>
<span class="material-symbols-outlined text-sm text-slate-300">arrow_back</span>
<span class="progress-pill bg-emerald-100 text-emerald-700">بعد</span>
</div>
</div>
<div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
<div class="bg-primary h-full w-[85%]"></div>
</div>
<button class="show-full-story w-full py-3 bg-white border-2 border-primary text-primary font-black rounded-xl hover:bg-primary hover:text-white transition-all" data-title="توفير الأدوية لمرضى القلب" data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuDW8YPCRIuLKeiAtjIejeTBtpEhKqVrrwHhPHKFO-dNWqm5YaqmjDaeb7Cu9NnkJufaof4QG_WTGwUZBGO39rWXA5ij-c4AeQSErsqgiGMa5YUMoEvylh3COo4nuXeqn3IEf7ZkHwvD3S2BUePji002RzBM85_0ngolbPHGiqYrre6xsMWR_kiI1yTaxEk2aB0T3jcauuBLNnQYcm7bBctNr7P-il4giSrnILX0TSiGEx4YgECg3KBrmxlGT7yVDLGAKP1VtHJxV00" data-desc="ساهمت التبرعات في تأمين جرعات الدواء لـ 50 مسنّاً يعانون من أمراض القلب المزمنة، مما أنقذ حياتهم وخفف آلامهم. كان العديد منهم يتوقف عن العلاج بسبب غلاء الأدوية، لكن حملة الرعاية العاجلة وفرت الدواء لمدة سنة كاملة مع متابعة طبية دورية. النتيجة: تحسن ملحوظ في الحالة الصحية وانخفاض حالات الطوارئ بنسبة 70% بين المستفيدين. المشروع استمر 12 شهراً وكلف 180,000 جنيه.">عرض القصة كاملة</button>
</div>
</div>
</div>
<div class="impact-card" data-category="إطعام">
<div class="h-52 w-full relative">
<img alt="Story Image" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAvdAOF_2DDfFKoIxLUyN4Psq81-a1iV6UX9a7txt2JGniGZDhqGAprPZbCNDfTc4agbQuaGtjYq634Hsb3gx85_nGEz6IUl5bk-1UFq_qjZIsgrDZEi_EqIc1g1QNh7WHNUMCbmfDCgFAJjfb4QzvdD-yaGePVX3YBC1F0S_TvSQidKCmA2yxfnutDWyDqzT0vwugY-PmCLDjkWCWro9kmJ1FkFIbBCG5yYbDm7hl_yH-f8v-eapKWPEYzVcQk2lQnYTxxBLu6lI4"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-lg text-primary text-xs font-bold">دفء الشتاء</div>
</div>
<div class="p-6 flex flex-col flex-1">
<h3 class="text-xl font-bold text-slate-800 mb-2 leading-tight">كسوة الشتاء للأسر المتعففة</h3>
<p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">أكثر من 200 طفل حصلوا على ملابس شتوية وأغطية تحميهم من برد الشتاء القارس، بفضل مساهمتكم في حملة الشتاء. كانت الأسر تعاني من نقص الملابس الدافئة، مما يؤثر على صحة الأطفال. تم توزيع 450 قطعة ملابس و180 بطانية ثقيلة على 12 قرية. الآن الأطفال يذهبون للمدرسة دون الخوف من البرد، والأمهات يشعرن بالأمان على أطفالهن.</p>
<div class="mt-auto space-y-4">
<div class="flex items-center justify-between">
<span class="text-xs text-slate-400 font-bold uppercase tracking-wider">مؤشر التقدم</span>
<div class="flex gap-2">
<span class="progress-pill bg-slate-100 text-slate-500">قبل</span>
<span class="material-symbols-outlined text-sm text-slate-300">arrow_back</span>
<span class="progress-pill bg-emerald-100 text-emerald-700">بعد</span>
</div>
</div>
<div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
<div class="bg-primary h-full w-full"></div>
</div>
<button class="show-full-story w-full py-3 bg-white border-2 border-primary text-primary font-black rounded-xl hover:bg-primary hover:text-white transition-all" data-title="كسوة الشتاء للأسر المتعففة" data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuAvdAOF_2DDfFKoIxLUyN4Psq81-a1iV6UX9a7txt2JGniGZDhqGAprPZbCNDfTc4agbQuaGtjYq634Hsb3gx85_nGEz6IUl5bk-1UFq_qjZIsgrDZEi_EqIc1g1QNh7WHNUMCbmfDCgFAJjfb4QzvdD-yaGePVX3YBC1F0S_TvSQidKCmA2yxfnutDWyDqzT0vwugY-PmCLDjkWCWro9kmJ1FkFIbBCG5yYbDm7hl_yH-f8v-eapKWPEYzVcQk2lQnYTxxBLu6lI4" data-desc="أكثر من 200 طفل حصلوا على ملابس شتوية وأغطية تحميهم من برد الشتاء القارس، بفضل مساهمتكم في حملة الشتاء. كانت الأسر تعاني من نقص الملابس الدافئة، مما يؤثر على صحة الأطفال. تم توزيع 450 قطعة ملابس و180 بطانية ثقيلة على 12 قرية. الآن الأطفال يذهبون للمدرسة دون الخوف من البرد، والأمهات يشعرن بالأمان على أطفالهن. الحملة جمعت 240,000 جنيه خلال شهر واحد.">عرض القصة كاملة</button>
</div>
</div>
</div>
<div class="impact-card" data-category="تمكين">
<div class="h-52 w-full relative">
<img alt="Story Image" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDChoRarENyF5G2MgD_JIHe8wXJUDw9v6EbeGljvoQ7SvFRkwwGeU7QI_qlhXIWTb6hpU8xXZtGQwXdRb-Q9V1O4-aZVhbgOGpmYpVfSFZe9V9R2gwUE6cZb388YA4JbCWDZdtMYEY0RaNcJpG1Mu1bTmlP7L7huSYOSAWENM8xT6-8nbbwstuK2NKM7RNqpn4PWYEZQQDf4cLyfX6vPkPQBETPCc_f-YgjpokjZjCwsqHxROFv8H-GeBcMIXu_2VWq9A-p4sCA5lc"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-lg text-primary text-xs font-bold">تمكين المرأة</div>
</div>
<div class="p-6 flex flex-col flex-1">
<h3 class="text-xl font-bold text-slate-800 mb-2 leading-tight">مشروع الخياطة: دخل مستدام</h3>
<p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">قصة نجاح السيدة مريم التي بدأت مشروعها الصغير بآلة خياطة من تبرعاتكم، والآن تعول أسرتها بكرامة واستقلالية. مريم كانت أم لأربعة أطفال وبلا دخل ثابت بعد وفاة زوجها. تم تدريبها على الخياطة وتزويدها بماكينة وخامات. اليوم تنتج 30-40 قطعة شهرياً وتحقق دخلاً يساعدها على تعليم أبنائها وتلبية احتياجات الأسرة.</p>
<div class="mt-auto space-y-4">
<div class="flex items-center justify-between">
<span class="text-xs text-slate-400 font-bold uppercase tracking-wider">مؤشر التقدم</span>
<div class="flex gap-2">
<span class="progress-pill bg-slate-100 text-slate-500">قبل</span>
<span class="material-symbols-outlined text-sm text-slate-300">arrow_back</span>
<span class="progress-pill bg-emerald-100 text-emerald-700">بعد</span>
</div>
</div>
<div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
<div class="bg-primary h-full w-full"></div>
</div>
<button class="show-full-story w-full py-3 bg-white border-2 border-primary text-primary font-black rounded-xl hover:bg-primary hover:text-white transition-all" data-title="مشروع الخياطة: دخل مستدام" data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuDChoRarENyF5G2MgD_JIHe8wXJUDw9v6EbeGljvoQ7SvFRkwwGeU7QI_qlhXIWTb6hpU8xXZtGQwXdRb-Q9V1O4-aZVhbgOGpmYpVfSFZe9V9R2gwUE6cZb388YA4JbCWDZdtMYEY0RaNcJpG1Mu1bTmlP7L7huSYOSAWENM8xT6-8nbbwstuK2NKM7RNqpn4PWYEZQQDf4cLyfX6vPkPQBETPCc_f-YgjpokjZjCwsqHxROFv8H-GeBcMIXu_2VWq9A-p4sCA5lc" data-desc="قصة نجاح السيدة مريم التي بدأت مشروعها الصغير بآلة خياطة من تبرعاتكم، والآن تعول أسرتها بكرامة واستقلالية. مريم كانت أم لأربعة أطفال وبلا دخل ثابت بعد وفاة زوجها. تم تدريبها على الخياطة وتزويدها بماكينة وخامات. اليوم تنتج 30-40 قطعة شهرياً وتحقق دخلاً يساعدها على تعليم أبنائها وتلبية احتياجات الأسرة. المشروع ساعد 18 سيدة أخرى في القرية على بدء مشاريع مماثلة.">عرض القصة كاملة</button>
</div>
</div>
</div>
</div>

</div>
<div id="storyModal" class="fixed inset-0 bg-black/70 backdrop-blur-sm flex items-center justify-center z-50 hidden">
<div class="bg-white rounded-2xl shadow-2xl max-w-4xl w-full mx-4 max-h-[90vh] overflow-y-auto">
<div class="sticky top-0 bg-white z-10 p-6 border-b border-slate-200 flex justify-between items-center">
<h3 id="modalTitle" class="text-2xl font-black text-slate-800"></h3>
<button id="closeStoryModal" class="text-slate-500 hover:text-slate-700">
<span class="material-symbols-outlined text-3xl">close</span>
</button>
</div>
<div class="p-8">
<div class="flex flex-col md:flex-row gap-8">
<img id="modalImg" class="w-full md:w-1/2 h-80 object-cover rounded-xl" alt="Story Image">
<div class="flex-1">
<p id="modalDesc" class="text-slate-700 leading-relaxed text-lg"></p>
<div class="mt-10 flex items-center gap-4">
<span class="text-sm text-slate-500 font-bold uppercase tracking-wider">تم التنفيذ بفضل تبرعاتكم</span>
<span class="material-symbols-outlined text-primary text-2xl">volunteer_activism</span>
</div>
</div>
</div>
</div>
</div>
</div>
</main>

<script>
const filterButtons = document.querySelectorAll('[data-filter]');
const searchInput = document.getElementById('searchStories');
const storiesGrid = document.getElementById('storiesGrid');
const cards = Array.from(storiesGrid.querySelectorAll('.impact-card'));

filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        filterButtons.forEach(b => {
            b.classList.remove('bg-primary', 'text-white', 'active-filter');
            b.classList.add('text-slate-600', 'hover:bg-slate-50');
        });
        btn.classList.add('bg-primary', 'text-white', 'active-filter');
        btn.classList.remove('text-slate-600', 'hover:bg-slate-50');

        filterStories();
    });
});

searchInput.addEventListener('input', filterStories);

function filterStories() {
    const activeFilter = document.querySelector('[data-filter].active-filter')?.dataset.filter || 'all';
    const searchTerm = searchInput.value.trim().toLowerCase();

    cards.forEach(card => {
        const title = card.querySelector('h3')?.textContent.toLowerCase() || '';
        const desc = card.querySelector('p')?.textContent.toLowerCase() || '';
        const category = card.dataset.category || '';

        const matchesSearch = title.includes(searchTerm) || desc.includes(searchTerm);
        const matchesCategory = activeFilter === 'all' || category === activeFilter;

        card.style.display = matchesSearch && matchesCategory ? '' : 'none';
    });
}

const showFullButtons = document.querySelectorAll('.show-full-story');
const storyModal = document.getElementById('storyModal');
const modalTitle = document.getElementById('modalTitle');
const modalImg = document.getElementById('modalImg');
const modalDesc = document.getElementById('modalDesc');
const closeStoryModal = document.getElementById('closeStoryModal');

showFullButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        const title = btn.dataset.title;
        const img = btn.dataset.img;
        const desc = btn.dataset.desc;

        modalTitle.textContent = title;
        modalImg.src = img;
        modalImg.alt = title;
        modalDesc.textContent = desc;

        storyModal.classList.remove('hidden');
        storyModal.classList.add('flex');
    });
});

closeStoryModal.addEventListener('click', () => {
    storyModal.classList.add('hidden');
    storyModal.classList.remove('flex');
});

storyModal.addEventListener('click', (e) => {
    if (e.target === storyModal) {
        storyModal.classList.add('hidden');
        storyModal.classList.remove('flex');
    }
});
</script>

</body>
</html>
