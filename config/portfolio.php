<?php

// All portfolio content lives here. Edit this file to update the site.
return [
    'name' => 'S. Nambi Nandhini',
    'role' => 'PHP Laravel Developer',
    'location' => 'Tirunelveli, Tamil Nadu',
    'email' => 'nambinandhini001@gmail.com',
    'phone' => '9025772487',
    'photo' => 'images/profile.png', // replace with your photo, e.g. images/profile.jpg
    'github' => 'https://github.com/',
    'summary' => 'I build secure, scalable backends in Laravel, CodeIgniter and Core PHP for government and university projects: REST APIs, MySQL design, payment gateways and Apache Solr search.',
    'about' => 'PHP Laravel developer with 3+ years of experience delivering full-stack backend solutions. I enjoy optimizing database performance, working in agile teams, and turning messy requirements into reliable systems.',

    'stats' => [
        ['3+', 'years in PHP'],
        ['8.5', 'CGPA, B.E. CSE'],
        ['4', 'university sites shipped'],
    ],

    'experience' => [[
        'company' => 'INFLIBNET Centre, Gandhinagar',
        'title' => 'Programmer (PHP Laravel Developer)',
        'period' => 'Sep 2023 – Present',
        'points' => [
            'Built and maintained web applications and university websites with Laravel and CodeIgniter.',
            'Designed and optimized MySQL databases, improving query performance and data integrity.',
            'Delivered sites for Mahatma Gandhi Central University, Doon University, CU Himachal Pradesh and CUG.',
            'Implemented secure login with role-based access control (RBAC) across multiple platforms.',
            'BharatCat: Solr integration that detects script languages in bibliographic titles, updates the database and exports CSV.',
            'IndCat: admin panel with full CRUD on bibliographic records using CodeIgniter 3 and Apache Solr.',
            'Configured and tested new Solr indexing; integrated OCS with MySQL and SQL Server and resolved issues through .NET debugging.',
        ],
    ]],

    'projects' => [
        ['title' => 'IndCat Admin Panel', 'stack' => ['CodeIgniter 3', 'Apache Solr', 'MySQL'],
            'desc' => 'CRUD admin for bibliographic records with fast Solr indexing and retrieval.'],
        ['title' => 'BharatCat Language Detection', 'stack' => ['PHP', 'Apache Solr', 'CSV'],
            'desc' => 'Detects the script language of titles, updates records and exports CSV.'],
        ['title' => 'E-Commerce Checkout', 'stack' => ['Laravel', 'Razorpay', 'PayPal'],
            'desc' => 'Cart, orders, automated invoices, and email notifications for confirmations and refunds, backed by SQL transactions.'],
        ['title' => 'Blood Bank Management', 'stack' => ['PHP', 'MySQL'],
            'desc' => 'Donor registration, blood inventory and requests. Query tuning cut response time by 25%.'],
        ['title' => 'Task Management System', 'stack' => ['Laravel', 'Eloquent', 'RBAC'],
            'desc' => 'CRUD tasks with admin and user roles, responsive on mobile.'],
        ['title' => 'Book Review System', 'stack' => ['Laravel', 'Blade', 'Caching'],
            'desc' => 'One-to-many user reviews, query optimization, custom Blade components and API rate limiting.'],
        ['title' => 'Blog Website', 'stack' => ['Laravel', 'Eloquent'],
            'desc' => 'Post CRUD, authentication and role-based access.'],
    ],

    'skills' => [
        'Backend' => ['PHP', 'Laravel', 'CodeIgniter', 'Core PHP'],
        'Data' => ['MySQL', 'SQL', 'Apache Solr'],
        'Frontend' => ['HTML', 'CSS', 'JavaScript', 'Bootstrap', 'React'],
        'APIs' => ['RESTful APIs', 'SMTP Email', 'Postman'],
        'Tools' => ['Git', 'GitHub', 'Composer', 'Linux', 'VS Code'],
    ],

    'education' => [
        ['Government College of Engineering, Tirunelveli', 'B.E. Computer Science and Engineering', '2019 – 2023', 'CGPA 8.5'],
        ['St. Johns Hr. Sec. School, Tirunelveli', 'HSC', '2018 – 2019', '88%'],
        ['St. Johns Hr. Sec. School, Tirunelveli', 'SSLC', '2015 – 2016', '92%'],
    ],

    'languages' => ['Tamil (native)', 'English (professional)', 'Hindi (professional)'],
];
