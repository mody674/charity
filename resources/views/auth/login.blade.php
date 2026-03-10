<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>تسجيل الدخول - معًا نصنع الأمل</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet"/>
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
                    },
                    fontFamily: {
                        "display": ["Cairo", "Tajawal", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                    },
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        body {
            font-family: 'Cairo', sans-serif;
        }
        .form-input:focus {
            border-color: #2e7d32;
            ring-color: #2e7d32;
        }
        .error-message {
            color: #dc2626;
            font-size: 0.75rem;
            margin-top: 0.25rem;
            display: none;
        }
    </style>
</head>
<body class="bg-background-light text-slate-900">
<div class="min-h-screen flex flex-col md:flex-row overflow-hidden">
<div class="hidden md:flex md:w-1/2 relative">
<div class="absolute inset-0 bg-cover bg-center" style='background-image: linear-gradient(rgba(46, 125, 50, 0.7), rgba(46, 125, 50, 0.7)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDE_PZ3Znb_7nTTSRLXOFpZ3IU_HPIaET5FhbkVU5zjuIAeyo6l7cU2QtzkJ0ZlEJQqkYr23CanVLvzaweLjKy-hmMfOKPAO_A3ijsUBd3i3QJC78erCjyGyavD3mkwhGHO_ff7RZCUdDyCmsPlZxeXLX0hda-tsKZIDLjeAJ9Pql0vNA9ovPjVVfu4q0xoSxYFIC5qhfxstOd2RXR8jj4XW1xyN1M2_oBxBc3OehWzcQpPJfsO8vZY0bAnzYZ4rvTC1gNMeEqL7W6w");'></div>
<div class="relative z-10 flex flex-col items-center justify-center w-full px-12 text-center text-white">
<div class="p-4 bg-white/20 backdrop-blur-md rounded-full mb-8">
<span class="material-symbols-outlined text-6xl">volunteer_activism</span>
</div>
<h1 class="text-4xl font-black mb-6 leading-tight">عطاؤك يصنع الفرق في حياة الآخرين</h1>
<p class="text-lg font-light text-slate-100 max-w-md">نحن هنا لنربط بين القلوب الرحيمة والاحتياجات الملحة، لنبني معاً مستقبلاً مليئاً بالأمل.</p>
</div>
</div>
<div class="w-full md:w-1/2 flex items-center justify-center p-6 sm:p-12 lg:p-20 bg-white">
<div class="w-full max-w-md">
<div class="flex items-center gap-3 mb-10 md:mb-12">
<div class="p-2 bg-primary rounded-lg text-white">
<span class="material-symbols-outlined text-3xl">volunteer_activism</span>
</div>
<h2 class="text-2xl font-black text-primary tracking-tight">معًا نصنع الأمل</h2>
</div>
<div class="space-y-2 mb-10">
<h3 class="text-3xl font-black text-slate-900">مرحبًا بعودتك</h3>
<p class="text-slate-500">سجّل دخولك لمتابعة تبرعاتك أو طلب المساعدة</p>
</div>
<form class="space-y-6" id="loginForm" action="home.html">
<div class="space-y-2">
<label class="text-sm font-bold text-slate-700 block" for="identifier">البريد الإلكتروني أو رقم الجوال</label>
<div class="relative">
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">person</span>
<input class="w-full pr-12 pl-4 py-3.5 bg-slate-50 border border-slate-200 rounded-[16px] focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" id="identifier" placeholder="example@mail.com أو 01xxxxxxxxx" type="text"/>
</div>
<div id="identifierError" class="error-message"></div>
</div>
<div class="space-y-2">
<div class="flex justify-between items-center">
<label class="text-sm font-bold text-slate-700 block" for="password">كلمة المرور</label>
<a class="text-sm font-bold text-primary hover:underline" href="#">نسيت كلمة المرور؟</a>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
<button id="togglePassword" class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 transition-colors" type="button">visibility</button>
<input class="w-full pr-12 pl-12 py-3.5 bg-slate-50 border border-slate-200 rounded-[16px] focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" id="password" placeholder="أرقام فقط" type="password"/>
</div>
<div id="passwordError" class="error-message"></div>
</div>
<div class="flex items-center gap-2">
<input class="w-5 h-5 rounded border-slate-300 text-primary focus:ring-primary" id="remember" type="checkbox"/>
<label class="text-sm text-slate-600 font-medium cursor-pointer" for="remember">تذكرني على هذا الجهاز</label>
</div>
<button id="submitBtn" class="w-full py-4 bg-primary hover:bg-primary/95 text-white rounded-[16px] text-lg font-bold transition-all shadow-lg shadow-primary/20 active:scale-[0.98]" type="submit">
                        تسجيل الدخول
                    </button>
</form>
<div class="mt-10 pt-10 border-t border-slate-100">
<p class="text-center text-slate-600 font-medium">
                        ليس لديك حساب؟
                        <a class="text-primary font-black hover:underline mr-1" href="signup.html">إنشاء حساب جديد</a>
</p>
</div>

</div>
</div>
</div>

<script>
const identifierInput = document.getElementById('identifier');
const passwordInput = document.getElementById('password');
const togglePasswordBtn = document.getElementById('togglePassword');
const identifierError = document.getElementById('identifierError');
const passwordError = document.getElementById('passwordError');
const submitBtn = document.getElementById('submitBtn');

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

function validateIdentifier(value) {
    return isValidEmail(value) || isValidPhone(value);
}

function showError(input, errorEl, message) {
    errorEl.textContent = message;
    errorEl.style.display = 'block';
    input.classList.add('border-red-500');
}

function clearError(input, errorEl) {
    errorEl.style.display = 'none';
    input.classList.remove('border-red-500');
}

identifierInput.addEventListener('input', (e) => {
    const value = e.target.value.trim();
    clearError(identifierInput, identifierError);

    if (value.includes('@')) {
        const domainPart = value.split('@')[1]?.toLowerCase() || '';
        if (domainPart && !validDomains.some(d => domainPart === d.slice(1) || domainPart.endsWith(d))) {
            showError(identifierInput, identifierError, 'الدومين غير مدعوم. استخدم gmail.com أو yahoo.com أو غيرهم من الدومينات الشائعة');
        }
    }
});

identifierInput.addEventListener('blur', (e) => {
    const value = e.target.value.trim();
    if (value && !validateIdentifier(value)) {
        if (value.includes('@')) {
            showError(identifierInput, identifierError, 'البريد الإلكتروني غير صحيح أو الدومين غير مدعوم');
        } else {
            showError(identifierInput, identifierError, 'رقم الجوال يجب أن يبدأ بـ 01 ويتكون من 11 رقم');
        }
    }
});

passwordInput.addEventListener('input', (e) => {
    const value = e.target.value;
    clearError(passwordInput, passwordError);
    if (value.length > 0 && !/^\d+$/.test(value)) {
        showError(passwordInput, passwordError, 'كلمة المرور يجب أن تتكون من أرقام فقط');
    }
});

togglePasswordBtn.addEventListener('click', () => {
    const type = passwordInput.type === 'password' ? 'text' : 'password';
    passwordInput.type = type;
    togglePasswordBtn.textContent = type === 'password' ? 'visibility' : 'visibility_off';
});

document.getElementById('loginForm').addEventListener('submit', (e) => {
    e.preventDefault();

    let valid = true;

    const identifier = identifierInput.value.trim();
    if (!validateIdentifier(identifier)) {
        if (identifier.includes('@')) {
            showError(identifierInput, identifierError, 'البريد الإلكتروني غير صحيح أو الدومين غير مدعوم');
        } else {
            showError(identifierInput, identifierError, 'رقم الجوال يجب أن يبدأ بـ 01 ويتكون من 11 رقم');
        }
        valid = false;
    }

    const password = passwordInput.value;
    if (!/^\d+$/.test(password) || password.length < 4) {
        showError(passwordInput, passwordError, 'كلمة المرور يجب أن تتكون من أرقام فقط وبحد أدنى 4 أرقام');
        valid = false;
    }

    if (valid) {
        alert('تم تسجيل الدخول بنجاح!');
        window.location.href = '{{url('home')}}';
    }
});
</script>

</body>
</html>
