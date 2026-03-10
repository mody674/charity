<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>إنشاء حساب - معًا نصنع الأمل</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&family=Public+Sans:wght@400;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
        .segmented-control input:checked + label {
            @apply bg-primary text-white shadow-md;
        }
        .error-message {
            color: #dc2626;
            font-size: 0.75rem;
            margin-top: 0.25rem;
            display: none;
        }
        .form-input.error {
            border-color: #dc2626;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
<div class="flex min-h-screen w-full flex-col lg:flex-row">
<div class="hidden lg:flex lg:w-1/2 relative overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center" style='background-image: linear-gradient(rgba(46, 125, 50, 0.6), rgba(20, 30, 21, 0.8)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCpxT4MZCTOk5r7YHvMnWh6IxN1Tf9VcrFbKpz9rlr4EwLczz3JP-UE6e72Xc1HKb2ljAbvEXenhBXpJasW3zsPMXFk5DNWvoQecsBYbidJ_LZjZQKl-DP2xoz1I_h2eoSOtTNA_Rjk-V3p5ZSgNSjz2MTOwrg9SVgQppKdqahkl65_deK6bMA1nLgz9TG1hZHndJp5GGEff_W_hLcfy0VxiA00aMc_t0YIkoK0FPqdyVB_AMUBivPLAU-O9I2SHFFQHQ2BRjGmryT1");'></div>
<div class="relative z-10 flex flex-col justify-center px-20 text-white">
<div class="flex items-center gap-3 mb-12">
<div class="p-3 bg-white rounded-xl text-primary">
<span class="material-symbols-outlined text-3xl">volunteer_activism</span>
</div>
<h2 class="text-3xl font-black tracking-tight">معًا نصنع الأمل</h2>
</div>
<div class="space-y-6">
<h1 class="text-5xl font-black leading-tight">عطاؤك يصنع فرقًا حقيقيًا في حياة الآخرين</h1>
<p class="text-xl text-slate-100 font-light leading-relaxed max-w-lg">
                        انضم إلى مجتمعنا اليوم وساهم في رسم البسمة على وجوه المحتاجين، أو احصل على الدعم الذي تحتاجه بكرامة وشفافية.
                    </p>
</div>
<div class="mt-16 flex items-center gap-6">
<div class="flex -space-x-4 space-x-reverse">
<div class="w-12 h-12 rounded-full border-2 border-white bg-slate-200" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCLt2LHnGfMjdo_6u4wW7gMFjFGDHevmift3qM8VjVFwpwxnF3TxirDjpucArf1R2rI7nnhFEL17eshjF3PFq4l4UfnFU84Me4mEw5yjYbj9Fxuatj58yt9dsTPf_hsfAQnGO-7iH0pU6wY8T8hV8cF2lKWWoem-JVmGngR5IN9u-Z5HrnoFOm4AWyNTZm0C4eQbmptVAAfUnIyqJiD6z8SoJ94XeM7uxo68nN5S6lYst_AKHP6cH2QbPLeTOVmiD0_vErAP23xLfEo"); background-size: cover;'></div>
<div class="w-12 h-12 rounded-full border-2 border-white bg-slate-300" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBf1NC8kUpP7UMY5XhBzkMsS-WaNJdd5QNslKF_DFd2wqP3NvN-WLK9DFEjQ6QR_uGNIhYte-e5gA8poPdyKcHsw2ReaoYZ1WeeGavbkIu371f4XQgfplpis1igZYN8CMXnmm_rU6pMvDGUQjlklMcCahPNbFarDjr-gmPKMuH0bys4QkZXxvgnMjzXmreT0WR8c43WHZVqXjiD-xcVbjmECNcVFK-eHNmRv28-c8NPX8M_asQXW3lJAyYGZayQDyZUP821WMUkBXF5"); background-size: cover;'></div>
<div class="w-12 h-12 rounded-full border-2 border-white bg-slate-400" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDE_PZ3Znb_7nTTSRLXOFpZ3IU_HPIaET5FhbkVU5zjuIAeyo6l7cU2QtzkJ0ZlEJQqkYr23CanVLvzaweLjKy-hmMfOKPAO_A3ijsUBd3i3QJC78erCjyGyavD3mkwhGHO_ff7RZCUdDyCmsPlZxeXLX0hda-tsKZIDLjeAJ9Pql0vNA9ovPjVVfu4q0xoSxYFIC5qhfxstOd2RXR8jj4XW1xyN1M2_oBxBc3OehWzcQpPJfsO8vZY0bAnzYZ4rvTC1gNMeEqL7W6w"); background-size: cover;'></div>
</div>
<p class="text-sm font-medium">+١٥٠٠ متطوع انضموا إلينا بالفعل</p>
</div>
</div>
</div>
<div class="flex-1 flex flex-col items-center justify-center p-6 md:p-12 lg:p-20 bg-background-light dark:bg-background-dark">
<div class="w-full max-w-lg">
<div class="lg:hidden flex items-center justify-center gap-2 mb-8">
<div class="p-2 bg-primary rounded-lg text-white">
<span class="material-symbols-outlined text-2xl">volunteer_activism</span>
</div>
<h2 class="text-xl font-black text-primary tracking-tight">معًا نصنع الأمل</h2>
</div>
<div class="bg-white dark:bg-slate-800 p-8 md:p-10 rounded-[16px] shadow-2xl shadow-primary/5 border border-primary/5">
<div class="mb-10 text-center lg:text-right">
<h2 class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white mb-3">انضم إلينا وكن جزءًا من التغيير</h2>
<p class="text-slate-500 dark:text-slate-400">سجّل الآن لتتبرع، تتطوع، أو تطلب المساعدة بكل سهولة</p>
</div>
<form class="space-y-6" id="signupForm">
<div class="space-y-3">
<label class="text-sm font-bold text-slate-700 dark:text-slate-300">نوع الحساب</label>
<div class="segmented-control flex p-1 bg-slate-100 dark:bg-slate-700 rounded-xl">
<input checked class="hidden" id="donate" name="account_type" type="radio"/>
<label class="flex-1 py-2.5 text-center text-sm font-bold rounded-lg cursor-pointer transition-all text-slate-600 dark:text-slate-300 hover:bg-white/50 dark:hover:bg-white/5" for="donate">أريد التبرع</label>
<input class="hidden" id="help" name="account_type" type="radio"/>
<label class="flex-1 py-2.5 text-center text-sm font-bold rounded-lg cursor-pointer transition-all text-slate-600 dark:text-slate-300 hover:bg-white/50 dark:hover:bg-white/5" for="help">طلب مساعدة</label>
<input class="hidden" id="volunteer" name="account_type" type="radio"/>
<label class="flex-1 py-2.5 text-center text-sm font-bold rounded-lg cursor-pointer transition-all text-slate-600 dark:text-slate-300 hover:bg-white/50 dark:hover:bg-white/5" for="volunteer">التطوع</label>
</div>
</div>
<div class="grid grid-cols-1 gap-5">
<div class="space-y-2">
<label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="name">الاسم الكامل</label>
<input class="w-full px-4 py-3 rounded-xl border-slate-200 dark:border-slate-600 dark:bg-slate-700 focus:ring-primary focus:border-primary transition-all" id="name" placeholder="أدخل اسمك الثلاثي" type="text"/>
<div id="nameError" class="error-message"></div>
</div>
<div class="space-y-2">
<label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="email">البريد الإلكتروني</label>
<input class="w-full px-4 py-3 rounded-xl border-slate-200 dark:border-slate-600 dark:bg-slate-700 focus:ring-primary focus:border-primary transition-all text-left" dir="ltr" id="email" placeholder="example@mail.com" type="email"/>
<div id="emailError" class="error-message"></div>
</div>
<div class="space-y-2">
<label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="phone">رقم الموبايل</label>
<div class="relative">
<input class="w-full px-4 py-3 rounded-xl border-slate-200 dark:border-slate-600 dark:bg-slate-700 focus:ring-primary focus:border-primary transition-all text-left pr-16" dir="ltr" id="phone" placeholder="1xxxxxxxx" type="tel" maxlength="11"/>
<div class="absolute inset-y-0 right-0 flex items-center px-3 border-r border-slate-200 dark:border-slate-600 text-slate-500 font-bold text-sm">
                                        +20
                                    </div>
</div>
<div id="phoneError" class="error-message"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="space-y-2">
<label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="password">كلمة المرور</label>
<input class="w-full px-4 py-3 rounded-xl border-slate-200 dark:border-slate-600 dark:bg-slate-700 focus:ring-primary focus:border-primary transition-all text-left" dir="ltr" id="password" placeholder="أرقام فقط" type="password"/>
<div id="passwordError" class="error-message"></div>
</div>
<div class="space-y-2">
<label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="confirm-password">تأكيد كلمة المرور</label>
<input class="w-full px-4 py-3 rounded-xl border-slate-200 dark:border-slate-600 dark:bg-slate-700 focus:ring-primary focus:border-primary transition-all text-left" dir="ltr" id="confirm-password" placeholder="أرقام فقط" type="password"/>
<div id="confirmPasswordError" class="error-message"></div>
</div>
</div>
</div>
<div class="flex items-center gap-3">
<input class="size-5 rounded border-slate-300 text-primary focus:ring-primary" id="terms" type="checkbox"/>
<label class="text-sm text-slate-600 dark:text-slate-400" for="terms">
                                أوافق على <a class="text-primary font-bold hover:underline" href="#">الشروط والأحكام</a> و سياسة الخصوصية
                            </label>
</div>
<button id="submitBtn" class="w-full py-4 bg-primary hover:bg-primary/90 text-white rounded-xl text-lg font-bold transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-2 group" type="submit">
                            إنشاء حساب
                            <span class="material-symbols-outlined group-hover:-translate-x-1 transition-transform">west</span>
</button>
</form>
<div class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-700 text-center">
<p class="text-slate-600 dark:text-slate-400">
                            لديك حساب بالفعل؟
                            <a class="text-primary font-bold hover:underline mr-1" href="login.html">تسجيل الدخول</a>
</p>
</div>
</div>

</div>
</div>
</div>

<script>
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirm-password');
const termsCheckbox = document.getElementById('terms');
const submitBtn = document.getElementById('submitBtn');

const nameError = document.getElementById('nameError');
const emailError = document.getElementById('emailError');
const phoneError = document.getElementById('phoneError');
const passwordError = document.getElementById('passwordError');
const confirmPasswordError = document.getElementById('confirmPasswordError');

const validDomains = [
    '@gmail.com', '@yahoo.com', '@hotmail.com', '@outlook.com', '@icloud.com',
    '@aol.com', '@proton.me', '@yandex.com', '@mail.ru', '@zoho.com',
    '@live.com', '@msn.com', '@gmx.com', '@inbox.com', '@fastmail.com'
];

function isValidEmail(value) {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(value)) return false;

    const domain = value.split('@')[1]?.toLowerCase();
    if (!domain) return false;

    return validDomains.some(valid => domain === valid.slice(1) || domain.endsWith(valid));
}

