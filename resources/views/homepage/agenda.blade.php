@extends('layouts.main')

@section('content-dashboard')
    <div class="row margin-sidebar">
        <div class="col">
            <div class="dashboard-content">
                <div class="wrapper d-flex justify-content-between align-items-center">
                    <h3 class="title mb-0">Array 1 Dimensional Module</h3>
                    @include('components.hamburger')
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-agenda">
                            <div class="sub-module">
                                <h6 class="sub-module-title">Introduction</h6>
                                <p class="sub-module-paragraph">An array is a fundamental data structure in computer programming that allows the storage of multiple elements of the same data type under a single variable name. It provides a systematic way to organize and access these elements using indices, making it a versatile tool for handling collections of data in various algorithms and applications.</p>
                                <div class="button-group d-flex gap-2">
                                    <a target="_blank" href="#" class="button-reverse-sub-module">Watch Video</a>
                                </div>
                            </div>
                            <div class="sub-module">
                                <h6 class="sub-module-title">How To Make Array</h6>
                                <p class="sub-module-paragraph">The array is a crucial concept in computer programming, representing a sequential collection of elements, each identified by an index or a key. To create an array, programmers allocate memory for a specific number of elements, assign values to each element, and use indexing to efficiently access and manipulate the stored data within the program.</p>
                                <div class="button-group d-flex gap-2">
                                    <a target="_blank" href="#" class="button-primary-sub-module">Download E-Book</a>
                                    <a target="_blank" href="#" class="button-reverse-sub-module">Watch Video</a>
                                </div>
                            </div>
                            <div class="sub-module">
                                <h6 class="sub-module-title">How to get array data?</h6>
                                <p class="sub-module-paragraph">In C++, you can access data from an array by using array indexing. The syntax involves specifying the array name followed by square brackets containing the index of the desired element.</p>
                            </div>
                            <div class="sub-module">
                                <h6 class="sub-module-title">How to set value in array?</h6>
                                <p class="sub-module-paragraph">To set a value in an array, you use the array index to identify the position where you want to assign a new value.</p>
                                <div class="button-group d-flex gap-2">
                                    <a target="_blank" href="#" class="button-primary-sub-module">Download E-Book</a>
                                    <a target="_blank" href="#" class="button-reverse-sub-module">Watch Video</a>
                                </div>
                            </div>
                            <div class="sub-module">
                                <h6 class="sub-module-title">How to show array data using looping?</h6>
                                <p class="sub-module-paragraph">You can display array data using a loop to iterate through each element and print its value.</p>
                                <div class="button-group d-flex gap-2">
                                    <a target="_blank" href="#" class="button-primary-sub-module">Download E-Book</a>
                                    <a target="_blank" href="#" class="button-reverse-sub-module">Watch Video</a>
                                </div>
                            </div>
                            <div class="sub-module">
                                <h6 class="sub-module-title">How to get array length?</h6>
                                <p class="sub-module-paragraph">In C++, if you have an array and you want to find its length, you can use the sizeof operator. However, it's important to note that sizeof returns the size in bytes, so you need to divide it by the size of one element to get the number of elements in the array. Here's an example:</p>
                                <div class="button-group d-flex gap-2">
                                    <a target="_blank" href="#" class="button-primary-sub-module">Download E-Book</a>
                                    <a target="_blank" href="#" class="button-reverse-sub-module">Watch Video</a>
                                </div>
                            </div>
                            <div class="sub-module">
                                <h6 class="sub-module-title">Mini Project 1</h6>
                                <p class="sub-module-paragraph">To retrieve or access data from an array, you can use the index corresponding to the desired element. Here's a simple example in a few programming languages.</p>
                                <div class="button-group d-flex gap-2">
                                    <a target="_blank" href="#" class="button-reverse-sub-module">Watch Video</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
