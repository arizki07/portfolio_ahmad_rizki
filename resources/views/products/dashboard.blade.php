@extends('layouts.app')
@section('content')
@section('css')
    <style>
        .rounded-square {
            border-radius: 0;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .profile-photo-container {
            overflow: hidden;
            width: 100%;
            max-width: 450px;
            /* Adjust as needed */
            height: auto;
            /* Adjust as needed */
        }

        .profile-photo {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }

        .profile-photo-container:hover .profile-photo {
            transform: scale(1.5);
        }
    </style>
@endsection
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-8">
                <div class="card card-md">
                    <div class="card-stamp card-stamp-lg">
                        <div class="card-stamp-icon bg-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                                <path d="M10 10l.01 0" />
                                <path d="M14 10l.01 0" />
                                <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                            </svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-photo-container">
                                            @if (auth()->user()->foto)
                                                <!-- Display profile photo -->
                                                <img src="{{ asset('storage/profile_photos/' . auth()->user()->foto) }}"
                                                    alt="Profile Photo" class="img-fluid"
                                                    style="width: 300px; height: 300px; object-fit: cover;">
                                            @else
                                                <!-- Display default avatar -->
                                                <img src="default-avatar.png" alt="Default Avatar" class="img-fluid"
                                                    style="width: 150px; height: 150px; object-fit: cover;">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        @if (!auth()->user()->foto)
                                            <!-- Show form to upload photo only if there is no photo -->
                                            <form action="{{ route('user.updatePhoto') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" name="photo" class="form-control mb-3" required>
                                                <button type="submit" class="btn btn-primary">Update Photo</button>
                                            </form>
                                        @endif
                                        <!-- Display user data in disabled form fields -->
                                        <form>
                                            <div class="mb-3">
                                                <input type="text" id="name" class="form-control"
                                                    value="{{ auth()->user()->name }}" disabled>
                                            </div>
                                            <div class="mb-3">
                                                <input type="email" id="email" class="form-control"
                                                    value="{{ auth()->user()->email }}" disabled>
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" id="birthdate" class="form-control"
                                                    value="{{ auth()->user()->birtday }}" disabled>
                                            </div>
                                            <div class="mb-3">
                                                <textarea id="address" class="form-control" disabled>{{ auth()->user()->alamat }}</textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-6 col-lg-4">
                <a href="https://github.com/arizki07" class="card card-sponsor" target="_blank" rel="noopener"
                    style="background-image: url(assets/static/sponsor-banner-homepage.svg)"
                    aria-label="Sponsor Tabler!">
                    <div class="card-body"></div>
                </a>
            </div>

        </div>
    </div>
</div>
@endsection
