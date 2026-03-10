<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>إدارة التبرعات - مراجعة العمليات</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary-dark": "#1B5E20",
                        "primary": "#2E7D32",
                        "background-main": "#F8FAFC",
                        "accent-orange": "#f57c00",
                        "status-pending": "#F59E0B",
                        "status-verified": "#10B981",
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
        .table-container {
            @apply bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden;
        }
        .table-header {
            @apply bg-slate-50 border-b border-slate-100 text-right text-sm font-bold text-slate-600;
        }
        .table-row {
            @apply border-b border-slate-50 hover:bg-slate-50/50 transition-colors;
        }
        .status-badge {
            @apply px-3 py-1 rounded-full text-xs font-bold inline-flex items-center gap-1;
        }
        .btn-action {
            @apply flex items-center gap-1 px-3 py-1.5 rounded-lg text-sm font-bold transition-all;
        }
    </style>
</head>

<body class="bg-background-main text-slate-900 min-h-screen flex">

    <x-admin-slider></x-admin-slider>
    <main class="flex-1 mr-64">
        <x-admin-header></x-admin-header>>

        <div class="p-10">
            <div class="flex justify-between items-center mb-6">
                <div class="flex gap-4">
                    <button id="filter-btn" class="px-4 py-2 bg-primary text-white rounded-lg font-bold text-sm flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">filter_list</span>
                        تصفية النتائج
                    </button>
                    <button id="export-pdf" class="px-4 py-2 bg-white border border-slate-200 text-slate-600 rounded-lg font-bold text-sm flex items-center gap-2 hover:bg-slate-50">
                        <span class="material-symbols-outlined text-sm">download</span>
                        تصدير PDF
                    </button>

                </div>
                <div id="pagination-info" class="text-sm text-slate-500 font-medium">عرض 1-4 من أصل 4 عمليات</div>
            </div>

            <div class="table-container">
                <table id="donations-table" class="w-full text-right border-collapse">
                    <thead>
                        <tr class="table-header">
                            <th class="px-6 py-4">اسم المتبرع</th>
                            <th class="px-6 py-4">المبلغ (ج.م)</th>
                            <th class="px-6 py-4">التاريخ</th>
                            <th class="px-6 py-4">الفئة</th>
                            <th class="px-6 py-4">الحالة</th>
                            <th class="px-6 py-4 text-center">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody id="table-body" class="divide-y divide-slate-100">
                        <tr class="table-row" data-donor="أحمد محمد علي" data-amount="2500" data-date="2023-10-24" data-category="الصحة" data-status="قيد المراجعة">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold text-xs">أ م</div>
                                    <span class="font-bold text-slate-700">أحمد محمد علي</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-black text-slate-800">2,500.00</td>
                            <td class="px-6 py-4 text-slate-500 text-sm">24 أكتوبر 2023</td>
                            <td class="px-6 py-4">
                                <span class="text-xs font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded">الصحة</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="status-badge bg-amber-50 text-amber-600">
                                    <span class="material-symbols-outlined text-xs">schedule</span> قيد المراجعة
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="btn-action bg-primary/10 text-primary hover:bg-primary hover:text-white" title="اعتماد">
                                        <span class="material-symbols-outlined text-sm">verified</span> اعتماد
                                    </button>
                                    <button class="btn-action bg-slate-100 text-slate-600 hover:bg-slate-200" title="تعديل">
                                        <span class="material-symbols-outlined text-sm">edit</span> تعديل
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- باقي الصفوف كما هي في الكود الأصلي -->
                    </tbody>
                </table>
                <div class="bg-white px-6 py-4 flex justify-between items-center border-t border-slate-100">
                    <div id="pagination-controls" class="flex gap-2">
                        <!-- سيتم إنشاؤها ديناميكيًا -->
                    </div>
                    <span id="sort-info" class="text-slate-500 text-sm">عرض النتائج حسب التاريخ: الأحدث أولاً</span>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm flex items-center gap-4">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">payments</span>
                    </div>
                    <div>
                        <p class="text-slate-500 text-xs font-bold">إجمالي تبرعات اليوم</p>
                        <p class="text-xl font-black text-slate-800">18,750 ج.م</p>
                    </div>
                </div>
                <!-- باقي الكروت كما هي -->
            </div>
        </div>
    </main>

    <script>
        const rows = document.querySelectorAll('#table-body tr');
        const searchInput = document.getElementById('search-input');
        const exportPdfBtn = document.getElementById('export-pdf');
        const exportExcelBtn = document.getElementById('export-excel');
        const tableBody = document.getElementById('table-body');

        function filterTable() {
            const term = searchInput.value.trim().toLowerCase();
            rows.forEach(row => {
                const donor = row.querySelector('span.font-bold')?.textContent.toLowerCase() || '';
                row.style.display = donor.includes(term) ? '' : 'none';
            });
        }

        searchInput.addEventListener('input', filterTable);

        exportPdfBtn.addEventListener('click', () => {
            const element = document.querySelector('.table-container');

            const opt = {
                margin: 10,
                filename: 'تقرير_التبرعات.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2,
                    useCORS: true
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                }
            };

            const title = document.createElement('div');
            title.innerHTML = `
        <h1 style="text-align:center; font-family:Cairo, sans-serif; color:#2E7D32; font-size:20px; margin-bottom:10px;">
            تقرير التبرعات - معًا نصنع الأمل
        </h1>
        <p style="text-align:center; font-family:Cairo, sans-serif; color:#4B5563; margin-bottom:20px;">
            تاريخ التصدير: 10 مارس 2026
        </p>
    `;

            const wrapper = document.createElement('div');
            wrapper.style.padding = '20px';
            wrapper.style.direction = 'rtl';
            wrapper.style.fontFamily = 'Cairo, sans-serif';
            wrapper.appendChild(title);
            wrapper.appendChild(element.cloneNode(true));

            html2pdf().from(wrapper).set(opt).save();
        });

        exportExcelBtn.addEventListener('click', () => {
            const data = [
                ['اسم المتبرع', 'المبلغ (ج.م)', 'التاريخ', 'الفئة', 'الحالة']
            ];
            rows.forEach(row => {
                if (row.style.display !== 'none') {
                    const cells = row.querySelectorAll('td');
                    data.push([
                        cells[0].textContent.trim(),
                        cells[1].textContent.trim(),
                        cells[2].textContent.trim(),
                        cells[3].textContent.trim(),
                        cells[4].textContent.replace(/<[^>]+>/g, '').trim()
                    ]);
                }
            });

            const ws = XLSX.utils.aoa_to_sheet(data);
            const wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, "التبرعات");
            XLSX.writeFile(wb, "تقرير_التبرعات.xlsx");
        });
    </script>

</body>

</html>