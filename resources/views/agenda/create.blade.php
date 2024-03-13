@extends('layouts.main')

@section('content-dashboard')
    <div class="row">
        <div class="offset-lg-3 offset-xl-2 col">
            <div class="dashboard-content">
                <div class="wrapper d-flex justify-content-between align-items-center">
                    <h3 class="title mb-0">Add New Agenda</h3>
                    @include('components.hamburger')
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-form">
                            <form class="form d-flex flex-column">
                                <div class="input-group d-flex flex-column position-relative">
                                    <label for="thumbnail_agenda">Thumbnail Agenda</label>
                                    <img src="{{ asset('assets/images/other/img-not-found.jpg') }}" alt="Image Not Found" class="tag-image mb-2 rounded" width="100" height="100" style="object-fit: cover;">
                                    <label for="thumbnail_agenda" class="input button-file">Choose Thumbnail Agenda</label>
                                    <input required type="file" class="input input-hide input-image" id="thumbnail_agenda">
                                </div>
                                <div class="input-group d-flex flex-column">
                                    <label for="title">Title</label>
                                    <input required type="text" class="input" id="title" placeholder="Enter module title.." autocomplete="off">
                                </div>
                                <div class="input-group d-flex flex-column">
                                    <label for="description">Description</label>
                                    <textarea required rows="4" class="input" id="description" placeholder="Enter module description.." autocomplete="off"></textarea>
                                </div>
                                <div class="button-group d-flex gap-2">
                                    <button type="submit" class="button-primary">Add New Agenda</button>
                                    <a href="{{ route('agenda.index') }}" class="button-reverse">Cancel Add</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            $('.input-image').on('change', function() {
                $('.tag-image').attr('src', URL.createObjectURL(this.files[0]));
            });
        </script>
    @endpush
@endsection
