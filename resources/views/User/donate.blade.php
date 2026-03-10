<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>تبرع الآن - بالجنيه المصري</title>
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
        .donation-card {
            @apply bg-white rounded-xl shadow-sm border border-slate-100 p-8 mb-6;
        }
        .section-title {
            @apply text-lg font-bold text-slate-800 mb-6 flex items-center gap-2;
        }
        .input-label {
            @apply block text-sm font-bold text-slate-600 mb-2;
        }
        .amount-btn {
            @apply px-6 py-4 rounded-xl border-2 border-slate-100 font-bold text-slate-600 hover:border-primary hover:text-primary transition-all text-lg;
        }
        .amount-btn.active {
            @apply border-primary bg-primary/5 text-primary;
        }
        .input-field {
            @apply w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all;
        }
        .payment-option {
            @apply flex flex-col items-center justify-center p-4 border-2 border-slate-100 rounded-xl hover:border-primary cursor-pointer transition-all gap-2 grayscale hover:grayscale-0;
        }
        .payment-option.active {
            @apply border-primary bg-primary/5 grayscale-0;
        }
        .toggle-switch {
            @apply relative inline-flex h-6 w-11 items-center rounded-full transition-colors focus:outline-none;
        }
        .toggle-switch.on {
            @apply bg-primary;
        }
        .toggle-switch.on span {
            @apply translate-x-6;
        }
        .toggle-knob {
            @apply inline-block h-4 w-4 transform rounded-full bg-white shadow transition-transform;
        }
    </style>
</head>
<body class="bg-background-main text-slate-900 min-h-screen flex">

<x-user-slider>
</x-user-slider>
<main class="flex-1 mr-64">
<header class="bg-white px-10 py-6 flex justify-between items-center shadow-sm sticky top-0 z-10">
<div class="flex flex-col">
<h2 class="text-2xl font-black text-slate-800">تبرع الآن - بالجنيه المصري</h2>
<p class="text-sm text-slate-500">ساهم في دعم المشاريع التنموية في مصر</p>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-slate-400 hover:text-primary transition-colors relative">
<a href="notifications2.html"><span class="material-symbols-outlined">notifications</span></a>
<span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
</button>
<div class="w-10 h-10 rounded-full bg-slate-200 border-2 border-primary/20" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDxzxtrnnTRyxDxG-SM9Lw_YspAaDGeh8sH84v3tNmPNi3z4dBxS17gS75slAofb8CzdDIxGm-ZvJEJfgntpSYH2Th4Xg-LcE_OhijfBUM2EuSjulQ1Ah91jnBTC1oOTHSXFcMlHFEJFBo8_0aSRChtO4UL_UVI4GLY3KvYGNXd6_vUVQEZPPHbozFZLFRavc3H_FMSco_3W3QZ4pQaZpaZOAuzE5K33gt5rYc28q_KOcQlPxJJirIy3TFomFoHNaRCLYX6KQnADKY"); background-size: cover;'></div>
</div>
</header>
<div class="p-10 max-w-4xl mx-auto">
<div class="donation-card">
<h3 class="section-title">
<span class="material-symbols-outlined text-primary">payments</span>
                حدد مبلغ التبرع
            </h3>
<div class="grid grid-cols-3 gap-4 mb-6">
<button class="amount-btn">١٠٠ ج.م</button>
<button class="amount-btn active">٥٠٠ ج.م</button>
<button class="amount-btn">١٠٠٠ ج.م</button>
</div>
<div>
<label class="input-label">أو أدخل مبلغاً مخصصاً بالجنيه المصري</label>
<div class="relative">
<input id="custom-amount" class="input-field text-left pr-16 text-lg font-bold" dir="ltr" placeholder="0.00" type="number" min="1"/>
<span class="absolute right-4 top-3.5 font-bold text-slate-400">EGP</span>
</div>
</div>
</div>
<div class="donation-card">
<h3 class="section-title">
<span class="material-symbols-outlined text-primary">category</span>
                اختر المشروع
            </h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<label class="relative flex items-center p-4 border-2 border-primary bg-primary/5 rounded-xl cursor-pointer">
<input checked class="hidden" name="project" type="radio" value="كفالة تعليم"/>
<span class="material-symbols-outlined text-primary ml-3">school</span>
<div>
<p class="font-bold text-slate-800">كفالة تعليم</p>
<p class="text-xs text-slate-500">دعم طلاب العلم المتميزين في مصر</p>
</div>
<span class="material-symbols-outlined text-primary mr-auto check-icon hidden">check_circle</span>
</label>
<label class="relative flex items-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-primary transition-all">
<input class="hidden" name="project" type="radio" value="توصيل مياه"/>
<span class="material-symbols-outlined text-slate-400 ml-3">water_drop</span>
<div>
<p class="font-bold text-slate-800">توصيل مياه</p>
<p class="text-xs text-slate-500">توصيل مياه الشرب للمناطق الأكثر احتياجاً</p>
</div>
<span class="material-symbols-outlined text-primary mr-auto check-icon hidden">check_circle</span>
</label>
<label class="relative flex items-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-primary transition-all">
<input class="hidden" name="project" type="radio" value="رعاية الأيتام"/>
<span class="material-symbols-outlined text-slate-400 ml-3">child_care</span>
<div>
<p class="font-bold text-slate-800">رعاية الأيتام</p>
<p class="text-xs text-slate-500">توفير حياة كريمة لليتيم المصري</p>
</div>
<span class="material-symbols-outlined text-primary mr-auto check-icon hidden">check_circle</span>
</label>
<label class="relative flex items-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-primary transition-all">
<input class="hidden" name="project" type="radio" value="الإغاثة الطبية"/>
<span class="material-symbols-outlined text-slate-400 ml-3">medical_services</span>
<div>
<p class="font-bold text-slate-800">الإغاثة الطبية</p>
<p class="text-xs text-slate-500">تجهيز المستشفيات والعمليات الحرجة</p>
</div>
<span class="material-symbols-outlined text-primary mr-auto check-icon hidden">check_circle</span>
</label>
</div>
</div>
<div class="donation-card">
<h3 class="section-title">
<span class="material-symbols-outlined text-primary">account_balance_wallet</span>
                طريقة الدفع
            </h3>
