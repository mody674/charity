<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>التقارير والتحليلات - معًا نصنع الأمل</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.8.2/jspdf.plugin.autotable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
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
        .stat-card {
            @apply bg-white p-6 rounded-xl border border-slate-100 shadow-sm;
        }
        .chart-container {
            @apply bg-white p-6 rounded-xl border border-slate-100 shadow-sm h-full;
        }
        .filter-input {
            @apply rounded-lg border-slate-200 focus:border-primary focus:ring focus:ring-primary/20 transition-all text-sm py-2 px-3;
        }
</style>
</head>

<body class="bg-background-main text-slate-900 min-h-screen flex">

    <x-admin-slider></x-admin-slider>
    <main class="flex-1 mr-64">
        <x-admin-header></x-admin-header>
        <div class="p-10 space-y-8">
            <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm flex flex-wrap items-center justify-between gap-6">
                <div class="flex items-center gap-4 flex-1 min-w-[300px]">
                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-bold text-slate-500">من تاريخ</label>
                        <input id="dateFrom" class="filter-input" type="date" value="2023-01-01" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-bold text-slate-500">إلى تاريخ</label>
                        <input id="dateTo" class="filter-input" type="date" value="2023-12-31" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-bold text-slate-500">الفئة</label>
                        <select id="categoryFilter" class="filter-input min-w-[150px]">
                            <option value="">جميع الفئات</option>
                            <option value="الصحة">الصحة</option>
                            <option value="التعليم">التعليم</option>
                            <option value="الإطعام">الإطعام</option>
                        </select>
                    </div>
                </div>
                <div class="flex items-center gap-3">

                    <button id="exportExcelBtn" class="flex items-center gap-2 bg-primary hover:bg-primary-dark text-white px-6 py-2.5 rounded-lg font-bold transition-all shadow-md shadow-primary/20">
                        <span class="material-symbols-outlined text-xl">description</span>
                        تصدير Excel
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-1 chart-container flex flex-col items-center">
                    <h3 class="text-lg font-bold text-slate-800 self-start mb-6">توزيع التبرعات حسب الفئة</h3>
                    <div class="relative w-64 h-64 flex items-center justify-center">
                        <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                            <circle cx="18" cy="18" fill="transparent" r="15.915" stroke="#E2E8F0" stroke-width="3.5"></circle>
                            <circle cx="18" cy="18" fill="transparent" r="15.915" stroke="#2E7D32" stroke-dasharray="45 55" stroke-dashoffset="0" stroke-width="3.5"></circle>
                            <circle cx="18" cy="18" fill="transparent" r="15.915" stroke="#f57c00" stroke-dasharray="25 75" stroke-dashoffset="-45" stroke-width="3.5"></circle>
                            <circle cx="18" cy="18" fill="transparent" r="15.915" stroke="#1B5E20" stroke-dasharray="20 80" stroke-dashoffset="-70" stroke-width="3.5"></circle>
                            <circle cx="18" cy="18" fill="transparent" r="15.915" stroke="#94A3B8" stroke-dasharray="10 90" stroke-dashoffset="-90" stroke-width="3.5"></circle>
                        </svg>
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <span class="text-2xl font-black text-slate-800">100%</span>
                            <span class="text-[10px] text-slate-500 font-bold uppercase tracking-wider">الإجمالي</span>
                        </div>
                    </div>
                    <div class="mt-8 grid grid-cols-2 gap-4 w-full">
                        <div class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-primary"></span><span class="text-xs font-bold text-slate-600">الصحة (45%)</span></div>
                        <div class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-accent-orange"></span><span class="text-xs font-bold text-slate-600">التعليم (25%)</span></div>
                        <div class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-primary-dark"></span><span class="text-xs font-bold text-slate-600">الإطعام (20%)</span></div>
                        <div class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-slate-400"></span><span class="text-xs font-bold text-slate-600">أخرى (10%)</span></div>
                    </div>
                </div>

                <div class="lg:col-span-2 space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="stat-card border-r-4 border-r-primary">
                            <p class="text-sm font-bold text-slate-500 mb-1">إجمالي التبرعات في الفترة</p>
                            <h4 class="text-2xl font-black text-primary">1,250,500 ج.م</h4>
                            <div class="flex items-center gap-1 text-green-600 text-xs mt-2">
                                <span class="material-symbols-outlined text-xs">trending_up</span>
                                <span>+12.5% عن الفترة السابقة</span>
                            </div>
                        </div>
                        <div class="stat-card border-r-4 border-r-accent-orange">
                            <p class="text-sm font-bold text-slate-500 mb-1">عدد المتبرعين الجدد</p>
                            <h4 class="text-2xl font-black text-slate-800">342 متبرع</h4>
                            <div class="flex items-center gap-1 text-green-600 text-xs mt-2">
                                <span class="material-symbols-outlined text-xs">trending_up</span>
                                <span>+8% زيادة في الولاء</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-100 shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800">أحدث العمليات المسجلة</h3>

                        </div>
                        <div class="overflow-x-auto">
                            <table id="operationsTable" class="w-full text-right">
                                <thead class="bg-slate-50 border-b border-slate-100">
                                    <tr>
                                        <th class="px-6 py-4 text-xs font-bold text-slate-500">المتبرع</th>
                                        <th class="px-6 py-4 text-xs font-bold text-slate-500">الفئة</th>
                                        <th class="px-6 py-4 text-xs font-bold text-slate-500">التاريخ</th>
                                        <th class="px-6 py-4 text-xs font-bold text-slate-500">المبلغ</th>
                                        <th class="px-6 py-4 text-xs font-bold text-slate-500">الحالة</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100">
                                    <tr data-category="الصحة" data-date="2023-12-15">
                                        <td class="px-6 py-4 font-bold text-slate-700">أحمد محمد علي</td>
                                        <td class="px-6 py-4 text-sm text-slate-600">الصحة</td>
                                        <td class="px-6 py-4 text-sm text-slate-600">2023-12-15</td>
                                        <td class="px-6 py-4 font-bold text-primary">5,000 ج.م</td>
                                        <td class="px-6 py-4"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-black uppercase">مكتمل</span></td>
                                    </tr>
                                    <tr data-category="التعليم" data-date="2023-12-14">
                                        <td class="px-6 py-4 font-bold text-slate-700">سارة محمود</td>
                                        <td class="px-6 py-4 text-sm text-slate-600">كفالة تعليم</td>
                                        <td class="px-6 py-4 text-sm text-slate-600">2023-12-14</td>
                                        <td class="px-6 py-4 font-bold text-primary">2,500 ج.م</td>
                                        <td class="px-6 py-4"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-black uppercase">مكتمل</span></td>
                                    </tr>
                                    <tr data-category="الإطعام" data-date="2023-12-12">
                                        <td class="px-6 py-4 font-bold text-slate-700">مؤسسة الخير</td>
                                        <td class="px-6 py-4 text-sm text-slate-600">إطعام</td>
                                        <td class="px-6 py-4 text-sm text-slate-600">2023-12-12</td>
                                        <td class="px-6 py-4 font-bold text-primary">50,000 ج.م</td>
                                        <td class="px-6 py-4"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-black uppercase">مكتمل</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-4 text-center text-slate-400">
                <p class="text-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">verified_user</span>
                    نظام التقارير مؤمن ومشفر وفق أعلى المعايير التقنية
                </p>
            </div>
        </div>
    </main>

    <script>
        const dateFrom = document.getElementById('dateFrom');
        const dateTo = document.getElementById('dateTo');
        const categoryFilter = document.getElementById('categoryFilter');
        const table = document.getElementById('operationsTable');
        const rows = Array.from(table.querySelectorAll('tbody tr'));

        function filterTable() {
            const from = dateFrom.value ? new Date(dateFrom.value) : null;
            const to = dateTo.value ? new Date(dateTo.value) : null;
            const cat = categoryFilter.value.trim();

            rows.forEach(row => {
                const dateStr = row.dataset.date;
                const rowDate = dateStr ? new Date(dateStr) : null;
                const rowCat = row.dataset.category || '';

                let show = true;

                if (from && rowDate && rowDate < from) show = false;
                if (to && rowDate && rowDate > to) show = false;
                if (cat && rowCat !== cat) show = false;

                row.style.display = show ? '' : 'none';
            });
        }

        dateFrom.addEventListener('change', filterTable);
        dateTo.addEventListener('change', filterTable);
        categoryFilter.addEventListener('change', filterTable);

        document.getElementById('exportPdfBtn').addEventListener('click', () => {
            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF();

            doc.setFont("Amiri-Regular", "normal");
            doc.setFontSize(22);
            doc.text("تقرير التبرعات - معًا نصنع الأمل", 105, 20, {
                align: "center"
            });

            doc.setFontSize(14);
            doc.text("فترة: " + (dateFrom.value || 'غير محدد') + " إلى " + (dateTo.value || 'غير محدد'), 105, 35, {
                align: "center"
            });

            const tableData = [];
            rows.forEach(row => {
                if (row.style.display !== 'none') {
                    const cells = row.querySelectorAll('td');
                    tableData.push([
                        cells[0].textContent.trim(),
                        cells[1].textContent.trim(),
                        cells[2].textContent.trim(),
                        cells[3].textContent.trim(),
                        cells[4].textContent.replace(/<[^>]+>/g, '').trim()
                    ]);
                }
            });

            doc.autoTable({
                startY: 50,
                head: [
                    ["المتبرع", "الفئة", "التاريخ", "المبلغ", "الحالة"]
                ],
                body: tableData,
                theme: 'grid',
                styles: {
                    font: "Amiri-Regular",
                    fontStyle: "normal",
                    cellPadding: 5,
                    overflow: 'linebreak',
                    halign: 'right'
                },
                headStyles: {
                    fillColor: [46, 125, 50],
                    textColor: [255, 255, 255],
                    fontSize: 11,
                    halign: 'right'
                },
                columnStyles: {
                    0: {
                        cellWidth: 50
                    },
                    1: {
                        cellWidth: 40
                    },
                    2: {
                        cellWidth: 35
                    },
                    3: {
                        cellWidth: 35
                    },
                    4: {
                        cellWidth: 30
                    }
                },
                margin: {
                    top: 50,
                    left: 15,
                    right: 15
                }
            });

            doc.save("تقرير_التبرعات.pdf");
        });

        document.getElementById('exportExcelBtn').addEventListener('click', () => {
            const data = [
                ['المتبرع', 'الفئة', 'التاريخ', 'المبلغ', 'الحالة']
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