function isValidPhone(value) {
    return /^01[0-9]{9}$/.test(value);
}

function isValidName(value) {
    // يقبل حروف عربي أو إنجليزي فقط (مع مسافات)
    const nameRegex = /^[\u0600-\u06FF\sA-Za-z]+$/;
    return nameRegex.test(value.trim()) && value.trim().length >= 3;
}

function showError(input, errorEl, message) {
    errorEl.textContent = message;
    errorEl.style.display = 'block';
    input.classList.add('error');
}

function clearError(input, errorEl) {
    errorEl.style.display = 'none';
    input.classList.remove('error');
}

nameInput.addEventListener('input', (e) => {
    clearError(nameInput, nameError);
    const value = e.target.value;
    if (value.length > 0 && !/^[^\d]+$/.test(value)) {
        showError(nameInput, nameError, 'الاسم لا يقبل أرقام');
        e.target.value = value.replace(/\d/g, '');
    }
});

nameInput.addEventListener('blur', () => {
    const value = nameInput.value.trim();
    if (value && !isValidName(value)) {
        showError(nameInput, nameError, 'الاسم يجب أن يحتوي على حروف عربي أو إنجليزي فقط (بدون أرقام)');
    }
});

emailInput.addEventListener('input', () => {
    clearError(emailInput, emailError);
    const value = emailInput.value.trim();
    if (value && !isValidEmail(value)) {
        showError(emailInput, emailError, 'البريد الإلكتروني غير صحيح أو الدومين غير مدعوم');
    }
});

