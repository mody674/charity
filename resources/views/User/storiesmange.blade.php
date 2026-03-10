<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>إدارة قصص الأثر - توثيق النجاح</title>
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
        .story-card {
            @apply bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden transition-all hover:shadow-md;
        }
        .badge-published {
            @apply bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-md flex items-center gap-1;
        }
        .badge-draft {
            @apply bg-slate-100 text-slate-600 text-xs font-bold px-2 py-1 rounded-md flex items-center gap-1;
        }
        button[data-status].active-filter {
            @apply bg-primary text-white border-primary shadow-sm;
        }
        button[data-status]:not(.active-filter) {
            @apply text-slate-700 border-slate-300 hover:border-primary hover:text-primary;
        }
    </style>
</head>

<body class="bg-background-main text-slate-900 min-h-screen flex">
    <x-user-slider>
        <x-user-slider />
        <main class="flex-1 mr-64">
    </x-user-header>
            <div class="p-10">
                <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div class="flex flex-wrap gap-3">
                        <button data-status="all" class="px-6 py-2 border rounded-full text-sm font-bold transition-all active-filter">الكل</button>
                        <button data-status="published" class="px-6 py-2 border rounded-full text-sm font-bold transition-all">المنشورة</button>
                        <button data-status="draft" class="px-6 py-2 border rounded-full text-sm font-bold transition-all">المسودات</button>
                    </div>
                    <div class="text-slate-500 text-sm font-medium">
                        إجمالي القصص: <span id="totalStories" class="text-primary font-bold">128 قصة</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="storiesContainer">
                    <div class="story-card" data-status="published">
                        <div class="h-48 w-full bg-slate-200 relative">
                            <img alt="Success Story" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWaYhdRZIt0suB1B9CwkE-i1oi00QcvIU0zrV1SZmTjI3_Jw41cFw69YrZQbLwQ0RorCyV-_j02jJzqLY4fj2brnHpHNEWFq9kTnNN7QOacxprUYfhwL2NJXVDyQ4QfCIuL4kJ2Jqo1dpU7bq36g9NfOz_DMJAWDzE6O1778O-WFekW5Tbw0JXf66kfcvqeBY7vIKBjJZuBIzPsDLaRj2Lm_6oNqz85HadEy5rx9wWFtxCReOctXXh5EgsklL7zPBXYWps9fbyscE" />
                            <div class="absolute top-3 right-3">
                                <span class="badge-published">
                                    <span class="material-symbols-outlined text-xs">check_circle</span>
                                    منشورة
                                </span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-slate-800 mb-2 line-clamp-1">مشروع سقيا الماء في قرى صعيد مصر</h3>
                            <p class="text-slate-500 text-xs mb-4 line-clamp-2">بفضل تبرعاتكم، نجحنا في حفر 15 بئر ارتوازي يخدم أكثر من 2000 أسرة في المناطق الأكثر احتياجاً.</p>
                            <div class="flex justify-between items-center pt-4 border-t border-slate-50">
                                <span class="text-xs text-slate-400">12 أكتوبر 2023</span>
                                <div class="flex gap-3">
                                    <button class="text-primary hover:text-primary-dark" title="تعديل">
                                        <span class="material-symbols-outlined text-lg">edit</span>
                                    </button>
                                    <button class="text-primary hover:text-primary-dark" title="متابعة">
                                        <span class="material-symbols-outlined text-lg">visibility</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="story-card" data-status="published">
                        <div class="h-48 w-full bg-slate-200 relative">
                            <img alt="Education Story" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuADuB4pEqKV0K6W25omNQEE0Xf00O3BFeBaFMo-UFuyPbcY9WP2zvkFa_J6AJBye0ROEM8Suvk7j6w5EkYBpDiJVBOjqucYcBbFiB_U3o-_kvVQQk-vGvCTkpwOOF3TPelAWe9K-xumbLpvlxQJsdrmy-rWnJ-SAGHLCS28_H3JIUdfgQnehBDOsND8vpkRjFaNS373nHXLPSY4R-DbPfaba53WKDzSj3mBXp65VkieLqz0D3m-pj1SbaA0r3eB-L8ZpF1t7YdxZQc" />
                            <div class="absolute top-3 right-3">
                                <span class="badge-published">
                                    <span class="material-symbols-outlined text-xs">check_circle</span>
                                    منشورة
                                </span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-slate-800 mb-2 line-clamp-1">رحلة نجاح الطالب أحمد - كفالة التعليم</h3>
                            <p class="text-slate-500 text-xs mb-4 line-clamp-2">قصة كفاح طالب متفوق استطاع إكمال دراسته الجامعية في كلية الطب بدعمكم المستمر.</p>
                            <div class="flex justify-between items-center pt-4 border-t border-slate-50">
                                <span class="text-xs text-slate-400">05 أكتوبر 2023</span>
                                <div class="flex gap-3">
                                    <button class="text-primary hover:text-primary-dark" title="تعديل">
                                        <span class="material-symbols-outlined text-lg">edit</span>
                                    </button>
                                    <button class="text-primary hover:text-primary-dark" title="متابعة">
                                        <span class="material-symbols-outlined text-lg">visibility</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="story-card" data-status="draft">
                        <div class="h-48 w-full bg-slate-200 relative">
                            <img alt="Medical Story" class="w-full h-full object-cover opacity-60" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwi-_cr1YkJSbFf4jf84fRnAYHl1CmOZ-vqWtKSiW8mwliX8Q-q3PkzAWvaZTo1_0XM-w93ixWZzAg96wVzVSDHGl2U1CvyP4wt0YGUBkjFjM_SofHn8tkjCxEYlxJR7E81uN7GmQi9KNzsN_wtwC4hDPHYeEHsmR1HJ_5QYsXJQiFRxqYuxWbKLyeEEiJ9pFTOXSIrDGwVKxBbWJtQRzN55tEUSBVVvzSeGQj1fEwv1-xiMuV88lwAVHOMiATx4cw_8WjZEM6LIE" />
                            <div class="absolute top-3 right-3">
                                <span class="badge-draft">
                                    <span class="material-symbols-outlined text-xs">edit_note</span>
                                    مسودة
                                </span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-slate-800 mb-2 line-clamp-1">تجهيز غرف الرعاية المركزة</h3>
                            <p class="text-slate-500 text-xs mb-4 line-clamp-2">جارٍ تحديث تفاصيل المعدات الطبية الجديدة التي تم توفيرها لمستشفى قصر العيني.</p>
                            <div class="flex justify-between items-center pt-4 border-t border-slate-50">
                                <span class="text-xs text-slate-400">قيد التحضير</span>
                                <div class="flex gap-3">
                                    <button class="text-primary hover:text-primary-dark" title="تعديل">
                                        <span class="material-symbols-outlined text-lg">edit</span>
                                    </button>
                                    <button class="text-primary hover:text-primary-dark" title="متابعة">
                                        <span class="material-symbols-outlined text-lg">visibility</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="story-card" data-status="published">
                        <div class="h-48 w-full bg-slate-200 relative">
                            <img alt="Food Story" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAyIPzhtnzqSfCX1MhCzOraBqBnPlDJ9F7P8AhKzjWGkKkUOl1N90mhjVBcfveiObVaVeLhSYn0p3kichYMrv7OhHp37lDadum_bHVvleus8NAxHvDi1bjr6tlI578FeHjdSa7aF8pBcSQPhPOsZv28hh11x23d9g8-ZSJl3gGAeu7IUNOjDPu4Iq5KPqI6jwW_wvYeacHVq3s6IfitRBX89McxxKH9B7RMFLg8ABjuujYS4jaIvlxsSgzpQ3dWXPhWoVUmmTPBI_M" />
                            <div class="absolute top-3 right-3">
                                <span class="badge-published">
                                    <span class="material-symbols-outlined text-xs">check_circle</span>
                                    منشورة
                                </span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-slate-800 mb-2 line-clamp-1">كراتين الخير - حملة إطعام الطعام</h3>
                            <p class="text-slate-500 text-xs mb-4 line-clamp-2">توزيع أكثر من 5000 كرتونة غذائية خلال شهر رمضان المبارك في محافظات الدلتا.</p>
                            <div class="flex justify-between items-center pt-4 border-t border-slate-50">
                                <span class="text-xs text-slate-400">28 سبتمبر 2023</span>
                                <div class="flex gap-3">
                                    <button class="text-primary hover:text-primary-dark" title="تعديل">
                                        <span class="material-symbols-outlined text-lg">edit</span>
                                    </button>
                                    <button class="text-primary hover:text-primary-dark" title="متابعة">
                                        <span class="material-symbols-outlined text-lg">visibility</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="addStoryModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 hidden">
                    <div class="bg-white rounded-2xl shadow-2xl max-w-3xl w-full mx-4 overflow-hidden">
                        <div class="p-6 border-b border-slate-200 flex justify-between items-center">
                            <h3 class="text-xl font-black text-slate-800">إضافة قصة أثر جديدة</h3>
                            <button id="closeAddModal" class="text-slate-500 hover:text-slate-700">
                                <span class="material-symbols-outlined text-2xl">close</span>
                            </button>
                        </div>
                        <div class="p-8">
                            <form id="addStoryForm" class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-2">عنوان القصة</label>
                                        <input type="text" id="storyTitle" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="اكتب عنوان القصة" required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-2">الفئة</label>
                                        <select id="storyCategory" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none" required>
                                            <option value="">اختر الفئة</option>
                                            <option value="صحة">الصحة</option>
                                            <option value="تعليم">التعليم</option>
                                            <option value="إطعام">الإطعام</option>
                                            <option value="مياه">مشاريع المياه</option>
                                            <option value="تمكين">تمكين المرأة</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">الصورة الرئيسية</label>
                                    <input type="file" id="storyImage" accept="image/*" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">نص القصة الكامل</label>
                                    <textarea id="storyContent" rows="8" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="اكتب القصة الكاملة هنا..." required></textarea>
                                </div>
                                <div class="flex items-center gap-3">
                                    <label class="input-label">حالة النشر</label>
                                    <select id="storyStatus" class="px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                                        <option value="published">منشورة</option>
                                        <option value="draft">مسودة</option>
                                    </select>
                                </div>
                                <div class="flex justify-end gap-4 pt-6 border-t border-slate-200">
                                    <button type="button" id="cancelAddStory" class="px-8 py-3 border border-slate-300 rounded-xl font-bold text-slate-600 hover:bg-slate-50 transition-all">إلغاء</button>
                                    <button type="submit" class="px-10 py-3 bg-primary text-white rounded-xl font-bold hover:bg-primary-dark transition-all flex items-center gap-2">
                                        <span class="material-symbols-outlined">add_circle</span>
                                        إضافة القصة
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="storyPreviewModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 hidden">
                    <div class="bg-white rounded-2xl shadow-2xl max-w-4xl w-full mx-4 overflow-hidden">
                        <div class="p-6 border-b border-slate-200 flex justify-between items-center">
                            <h3 class="text-xl font-black text-slate-800">معاينة القصة</h3>
                            <button id="closePreviewModal" class="text-slate-500 hover:text-slate-700">
                                <span class="material-symbols-outlined text-2xl">close</span>
                            </button>
                        </div>
                        <div class="p-8">
                            <img id="previewImg" class="w-full h-80 object-cover rounded-xl mb-6" alt="Story Image">
                            <h3 id="previewTitle" class="text-2xl font-black text-slate-800 mb-4"></h3>
                            <p id="previewContent" class="text-slate-700 leading-relaxed text-lg"></p>
                            <div class="mt-8 flex justify-end gap-4">
                                <button id="cancelPreview" class="px-8 py-3 border border-slate-300 rounded-xl font-bold text-slate-600 hover:bg-slate-50 transition-all">إغلاق</button>
                                <button id="publishFromPreview" class="px-10 py-3 bg-primary text-white rounded-xl font-bold hover:bg-primary-dark transition-all">نشر القصة</button>
                            </div>
                        </div>
                    </div>
                </div>
        </main>

        <script>
            const statusButtons = document.querySelectorAll('[data-status]');
            const storiesContainer = document.getElementById('storiesContainer');
            const totalStoriesEl = document.getElementById('totalStories');
            const cards = Array.from(storiesContainer.querySelectorAll('.story-card'));

            function updateTotal() {
                const visible = cards.filter(c => c.style.display !== 'none');
                totalStoriesEl.textContent = visible.length + ' قصة';
            }

            statusButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    statusButtons.forEach(b => b.classList.remove('active-filter'));
                    btn.classList.add('active-filter');
                    const status = btn.dataset.status;
                    cards.forEach(card => {
                        card.style.display = (status === 'all' || card.dataset.status === status) ? '' : 'none';
                    });
                    updateTotal();
                });
            });

            const addStoryBtn = document.getElementById('addStoryBtn');
            const addModal = document.getElementById('addStoryModal');
            const closeAddModal = document.getElementById('closeAddModal');
            const cancelAddStory = document.getElementById('cancelAddStory');
            const addStoryForm = document.getElementById('addStoryForm');

            addStoryBtn.addEventListener('click', () => {
                addModal.classList.remove('hidden');
                addModal.classList.add('flex');
            });

            const closeAddFunc = () => {
                addModal.classList.add('hidden');
                addModal.classList.remove('flex');
                addStoryForm.reset();
            };

            closeAddModal.addEventListener('click', closeAddFunc);
            cancelAddStory.addEventListener('click', closeAddFunc);
            addModal.addEventListener('click', (e) => {
                if (e.target === addModal) closeAddFunc();
            });

            addStoryForm.addEventListener('submit', (e) => {
                e.preventDefault();
                alert('تم إضافة القصة بنجاح!');
                closeAddFunc();
            });

            const previewModal = document.getElementById('storyPreviewModal');
            const previewImg = document.getElementById('previewImg');
            const previewTitle = document.getElementById('previewTitle');
            const previewContent = document.getElementById('previewContent');
            const closePreviewModal = document.getElementById('closePreviewModal');
            const cancelPreview = document.getElementById('cancelPreview');
            const publishFromPreview = document.getElementById('publishFromPreview');

            function openPreview(title, img, content) {
                previewTitle.textContent = title;
                previewImg.src = img;
                previewImg.alt = title;
                previewContent.textContent = content;
                previewModal.classList.remove('hidden');
                previewModal.classList.add('flex');
            }

            closePreviewModal.addEventListener('click', () => {
                previewModal.classList.add('hidden');
                previewModal.classList.remove('flex');
            });

            cancelPreview.addEventListener('click', () => {
                previewModal.classList.add('hidden');
                previewModal.classList.remove('flex');
            });

            publishFromPreview.addEventListener('click', () => {
                alert('تم نشر القصة بنجاح!');
                previewModal.classList.add('hidden');
                previewModal.classList.remove('flex');
            });

            previewModal.addEventListener('click', (e) => {
                if (e.target === previewModal) {
                    previewModal.classList.add('hidden');
                    previewModal.classList.remove('flex');
                }
            });

            document.querySelectorAll('.story-card button').forEach(btn => {
                btn.addEventListener('click', () => {
                    const card = btn.closest('.story-card');
                    const title = card.querySelector('h3').textContent;
                    const img = card.querySelector('img').src;
                    const desc = card.querySelector('p').textContent;

                    openPreview(title, img, desc);
                });
            });

            updateTotal();
        </script>

</body>

</html>