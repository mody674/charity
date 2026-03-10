<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>نموذج طلب مساعدة - معًا نصنع الأمل</title>
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
        .step-indicator {
            @apply flex flex-col items-center gap-2 relative z-10;
        }
        .step-circle {
            @apply w-10 h-10 rounded-full flex items-center justify-center font-bold transition-all border-2;
        }
        .step-active {
            @apply bg-primary border-primary text-white;
        }
        .step-inactive {
            @apply bg-white border-slate-200 text-slate-400;
        }
        .step-completed {
            @apply bg-green-100 border-primary text-primary;
        }
        .form-label {
            @apply block text-sm font-bold text-slate-700 mb-2;
        }
        .form-input {
            @apply w-full rounded-lg border-slate-200 focus:border-primary focus:ring focus:ring-primary/20 transition-all py-3 px-4 text-slate-700;
        }
        .upload-area {
            @apply border-2 border-dashed border-slate-200 rounded-xl p-8 text-center hover:border-primary hover:bg-green-50/50 transition-all cursor-pointer;
        }
        .file-preview {
            @apply mt-4 flex items-center gap-3 bg-green-50 p-3 rounded-lg border border-green-200;
        }
        .hidden {
            display: none;
        }
    </style>
</head>

<body class="bg-background-main text-slate-900 min-h-screen">
    <header class="bg-white px-6 lg:px-20 py-4 flex justify-between items-center shadow-sm sticky top-0 z-50">
        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined text-primary text-3xl">volunteer_activism</span>
            <h1 class="text-xl font-black text-primary-dark tracking-tight">معًا نصنع الأمل</h1>
        </div>

    </header>
    <main class="max-w-4xl mx-auto px-6 py-12">
        <div id="steps" class="relative flex justify-between mb-12">
            <div class="absolute top-5 left-0 w-full h-0.5 bg-slate-200 -z-0"></div>
            <div class="step-indicator">
                <div class="step-circle step-active">1</div>
                <span class="text-sm font-bold text-primary">البيانات الشخصية</span>
            </div>
            <div class="step-indicator">
                <div id="step2-circle" class="step-circle step-inactive">2</div>
                <span id="step2-text" class="text-sm font-bold text-slate-400">تفاصيل الطلب</span>
            </div>
            <div class="step-indicator">
                <div id="step3-circle" class="step-circle step-inactive">3</div>
                <span id="step3-text" class="text-sm font-bold text-slate-400">المرفقات والوثائق</span>
            </div>
            <div class="step-indicator">
                <div id="step4-circle" class="step-circle step-inactive">4</div>
                <span id="step4-text" class="text-sm font-bold text-slate-400">مراجعة وإرسال</span>
            </div>
        </div>

        <div id="step1" class="space-y-8">
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-6 border-b border-slate-100 bg-slate-50/50">
                    <h2 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">person</span>
                        الخطوة الأولى: المعلومات الشخصية
                    </h2>
                </div>
                <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="col-span-1 md:col-span-2">
                        <label class="form-label">الاسم الرباعي كما هو في البطاقة</label>
                        <input id="fullName" class="form-input" placeholder="أدخل اسمك الكامل" type="text" />
                    </div>
                    <div>
                        <label class="form-label">الرقم القومي (14 رقم)</label>
                        <input id="nationalId" class="form-input" placeholder="29000000000000" type="text" maxlength="14" />
                    </div>
                    <div>
                        <label class="form-label">رقم الهاتف</label>
                        <input id="phone" class="form-input" placeholder="01xxxxxxxxx" type="tel" maxlength="11" />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <label class="form-label">العنوان بالتفصيل</label>
                        <textarea id="address" class="form-input" placeholder="المحافظة، المركز، اسم الشارع، رقم العقار" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <button id="next1" class="bg-primary hover:bg-primary-dark text-white px-12 py-3 rounded-xl font-bold transition-all shadow-lg shadow-primary/20 flex items-center gap-2">
                    التالي
                    <span class="material-symbols-outlined">arrow_back</span>
                </button>
            </div>
        </div>

        <div id="step2" class="space-y-8 hidden">
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-6 border-b border-slate-100 bg-slate-50/50">
                    <h2 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">list_alt</span>
                        الخطوة الثانية: تفاصيل طلب المساعدة
                    </h2>
                </div>
                <div class="p-8 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="form-label">فئة المساعدة</label>
                            <select id="helpType" class="form-input">
                                <option value="">اختر الفئة</option>
                                <option value="medical">مساعدة طبية / عمليات</option>
                                <option value="food">كراتين مواد غذائية</option>
                                <option value="education">مصروفات تعليمية</option>
                                <option value="debt">سداد ديون / غارمين</option>
                                <option value="housing">تجهيز منزل / ترميم</option>
                            </select>
                        </div>
                        <div>
                            <label class="form-label">المبلغ المطلوب التقريبي (بالجنيه المصري)</label>
                            <div class="relative">
                                <input id="amount" class="form-input pl-16" placeholder="0.00" type="number" min="100" />
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 font-bold text-slate-400">ج.م</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="form-label">شرح تفصيلي للحالة والاحتياج</label>
                        <textarea id="description" class="form-input" placeholder="يرجى ذكر سبب طلب المساعدة بوضوح ليتم دراسة الحالة..." rows="4"></textarea>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <button id="back2" class="px-8 py-3 rounded-xl font-bold text-slate-600 border border-slate-300 hover:bg-slate-50 transition-all">
                    رجوع
                </button>
                <button id="next2" class="bg-primary hover:bg-primary-dark text-white px-12 py-3 rounded-xl font-bold transition-all shadow-lg shadow-primary/20 flex items-center gap-2">
                    التالي
                    <span class="material-symbols-outlined">arrow_back</span>
                </button>
            </div>
        </div>

        <div id="step3" class="space-y-8 hidden">
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-6 border-b border-slate-100 bg-slate-50/50">
                    <h2 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">upload_file</span>
                        الخطوة الثالثة: رفع المستندات والوثائق
                    </h2>
                </div>
                <div class="p-8 space-y-6">
                    <p class="text-sm text-slate-500 bg-blue-50 p-4 rounded-lg border border-blue-100">
                        <span class="font-bold text-blue-800">تنبيه:</span> يرجى إرفاق صور واضحة لبطاقة الرقم القومي (وجه وظهر)، التقارير الطبية الحديثة، أو أي فواتير/مستندات تدعم طلبك لسرعة المراجعة.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="form-label">بطاقة الرقم القومي</label>
                            <input id="idFile" type="file" accept="image/*" class="hidden" />
                            <div id="idUpload" class="upload-area">
                                <span class="material-symbols-outlined text-4xl text-slate-300 mb-2">id_card</span>
                                <p class="text-sm font-bold text-slate-600">اضغط لرفع صورة البطاقة</p>
                                <p class="text-xs text-slate-400 mt-1">PNG, JPG حتى 5 ميجابايت</p>
                            </div>
                            <div id="idPreview" class="file-preview hidden">
                                <span class="material-symbols-outlined text-green-600">description</span>
                                <span id="idFileName" class="text-sm font-medium"></span>
                                <button id="removeId" class="text-red-500 hover:text-red-700">
                                    <span class="material-symbols-outlined">close</span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <label class="form-label">التقارير الطبية / الفواتير</label>
                            <input id="docsFile" type="file" accept=".pdf,image/*" class="hidden" />
                            <div id="docsUpload" class="upload-area">
                                <span class="material-symbols-outlined text-4xl text-slate-300 mb-2">description</span>
                                <p class="text-sm font-bold text-slate-600">اضغط لرفع التقارير</p>
                                <p class="text-xs text-slate-400 mt-1">PDF, JPG حتى 10 ميجابايت</p>
                            </div>
                            <div id="docsPreview" class="file-preview hidden">
                                <span class="material-symbols-outlined text-green-600">description</span>
                                <span id="docsFileName" class="text-sm font-medium"></span>
                                <button id="removeDocs" class="text-red-500 hover:text-red-700">
                                    <span class="material-symbols-outlined">close</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <button id="back3" class="px-8 py-3 rounded-xl font-bold text-slate-600 border border-slate-300 hover:bg-slate-50 transition-all">
                    رجوع
                </button>
                <button id="next3" class="bg-primary hover:bg-primary-dark text-white px-12 py-3 rounded-xl font-bold transition-all shadow-lg shadow-primary/20 flex items-center gap-2">
                    التالي
                    <span class="material-symbols-outlined">arrow_back</span>
                </button>
            </div>
        </div>

        <div id="step4" class="space-y-8 hidden">
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-6 border-b border-slate-100 bg-slate-50/50">
                    <h2 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">summarize</span>
                        الخطوة الرابعة: مراجعة البيانات قبل الإرسال
                    </h2>
                </div>
                <div class="p-8 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="font-bold text-lg text-slate-800 mb-2">البيانات الشخصية</h3>
                            <p id="reviewName" class="text-slate-600"></p>
                            <p id="reviewNationalId" class="text-slate-600"></p>
                            <p id="reviewPhone" class="text-slate-600"></p>
                            <p id="reviewAddress" class="text-slate-600"></p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-slate-800 mb-2">تفاصيل الطلب</h3>
                            <p id="reviewHelpType" class="text-slate-600"></p>
                            <p id="reviewAmount" class="text-slate-600"></p>
                            <p id="reviewDescription" class="text-slate-600"></p>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-slate-800 mb-2">المرفقات</h3>
                        <div id="reviewFiles" class="space-y-2"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <button id="back4" class="px-8 py-3 rounded-xl font-bold text-slate-600 border border-slate-300 hover:bg-slate-50 transition-all">
                    رجوع
                </button>
                <button id="submitForm" class="bg-green-600 hover:bg-green-700 text-white px-12 py-3 rounded-xl font-bold transition-all shadow-lg shadow-green-200/50 flex items-center gap-2">
                    إرسال الطلب نهائياً
                    <span class="material-symbols-outlined">send</span>
                </button>
            </div>
        </div>

        </div>
        <footer class="mt-12 text-center text-slate-400 pb-12">
            <div class="flex items-center justify-center gap-2 text-sm mb-2">
                <span class="material-symbols-outlined text-sm">lock</span>
                بياناتك مؤمنة ومشفرة بالكامل ولا يتم تداولها خارج لجان المراجعة
            </div>
            <p class="text-xs">© 2026 مؤسسة معًا نصنع الأمل - مسجلة برقم 1234 وزارة التضامن الاجتماعي</p>
        </footer>

        <script>
            const steps = document.querySelectorAll('#steps .step-indicator');
            const step1 = document.getElementById('step1');
            const step2 = document.getElementById('step2');
            const step3 = document.getElementById('step3');
            const step4 = document.getElementById('step4');

            const next1 = document.getElementById('next1');
            const back2 = document.getElementById('back2');
            const next2 = document.getElementById('next2');
            const back3 = document.getElementById('back3');
            const next3 = document.getElementById('next3');
            const back4 = document.getElementById('back4');
            const submitForm = document.getElementById('submitForm');

            const idUpload = document.getElementById('idUpload');
            const idFileInput = document.getElementById('idFile');
            const idPreview = document.getElementById('idPreview');
            const idFileName = document.getElementById('idFileName');
            const removeId = document.getElementById('removeId');

            const docsUpload = document.getElementById('docsUpload');
            const docsFileInput = document.getElementById('docsFile');
            const docsPreview = document.getElementById('docsPreview');
            const docsFileName = document.getElementById('docsFileName');
            const removeDocs = document.getElementById('removeDocs');

            let currentStep = 1;
            let idFile = null;
            let docsFile = null;

            function showStep(step) {
                [step1, step2, step3, step4].forEach(s => s.classList.add('hidden'));
                document.getElementById(`step${step}`).classList.remove('hidden');

                steps.forEach((s, i) => {
                    const circle = s.querySelector('.step-circle');
                    if (i + 1 < step) {
                        circle.classList.remove('step-active', 'step-inactive');
                        circle.classList.add('step-completed');
                    } else if (i + 1 === step) {
                        circle.classList.remove('step-completed', 'step-inactive');
                        circle.classList.add('step-active');
                    } else {
                        circle.classList.remove('step-completed', 'step-active');
                        circle.classList.add('step-inactive');
                    }
                });
            }

            next1.addEventListener('click', () => {
                const name = document.getElementById('fullName').value.trim();
                const nationalId = document.getElementById('nationalId').value.trim();
                const phone = document.getElementById('phone').value.trim();
                const address = document.getElementById('address').value.trim();

                if (!name || nationalId.length !== 14 || !phone || !address) {
                    alert('يرجى ملء جميع الحقول المطلوبة بشكل صحيح');
                    return;
                }

                currentStep = 2;
                showStep(2);
            });

            back2.addEventListener('click', () => {
                currentStep = 1;
                showStep(1);
            });

            next2.addEventListener('click', () => {
                const helpType = document.getElementById('helpType').value;
                const amount = document.getElementById('amount').value;
                const description = document.getElementById('description').value.trim();

                if (!helpType || !amount || amount <= 0 || !description) {
                    alert('يرجى ملء جميع الحقول المطلوبة بشكل صحيح');
                    return;
                }

                currentStep = 3;
                showStep(3);
            });

            back3.addEventListener('click', () => {
                currentStep = 2;
                showStep(2);
            });

            idUpload.addEventListener('click', () => idFileInput.click());
            idFileInput.addEventListener('change', (e) => {
                if (e.target.files[0]) {
                    idFile = e.target.files[0];
                    idFileName.textContent = idFile.name;
                    idPreview.classList.remove('hidden');
                    idUpload.classList.add('hidden');
                }
            });
            removeId.addEventListener('click', () => {
                idFile = null;
                idFileInput.value = '';
                idPreview.classList.add('hidden');
                idUpload.classList.remove('hidden');
            });

            docsUpload.addEventListener('click', () => docsFileInput.click());
            docsFileInput.addEventListener('change', (e) => {
                if (e.target.files[0]) {
                    docsFile = e.target.files[0];
                    docsFileName.textContent = docsFile.name;
                    docsPreview.classList.remove('hidden');
                    docsUpload.classList.add('hidden');
                }
            });
            removeDocs.addEventListener('click', () => {
                docsFile = null;
                docsFileInput.value = '';
                docsPreview.classList.add('hidden');
                docsUpload.classList.remove('hidden');
            });

            next3.addEventListener('click', () => {
                if (!idFile) {
                    alert('يرجى رفع صورة بطاقة الرقم القومي');
                    return;
                }

                currentStep = 4;
                showStep(4);

                document.getElementById('reviewName').textContent = `الاسم: ${document.getElementById('fullName').value}`;
                document.getElementById('reviewNationalId').textContent = `الرقم القومي: ${document.getElementById('nationalId').value}`;
                document.getElementById('reviewPhone').textContent = `رقم الهاتف: ${document.getElementById('phone').value}`;
                document.getElementById('reviewAddress').textContent = `العنوان: ${document.getElementById('address').value}`;
                document.getElementById('reviewHelpType').textContent = `فئة المساعدة: ${document.getElementById('helpType').options[document.getElementById('helpType').selectedIndex].text}`;
                document.getElementById('reviewAmount').textContent = `المبلغ المطلوب: ${document.getElementById('amount').value} ج.م`;
                document.getElementById('reviewDescription').textContent = `الوصف: ${document.getElementById('description').value}`;

                const filesDiv = document.getElementById('reviewFiles');
                filesDiv.innerHTML = '';
                filesDiv.innerHTML += `<p class="text-slate-700">• بطاقة الرقم القومي: ${idFile ? idFile.name : 'غير مرفق'}</p>`;
                filesDiv.innerHTML += `<p class="text-slate-700">• المستندات الإضافية: ${docsFile ? docsFile.name : 'غير مرفق'}</p>`;
            });

            back4.addEventListener('click', () => {
                currentStep = 3;
                showStep(3);
            });

            submitForm.addEventListener('click', () => {
                alert('تم إرسال الطلب بنجاح!\nسيتم مراجعته من قبل فريق الدعم خلال 48 ساعة عمل.');
                location.reload();
            });
        </script>

</body>

</html>