<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Platform Education Blog</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- END STYLE CSS --}}
</head>
<body>

    <div class="wrapper-navbar">
        {{-- NAVBAR --}}
        <nav class="navbar">
            <div class="container d-flex justify-content-between align-items-center">
                <a href="{{ route('homepage.index') }}">
                    <img src="{{ asset('assets/images/brand/brand-logo.svg') }}" alt="Brand Logo" height="42">
                </a>
                <div class="hamburger d-flex d-md-none justify-content-center align-items-center">
                    <img src="{{ asset('assets/images/sidebar/hamburger.png') }}" alt="Hamburger Icon" width="20" height="20">
                </div>
                <div class="navbar-link d-flex gap-4">
                    <a href="{{ route('homepage.index') }}" class="link-item active">Home</a>
                    <a href="#agenda" class="link-item">Agenda</a>
                    <a href="#about" class="link-item">About Us</a>
                    <a target="_blank" href="https://discord.gg/8vR7C2kf" class="link-item d-inline-block d-lg-none">Join Community</a>
                </div>
                <a target="_blank" href="https://discord.gg/8vR7C2kf" class="button-primary-small d-none d-lg-flex align-items-center gap-2">
                    Join Community
                    <img src="{{ asset('assets/images/icon/arrow-light.svg') }}" alt="Arrow Light" width="24">
                </a>
            </div>
        </nav>
        {{-- END NAVBAR --}}


        {{-- NAVBAR AGENDA --}}
        <nav class="navbar-agenda d-none d-md-flex align-items-center justify-content-center">
            <a href="{{ route('homepage.show', 1) }}" class="agenda-link">Array</a>
            <a href="{{ route('homepage.show', 1) }}" class="agenda-link">Record</a>
            <a href="{{ route('homepage.show', 1) }}" class="agenda-link">Pointer</a>
            <a href="{{ route('homepage.show', 1) }}" class="agenda-link">Linked List</a>
            <a href="{{ route('homepage.show', 1) }}" class="agenda-link">Searching</a>
            <a href="{{ route('homepage.show', 1) }}" class="agenda-link">Sorting</a>
            <a href="{{ route('homepage.show', 1) }}" class="agenda-link">Stack</a>
            <a href="{{ route('homepage.show', 1) }}" class="agenda-link">Queue</a>
            <a href="{{ route('homepage.show', 1) }}" class="agenda-link">Tree</a>
        </nav>
        {{-- NAVBAR AGENDA --}}
    </div>


    <main>
        {{-- SECTION HERO --}}
        <section class="hero d-flex align-items-center justify-content-center" id="hero">
            <img src="{{ asset('assets/images/wave/wave-homepage.svg') }}" alt="Wave Homepage" class="wave-homepage">
            <div class="row align-items-center justify-content-center position-relative container">
                <div class="col-lg-10 col-xl-9 mt-lg-5 mt-xl-0 container d-flex align-items-lg-center justify-content-center flex-column text-lg-center">
                    <h1 class="headline">Master the Coding Tides with Our Blog Education Platform</h1>
                    <p class="paragraph">Dive into the world of coding and technology with Learn Wave, your ultimate destination for blog-based education. Explore a vast sea of knowledge, tutorials, and insights, tailored to help you ride the waves of programming and web development. Join us on this educational journey and become a coding maestro with Learn Wave.</p>
                    <div class="button-group d-flex gap-2">
                        <a href="#about" class="button-primary">Explore Blogs Now</a>
                        <a href="#agenda" class="button-reverse">Start Learning</a>
                    </div>
                </div>
            </div>
        </section>
        {{-- END SECTION HERO --}}

        <div class="container">
            {{-- SECTION MODULE --}}
            <section class="module section-gap" id="module">
                <div class="row align-items-end justify-content-between">
                    <div class="col-lg-8 col-xl-6 mb-4 mb-lg-0">
                        <h2 class="title">Your Programming Module with Learn Wave</h2>
                    </div>
                    <div class="col-lg-4">
                        <p class="paragraph">Explore the intricacies of C++ programming through our dedicated learning module on Learn Wave's homepage.</p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 content-gap">
                    <div class="col mb-4">
                        <div class="card-default">
                            <img src="{{ asset('assets/images/agenda/agenda-1.jpg') }}" alt="Agenda Image" class="img-fluid">
                            <div class="card-content">
                                <h4 class="card-default-title">Array</h4>
                                <p class="card-default-paragraph">Fundamental data structure that allows the storage of multiple elements of the same data type under a single identifier. Arrays provide a contiguous block of memory to store elements, and individual elements are accessed using an index, with the first element having an index of 0. Arrays in C++ offer a convenient way to organize and manipulate collections of data, facilitating efficient storage and retrieval of information in a sequential manner.</p>
                                <a href="{{ route('homepage.show', 1) }}" class="button-primary w-100 text-center">Learn Array</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-default">
                            <img src="{{ asset('assets/images/agenda/agenda-2.jpg') }}" alt="Agenda Image" class="img-fluid">
                            <div class="card-content">
                                <h4 class="card-default-title">Record</h4>
                                <p class="card-default-paragraph">Informal term used to describe a user-defined data structure, often implemented with a class or struct, that groups together various data members to represent a cohesive unit of information.</p>
                                <a href="{{ route('homepage.show', 1) }}" class="button-primary w-100 text-center">Learn Record</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-default">
                            <img src="{{ asset('assets/images/agenda/agenda-3.jpg') }}" alt="Agenda Image" class="img-fluid">
                            <div class="card-content">
                                <h4 class="card-default-title">Pointer</h4>
                                <p class="card-default-paragraph">Variable that stores the memory address of another variable, enabling direct access and manipulation of data at that location, providing flexibility and efficiency in managing memory and data structures.</p>
                                <a href="{{ route('homepage.show', 1) }}" class="button-primary w-100 text-center">Learn Pointer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-default">
                            <img src="{{ asset('assets/images/agenda/agenda-4.jpg') }}" alt="Agenda Image" class="img-fluid">
                            <div class="card-content">
                                <h4 class="card-default-title">Linked List</h4>
                                <p class="card-default-paragraph">Computer science is a linear data structure where elements, known as nodes, are connected sequentially. Each node contains data and a reference (or link) to the next node in the sequence, allowing for dynamic memory allocation and efficient insertion or removal of elements in comparison to traditional arrays.</p>
                                <a href="{{ route('homepage.show', 1) }}" class="button-primary w-100 text-center">Learn Linked List</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-default">
                            <img src="{{ asset('assets/images/agenda/agenda-5.jpg') }}" alt="Agenda Image" class="img-fluid">
                            <div class="card-content">
                                <h4 class="card-default-title">Searching</h4>
                                <p class="card-default-paragraph">Computer science refers to the process of locating a specific item or information within a dataset, such as an array or a database. Various algorithms, like linear search or binary search, are employed to efficiently locate and retrieve the desired element, optimizing the retrieval process based on the characteristics of the data structure.</p>
                                <a href="{{ route('homepage.show', 1) }}" class="button-primary w-100 text-center">Learn Searching</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-default">
                            <img src="{{ asset('assets/images/agenda/agenda-6.jpg') }}" alt="Agenda Image" class="img-fluid">
                            <div class="card-content">
                                <h4 class="card-default-title">Sorting</h4>
                                <p class="card-default-paragraph">Computer science involves arranging elements in a specific order, typically in ascending or descending order based on a defined criteria. Sorting algorithms, like bubble sort, merge sort, or quicksort, are applied to reorder data efficiently, optimizing its organization for easier retrieval and analysis.</p>
                                <a href="{{ route('homepage.show', 1) }}" class="button-primary w-100 text-center">Learn Sorting</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-default">
                            <img src="{{ asset('assets/images/agenda/agenda-7.jpg') }}" alt="Agenda Image" class="img-fluid">
                            <div class="card-content">
                                <h4 class="card-default-title">Stack</h4>
                                <p class="card-default-paragraph">Data structure that follows the Last In, First Out (LIFO) principle, where the last element added is the first one to be removed. It operates like a collection of items with two main operations: push (adding an item to the top) and pop (removing the top item), making it useful for managing function calls, parsing expressions, and other applications where items need to be accessed in a reverse order of their arrival.</p>
                                <a href="{{ route('homepage.show', 1) }}" class="button-primary w-100 text-center">Learn Stack</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-default">
                            <img src="{{ asset('assets/images/agenda/agenda-8.jpg') }}" alt="Agenda Image" class="img-fluid">
                            <div class="card-content">
                                <h4 class="card-default-title">Queue</h4>
                                <p class="card-default-paragraph">Computer science is a data structure that follows the First In, First Out (FIFO) principle, where the first element added is the first one to be removed. Similar to waiting in a line, elements are enqueued (added to the rear) and dequeued (removed from the front), making queues suitable for tasks like managing print jobs, handling processes in operating systems, and other scenarios where order preservation is crucial.</p>
                                <a href="{{ route('homepage.show', 1) }}" class="button-primary w-100 text-center">Learn Queue</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-default">
                            <img src="{{ asset('assets/images/agenda/agenda-9.jpg') }}" alt="Agenda Image" class="img-fluid">
                            <div class="card-content">
                                <h4 class="card-default-title">Tree</h4>
                                <p class="card-default-paragraph">Hierarchical data structure composed of nodes, where each node holds a value and can have zero or more child nodes. The topmost node in a tree is called the "root," and nodes with no children are referred to as "leaves." Trees are widely used in computer science for various applications, such as representing hierarchical relationships, organizing data efficiently, and implementing algorithms like binary search trees. They offer a versatile and structured way to store and retrieve information in a manner that reflects hierarchical relationships.</p>
                                <a href="{{ route('homepage.show', 1) }}" class="button-primary w-100 text-center">Learn Tree</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END SECTION MODULE --}}

            {{-- SECTION ADVENTAGE --}}
            <section class="adventage section-gap" id="adventage">
                <div class="row align-items-end justify-content-between">
                    <div class="col-lg-8 col-xl-6 mb-4 mb-lg-0">
                        <h2 class="title">Learn Wave Advantage Elevate Your C++ Learning Experience</h2>
                    </div>
                    <div class="col-lg-4">
                        <p class="paragraph">Discover the distinct advantages of Learn Wave's C++ learning module on our homepage.</p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 content-gap">
                    <div class="col mb-4">
                        <div class="card-adventage">
                            <div class="adventage-icon d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/images/adventage/adventage-1.svg') }}" alt="Adventage Icon" width="24">
                            </div>
                            <h6 class="card-adventage-title">Free Learning Materials</h6>
                            <p class="card-adventage-paragraph">Enjoy the advantage of access to a wealth of high-quality, free learning materials on our platform.</p>
                            <a href="#" class="card-adventage-link d-flex align-items-center gap-2">
                                More Detail
                                <img src="{{ asset('assets/images/icon/arrow-primary.svg') }}" alt="Arrow Primary" width="24">
                            </a>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-adventage">
                            <div class="adventage-icon d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/images/adventage/adventage-2.svg') }}" alt="Adventage Icon" width="24">
                            </div>
                            <h6 class="card-adventage-title">Access Anywhere</h6>
                            <p class="card-adventage-paragraph">Experience the unparalleled convenience of Learn Wave's C++ learning module.</p>
                            <a href="#" class="card-adventage-link d-flex align-items-center gap-2">
                                More Detail
                                <img src="{{ asset('assets/images/icon/arrow-primary.svg') }}" alt="Arrow Primary" width="24">
                            </a>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-adventage">
                            <div class="adventage-icon d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/images/adventage/adventage-3.svg') }}" alt="Adventage Icon" width="24">
                            </div>
                            <h6 class="card-adventage-title">Updated Material</h6>
                            <p class="card-adventage-paragraph">Stay at the forefront of C++ programming with the Learn Wave advantage of continuously updated.</p>
                            <a href="#" class="card-adventage-link d-flex align-items-center gap-2">
                                More Detail
                                <img src="{{ asset('assets/images/icon/arrow-primary.svg') }}" alt="Arrow Primary" width="24">
                            </a>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-adventage">
                            <div class="adventage-icon d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/images/adventage/adventage-4.svg') }}" alt="Adventage Icon" width="24">
                            </div>
                            <h6 class="card-adventage-title">Mini Project Exercise</h6>
                            <p class="card-adventage-paragraph">Elevate your C++ proficiency with the unique Learn Wave advantage of Mini Project Exercises.</p>
                            <a href="#" class="card-adventage-link d-flex align-items-center gap-2">
                                More Detail
                                <img src="{{ asset('assets/images/icon/arrow-primary.svg') }}" alt="Arrow Primary" width="24">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END SECTION ADVENTAGE --}}

            {{-- SECTION ABOUT --}}
            <section class="about section-gap" id="about">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="title">Let’s Get to know our platform and our goals more closely</h2>
                        <div class="scroll-button">
                            <div class="button-group d-flex gap-2">
                                <button type="button" class="button-reverse-small active button-definition">Definition Platform</button>
                                <button type="button" class="button-reverse-small button-vission">Vission & Mission</button>
                                <button type="button" class="button-reverse-small button-target">Target Goal</button>
                            </div>
                        </div>
                        <div class="paragraph-group paragraph-about">
                            <p class="paragraph paragraph-one">Embark on a journey into the heart of Learn Wave, a dynamic platform designed to revolutionize C++ education. Learn about our passionate team, dedicated to crafting a comprehensive and interactive learning experience.</p>
                            <p class="paragraph paragraph-two">Explore the driving principles behind Learn Wave's commitment to excellence, innovation, and fostering a supportive community.</p>
                        </div>
                        <div class="button-group d-flex gap-2">
                            <a href="#agenda" class="button-primary">Explore Module Again</a>
                            <a target="_blank" href="https://wa.me/08123456789" class="button-reverse">Contact Us</a>
                        </div>
                    </div>
                    <div class="d-none d-lg-inline-block offset-xl-1 col-lg-6 col-xl-5">
                        <div class="wrapper-banner">
                            <img src="{{ asset('assets/images/about/banner-about.jpg') }}" alt="Banner About" class="banner-about">
                        </div>
                    </div>
                </div>
            </section>
            {{-- END SECTION ABOUT --}}

            {{-- SECTION FAQ --}}
            <section class="faq section-gap" id="faq">
                <div class="row align-items-end justify-content-between">
                    <div class="col-lg-8 col-xl-6 mb-4 mb-lg-0">
                        <h2 class="title">Frequently Asked Questions Learn Wave C++ Education</h2>
                    </div>
                    <div class="col-lg-4">
                        <p class="paragraph">Explore answers to common questions about Learn Wave's C++ education platform.</p>
                    </div>
                </div>
                <div class="row content-gap row-cols-1 row-cols-lg-2">
                    <div class="col mb-4">
                        <div class="card-faq">
                            <div class="faq-header d-flex align-items-center justify-content-between">
                                <h6 class="card-faq-title">How do I get started with Learn Wave's C++ education platform?</h6>
                                <div class="wrapper-icon d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/arrow-down.svg') }}" alt="Arrwo Down" width="10">
                                </div>
                            </div>
                            <div class="faq-body">
                                <p class="card-faq-paragraph">Learn about the onboarding process and how to access our curated content to kickstart your C++ learning journey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-faq">
                            <div class="faq-header d-flex align-items-center justify-content-between">
                                <h6 class="card-faq-title">Is Learn Wave suitable for beginners in C++ programming?</h6>
                                <div class="wrapper-icon d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/arrow-down.svg') }}" alt="Arrwo Down" width="10">
                                </div>
                            </div>
                            <div class="faq-body">
                                <p class="card-faq-paragraph">Discover the tailored resources and beginner-friendly modules designed to accommodate learners at all proficiency levels.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-faq">
                            <div class="faq-header d-flex align-items-center justify-content-between">
                                <h6 class="card-faq-title">Is Learn Wave suitable for beginners in C++ programming?</h6>
                                <div class="wrapper-icon d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/arrow-down.svg') }}" alt="Arrwo Down" width="10">
                                </div>
                            </div>
                            <div class="faq-body">
                                <p class="card-faq-paragraph">Explore the diversity of content, including tutorials, projects, quizzes, and interactive exercises designed to enhance your understanding of C++.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-faq">
                            <div class="faq-header d-flex align-items-center justify-content-between">
                                <h6 class="card-faq-title">How can I interact with other learners and educators on Learn Wave?</h6>
                                <div class="wrapper-icon d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/arrow-down.svg') }}" alt="Arrwo Down" width="10">
                                </div>
                            </div>
                            <div class="faq-body">
                                <p class="card-faq-paragraph">Learn about community features such as forums, discussion boards, and collaborative projects that foster engagement and knowledge-sharing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-faq">
                            <div class="faq-header d-flex align-items-center justify-content-between">
                                <h6 class="card-faq-title">Are there any prerequisites for accessing certain modules or content?</h6>
                                <div class="wrapper-icon d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/arrow-down.svg') }}" alt="Arrwo Down" width="10">
                                </div>
                            </div>
                            <div class="faq-body">
                                <p class="card-faq-paragraph">Find out if specific prerequisites or foundational knowledge are recommended for certain advanced modules and ensure a smooth learning experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-faq">
                            <div class="faq-header d-flex align-items-center justify-content-between">
                                <h6 class="card-faq-title">How does Learn Wave track my progress, and can I receive certifications?</h6>
                                <div class="wrapper-icon d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/arrow-down.svg') }}" alt="Arrwo Down" width="10">
                                </div>
                            </div>
                            <div class="faq-body">
                                <p class="card-faq-paragraph">Understand how the platform monitors your achievements, provides personalized feedback, and offers certifications to acknowledge your mastery of C++ concepts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END SECTION FAQ --}}

            {{-- SECTION CTA --}}
            <section class="cta section-gap" id="cta">
                <div class="row justify-content-lg-center">
                    <div class="col-xl-10 text-lg-center d-flex flex-column align-items-lg-center">
                        <h1 class="headline">Start your C++ Journey with a Reliable and Updated Platform with Learn Wave</h1>
                        <p class="paragraph">Unlock a world of possibilities in C++ programming. Join Learn Wave for a transformative learning experience that combines expertly curated content, interactive modules, and a vibrant community</p>
                        <div class="button-group d-flex gap-2">
                            <a href="#agenda" class="button-primary">Explore Module</a>
                            <a href="#about" class="button-reverse">About Us More</a>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END SECTION CTA --}}
        </div>
    </main>

    {{-- FOOTER --}}
    <footer class="footer section-gap">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-md-0">
                    <a href="{{ route('homepage.index') }}">
                        <img src="{{ asset('assets/images/brand/brand-logo.svg') }}" alt="Brand Logo" height="42">
                    </a>
                    <p class="paragraph">Dive into the world of coding and technology with Learn Wave, your ultimate destination for blog-based education.</p>
                    <div class="sosmed-link d-flex gap-1">
                        <a target="_blank" href="https://www.facebook.com/" class="link-item d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/sosmed/facebook.svg') }}" alt="Facebook Icon" width="16">
                        </a>
                        <a target="_blank" href="https://wa.me/08123456789" class="link-item d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/sosmed/whatsapp.svg') }}" alt="Whatsapp Icon" width="16">
                        </a>
                        <a target="_blank" href="https://twitter.com/?lang=id" class="link-item d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/sosmed/twitter.svg') }}" alt="Twitter Icon" width="16">
                        </a>
                    </div>
                </div>
                <div class="offset-lg-2 col-6 mb-5 mb-md-0 col-md-2">
                    <h6 class="footer-title">Quick Link</h6>
                    <div class="footer-link d-flex flex-column gap-3">
                        <a href="#home" class="link-footer">Home</a>
                        <a href="#agenda" class="link-footer">Agenda</a>
                        <a href="#about" class="link-footer">About Us</a>
                    </div>
                </div>
                <div class="col-6 mb-5 mb-md-0 col-md-3 col-lg-2">
                    <h6 class="footer-title">Our Adventage</h6>
                    <div class="footer-link d-flex flex-column gap-3">
                        <a href="#adventage" class="link-footer">Free Learning Materials</a>
                        <a href="#adventage" class="link-footer">Access Anywhere</a>
                        <a href="#adventage" class="link-footer">Updated Material</a>
                        <a href="#adventage" class="link-footer">Mini Project Exercise</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2">
                    <h6 class="footer-title">Help & Guide</h6>
                    <div class="footer-link d-flex flex-column gap-3">
                        <a href="" class="link-footer">Terms & Conditions</a>
                        <a href="" class="link-footer">Privacy Policy</a>
                        <a target="_blank" href="https://wa.me/08123456789" class="link-footer">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- END FOOTER --}}

    {{-- COPYRIGHT --}}
    <footer class="copyright text-center">
        <p class="copyright">Copyright © 2024 LearnWave. All Right Reserved.</p>
    </footer>
    {{-- END COPYRIGHT --}}

    {{-- SCRIPT JS --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.slim.min.js') }}"></script>
    <script>
        const buttonSmall = document.querySelectorAll('.button-reverse-small');
        const paragraphAbout = document.querySelector('.paragraph-about');
        const paragraphOne = document.querySelector('.paragraph-one');
        const paragraphTwo = document.querySelector('.paragraph-two');

        buttonSmall.forEach(button => {
            button.addEventListener('click', function() {
                if (!button.classList.contains('active')) {
                    const buttonActive = document.querySelector('.button-reverse-small.active');
                    buttonActive.classList.remove('active');

                    button.classList.add('active');
                    paragraphAbout.classList.add('hide');

                    setTimeout(() => {
                        if (button.classList.contains('button-definition')) {
                            paragraphOne.innerHTML = 'Embark on a journey into the heart of Learn Wave, a dynamic platform designed to revolutionize C++ education. Learn about our passionate team, dedicated to crafting a comprehensive and interactive learning experience.';
                            paragraphTwo.innerHTML = 'Explore the driving principles behind Learn Waves commitment to excellence, innovation, and fostering a supportive community.';
                        } else if (button.classList.contains('button-vission')) {
                            paragraphOne.innerHTML = 'At Learn Wave, our vision is to be a transformative force in C++ education, envisioning a future where individuals globally harness the power of coding to drive innovation and technological advancement.';
                            paragraphTwo.innerHTML = 'Our mission at Learn Wave is to provide a comprehensive and accessible C++ education platform that transcends traditional boundaries. We are dedicated to empowering learners of all backgrounds with expertly curated content, interactive modules, and a vibrant community.';
                        } else if (button.classList.contains('button-target')) {
                            paragraphOne.innerHTML = 'At Learn Wave, our target is to empower a diverse community of one million learners globally with proficient C++ skills. We aim to break down barriers to education and provide a platform that accommodates various learning styles, backgrounds, and skill levels. By reaching this target, we aspire to contribute significantly to the growth of a skilled and empowered global coding community.';
                            paragraphTwo.innerHTML = 'Our overarching goal at Learn Wave is to redefine the landscape of C++ education within the next five years. We aspire to be the go-to platform for learners seeking a comprehensive and innovative C++ learning experience.';
                        }

                        paragraphAbout.classList.remove('hide');
                    }, '500');
                }
            })
        });

        $('.card-faq').on('click', function() {
            $(this).find('.faq-body').toggleClass('active');
        });

        $('.hamburger').on('click', function() {
            $('.navbar-link').toggleClass('show')
        })
    </script>
    {{-- END SCRIPT JS --}}
</body>
</html>
