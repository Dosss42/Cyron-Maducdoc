<?php

/**
 * Portfolio content.
 *
 * Everything a recruiter reads on the site lives in this one file. Replace
 * the [bracketed] placeholders with real information — nothing else needs
 * to change for the site to update.
 */

return [

    'profile' => [
        'name' => 'Cyron B.Maducdoc',
        'title' => 'BSIT Graduate | Aspiring Full Stack Web Developer',
        'subtitle' => 'Web Developer • Software Developer • IT Support',
        'location' => 'Philippines',
        'career_level' => 'Fresh Graduate / Entry-Level',
        'availability' => 'Open to Entry-Level IT Opportunities',
        'email' => '[your.email@example.com]',
        'phone' => '[+63 9XX XXX XXXX]',
        'github' => 'https://github.com/[yourusername]',
        'linkedin' => 'https://linkedin.com/in/[yourusername]',
        'resume_path' => 'resume.pdf',
    ],

    'hero' => [
        'label' => 'BSIT Graduate • Web Development',
        'heading' => "Hi, I'm Cyron B.Maducdoc.",
        'subheading' => 'I build practical web applications and digital solutions.',
        'description' => "I'm a BSIT graduate specializing in web development and currently looking for an entry-level opportunity where I can apply my technical skills, contribute to real-world projects, and continue growing as a developer.",
    ],

    'quick_summary' => [
        [
            'title' => 'Web Development',
            'description' => 'Hands-on experience building responsive websites and web applications.',
        ],
        [
            'title' => 'Backend & Databases',
            'description' => 'Experience creating CRUD systems, APIs, backend logic, and MySQL databases.',
        ],
        [
            'title' => 'Problem Solving',
            'description' => 'Experience debugging applications and solving technical problems through academic and personal projects.',
        ],
        [
            'title' => 'Continuous Learning',
            'description' => 'Building skills through projects, certifications, and independent study.',
        ],
    ],

    'about' => [
        "I'm a Bachelor of Science in Information Technology graduate with a focus on web development. During my studies, I worked on different software and web-based projects that helped me develop practical experience with frontend development, backend programming, databases, APIs, and system design.",
        'One of my major projects involved developing a web-based enrollment and student information management system, where I worked with application logic, database operations, authentication, payments, and different user roles.',
        "I'm currently looking for my first professional IT opportunity. My main goal is to grow as a full stack/web developer while contributing to a team and learning from experienced developers.",
    ],

    'skills' => [
        'Frontend' => [
            'HTML5', 'CSS3', 'JavaScript', 'TypeScript', 'React', 'Angular', 'Bootstrap', 'Tailwind CSS', 'Responsive Web Design',
        ],
        'Backend' => [
            'PHP', 'Laravel', 'Node.js', 'Express.js', 'Python', 'Flask',
        ],
        'Database' => [
            'MySQL', 'SQL', 'CRUD', 'Database Design', 'Database Normalization',
        ],
        'APIs & Development' => [
            'REST APIs', 'API Integration', 'Authentication', 'Webhooks', 'Git', 'GitHub',
        ],
        'Tools' => [
            'VS Code', 'Git', 'GitHub', 'XAMPP', 'Postman', 'Docker',
        ],
        'CMS & Website Builders' => [
            'WordPress', 'Wix', 'Google Sites', 'Joomla', 'Drupal',
        ],
    ],

    // Technologies still being learned rather than used with confidence yet.
    'learning' => ['TypeScript', 'Docker', 'Flask'],

    'stack' => [
        'primary' => ['HTML', 'CSS', 'JavaScript', 'TypeScript', 'PHP', 'Laravel', 'MySQL', 'Git', 'GitHub'],
        'additional' => ['React', 'Angular', 'Node.js', 'Express.js', 'Python', 'Flask', 'Tailwind CSS', 'Bootstrap'],
    ],

    'projects' => [
        [
            'slug' => 'enrollment-student-information-system',
            'name' => 'Web-Based Online Enrollment, Student Information, and Academic Record Management System',
            'short_name' => 'Enrollment & Student Information System',
            'type' => 'Capstone',
            'role' => 'Student Developer / Capstone Developer',
            'featured' => true,
            'description' => 'A web-based school management system designed to support student enrollment, student information management, academic records, payments, and administrative workflows.',
            'technologies' => ['PHP', 'Laravel', 'MySQL', 'HTML', 'CSS', 'JavaScript', 'Bootstrap', 'REST APIs', 'Git', 'GitHub'],
            'features' => [
                'Online enrollment',
                'Student information management',
                'Academic records',
                'Role-based access',
                'Authentication',
                'Payment processing',
                'Student search',
                'Reports',
                'CRUD operations',
                'Database management',
            ],
            'overview' => 'A full-featured school management system built as our capstone project, covering the enrollment process from application to academic record-keeping for a school administration office.',
            'problem' => 'The partner school relied on paper forms and spreadsheets to manage enrollment, student records, and payments, which made records hard to search, easy to lose, and slow to update across different offices.',
            'solution' => 'We built a Laravel web application with role-based access for registrars, cashiers, and students, centralizing enrollment, academic records, and payment tracking in one MySQL database with a consistent audit trail.',
            'contribution' => 'I worked on the backend enrollment and student records modules, including the database schema, CRUD operations for student profiles, role-based authentication, and the payment recording workflow, along with parts of the frontend using Bootstrap.',
            'challenges' => 'Designing a database structure that could handle multiple user roles, enrollment statuses, and payment records without becoming inconsistent was the hardest part, along with keeping the UI usable for non-technical staff.',
            'learned' => 'This project taught me how to plan a relational database before writing code, how role-based authentication works in practice, and how much backend logic goes into something that looks like a simple form on the frontend.',
            'links' => [
                'live_demo' => null,
                'github' => null,
                'documentation' => null,
            ],
        ],
        [
            'slug' => 'student-management-system',
            'name' => 'Student Management System',
            'short_name' => 'Student Management System',
            'type' => 'Academic',
            'role' => 'Developer',
            'featured' => false,
            'description' => 'A CRUD-based student management application demonstrating frontend, backend, API communication, routing, and database operations.',
            'technologies' => ['Angular', 'TypeScript', 'PHP', 'MySQL', 'REST APIs'],
            'features' => [
                'Add, edit, and delete student records',
                'Search and filter students',
                'Form validation',
                'REST API communication between Angular and PHP',
                'MySQL data persistence',
            ],
            'overview' => 'A standalone student records application built to practice connecting an Angular frontend to a PHP REST API backed by MySQL.',
            'problem' => 'I wanted hands-on practice building a real frontend-to-backend API connection instead of only working inside a monolithic framework like Laravel.',
            'solution' => 'I built an Angular single-page frontend that communicates with a PHP REST API for full CRUD functionality on student records stored in MySQL.',
            'contribution' => 'I built the Angular components, services, and routing, the PHP REST endpoints, and the MySQL schema for student records.',
            'challenges' => 'Handling API errors and form validation consistently between the Angular frontend and the PHP backend took a few iterations to get right.',
            'learned' => 'I learned how a frontend framework talks to a backend it does not share a codebase with, and how to design simple REST endpoints from scratch.',
            'links' => [
                'live_demo' => null,
                'github' => null,
                'documentation' => null,
            ],
        ],
        [
            'slug' => 'smart-quiz-system',
            'name' => 'Smart Quiz System',
            'short_name' => 'Smart Quiz System',
            'type' => 'Personal',
            'role' => 'Developer',
            'featured' => false,
            'description' => 'A web-based quiz application developed to practice backend development, database integration, and application logic.',
            'technologies' => ['Python', 'Flask', 'MySQL', 'HTML', 'CSS', 'JavaScript'],
            'features' => [
                'Multiple-choice quiz creation',
                'Score calculation and results page',
                'Question bank stored in MySQL',
                'Session-based quiz attempts',
            ],
            'overview' => 'A quiz application built with Flask to practice backend application logic outside of the PHP ecosystem.',
            'problem' => 'I wanted to understand how a different backend framework and language handled routing, sessions, and database access compared to Laravel.',
            'solution' => 'I built a Flask application that serves quiz questions from a MySQL database, tracks a user\'s answers in session, and calculates their score at the end.',
            'contribution' => 'I built the full application on my own: the Flask routes, the MySQL question bank schema, the scoring logic, and the frontend templates.',
            'challenges' => 'Managing quiz state across multiple pages without a frontend framework meant being careful with Flask sessions and form submissions.',
            'learned' => 'I learned how a minimal backend framework like Flask compares to Laravel, and how much scaffolding a full framework normally handles for you.',
            'links' => [
                'live_demo' => null,
                'github' => null,
                'documentation' => null,
            ],
        ],
        [
            'slug' => 'campuseats',
            'name' => 'CampusEats',
            'short_name' => 'CampusEats',
            'type' => 'Personal',
            'role' => 'Developer',
            'featured' => false,
            'description' => 'A campus food ordering application demonstrating menu management, cart functionality, order processing, API communication, and frontend state management.',
            'technologies' => ['Angular', 'Ionic', 'TypeScript', 'REST APIs', 'Python', 'FastAPI'],
            'features' => [
                'Browse menu items by vendor',
                'Cart and checkout flow',
                'Order status tracking',
                'REST API built with FastAPI',
                'Mobile-friendly layout with Ionic',
            ],
            'overview' => 'A mobile-friendly food ordering concept for a school campus, built with Ionic/Angular on the frontend and FastAPI on the backend.',
            'problem' => 'Ordering food between classes on campus involved long lines with no way to order ahead, so I wanted to prototype a simple ordering flow.',
            'solution' => 'I built an Ionic/Angular app for browsing menus and placing orders, backed by a FastAPI service handling menu data, cart totals, and order status.',
            'contribution' => 'I built the Angular/Ionic frontend, including cart and checkout state management, and the FastAPI endpoints for menu items and orders.',
            'challenges' => 'Keeping cart state in sync with the backend while the user navigated between screens required a clear plan for where state should live.',
            'learned' => 'I learned how to structure frontend state management for a multi-step flow, and got hands-on practice with FastAPI as a lighter alternative to Flask.',
            'links' => [
                'live_demo' => null,
                'github' => null,
                'documentation' => null,
            ],
        ],
        [
            'slug' => 'cms-website-project',
            'name' => '[CMS Website Project Name]',
            'short_name' => '[CMS Website Project Name]',
            'type' => 'Personal',
            'role' => 'Developer',
            'featured' => false,
            'description' => '[Short description of the site you built — what it\'s for and who it\'s for.]',
            'technologies' => ['WordPress', 'Wix', 'Joomla', 'Drupal'],
            'features' => [
                '[Feature — e.g. custom theme/template setup]',
                '[Feature — e.g. content management for pages/posts]',
                '[Feature — e.g. plugin/extension configuration]',
                '[Feature — e.g. responsive layout]',
            ],
            'overview' => '[What the site is and which CMS platform you built it on.]',
            'problem' => '[What need the site was solving — e.g. the client/organization needed an online presence without custom-coding everything from scratch.]',
            'solution' => '[How you approached it — which CMS you chose, why, and what you configured or customized.]',
            'contribution' => '[What you personally built or configured — theme setup, pages, plugins, content structure, etc.]',
            'challenges' => '[Anything that was tricky — theme customization, plugin conflicts, hosting/deployment, etc.]',
            'learned' => '[What working with a CMS taught you compared to coding a site from scratch.]',
            'links' => [
                'live_demo' => null,
                'github' => null,
                'documentation' => null,
            ],
        ],
    ],

    'certifications' => [
        [
            'title' => '[Certification Name]',
            'organization' => '[Organization]',
            'date' => '[Month Year]',
            'credential_id' => null,
            'verify_url' => null,
        ],
        [
            'title' => '[Certification Name]',
            'organization' => '[Organization]',
            'date' => '[Month Year]',
            'credential_id' => null,
            'verify_url' => null,
        ],
    ],

    'education' => [
        [
            'degree' => 'Bachelor of Science in Information Technology',
            'focus' => 'Web Development',
            'school' => '[School Name]',
            'location' => 'Philippines',
            'graduation' => '[Year]',
            'areas' => [
                'Web Development',
                'Programming',
                'Database Management',
                'Software Engineering',
                'Systems Analysis and Design',
                'Computer Networks',
                'Information Systems',
            ],
        ],
    ],

    'practical_experience' => [
        [
            'title' => 'Academic Development',
            'description' => 'Built software systems and applications as part of academic projects.',
        ],
        [
            'title' => 'Capstone Development',
            'description' => 'Worked on a complete web-based school management system involving frontend, backend, database, authentication, and payment-related functionality.',
        ],
        [
            'title' => 'Personal Development',
            'description' => 'Built additional applications to strengthen programming and web development skills.',
        ],
        [
            'title' => 'Technical Learning',
            'description' => 'Continuously practicing modern development technologies and improving programming fundamentals.',
        ],
    ],

    'process' => [
        [
            'step' => 'Understand the Problem',
            'description' => 'Understand the requirements and users.',
        ],
        [
            'step' => 'Plan',
            'description' => 'Design the system flow, database, and application structure.',
        ],
        [
            'step' => 'Build',
            'description' => 'Develop frontend, backend, APIs, and database functionality.',
        ],
        [
            'step' => 'Test',
            'description' => 'Debug functionality and handle edge cases.',
        ],
        [
            'step' => 'Improve',
            'description' => 'Refactor, document, and improve the system.',
        ],
    ],

    'job_target' => [
        'primary' => ['Junior Web Developer', 'Junior Full Stack Developer', 'Junior Software Developer'],
        'secondary' => [
            'Front-End Developer',
            'Back-End Developer',
            'PHP/Laravel Developer',
            'IT Support',
            'Technical Support',
            'Application Support',
            'IT Staff',
            'Junior IT Specialist',
        ],
    ],

    'soft_skills' => [
        'Problem Solving',
        'Communication',
        'Teamwork',
        'Adaptability',
        'Attention to Detail',
        'Time Management',
        'Willingness to Learn',
        'Troubleshooting',
    ],

];
