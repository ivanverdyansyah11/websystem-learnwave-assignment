@extends('layouts.main')

@section('content-dashboard')
    <div class="row">
        <div class="offset-lg-3 offset-xl-2 col">
            <div class="dashboard-content">
                <div class="wrapper d-flex justify-content-between align-items-center">
                    <h3 class="title mb-0">Agenda Page</h3>
                    @include('components.hamburger')
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <div class="col mb-4">
                        <div class="card-menu-dashboard">
                            <a href="{{ route('module.show', 1) }}" class="card-menu-title">Array</a>
                            <p class="card-menu-paragraph">Fundamental data structure that allows the storage of multiple elements of the same data type under a single identifier. Arrays provide a contiguous block of memory to store elements, and individual elements are accessed using an index, with the first element having an index of 0. Arrays in C++ offer a convenient way to organize and manipulate collections of data, facilitating efficient storage and retrieval of information in a sequential manner.</p>
                            <div class="button-action d-flex">
                                <a href="{{ route('agenda.show', 1) }}" class="detail-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/detail.svg') }}" alt="Detail Icon" width="15">
                                </a>
                                <a href="{{ route('agenda.edit', 1) }}" class="edit-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/edit.svg') }}" alt="Edit Icon" width="15">
                                </a>
                                <button type="button" class="delete-button d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#deleteAgendaModal">
                                    <img src="{{ asset('assets/images/icon/delete.svg') }}" alt="Delete Icon" width="15">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-menu-dashboard">
                            <a href="{{ route('module.show', 1) }}" class="card-menu-title">Record</a>
                            <p class="card-menu-paragraph">Informal term used to describe a user-defined data structure, often implemented with a class or struct, that groups together various data members to represent a cohesive unit of information.</p>
                            <div class="button-action d-flex">
                                <a href="{{ route('agenda.show', 1) }}" class="detail-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/detail.svg') }}" alt="Detail Icon" width="15">
                                </a>
                                <a href="{{ route('agenda.edit', 1) }}" class="edit-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/edit.svg') }}" alt="Edit Icon" width="15">
                                </a>
                                <button type="button" class="delete-button d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#deleteAgendaModal">
                                    <img src="{{ asset('assets/images/icon/delete.svg') }}" alt="Delete Icon" width="15">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-menu-dashboard">
                            <a href="{{ route('module.show', 1) }}" class="card-menu-title">Pointer</a>
                            <p class="card-menu-paragraph">Variable that stores the memory address of another variable, enabling direct access and manipulation of data at that location, providing flexibility and efficiency in managing memory and data structures.</p>
                            <div class="button-action d-flex">
                                <a href="{{ route('agenda.show', 1) }}" class="detail-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/detail.svg') }}" alt="Detail Icon" width="15">
                                </a>
                                <a href="{{ route('agenda.edit', 1) }}" class="edit-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/edit.svg') }}" alt="Edit Icon" width="15">
                                </a>
                                <button type="button" class="delete-button d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#deleteAgendaModal">
                                    <img src="{{ asset('assets/images/icon/delete.svg') }}" alt="Delete Icon" width="15">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-menu-dashboard">
                            <a href="{{ route('module.show', 1) }}" class="card-menu-title">Linked List</a>
                            <p class="card-menu-paragraph">Computer science is a linear data structure where elements, known as nodes, are connected sequentially. Each node contains data and a reference (or link) to the next node in the sequence, allowing for dynamic memory allocation and efficient insertion or removal of elements in comparison to traditional arrays.</p>
                            <div class="button-action d-flex">
                                <a href="{{ route('agenda.show', 1) }}" class="detail-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/detail.svg') }}" alt="Detail Icon" width="15">
                                </a>
                                <a href="{{ route('agenda.edit', 1) }}" class="edit-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/edit.svg') }}" alt="Edit Icon" width="15">
                                </a>
                                <button type="button" class="delete-button d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#deleteAgendaModal">
                                    <img src="{{ asset('assets/images/icon/delete.svg') }}" alt="Delete Icon" width="15">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-menu-dashboard">
                            <a href="{{ route('module.show', 1) }}" class="card-menu-title">Searching</a>
                            <p class="card-menu-paragraph">Computer science refers to the process of locating a specific item or information within a dataset, such as an array or a database. Various algorithms, like linear search or binary search, are employed to efficiently locate and retrieve the desired element, optimizing the retrieval process based on the characteristics of the data structure.</p>
                            <div class="button-action d-flex">
                                <a href="{{ route('agenda.show', 1) }}" class="detail-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/detail.svg') }}" alt="Detail Icon" width="15">
                                </a>
                                <a href="{{ route('agenda.edit', 1) }}" class="edit-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/edit.svg') }}" alt="Edit Icon" width="15">
                                </a>
                                <button type="button" class="delete-button d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#deleteAgendaModal">
                                    <img src="{{ asset('assets/images/icon/delete.svg') }}" alt="Delete Icon" width="15">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-menu-dashboard">
                            <a href="{{ route('module.show', 1) }}" class="card-menu-title">Sorting</a>
                            <p class="card-menu-paragraph">Computer science involves arranging elements in a specific order, typically in ascending or descending order based on a defined criteria. Sorting algorithms, like bubble sort, merge sort, or quicksort, are applied to reorder data efficiently, optimizing its organization for easier retrieval and analysis.</p>
                            <div class="button-action d-flex">
                                <a href="{{ route('agenda.show', 1) }}" class="detail-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/detail.svg') }}" alt="Detail Icon" width="15">
                                </a>
                                <a href="{{ route('agenda.edit', 1) }}" class="edit-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/edit.svg') }}" alt="Edit Icon" width="15">
                                </a>
                                <button type="button" class="delete-button d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#deleteAgendaModal">
                                    <img src="{{ asset('assets/images/icon/delete.svg') }}" alt="Delete Icon" width="15">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-menu-dashboard">
                            <a href="{{ route('module.show', 1) }}" class="card-menu-title">Stack</a>
                            <p class="card-menu-paragraph">Data structure that follows the Last In, First Out (LIFO) principle, where the last element added is the first one to be removed. It operates like a collection of items with two main operations: push (adding an item to the top) and pop (removing the top item), making it useful for managing function calls, parsing expressions, and other applications where items need to be accessed in a reverse order of their arrival.</p>
                            <div class="button-action d-flex">
                                <a href="{{ route('agenda.show', 1) }}" class="detail-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/detail.svg') }}" alt="Detail Icon" width="15">
                                </a>
                                <a href="{{ route('agenda.edit', 1) }}" class="edit-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/edit.svg') }}" alt="Edit Icon" width="15">
                                </a>
                                <button type="button" class="delete-button d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#deleteAgendaModal">
                                    <img src="{{ asset('assets/images/icon/delete.svg') }}" alt="Delete Icon" width="15">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-menu-dashboard">
                            <a href="{{ route('module.show', 1) }}" class="card-menu-title">Queue</a>
                            <p class="card-menu-paragraph">Computer science is a data structure that follows the First In, First Out (FIFO) principle, where the first element added is the first one to be removed. Similar to waiting in a line, elements are enqueued (added to the rear) and dequeued (removed from the front), making queues suitable for tasks like managing print jobs, handling processes in operating systems, and other scenarios where order preservation is crucial.</p>
                            <div class="button-action d-flex">
                                <a href="{{ route('agenda.show', 1) }}" class="detail-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/detail.svg') }}" alt="Detail Icon" width="15">
                                </a>
                                <a href="{{ route('agenda.edit', 1) }}" class="edit-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/edit.svg') }}" alt="Edit Icon" width="15">
                                </a>
                                <button type="button" class="delete-button d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#deleteAgendaModal">
                                    <img src="{{ asset('assets/images/icon/delete.svg') }}" alt="Delete Icon" width="15">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card-menu-dashboard">
                            <a href="{{ route('module.show', 1) }}" class="card-menu-title">Tree</a>
                            <p class="card-menu-paragraph">Hierarchical data structure composed of nodes, where each node holds a value and can have zero or more child nodes. The topmost node in a tree is called the "root," and nodes with no children are referred to as "leaves." Trees are widely used in computer science for various applications, such as representing hierarchical relationships, organizing data efficiently, and implementing algorithms like binary search trees. They offer a versatile and structured way to store and retrieve information in a manner that reflects hierarchical relationships.</p>
                            <div class="button-action d-flex">
                                <a href="{{ route('agenda.show', 1) }}" class="detail-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/detail.svg') }}" alt="Detail Icon" width="15">
                                </a>
                                <a href="{{ route('agenda.edit', 1) }}" class="edit-button d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/icon/edit.svg') }}" alt="Edit Icon" width="15">
                                </a>
                                <button type="button" class="delete-button d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#deleteAgendaModal">
                                    <img src="{{ asset('assets/images/icon/delete.svg') }}" alt="Delete Icon" width="15">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <a href="{{ route('agenda.create') }}" class="d-flex align-items-center justify-content-center card-menu-dashboard text-center">
                            <div class="wrapper-content">
                                <img src="{{ asset('assets/images/icon/plus.png') }}" alt="Plus Icon" width="32">
                                <p class="card-menu-caption">Add New Agenda</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.agenda')
@endsection