phoneInput.addEventListener('input', (e) => {
    clearError(phoneInput, phoneError);
    const value = e.target.value.trim();
    if (value && !/^\d*$/.test(value)) {
        showError(phoneInput, phoneError, 'رقم الجوال يجب أن يتكون من أرقام فقط');
        e.target.value = value.replace(/\D/g, '');
    }
    if (value.length > 11) {
        e.target.value = value.slice(0, 11);
    }
});

passwordInput.addEventListener('input', (e) => {
    clearError(passwordInput, passwordError);
    const value = e.target.value;
    if (value.length > 0 && !/^\d*$/.test(value)) {
        showError(passwordInput, passwordError, 'كلمة المرور يجب أن تتكون من أرقام فقط');
        e.target.value = value.replace(/\D/g, '');
    }
});

confirmPasswordInput.addEventListener('input', () => {
    clearError(confirmPasswordInput, confirmPasswordError);
});

document.getElementById('signupForm').addEventListener('submit', (e) => {
    e.preventDefault();

    let valid = true;

    // الاسم
    const name = nameInput.value.trim();
    if (!isValidName(name)) {
        showError(nameInput, nameError, 'الاسم يجب أن يحتوي على حروف عربي أو إنجليزي فقط (بدون أرقام) وبحد أدنى 3 حروف');
        valid = false;
    }

    // إيميل
    const email = emailInput.value.trim();
    if (email && !isValidEmail(email)) {
        showError(emailInput, emailError, 'البريد الإلكتروني غير صحيح أو الدومين غير مدعوم');
        valid = false;
    }

    // رقم جوال
    const phone = phoneInput.value.trim();
    if (!isValidPhone(phone)) {
        showError(phoneInput, phoneError, 'رقم الجوال يجب أن يبدأ بـ 01 ويتكون من 11 رقم');
        valid = false;
    }

    // كلمة مرور
    const password = passwordInput.value;
    if (!/^\d+$/.test(password) || password.length < 6) {
        showError(passwordInput, passwordError, 'كلمة المرور يجب أن تتكون من أرقام فقط وبحد أدنى 6 أرقام');
        valid = false;
    }

    // تأكيد كلمة المرور
    if (confirmPasswordInput.value !== password) {
        showError(confirmPasswordInput, confirmPasswordError, 'كلمة المرور غير متطابقة');
        valid = false;
    }

    // الموافقة على الشروط
    if (!termsCheckbox.checked) {
        alert('يجب الموافقة على الشروط والأحكام وسياسة الخصوصية');
        valid = false;
    }

    if (valid) {
        alert('تم إنشاء الحساب بنجاح! يمكنك الآن تسجيل الدخول.');
        window.location.href = '{{url('login')}}';
    }
});
</script>

</body>
</html>
