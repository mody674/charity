<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>تقرير مفصل - اتجاهات التبرعات</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
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
            @apply bg-white rounded-xl shadow-sm border border-slate-100 p-6 flex flex-col gap-2;
        }
        .detail-row {
            @apply flex justify-between items-center py-4 px-6 border-b border-slate-100 hover:bg-slate-50 transition-colors;
        }
    </style>
</head>

<body class="bg-background-main text-slate-900 min-h-screen flex">
    <x-admin-slider></x-admin-slider>
    <main class="flex-1 mr-64">
        <x-admin-header></x-admin-header>

        <div class="p-10 space-y-10">

            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-8">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-10">
                    <div>
                        <h3 class="text-2xl font-black text-slate-800">ملخص الأداء الشهري</h3>
                        <p class="text-sm text-slate-500 mt-2">إجمالي التبرعات خلال النصف الأول من 2026</p>
                    </div>
                    <div class="flex gap-4">
                        <button id="export-pdf-btn" class="px-6 py-3 text-sm font-bold rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-50 transition-colors">تصدير PDF</button>
                        <button id="export-excel-btn" class="px-6 py-3 text-sm font-bold rounded-xl bg-primary text-white hover:bg-primary-dark transition-colors">تصدير Excel</button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <div class="stat-card border-r-4 border-r-primary">
                        <div class="flex justify-between items-start">
                            <span class="text-slate-500 font-bold text-sm">إجمالي التبرعات</span>
                            <span class="material-symbols-outlined text-primary bg-primary/10 p-3 rounded-xl text-3xl">payments</span>
                        </div>
                        <h3 class="text-4xl font-black text-slate-800 mt-4">2,450,000 ج.م</h3>
                        <p class="text-emerald-600 text-sm font-bold mt-2 flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">trending_up</span>
                            +18.7% عن نفس الفترة 2025
                        </p>
                    </div>

                    <div class="stat-card border-r-4 border-r-blue-500">
                        <div class="flex justify-between items-start">
                            <span class="text-slate-500 font-bold text-sm">متوسط التبرع الواحد</span>
                            <span class="material-symbols-outlined text-blue-500 bg-blue-50 p-3 rounded-xl text-3xl">trending_up</span>
                        </div>
                        <h3 class="text-4xl font-black text-slate-800 mt-4">1,910 ج.م</h3>
                        <p class="text-emerald-600 text-sm font-bold mt-2 flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">trending_up</span>
                            +11% عن المتوسط السابق
                        </p>
                    </div>

                    <div class="stat-card border-r-4 border-r-accent-orange">
                        <div class="flex justify-between items-start">
                            <span class="text-slate-500 font-bold text-sm">أعلى شهر تبرع</span>
                            <span class="material-symbols-outlined text-accent-orange bg-orange-50 p-3 rounded-xl text-3xl">emoji_events</span>
                        </div>
                        <h3 class="text-4xl font-black text-slate-800 mt-4">يونيو</h3>
                        <p class="text-slate-600 text-sm font-bold mt-2">٩٥٠,٤٠٠ ج.م</p>
                    </div>

                    <div class="stat-card border-r-4 border-r-purple-500">
                        <div class="flex justify-between items-start">
                            <span class="text-slate-500 font-bold text-sm">عدد التبرعات</span>
                            <span class="material-symbols-outlined text-purple-500 bg-purple-50 p-3 rounded-xl text-3xl">numbers</span>
                        </div>
                        <h3 class="text-4xl font-black text-slate-800 mt-4">1,284</h3>
                        <p class="text-emerald-600 text-sm font-bold mt-2 flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">trending_up</span>
                            +٢٣% عن العام الماضي
                        </p>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-xl p-8 mb-10">
                    <h4 class="text-xl font-bold text-slate-800 mb-6">توزيع التبرعات حسب الفئة</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-4">
                            <div class="detail-row">
                                <span class="font-medium">العلاج والصحة</span>
                                <span class="font-bold text-primary">٤٨%</span>
                            </div>
                            <div class="detail-row">
                                <span class="font-medium">التعليم</span>
                                <span class="font-bold text-primary">٢٩%</span>
                            </div>
                            <div class="detail-row">
                                <span class="font-medium">الإغاثة الطارئة</span>
                                <span class="font-bold text-primary">١٢%</span>
                            </div>
                            <div class="detail-row">
                                <span class="font-medium">التمكين الاقتصادي</span>
                                <span class="font-bold text-primary">٨%</span>
                            </div>
                            <div class="detail-row">
                                <span class="font-medium">أخرى</span>
                                <span class="font-bold text-primary">٣%</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-center">
                            <div class="w-64 h-64 rounded-full bg-gradient-to-br from-primary/10 to-accent-orange/10 flex items-center justify-center relative">
                                <div class="w-48 h-48 rounded-full bg-white flex items-center justify-center text-4xl font-black text-primary">
                                    ٤٨%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <h4 class="text-xl font-bold text-slate-800 mb-6">جدول التبرعات الشهرية التفصيلي</h4>
                    <div class="overflow-x-auto">
                        <table id="donations-table" class="w-full text-right border-collapse">
                            <thead>
                                <tr class="bg-slate-100">
                                    <th class="p-4 font-bold text-slate-700 border-b">الشهر</th>
                                    <th class="p-4 font-bold text-slate-700 border-b">إجمالي التبرعات</th>
                                    <th class="p-4 font-bold text-slate-700 border-b">عدد التبرعات</th>
                                    <th class="p-4 font-bold text-slate-700 border-b">متوسط التبرع</th>
                                    <th class="p-4 font-bold text-slate-700 border-b">نسبة النمو</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-medium">يناير</td>
                                    <td class="font-bold">٢٨٥,٦٠٠ ج.م</td>
                                    <td>١٤٢</td>
                                    <td>٢,٠١١ ج.م</td>
                                    <td class="text-emerald-600">+٤%</td>
                                </tr>
                                <tr>
                                    <td class="font-medium">فبراير</td>
                                    <td class="font-bold">٣٨٢,٤٠٠ ج.م</td>
                                    <td>١٩٨</td>
                                    <td>١,٩٣١ ج.م</td>
                                    <td class="text-emerald-600">+٣٤%</td>
                                </tr>
                                <tr>
                                    <td class="font-medium">مارس</td>
                                    <td class="font-bold">٣٥٠,٨٠٠ ج.م</td>
                                    <td>١٧٦</td>
                                    <td>١,٩٩٣ ج.م</td>
                                    <td class="text-amber-600">-٨%</td>
                                </tr>
                                <tr>
                                    <td class="font-medium">أبريل</td>
                                    <td class="font-bold">٥١٢,٣٠٠ ج.م</td>
                                    <td>٢٤٤</td>
                                    <td>٢,٠١٠ ج.م</td>
                                    <td class="text-emerald-600">+٤٦%</td>
                                </tr>
                                <tr>
                                    <td class="font-medium">مايو</td>
                                    <td class="font-bold">٤٧٨,٥٠٠ ج.م</td>
                                    <td>٢٣١</td>
                                    <td>٢,٠٧١ ج.م</td>
                                    <td class="text-amber-600">-٧%</td>
                                </tr>
                                <tr class="bg-primary/5 font-bold">
                                    <td>يونيو</td>
                                    <td class="text-primary">٩٥٠,٤٠٠ ج.م</td>
                                    <td>٢٩٣</td>
                                    <td>٣,٢٤٤ ج.م</td>
                                    <td class="text-emerald-600">+٩٩%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="mt-12 text-center text-slate-500 text-sm">
                <p class="flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">verified_user</span>
                    جميع البيانات تم تدقيقها وتخضع لمعايير الشفافية والرقابة المالية
                </p>
            </div>

        </div>
    </main>

    <script>
        const table = document.getElementById('donations-table');

        const data = [
            ["الشهر", "إجمالي التبرعات", "عدد التبرعات", "متوسط التبرع", "نسبة النمو"],
            ["يناير", "٢٨٥,٦٠٠ ج.م", "١٤٢", "٢,٠١١ ج.م", "+٤%"],
            ["فبراير", "٣٨٢,٤٠٠ ج.م", "١٩٨", "١,٩٣١ ج.م", "+٣٤%"],
            ["مارس", "٣٥٠,٨٠٠ ج.م", "١٧٦", "١,٩٩٣ ج.م", "-٨%"],
            ["أبريل", "٥١٢,٣٠٠ ج.م", "٢٤٤", "٢,٠١٠ ج.م", "+٤٦%"],
            ["مايو", "٤٧٨,٥٠٠ ج.م", "٢٣١", "٢,٠٧١ ج.م", "-٧%"],
            ["يونيو", "٩٥٠,٤٠٠ ج.م", "٢٩٣", "٣,٢٤٤ ج.م", "+٩٩%"]
        ];

        document.getElementById('export-excel-btn').addEventListener('click', () => {
            const ws = XLSX.utils.aoa_to_sheet(data);
            const wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, "تبرعات 2026");
            XLSX.writeFile(wb, "تقرير_اتجاهات_التبرعات_2026.xlsx");
        });

        document.getElementById('export-pdf-btn').addEventListener('click', () => {
            const element = document.getElementById('donations-table');

            const opt = {
                margin: 1,
                filename: 'تقرير_اتجاهات_التبرعات_2026.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2,
                    useCORS: true,
                    logging: false
                },
                jsPDF: {
                    unit: 'in',
                    format: 'a4',
                    orientation: 'portrait'
                },
                pagebreak: {
                    mode: ['avoid-all', 'css', 'legacy']
                }
            };

            const title = document.createElement('div');
            title.innerHTML = `
        <h1 style="text-align:center; font-family:Cairo, sans-serif; color:#2E7D32; margin-bottom:10px; font-size:22px;">
            تقرير مفصل - اتجاهات التبرعات
        </h1>
        <p style="text-align:center; font-family:Cairo, sans-serif; color:#64748b; margin-bottom:20px;">
            الفترة: يناير - يونيو 2026
        </p>
        <br>
    `;
            const wrapper = document.createElement('div');
            wrapper.appendChild(title);
            wrapper.appendChild(element.cloneNode(true));
            wrapper.style.fontFamily = 'Cairo, sans-serif';
            wrapper.style.direction = 'rtl';
            wrapper.style.textAlign = 'right';
            wrapper.style.padding = '20px';
            wrapper.style.backgroundColor = '#ffffff';

            html2pdf().from(wrapper).set(opt).save();
        });
    </script>

</body>

</html>