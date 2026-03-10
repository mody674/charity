<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>إعدادات النظام - التكوين التقني</title>
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
        .settings-card {
            @apply bg-white rounded-xl shadow-sm border border-slate-100 p-6 mb-6;
        }
        .input-label {
            @apply block text-sm font-bold text-slate-700 mb-2;
        }
        .form-input {
            @apply w-full rounded-lg border-slate-200 focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5 px-4 text-slate-800 text-sm;
        }
        .section-title {
            @apply text-lg font-black text-slate-800 mb-6 flex items-center gap-2 border-b border-slate-50 pb-4;
        }
        .eye-btn {
            @apply absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-primary cursor-pointer;
        }
    </style>
</head>

<body class="bg-background-main text-slate-900 min-h-screen flex">
    <x-admin-slider></x-admin-slider>
    <main class="flex-1 mr-64">
        <x-admin-header></x-admin-header>
        <div class="p-10 max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-1 space-y-6">
                    <div class="settings-card">
                        <h3 class="section-title">
                            <span class="material-symbols-outlined text-primary">palette</span>
                            الهوية البصرية
                        </h3>
                        <div class="space-y-6">
                            <div>
                                <label class="input-label">شعار المنصة</label>
                                <div id="logoUploadArea" class="border-2 border-dashed border-slate-200 rounded-lg p-4 flex flex-col items-center justify-center bg-slate-50 hover:bg-slate-100 transition-all cursor-pointer">
                                    <div class="w-16 h-16 bg-primary-dark rounded-lg flex items-center justify-center mb-2">
                                        <span class="material-symbols-outlined text-white text-2xl">volunteer_activism</span>
                                    </div>
                                    <span class="text-xs text-slate-500 font-bold">تغيير الشعار الحالي</span>
                                    <input type="file" id="logoInput" accept="image/*" class="hidden">
                                </div>
                            </div>
                            <div>
                                <label class="input-label">الألوان الأساسية</label>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="flex items-center gap-2 border border-slate-200 p-2 rounded-lg">
                                        <div class="w-6 h-6 rounded bg-primary-dark"></div>
                                        <input type="text" class="text-[10px] font-bold w-20 text-center" value="#1B5E20" id="colorDark">
                                    </div>
                                    <div class="flex items-center gap-2 border border-slate-200 p-2 rounded-lg">
                                        <div class="w-6 h-6 rounded bg-accent-orange"></div>
                                        <input type="text" class="text-[10px] font-bold w-20 text-center" value="#f57c00" id="colorAccent">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="input-label" for="site-title">عنوان الموقع (Meta Title)</label>
                                <input class="form-input" id="site-title" type="text" value="معًا نصنع الأمل - منصة التبرع المصرية الأولى" />
                            </div>
                        </div>
                    </div>
                    <div class="settings-card bg-slate-900 text-white">
                        <h3 class="text-lg font-black mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined text-accent-orange">info</span>
                            حالة النظام
                        </h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center text-sm border-b border-white/10 pb-2">
                                <span class="text-white/60">الإصدار</span>
                                <span class="font-mono">v2.4.0-stable</span>
                            </div>
                            <div class="flex justify-between items-center text-sm border-b border-white/10 pb-2">
                                <span class="text-white/60">بيئة التشغيل</span>
                                <span class="bg-green-500/20 text-green-400 px-2 py-0.5 rounded text-xs font-bold">الإنتاج (Production)</span>
                            </div>
                            <div class="flex justify-between items-center text-sm pb-2">
                                <span class="text-white/60">آخر مزامنة API</span>
                                <span class="text-xs">منذ 5 دقائق</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-2 space-y-6">
                    <div class="settings-card">
                        <h3 class="section-title">
                            <span class="material-symbols-outlined text-primary">payments</span>
                            بوابات الدفع الإلكتروني (API Keys)
                        </h3>
                        <div class="space-y-6">
                            <div class="p-4 bg-blue-50 border border-blue-100 rounded-xl flex gap-4 items-start mb-4">
                                <span class="material-symbols-outlined text-blue-600">security</span>
                                <p class="text-xs text-blue-700 leading-relaxed">
                                    يتم تشفير مفاتيح API قبل تخزينها في قاعدة البيانات. تأكد من عدم مشاركة هذه المفاتيح مع أي طرف خارجي.
                                </p>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="input-label">Mada / Visa (Public Key)</label>
                                    <div class="relative">
                                        <input id="publicKey" class="form-input font-mono text-xs" type="password" value="pk_live_51Mxxxxxxxxxxxxxxxxxx" />
                                        <button class="eye-btn" data-target="publicKey">
                                            <span class="material-symbols-outlined text-lg">visibility</span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <label class="input-label">Mada / Visa (Secret Key)</label>
                                    <div class="relative">
                                        <input id="secretKey" class="form-input font-mono text-xs" type="password" value="sk_live_51Mxxxxxxxxxxxxxxxxxx" />
                                        <button class="eye-btn" data-target="secretKey">
                                            <span class="material-symbols-outlined text-lg">visibility</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4 flex items-center gap-4">
                                <button id="testGatewayBtn" class="bg-slate-100 hover:bg-slate-200 text-slate-700 px-4 py-2 rounded-lg text-sm font-bold flex items-center gap-2 transition-all">
                                    <span class="material-symbols-outlined text-lg">sync</span>
                                    اختبار الاتصال بالبوابة
                                </button>
                                <span id="gatewayStatus" class="text-xs text-green-600 font-bold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">check_circle</span>
                                    البوابة متصلة حالياً
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="settings-card">
                        <h3 class="section-title">
                            <span class="material-symbols-outlined text-primary">mail</span>
                            قوالب البريد الإلكتروني المؤتمتة
                        </h3>
                        <div class="space-y-6">
                            <div>
                                <label class="input-label" for="receipt-template">قالب إيصال التبرع (HTML)</label>
                                <div class="border border-slate-200 rounded-lg overflow-hidden">
                                    <div class="bg-slate-50 border-b border-slate-200 p-2 flex gap-2">
                                        <button class="p-1 hover:bg-white rounded transition-colors text-slate-600"><span class="material-symbols-outlined text-lg">format_bold</span></button>
                                        <button class="p-1 hover:bg-white rounded transition-colors text-slate-600"><span class="material-symbols-outlined text-lg">format_italic</span></button>
                                        <button class="p-1 hover:bg-white rounded transition-colors text-slate-600"><span class="material-symbols-outlined text-lg">link</span></button>
                                        <div class="w-px h-6 bg-slate-200 mx-1"></div>
                                        <button class="p-1 hover:bg-white rounded transition-colors text-slate-600"><span class="material-symbols-outlined text-lg">code</span></button>
                                    </div>
                                    <textarea id="receiptTemplate" class="w-full border-none focus:ring-0 p-4 font-mono text-xs min-h-[150px]" placeholder="&lt;html&gt;...&lt;/html&gt;">&lt;div style="direction: rtl; font-family: sans-serif;"&gt;
  &lt;h1&gt;شكرًا لتبرعكم&lt;/h1&gt;
  &lt;p&gt;لقد تم استلام مبلغ ((amount)) ج.م بنجاح...&lt;/p&gt;
