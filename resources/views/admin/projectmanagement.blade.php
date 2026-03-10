<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>إدارة المشاريع - الأهداف والتقدم</title>
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
        .card {
            @apply bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden;
        }
        .progress-bar-bg {
            @apply w-full bg-slate-100 h-2.5 rounded-full overflow-hidden;
        }
        .progress-bar-fill {
            @apply h-full bg-primary rounded-full transition-all duration-500;
        }
        .table-header {
            @apply px-6 py-4 text-right text-xs font-bold text-slate-500 uppercase tracking-wider bg-slate-50 border-b border-slate-100;
        }
        .table-cell {
            @apply px-6 py-4 whitespace-nowrap text-sm text-slate-700 border-b border-slate-50;
        }
        .btn-primary {
            @apply bg-primary hover:bg-primary-dark text-white font-bold py-2 px-6 rounded-lg transition-all flex items-center gap-2 text-sm;
        }
        .btn-outline {
            @apply border border-slate-200 hover:bg-slate-50 text-slate-600 font-bold py-2 px-4 rounded-lg transition-all flex items-center gap-2 text-sm;
        }
    </style>
</head>

<body class="bg-background-main text-slate-900 min-h-screen flex">

    <x-admin-slider></x-admin-slider>
    <main class="flex-1 mr-64">
        <x-admin-header></x-admin-header>
        <div class="p-10 space-y-8">
            <div class="flex justify-between items-center">
                <div class="flex gap-4">
                    <div class="bg-white px-4 py-2 rounded-lg border border-slate-200 flex items-center gap-2">
                        <span class="material-symbols-outlined text-slate-400 text-lg">search</span>
                        <input id="searchInput" class="border-none focus:ring-0 text-sm p-0 w-48" placeholder="بحث عن مشروع..." type="text" />
                    </div>
                    <select id="categoryFilter" class="py-2 text-sm border-slate-200 rounded-lg focus:ring-primary focus:border-primary">
                        <option value="">جميع الفئات</option>
                        <option value="صحة">القطاع الطبي</option>
                        <option value="تعليم">التعليم</option>
                        <option value="إطعام">الإطعام</option>
                    </select>
                </div>
                <button id="addProjectBtn" class="btn-primary">
                    <span class="material-symbols-outlined">add_circle</span>
                    إضافة مشروع جديد
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="card p-6 border-r-4 border-r-primary">
                    <div class="flex justify-between items-start mb-4">
                        <div class="bg-primary/10 p-2 rounded-lg text-primary">
                            <span class="material-symbols-outlined">payments</span>
                        </div>
                        <span class="text-xs font-bold text-slate-400 uppercase">إجمالي التمويل المستهدف</span>
                    </div>
                    <p class="text-2xl font-black text-slate-800">4,250,000 <span class="text-sm font-normal text-slate-500">ج.م</span></p>
                </div>
                <div class="card p-6 border-r-4 border-r-accent-orange">
                    <div class="flex justify-between items-start mb-4">
                        <div class="bg-accent-orange/10 p-2 rounded-lg text-accent-orange">
                            <span class="material-symbols-outlined">volunteer_activism</span>
                        </div>
                        <span class="text-xs font-bold text-slate-400 uppercase">التمويل المحقق</span>
                    </div>
                    <p class="text-2xl font-black text-slate-800">2,840,000 <span class="text-sm font-normal text-slate-500">ج.م</span></p>
                </div>
                <div class="card p-6 border-r-4 border-r-blue-500">
                    <div class="flex justify-between items-start mb-4">
                        <div class="bg-blue-500/10 p-2 rounded-lg text-blue-500">
                            <span class="material-symbols-outlined">trending_up</span>
                        </div>
                        <span class="text-xs font-bold text-slate-400 uppercase">متوسط الإنجاز</span>
                    </div>
                    <p class="text-2xl font-black text-slate-800">67%</p>
                </div>
            </div>
            <div class="card">
                <table id="projectsTable" class="w-full text-right">
                    <thead>
                        <tr>
                            <th class="table-header">المشروع</th>
                            <th class="table-header">الفئة</th>
                            <th class="table-header">الهدف (ج.م)</th>
                            <th class="table-header">المحقق (ج.م)</th>
                            <th class="table-header w-1/4">التقدم</th>
                            <th class="table-header">الحالة</th>
                            <th class="table-header">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody" class="divide-y divide-slate-50">
                        <tr data-category="صحة">
                            <td class="table-cell">
                                <div class="font-bold text-slate-800">المعونة الطبية 2024</div>
                                <div class="text-xs text-slate-400">تاريخ البدء: 1 يناير 2024</div>
                            </td>
                            <td class="table-cell">
                                <span class="px-2 py-1 bg-blue-50 text-blue-600 rounded text-xs font-bold">صحة</span>
                            </td>
                            <td class="table-cell font-bold">1,500,000</td>
                            <td class="table-cell text-primary font-bold">1,200,000</td>
                            <td class="table-cell">
                                <div class="flex items-center gap-3">
                                    <div class="progress-bar-bg flex-1">
                                        <div class="progress-bar-fill w-[80%]"></div>
                                    </div>
                                    <span class="text-xs font-bold text-slate-600">80%</span>
                                </div>
                            </td>
                            <td class="table-cell">
                                <span class="flex items-center gap-1.5 text-green-600 font-bold text-xs">
                                    <span class="w-2 h-2 bg-green-500 rounded-full"></span> نشط
                                </span>
                            </td>
                            <td class="table-cell">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-slate-400 hover:text-primary transition-colors" title="تعديل">
                                        <span class="material-symbols-outlined text-xl">edit_note</span>
                                    </button>
                                    <button class="p-1.5 text-slate-400 hover:text-accent-orange transition-colors" title="تحديث الهدف">
                                        <span class="material-symbols-outlined text-xl">track_changes</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr data-category="تعليم">
                            <td class="table-cell">
                                <div class="font-bold text-slate-800">كفالة طالب علم</div>
                                <div class="text-xs text-slate-400">تاريخ البدء: 15 فبراير 2024</div>
                            </td>
                            <td class="table-cell">
                                <span class="px-2 py-1 bg-orange-50 text-orange-600 rounded text-xs font-bold">تعليم</span>
                            </td>
                            <td class="table-cell font-bold">800,000</td>
                            <td class="table-cell text-primary font-bold">360,000</td>
                            <td class="table-cell">
                                <div class="flex items-center gap-3">
                                    <div class="progress-bar-bg flex-1">
                                        <div class="progress-bar-fill w-[45%] bg-accent-orange"></div>
                                    </div>
                                    <span class="text-xs font-bold text-slate-600">45%</span>
                                </div>
                            </td>
                            <td class="table-cell">
                                <span class="flex items-center gap-1.5 text-green-600 font-bold text-xs">
                                    <span class="w-2 h-2 bg-green-500 rounded-full"></span> نشط
                                </span>
                            </td>
                            <td class="table-cell">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-xl">edit_note</span>
                                    </button>
                                    <button class="p-1.5 text-slate-400 hover:text-accent-orange transition-colors">
                                        <span class="material-symbols-outlined text-xl">track_changes</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr data-category="إطعام">
                            <td class="table-cell">
                                <div class="font-bold text-slate-800">مبادرة إفطار صائم</div>
                                <div class="text-xs text-slate-400">تاريخ البدء: 1 مارس 2024</div>
                            </td>
                            <td class="table-cell">
                                <span class="px-2 py-1 bg-green-50 text-green-600 rounded text-xs font-bold">إطعام</span>
                            </td>
                            <td class="table-cell font-bold">2,000,000</td>
                            <td class="table-cell text-primary font-bold">1,950,000</td>
                            <td class="table-cell">
                                <div class="flex items-center gap-3">
                                    <div class="progress-bar-bg flex-1">
                                        <div class="progress-bar-fill w-[97%]"></div>
                                    </div>
                                    <span class="text-xs font-bold text-slate-600">97%</span>
                                </div>
                            </td>
                            <td class="table-cell">
                                <span class="flex items-center gap-1.5 text-slate-400 font-bold text-xs">
                                    <span class="w-2 h-2 bg-slate-300 rounded-full"></span> أوشك على الانتهاء
                                </span>
                            </td>
                            <td class="table-cell">
                                <div class="flex gap-2">
                                    <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-xl">edit_note</span>
                                    </button>
                                    <button class="p-1.5 text-slate-400 hover:text-accent-orange transition-colors">
                                        <span class="material-symbols-outlined text-xl">track_changes</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pt-8 text-center text-slate-400">
                <p class="text-xs flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">verified</span>
                    جميع البيانات المسجلة محمية وتستخدم لغرض تقديم المساعدة فقط
                </p>
            </div>
        </div>
        <div id="addProjectModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full mx-4 overflow-hidden" style="height: 700px;">
                <div class="p-6 border-b border-slate-200 flex justify-between items-center">
                    <h3 class="text-xl font-black text-slate-800">إضافة مشروع جديد</h3>
                    <button id="closeModal" class="text-slate-500 hover:text-slate-700">
                        <span class="material-symbols-outlined text-2xl">close</span>
                    </button>
                </div>
                <div class="p-8">
                    <form id="projectForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">اسم المشروع</label>
                                <input type="text" id="projectName" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="أدخل اسم المشروع" required>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">الفئة</label>
                                <select id="projectCategory" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none" required>
                                    <option value="">اختر الفئة</option>
                                    <option value="صحة">القطاع الطبي</option>
                                    <option value="تعليم">التعليم</option>
                                    <option value="إطعام">الإطعام</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">الهدف التمويلي (ج.م)</label>
                            <div class="relative">
                                <input type="number" id="projectGoal" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none pl-16" placeholder="0.00" min="1000" required>
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-500 font-bold">ج.م</span>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">تاريخ البدء</label>
                            <input type="date" id="startDate" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none" required>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-slate-700 mb-2">وصف المشروع</label>
                            <textarea id="projectDesc" rows="4" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="اكتب وصفًا مختصرًا عن المشروع وأهدافه" required></textarea>
                        </div>
                </div>
                <div class="flex justify-end gap-4 pt-6 border-t border-slate-200">
                    <button type="button" id="cancelAdd" class="px-8 py-3 border border-slate-300 rounded-xl font-bold text-slate-600 hover:bg-slate-50 transition-all">إلغاء</button>
                    <button type="submit" class="px-8 py-3 bg-primary text-white rounded-xl font-bold hover:bg-primary-dark transition-all flex items-center gap-2" style="margin-left: 20px;">
                        <span class="material-symbols-outlined">add_circle</span>
                        إضافة المشروع
                    </button>
                </div>
                </form>
            </div>
        </div>
        </div>
    </main>

    <script>
        const searchInput = document.getElementById('searchInput');
        const categoryFilter = document.getElementById('categoryFilter');
        const tableBody = document.getElementById('tableBody');
        const rows = Array.from(tableBody.querySelectorAll('tr'));

        function filterTable() {
            const searchTerm = searchInput.value.trim().toLowerCase();
            const selectedCategory = categoryFilter.value;

            rows.forEach(row => {
                const projectName = row.querySelector('.font-bold')?.textContent.toLowerCase() || '';
                const category = row.dataset.category || '';

                const matchesSearch = projectName.includes(searchTerm);
                const matchesCategory = !selectedCategory || category === selectedCategory;

                row.style.display = matchesSearch && matchesCategory ? '' : 'none';
            });
        }

        searchInput.addEventListener('input', filterTable);
        categoryFilter.addEventListener('change', filterTable);

        const addBtn = document.getElementById('addProjectBtn');
        const modal = document.getElementById('addProjectModal');
        const closeModal = document.getElementById('closeModal');
        const cancelAdd = document.getElementById('cancelAdd');
        const projectForm = document.getElementById('projectForm');

        addBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });

        const closeModalFunc = () => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            projectForm.reset();
        };

        closeModal.addEventListener('click', closeModalFunc);
        cancelAdd.addEventListener('click', closeModalFunc);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModalFunc();
        });

        projectForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('تم إضافة المشروع بنجاح!');
            closeModalFunc();
        });
    </script>

</body>

</html>