<div class="grid grid-cols-3 gap-4">
<div class="payment-option active" data-method="card">
<span class="material-symbols-outlined text-3xl text-blue-600">credit_card</span>
<span class="text-sm font-bold">فيزا / ميزة / ماستر كارد</span>
</div>
<div class="payment-option" data-method="mobile">
<span class="material-symbols-outlined text-3xl text-red-600">account_balance_wallet</span>
<span class="text-sm font-bold">المحافظ الإلكترونية</span>
</div>
<div class="payment-option" data-method="bank">
<span class="material-symbols-outlined text-3xl text-slate-400">account_balance</span>
<span class="text-sm font-bold">تحويل بنكي</span>
</div>
</div>
</div>
<div class="donation-card">
<div class="flex items-center justify-between">
<div class="flex items-center gap-4">
<div class="bg-orange-100 p-3 rounded-xl text-accent-orange">
<span class="material-symbols-outlined">calendar_month</span>
</div>
<div>
<p class="font-bold text-slate-800 text-lg">اجعله تبرعاً شهرياً</p>
<p class="text-sm text-slate-500">ضاعف أثرك باستمرارية العطاء كل شهر</p>
</div>
</div>
<div class="toggle-switch" id="recurring-toggle">
<span class="toggle-knob"></span>
</div>
</div>
</div>
<div class="mt-10">
<button id="confirm-donation" class="w-full py-5 bg-primary text-white text-xl font-black rounded-xl shadow-xl shadow-primary/20 hover:bg-primary-dark transition-all flex items-center justify-center gap-3">
<span class="material-symbols-outlined">favorite</span>
                إتمام التبرع الآن
            </button>
<p class="text-center text-slate-400 text-sm mt-6 flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">verified_user</span>
                جميع العمليات مشفرة وآمنة بنسبة 100%
            </p>
</div>
</div>
</main>

<script>
const amountButtons = document.querySelectorAll('.amount-btn');
const customAmountInput = document.getElementById('custom-amount');
const projectRadios = document.querySelectorAll('input[name="project"]');
const paymentOptions = document.querySelectorAll('.payment-option');
const recurringToggle = document.getElementById('recurring-toggle');
const confirmButton = document.getElementById('confirm-donation');

amountButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        amountButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        customAmountInput.value = '';
    });
});

customAmountInput.addEventListener('input', () => {
    amountButtons.forEach(b => b.classList.remove('active'));
});

projectRadios.forEach(radio => {
    radio.addEventListener('change', () => {
        document.querySelectorAll('.check-icon').forEach(icon => icon.classList.add('hidden'));
        radio.parentElement.querySelector('.check-icon').classList.remove('hidden');
    });
});

paymentOptions.forEach(option => {
    option.addEventListener('click', () => {
        paymentOptions.forEach(o => o.classList.remove('active'));
        option.classList.add('active');
    });
});

recurringToggle.addEventListener('click', () => {
    recurringToggle.classList.toggle('on');
});

confirmButton.addEventListener('click', () => {
    const selectedAmount = customAmountInput.value || document.querySelector('.amount-btn.active')?.textContent.replace(' ج.م', '') || '0';
    const selectedProject = document.querySelector('input[name="project"]:checked')?.value || 'غير محدد';
    const selectedPayment = document.querySelector('.payment-option.active')?.dataset.method || 'غير محدد';
    const isRecurring = recurringToggle.classList.contains('on') ? 'شهري' : 'مرة واحدة';

    if (parseFloat(selectedAmount) <= 0) {
        alert('يرجى اختيار مبلغ تبرع صالح');
        return;
    }

    const message = `
        تم إتمام عملية التبرع بنجاح!
        ────────────────────────────────
        المبلغ: ${selectedAmount} ج.م
        نوع التبرع: ${isRecurring}
        المشروع: ${selectedProject}
        طريقة الدفع: ${selectedPayment === 'card' ? 'بطاقة ائتمانية' : selectedPayment === 'mobile' ? 'محفظة إلكترونية' : 'تحويل بنكي'}
        ────────────────────────────────
        شكراً لك على عطائك الكريم، أثرك سيصل إلى من يحتاجه.
    `;

    alert(message);
});
</script>

</body>
</html>