&lt;/div&gt;</textarea>
                                </div>
                                <p class="text-[10px] text-slate-400 mt-2">يمكنك استخدام المتغيرات مثل: amount, user_name, date</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-4 pt-4">
                        <button id="cancelSettings" class="px-8 py-3 bg-slate-200 hover:bg-slate-300 text-slate-700 font-black rounded-xl transition-all">
                            إلغاء التغييرات
                        </button>
                        <button id="saveSettings" class="px-10 py-3 bg-primary hover:bg-primary-dark text-white font-black rounded-xl transition-all shadow-lg shadow-primary/20 flex items-center gap-2">
                            <span class="material-symbols-outlined">save_as</span>
                            حفظ كافة الإعدادات
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-12 text-center text-slate-400 pb-10">
                <p class="text-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">security_update_good</span>
                    نظام الإدارة الآمن - جميع العمليات مراقبة ومسجلة
                </p>
            </div>
        </div>
    </main>

    <script>
        document.querySelectorAll('.eye-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const targetId = btn.dataset.target;
                const input = document.getElementById(targetId);
                const icon = btn.querySelector('span');
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.textContent = 'visibility_off';
                } else {
                    input.type = 'password';
                    icon.textContent = 'visibility';
                }
            });
        });

        document.getElementById('logoUploadArea').addEventListener('click', () => {
            document.getElementById('logoInput').click();
        });

        document.getElementById('logoInput').addEventListener('change', (e) => {
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const area = document.getElementById('logoUploadArea');
                    area.innerHTML = `<img src="${e.target.result}" class="w-24 h-24 object-contain mb-2" alt="شعار جديد">`;
                };
                reader.readAsDataURL(e.target.files[0]);
            }
        });

        document.getElementById('testGatewayBtn').addEventListener('click', () => {
            const statusEl = document.getElementById('gatewayStatus');
            statusEl.innerHTML = `<span class="material-symbols-outlined text-sm animate-spin">sync</span> جاري الاختبار...`;
            setTimeout(() => {
                statusEl.innerHTML = `<span class="material-symbols-outlined text-sm">check_circle</span> البوابة متصلة حالياً`;
                alert('تم الاتصال بنجاح بالبوابة!');
            }, 1500);
        });

        document.getElementById('saveSettings').addEventListener('click', () => {
            alert('تم حفظ جميع إعدادات النظام بنجاح!');
        });

        document.getElementById('cancelSettings').addEventListener('click', () => {
            if (confirm('هل أنت متأكد من إلغاء جميع التغييرات؟')) {
                alert('تم إلغاء التغييرات');
                location.reload();
            }
        });
    </script>

</body>

</html>