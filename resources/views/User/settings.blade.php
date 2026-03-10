<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>الإعدادات - معًا نصنع الأمل</title>
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
            @apply bg-white rounded-xl shadow-sm border border-slate-100 p-8 mb-6;
        }
        .section-title {
            @apply text-lg font-bold text-slate-800 mb-6 flex items-center gap-2;
        }
        .input-label {
            @apply block text-sm font-bold text-slate-600 mb-2;
        }
        .input-field {
            @apply w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all;
        }
        .input-field:disabled {
            @apply bg-slate-100 cursor-not-allowed;
        }
        .toggle-switch {
            @apply relative inline-flex h-6 w-11 items-center rounded-full transition-colors focus:outline-none cursor-pointer;
        }
        .toggle-switch.on {
            @apply bg-primary;
        }
        .toggle-switch.off {
            @apply bg-slate-300;
        }
        .toggle-knob {
            @apply inline-block h-5 w-5 transform rounded-full bg-white shadow transition-transform;
        }
    </style>
</head>

<body class="bg-background-main text-slate-900 min-h-screen flex">
    @php
        $user = auth()->user();
        $userName = $user?->name ?: 'غير مضاف';
        $userEmail = $user?->email ?: 'غير مضاف';
        $userPhone = data_get($user, 'phone') ?: data_get($user, 'mobile') ?: 'غير مضاف';
    @endphp

    <x-user-slider />
    <main class="flex-1 mr-64">
    

        <x-user-header title="الإعدادات" />

        <div class="p-10 max-w-4xl mx-auto">
                <div class="settings-card">
                    <h3 class="section-title">
                        <span class="material-symbols-outlined text-primary">person</span>
                        معلومات الملف الشخصي
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="input-label">الاسم الكامل</label>
                            <div class="relative">
                                <input id="fullNameInput" class="input-field" readonly type="text" value="{{ $userName }}" />
                                <button id="editNameBtn" class="absolute left-3 top-2.5 text-primary text-sm font-bold">تعديل</button>
                            </div>
                        </div>
                        <div>
                            <label class="input-label">البريد الإلكتروني</label>
                            <div class="relative">
                                <input id="emailInput" class="input-field" readonly type="email" value="{{ $userEmail }}" />
                                <button id="editEmailBtn" class="absolute left-3 top-2.5 text-primary text-sm font-bold">تعديل</button>
                            </div>
                        </div>
                        <div>
                            <label class="input-label">رقم الهاتف</label>
                            <div class="relative">
                                <input id="phoneInput" class="input-field" dir="ltr" readonly type="tel" value="{{ $userPhone }}" />
                                <button id="editPhoneBtn" class="absolute left-3 top-2.5 text-primary text-sm font-bold">تعديل</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="settings-card">
                    <h3 class="section-title">
                        <span class="material-symbols-outlined text-primary">security</span>
                        الأمان
                    </h3>
                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-lg border border-slate-100">
                        <div class="flex items-center gap-4">
                            <div class="bg-white p-2 rounded-lg shadow-sm">
                                <span class="material-symbols-outlined text-slate-400">lock</span>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800">كلمة المرور</p>
                                <p class="text-sm text-slate-500">تم تغييرها آخر مرة منذ 3 أشهر</p>
                            </div>
                        </div>
                        <button id="changePasswordBtn" class="px-6 py-2 border-2 border-primary text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-all">
                            تغيير كلمة المرور
                        </button>
                    </div>
                </div>
                <div class="settings-card">
                    <h3 class="section-title">
                        <span class="material-symbols-outlined text-primary">notifications_active</span>
                        تفضيلات الإشعارات
                    </h3>
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-bold text-slate-800">تحديثات التبرع</p>
                                <p class="text-sm text-slate-500">احصل على إشعارات فورية عند اكتمال حملة تبرعت لها</p>
                            </div>
                            <div class="flex gap-8">
                                <div class="flex items-center gap-3">
                                    <span class="text-sm text-slate-600">البريد</span>
                                    <button id="emailToggle" class="toggle-switch off">
                                        <span id="emailKnob" class="toggle-knob translate-x-0"></span>
                                    </button>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="text-sm text-slate-600">SMS</span>
                                    <button id="smsToggle" class="toggle-switch off">
                                        <span id="smsKnob" class="toggle-knob translate-x-0"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr class="border-slate-100" />
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-bold text-slate-800">قصص الأثر</p>
                                <p class="text-sm text-slate-500">تنبيهات عند نشر قصص نجاح وفيديوهات للمشاريع</p>
                            </div>
                            <div class="flex gap-8">
                                <div class="flex items-center gap-3">
                                    <span class="text-sm text-slate-600">البريد</span>
                                    <button id="storiesEmailToggle" class="toggle-switch off">
                                        <span id="storiesEmailKnob" class="toggle-knob translate-x-0"></span>
                                    </button>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="text-sm text-slate-600">SMS</span>
                                    <button id="storiesSmsToggle" class="toggle-switch off">
                                        <span id="storiesSmsKnob" class="toggle-knob translate-x-0"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="settings-card">
                    <h3 class="section-title">
                        <span class="material-symbols-outlined text-primary">language</span>
                        اللغة والمنطقة
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="input-label">لغة الواجهة</label>
                            <select class="input-field appearance-none">
                                <option selected="">العربية</option>
                                <option>English</option>
                            </select>
                        </div>
                        <div>
                            <label class="input-label">العملة المفضلة</label>
                            <select class="input-field appearance-none">
                                <option selected=""> الجنيه المصري (EGP)</option>
                                <option>الدولار الأمريكي (USD)</option>
                                <option>الدرهم الإماراتي (AED)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-4 mt-10">
                    <button id="cancelChanges" class="px-8 py-3 text-slate-600 font-bold hover:bg-slate-100 rounded-xl transition-colors">
                        إلغاء التغييرات
                    </button>
                    <button id="saveChanges" class="px-10 py-3 bg-primary text-white font-black rounded-xl shadow-lg shadow-primary/20 hover:bg-primary-dark transition-all">
                        حفظ التغييرات
                    </button>
                </div>
            </div>
            <div id="changePasswordModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 hidden">
                <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full mx-4 overflow-hidden">
                    <div class="p-6 border-b border-slate-200 flex justify-between items-center">
                        <h3 class="text-xl font-black text-slate-800">تغيير كلمة المرور</h3>
                        <button id="closePasswordModal" class="text-slate-500 hover:text-slate-700">
                            <span class="material-symbols-outlined text-2xl">close</span>
                        </button>
                    </div>
                    <div class="p-8">
                        <form id="passwordForm" class="space-y-6">
                            <div>
                                <label class="input-label">كلمة المرور الحالية</label>
                                <input type="password" id="currentPassword" class="input-field" required>
                            </div>
                            <div>
                                <label class="input-label">كلمة المرور الجديدة (أرقام فقط)</label>
                                <input type="password" id="newPassword" class="input-field" maxlength="20" required>
                                <div id="newPasswordError" class="text-red-600 text-xs mt-1 hidden">كلمة المرور يجب أن تتكون من أرقام فقط</div>
                            </div>
                            <div>
                                <label class="input-label">تأكيد كلمة المرور الجديدة</label>
                                <input type="password" id="confirmPassword" class="input-field" required>
                                <div id="confirmError" class="text-red-600 text-xs mt-1 hidden">كلمتا المرور غير متطابقتين</div>
                            </div>
                            <div class="flex justify-end gap-4 pt-6">
                                <button type="button" id="cancelPassword" class="px-6 py-2 border border-slate-300 rounded-xl font-bold text-slate-600 hover:bg-slate-50">إلغاء</button>
                                <button type="submit" class="px-8 py-2 bg-primary text-white rounded-xl font-bold hover:bg-primary-dark">حفظ التغييرات</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <script>
            const changePasswordBtn = document.getElementById('changePasswordBtn');
            const passwordModal = document.getElementById('changePasswordModal');
            const closePasswordModal = document.getElementById('closePasswordModal');
            const cancelPassword = document.getElementById('cancelPassword');
            const passwordForm = document.getElementById('passwordForm');
            const currentPassword = document.getElementById('currentPassword');
            const newPassword = document.getElementById('newPassword');
            const confirmPassword = document.getElementById('confirmPassword');
            const newPasswordError = document.getElementById('newPasswordError');
            const confirmError = document.getElementById('confirmError');

            changePasswordBtn.addEventListener('click', () => {
                passwordModal.classList.remove('hidden');
                passwordModal.classList.add('flex');
            });

            const closePasswordFunc = () => {
                passwordModal.classList.add('hidden');
                passwordModal.classList.remove('flex');
                passwordForm.reset();
                newPasswordError.classList.add('hidden');
                confirmError.classList.add('hidden');
            };

            closePasswordModal.addEventListener('click', closePasswordFunc);
            cancelPassword.addEventListener('click', closePasswordFunc);
            passwordModal.addEventListener('click', (e) => {
                if (e.target === passwordModal) closePasswordFunc();
            });

            newPassword.addEventListener('input', (e) => {
                const value = e.target.value;
                if (value && !/^\d*$/.test(value)) {
                    newPasswordError.classList.remove('hidden');
                    e.target.value = value.replace(/\D/g, '');
                } else {
                    newPasswordError.classList.add('hidden');
                }
            });

            passwordForm.addEventListener('submit', (e) => {
                e.preventDefault();

                const current = currentPassword.value.trim();
                const newPass = newPassword.value.trim();
                const confirmPass = confirmPassword.value.trim();

                let valid = true;

                if (!current) {
                    alert('يرجى إدخال كلمة المرور الحالية');
                    valid = false;
                }

                if (!/^\d+$/.test(newPass)) {
                    newPasswordError.classList.remove('hidden');
                    valid = false;
                } else {
                    newPasswordError.classList.add('hidden');
                }

                if (newPass !== confirmPass) {
                    confirmError.classList.remove('hidden');
                    valid = false;
                } else {
                    confirmError.classList.add('hidden');
                }

                if (valid) {
                    alert('تم تغيير كلمة المرور بنجاح!');
                    closePasswordFunc();
                }
            });

            const editNameBtn = document.getElementById('editNameBtn');
            const fullNameInput = document.getElementById('fullNameInput');
            editNameBtn.addEventListener('click', () => {
                if (fullNameInput.readOnly) {
                    fullNameInput.readOnly = false;
                    fullNameInput.focus();
                    editNameBtn.textContent = 'حفظ';
                } else {
                    fullNameInput.readOnly = true;
                    editNameBtn.textContent = 'تعديل';
                    alert('تم حفظ الاسم بنجاح!');
                }
            });

            const editEmailBtn = document.getElementById('editEmailBtn');
            const emailInput = document.getElementById('emailInput');
            editEmailBtn.addEventListener('click', () => {
                if (emailInput.readOnly) {
                    emailInput.readOnly = false;
                    emailInput.focus();
                    editEmailBtn.textContent = 'حفظ';
                } else {
                    emailInput.readOnly = true;
                    editEmailBtn.textContent = 'تعديل';
                    alert('تم حفظ البريد بنجاح!');
                }
            });

            const editPhoneBtn = document.getElementById('editPhoneBtn');
            const phoneInput = document.getElementById('phoneInput');
            editPhoneBtn.addEventListener('click', () => {
                if (phoneInput.readOnly) {
                    phoneInput.readOnly = false;
                    phoneInput.focus();
                    editPhoneBtn.textContent = 'حفظ';
                } else {
                    phoneInput.readOnly = true;
                    editPhoneBtn.textContent = 'تعديل';
                    alert('تم حفظ رقم الهاتف بنجاح!');
                }
            });

            const emailToggle = document.getElementById('emailToggle');
            const emailKnob = document.getElementById('emailKnob');
            emailToggle.addEventListener('click', () => {
                emailToggle.classList.toggle('on');
                emailToggle.classList.toggle('off');
                emailKnob.classList.toggle('translate-x-1');
                emailKnob.classList.toggle('translate-x-6');
            });

            const smsToggle = document.getElementById('smsToggle');
            const smsKnob = document.getElementById('smsKnob');
            smsToggle.addEventListener('click', () => {
                smsToggle.classList.toggle('on');
                smsToggle.classList.toggle('off');
                smsKnob.classList.toggle('translate-x-1');
                smsKnob.classList.toggle('translate-x-6');
            });

            const storiesEmailToggle = document.getElementById('storiesEmailToggle');
            const storiesEmailKnob = document.getElementById('storiesEmailKnob');
            storiesEmailToggle.addEventListener('click', () => {
                storiesEmailToggle.classList.toggle('on');
                storiesEmailToggle.classList.toggle('off');
                storiesEmailKnob.classList.toggle('translate-x-1');
                storiesEmailKnob.classList.toggle('translate-x-6');
            });

            const storiesSmsToggle = document.getElementById('storiesSmsToggle');
            const storiesSmsKnob = document.getElementById('storiesSmsKnob');
            storiesSmsToggle.addEventListener('click', () => {
                storiesSmsToggle.classList.toggle('on');
                storiesSmsToggle.classList.toggle('off');
                storiesSmsKnob.classList.toggle('translate-x-1');
                storiesSmsKnob.classList.toggle('translate-x-6');
            });

            document.getElementById('saveChanges').addEventListener('click', () => {
                alert('تم حفظ جميع التغييرات بنجاح!');
            });

            document.getElementById('cancelChanges').addEventListener('click', () => {
                alert('تم إلغاء التغييرات');
            });
        </script>

</body>

</html>
