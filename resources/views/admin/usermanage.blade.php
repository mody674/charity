<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>إدارة المستخدمين - الصلاحيات والبيانات</title>
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
        .action-btn {
            @apply flex items-center gap-1 px-3 py-1.5 rounded-lg text-sm font-bold transition-all;
        }
        .table-header {
            @apply px-6 py-4 text-right text-sm font-bold text-slate-500 uppercase tracking-wider;
        }
        .table-cell {
            @apply px-6 py-4 whitespace-nowrap text-sm text-slate-700 border-b border-slate-50;
        }
    </style>
</head>

<body class="bg-background-main text-slate-900 min-h-screen flex">

    <x-admin-slider></x-admin-slider>
    <main class="flex-1 mr-64">
        <x-admin-header></x-admin-header>
        <div class="p-10">
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-6 border-b border-slate-50 flex justify-between items-center bg-slate-50/30">
                    <h3 class="font-black text-slate-700 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">list</span>
                        قائمة المسجلين
                    </h3>
                    <div class="flex gap-2">
                        <button id="addUserBtn" class="bg-primary text-white px-4 py-2 rounded-lg text-sm font-bold flex items-center gap-2 hover:bg-primary-dark transition-all">
                            <span class="material-symbols-outlined text-sm">person_add</span>
                            إضافة مستخدم
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table id="usersTable" class="w-full">
                        <thead>
                            <tr class="bg-slate-50/50">
                                <th class="table-header">المستخدم</th>
                                <th class="table-header">البريد الإلكتروني</th>
                                <th class="table-header">الدور</th>
                                <th class="table-header">آخر نشاط</th>
                                <th class="table-header">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            <tr data-role="admin">
                                <td class="table-cell">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 overflow-hidden">
                                            <img alt="avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCH9CTZls5ib5lJ5rQv1vnUFMczucKO3ISlgYHAgymecTAscy3YnHv2e1NRsBf6kNhYxX0C3PtFGb-tiocaTJLcQIHdj5V74XtXRtaZ2Ykr24_vW_xRL-nQRoLWL8cbWDjrO0vNxuVbPL-UCfPGY0B3Q3H8pVqkvKB-6Thiued1LJF-exYEy_sfDC08ur91oee8OpvVeyZxye5jwsDUo7vTxT1QjWeIDwCYp4hJ986HLYXuMjkaBai9fs_F7LvogwmKBfllCqWaEzI" />
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900">أحمد محمود</p>
                                            <p class="text-xs text-slate-500">رقم التعريف: #8821</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-cell">ahmed.m@example.eg</td>
                                <td class="table-cell">
                                    <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-bold">مسؤول (Admin)</span>
                                </td>
                                <td class="table-cell text-slate-500">منذ ساعتين</td>
                                <td class="table-cell">
                                    <div class="flex gap-2">
                                        <button class="action-btn text-primary hover:bg-primary/10 edit-user" data-id="1">
                                            <span class="material-symbols-outlined text-sm">edit_square</span>
                                            تعديل الدور
                                        </button>
                                        <button class="action-btn text-red-500 hover:bg-red-50 disable-user" data-id="1">
                                            <span class="material-symbols-outlined text-sm">person_off</span>
                                            تعطيل الحساب
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-role="donor">
                                <td class="table-cell">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 overflow-hidden">
                                            <img alt="avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDy17Na6JjvlBW6hOiNH5PKCjrL2zTtqUk0JyeH_i5KNBY-l-AuLcue6kvTgV6_seJonnmKMsDYU0F_jCqtkbM8GFAABDqlj1ZYmWdhtvGEW6A1bX9mrP1npM3-FT-k-8UflBl0k86-OWVLD3PIVdXUla82n37Qt2JO-nDS0F29MRqjbJm6aATzZubCO3z13MKK0y7uBIW1frSoF2pDG2gGs5_EUgHI5VEWeE82wREx8L64nZh6lO8aWalO-sgrXr3lxl1D4XieSoI" />
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900">سارة إبراهيم</p>
                                            <p class="text-xs text-slate-500">رقم التعريف: #9054</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-cell">sara.i@charity.org</td>
                                <td class="table-cell">
                                    <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-xs font-bold">متبرع (Donor)</span>
                                </td>
                                <td class="table-cell text-slate-500">أمس، 04:30 م</td>
                                <td class="table-cell">
                                    <div class="flex gap-2">
                                        <button class="action-btn text-primary hover:bg-primary/10 edit-user" data-id="2">
                                            <span class="material-symbols-outlined text-sm">edit_square</span>
                                            تعديل الدور
                                        </button>
                                        <button class="action-btn text-red-500 hover:bg-red-50 disable-user" data-id="2">
                                            <span class="material-symbols-outlined text-sm">person_off</span>
                                            تعطيل الحساب
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-role="donor">
                                <td class="table-cell">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 overflow-hidden">
                                            <img alt="avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7Lwy7K2ZygJfyMr3QxgCkvncVJsK6pKxCIShwZFk83F8Wwxow2AtAph2lQCO83YYjIQ677Zv27JbG83y7Eqg6JAEyg9ITtshicKLm3ZU1b9SN5g53RZqOIEQQ9n6C20pE3L9-WdRi75W5GSeOCZOP5igNqF6Y-hMoUTsNwE3sg1KtMyFfikBZsZvoEC-h3eO8QyISneQnOWGQnliYIX8o-i-RfaT_ktk2uMb0OsaNHac4WrUMKaL5qvCvduzrlY-kGdEgykPoh7I" />
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900">محمد علي</p>
                                            <p class="text-xs text-slate-500">رقم التعريف: #7712</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-cell">m.ali@webmail.com</td>
                                <td class="table-cell">
                                    <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-xs font-bold">متبرع (Donor)</span>
                                </td>
                                <td class="table-cell text-slate-500">الجمعة، 11:20 ص</td>
                                <td class="table-cell">
                                    <div class="flex gap-2">
                                        <button class="action-btn text-primary hover:bg-primary/10 edit-user" data-id="3">
                                            <span class="material-symbols-outlined text-sm">edit_square</span>
                                            تعديل الدور
                                        </button>
                                        <button class="action-btn text-red-500 hover:bg-red-50 disable-user" data-id="3">
                                            <span class="material-symbols-outlined text-sm">person_off</span>
                                            تعطيل الحساب
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-role="admin">
                                <td class="table-cell">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 overflow-hidden">
                                            <img alt="avatar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqkZJtofh3P-2u3jP_IGd2z8DAxyDDcO-65rms2ki05EdDAeU76KnFhA7qD3otHSuXfNwVW6RBOXoV0G8yUs8KWLZZvPD8wonGS9AkdMo5bXcxlq2zeT8tnoRkSMIQ8hml1DsJNUy1UE52iA0GF3QLf_KpgTh7-rMnn6h1urWTQghCuWCF4mQEj5s3BSJ7GXrCW1K0xYYfnWK-715BBOV1i9mHm1wOh49FSHbaLYuFC1kB_sWrFlm2jCa9nsZg-nwBAaSJtaEzq74" />
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900">فاطمة حسن</p>
                                            <p class="text-xs text-slate-500">رقم التعريف: #4432</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-cell">fatima.h@edu.eg</td>
                                <td class="table-cell">
                                    <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-bold">مسؤول (Admin)</span>
                                </td>
                                <td class="table-cell text-slate-500">منذ 3 أيام</td>
                                <td class="table-cell">
                                    <div class="flex gap-2">
                                        <button class="action-btn text-primary hover:bg-primary/10 edit-user" data-id="4">
                                            <span class="material-symbols-outlined text-sm">edit_square</span>
                                            تعديل الدور
                                        </button>
                                        <button class="action-btn text-red-500 hover:bg-red-50 disable-user" data-id="4">
                                            <span class="material-symbols-outlined text-sm">person_off</span>
                                            تعطيل الحساب
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center text-blue-600">
                    <span class="material-symbols-outlined text-2xl font-bold">admin_panel_settings</span>
                </div>
                <div>
                    <p class="text-slate-500 text-sm">إجمالي المسؤولين</p>
                    <p class="text-2xl font-black text-slate-800">12</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 bg-green-50 rounded-lg flex items-center justify-center text-green-600">
                    <span class="material-symbols-outlined text-2xl font-bold">volunteer_activism</span>
                </div>
                <div>
                    <p class="text-slate-500 text-sm">إجمالي المتبرعين</p>
                    <p class="text-2xl font-black text-slate-800">116</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 bg-amber-50 rounded-lg flex items-center justify-center text-amber-600">
                    <span class="material-symbols-outlined text-2xl font-bold">person_search</span>
                </div>
                <div>
                    <p class="text-slate-500 text-sm">طلبات نشطة</p>
                    <p class="text-2xl font-black text-slate-800">5</p>
                </div>
            </div>
        </div>
        </div>
        <div id="addUserModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full mx-4 overflow-hidden">
                <div class="p-6 border-b border-slate-200 flex justify-between items-center">
                    <h3 class="text-xl font-black text-slate-800">إضافة مستخدم جديد</h3>
                    <button id="closeAddUser" class="text-slate-500 hover:text-slate-700">
                        <span class="material-symbols-outlined text-2xl">close</span>
                    </button>
                </div>
                <div class="p-8">
                    <form id="addUserForm" class="space-y-6">
                        <div>
                            <label class="input-label">الاسم الكامل (عربي أو إنجليزي)</label>
                            <input type="text" id="newName" class="form-input" placeholder="أدخل الاسم الكامل" pattern="[آ-يa-zA-Z\s]+" required>
                        </div>
                        <div>
                            <label class="input-label">البريد الإلكتروني</label>
                            <input type="email" id="newEmail" class="form-input" placeholder="example@domain.com" required>
                            <div id="emailError" class="text-red-600 text-xs mt-1 hidden">يرجى إدخال بريد إلكتروني صحيح</div>
                        </div>
                        <div>
                            <label class="input-label">كلمة المرور (أرقام فقط)</label>
                            <input type="password" id="newPassword" class="form-input" maxlength="20" pattern="\d+" required>
                            <div id="passError" class="text-red-600 text-xs mt-1 hidden">كلمة المرور يجب أن تتكون من أرقام فقط</div>
                        </div>
                        <div>
                            <label class="input-label">الدور</label>
                            <select id="newRole" class="form-input" required>
                                <option value="">اختر الدور</option>
                                <option value="admin">مسؤول (Admin)</option>
                                <option value="volunteer">متطوع</option>
                                <option value="needHelp">محتاج مساعدة</option>
                            </select>
                        </div>
                        <div class="flex justify-end gap-4 pt-6">
                            <button type="button" id="cancelAddUser" class="px-8 py-3 border border-slate-300 rounded-xl font-bold text-slate-600 hover:bg-slate-50">إلغاء</button>
                            <button type="submit" class="px-10 py-3 bg-primary text-white rounded-xl font-bold hover:bg-primary-dark">إضافة المستخدم</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="editUserModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full mx-4 overflow-hidden">
                <div class="p-6 border-b border-slate-200 flex justify-between items-center">
                    <h3 class="text-xl font-black text-slate-800">تعديل بيانات المستخدم</h3>
                    <button id="closeEditUser" class="text-slate-500 hover:text-slate-700">
                        <span class="material-symbols-outlined text-2xl">close</span>
                    </button>
                </div>
                <div class="p-8">
                    <form id="editUserForm" class="space-y-6">
                        <input type="hidden" id="editUserId">
                        <div>
                            <label class="input-label">الاسم الكامل</label>
                            <input type="text" id="editName" class="form-input" pattern="[آ-يa-zA-Z\s]+" required>
                        </div>
                        <div>
                            <label class="input-label">البريد الإلكتروني</label>
                            <input type="email" id="editEmail" class="form-input" required>
                            <div id="editEmailError" class="text-red-600 text-xs mt-1 hidden">بريد إلكتروني غير صحيح</div>
                        </div>
                        <div>
                            <label class="input-label">الدور</label>
                            <select id="editRole" class="form-input" required>
                                <option value="admin">مسؤول (Admin)</option>
                                <option value="volunteer">متطوع</option>
                                <option value="needHelp">محتاج مساعدة</option>
                            </select>
                        </div>
                        <div class="flex justify-end gap-4 pt-6">
                            <button type="button" id="cancelEditUser" class="px-8 py-3 border border-slate-300 rounded-xl font-bold text-slate-600 hover:bg-slate-50">إلغاء</button>
                            <button type="submit" class="px-10 py-3 bg-primary text-white rounded-xl font-bold hover:bg-primary-dark">حفظ التعديلات</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        const userSearch = document.getElementById('userSearch');
        const usersTable = document.getElementById('usersTable');
        const rows = Array.from(usersTable.querySelectorAll('tbody tr'));

        userSearch.addEventListener('input', () => {
            const term = userSearch.value.trim().toLowerCase();
            rows.forEach(row => {
                const name = row.querySelector('.font-bold')?.textContent.toLowerCase() || '';
                const email = row.querySelector('td:nth-child(2)')?.textContent.toLowerCase() || '';
                row.style.display = name.includes(term) || email.includes(term) ? '' : 'none';
            });
        });

        document.getElementById('addUserBtn').addEventListener('click', () => {
            document.getElementById('addUserModal').classList.remove('hidden');
            document.getElementById('addUserModal').classList.add('flex');
        });

        document.getElementById('closeAddUser').addEventListener('click', () => {
            document.getElementById('addUserModal').classList.add('hidden');
            document.getElementById('addUserModal').classList.remove('flex');
            document.getElementById('addUserForm').reset();
        });

        document.getElementById('cancelAddUser').addEventListener('click', () => {
            document.getElementById('addUserModal').classList.add('hidden');
            document.getElementById('addUserModal').classList.remove('flex');
            document.getElementById('addUserForm').reset();
        });

        document.getElementById('addUserModal').addEventListener('click', e => {
            if (e.target === document.getElementById('addUserModal')) {
                document.getElementById('addUserModal').classList.add('hidden');
                document.getElementById('addUserModal').classList.remove('flex');
                document.getElementById('addUserForm').reset();
            }
        });

        document.getElementById('addUserForm').addEventListener('submit', e => {
            e.preventDefault();
            const name = document.getElementById('newName').value.trim();
            const email = document.getElementById('newEmail').value.trim();
            const password = document.getElementById('newPassword').value.trim();
            const role = document.getElementById('newRole').value;

            if (!/^[آ-يa-zA-Z\s]+$/.test(name)) {
                alert('الاسم يجب أن يحتوي على حروف عربية أو إنجليزية فقط');
                return;
            }

            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                alert('يرجى إدخال بريد إلكتروني صحيح');
                return;
            }

            if (!/^\d+$/.test(password)) {
                alert('كلمة المرور يجب أن تتكون من أرقام فقط');
                return;
            }

            alert('تم إضافة المستخدم بنجاح!');
            document.getElementById('addUserModal').classList.add('hidden');
            document.getElementById('addUserModal').classList.remove('flex');
            document.getElementById('addUserForm').reset();
        });

        document.querySelectorAll('.disable-user').forEach(btn => {
            btn.addEventListener('click', () => {
                if (confirm('هل أنت متأكد من تعطيل هذا الحساب؟')) {
                    alert('تم تعطيل الحساب بنجاح');
                }
            });
        });

        document.querySelectorAll('.edit-user').forEach(btn => {
            btn.addEventListener('click', () => {
                const row = btn.closest('tr');
                const name = row.querySelector('.font-bold').textContent.trim();
                const email = row.querySelector('td:nth-child(2)').textContent.trim();
                const role = row.querySelector('span.rounded-full').textContent.trim().includes('Admin') ? 'admin' : 'donor';

                document.getElementById('editUserId').value = btn.dataset.id;
                document.getElementById('editName').value = name;
                document.getElementById('editEmail').value = email;
                document.getElementById('editRole').value = role;

                document.getElementById('editUserModal').classList.remove('hidden');
                document.getElementById('editUserModal').classList.add('flex');
            });
        });

        document.getElementById('closeEditUser').addEventListener('click', () => {
            document.getElementById('editUserModal').classList.add('hidden');
            document.getElementById('editUserModal').classList.remove('flex');
        });

        document.getElementById('cancelEditUser').addEventListener('click', () => {
            document.getElementById('editUserModal').classList.add('hidden');
            document.getElementById('editUserModal').classList.remove('flex');
        });

        document.getElementById('editUserModal').addEventListener('click', e => {
            if (e.target === document.getElementById('editUserModal')) {
                document.getElementById('editUserModal').classList.add('hidden');
                document.getElementById('editUserModal').classList.remove('flex');
            }
        });

        document.getElementById('editUserForm').addEventListener('submit', e => {
            e.preventDefault();
            const email = document.getElementById('editEmail').value.trim();
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                document.getElementById('editEmailError').classList.remove('hidden');
                return;
            }
            document.getElementById('editEmailError').classList.add('hidden');

            alert('تم تعديل بيانات المستخدم بنجاح!');
            document.getElementById('editUserModal').classList.add('hidden');
            document.getElementById('editUserModal').classList.remove('flex');
        });
    </script>

</body>

</html>