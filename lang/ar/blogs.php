<?php

return [
    'plural' => 'المقالات',
    'singular' => 'المقالة',
    'empty' => 'لا توجد مقالات',
    'select' => 'اختر المقالة',
    'perPage' => 'عدد النتائج في الصفحة',
    'actions' => [
        'actions' => 'الاجراءات',
        'list' => 'كل المقالات',
        'show' => 'عرض',
        'create' => 'إضافة مقالة جديده',
        'new' => 'إضافة',
        'edit' => 'تعديل المقالة',
        'delete' => 'حذف المقالة',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'messages' => [
        'created' => 'تم إضافة المقالة بنجاح .',
        'updated' => 'تم تعديل المقالة بنجاح .',
        'deleted' => 'تم حذف المقالة بنجاح .',
        'retrieved' => 'تم أسترجاع البيانات بنجاح.',
    ],
    'attributes' => [
        'id' => 'الرقم التسلسلي',
        'title' => 'الاسم',
        'description' => 'الوصف',
        'image' => 'الصورة',
        'status' => 'الحالة',
        'created_at' => 'تاريخ الاضافة',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا المقالة ?',
            'confirm' => 'حذف',
            'cancel' => 'إلغاء',
        ]
    ],
    'status' => [
        'ACTIVE' => 'مفعل',
        'INACTIVE' => 'غير مفعل',
    ]
];
