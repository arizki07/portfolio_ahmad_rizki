@extends('layouts.landing.main')
@section('content_landing')
@section('css')
    <style>
        .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }

        .zoom-image {
            transition: transform 0.3s ease;
        }

        .card-img-top:hover {
            transform: scale(1.05);
        }

        .card {
            max-width: 350px;
            margin: 0 auto;
        }

        .status-dot {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .status-dot-animated {
            animation: blink 1s infinite;
        }

        .status-green {
            background-color: green;
        }

        .status-blue {
            background-color: blue;
        }

        .status-red {
            background-color: red;
        }

        .text-green {
            color: green;
        }

        .text-blue {
            color: blue;
        }

        .text-red {
            color: red;
        }

        .text-gray {
            color: gray;
        }

        .heading {
            font-size: 16px;
            /* Smaller font size for project name */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            /* Truncate long names */
        }

        .card-body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .meta {
            flex-grow: 1;
            display: flex;
            justify-content: space-between;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* CSS BLUR */
        .background-blur {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('landing/images/image_1.jpg');
            background-size: cover;
            background-position: center;
            filter: blur(4px);
            z-index: -1;
            /* Ensure the blur is behind the text */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            /* Optional: Adds a dark overlay */
            z-index: 0;
            /* Layer on top of the blurred background but behind content */
        }

        .ftco-section {
            position: relative;
            z-index: 1;
            /* Ensures the content (text and buttons) stays in front */
        }
    </style>
@endsection
<section class="ftco-section ftco-hireme img" style="position: relative; min-height: 460px;">
    <div class="background-blur"></div>
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 ftco-animate text-center">
                <h2 style="margin-bottom: 20px"><a href="/"><span>Home</span></a> - Portfolio</h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-project" id="projects-section">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Projects</h1>
                <h2 class="mb-4">Visit My Portfolio</h2>
                {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> --}}
            </div>
        </div>

        @if ($project->isEmpty())
            <!-- Display Alert when no projects are available -->
            <div class="alert alert-warning" role="alert">
                <div class="d-flex">
                    <div>
                        <!-- Download SVG icon from http://tabler-icons.io/i/exclamation-triangle -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 3l9 18H3l9 -18z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="alert-title">No Projects Available</h4>
                        <div class="text-secondary">It seems we don't have any projects to show at the moment. Please
                            check back later!</div>
                    </div>
                </div>
            </div>
        @else
            <div class="row no-gutters">
                @foreach ($project as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card" style="max-width: 350px;"> <!-- Increased width -->
                            <a href="#" data-toggle="modal" data-target="#projectModal{{ $item->id }}">
                                <img src="{{ asset('storage/my_project/' . $item->foto) }}"
                                    class="card-img-top zoom-image" alt="{{ $item->nama }}">
                            </a>
                            <div class="card-body">
                                <div class="text mt-3">
                                    <h3 class="heading">
                                        <a href="#" data-toggle="modal"
                                            data-target="#projectModal{{ $item->id }}">
                                            {{ $item->nama }}
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center mb-3 meta">
                                        <p class="mb-0">
                                            <span class="mr-2">
                                                <span>{{ \Carbon\Carbon::parse($item->tgl_project)->format('d M, Y') }}</span>
                                            </span>
                                        <div class="status">
                                            @if ($item->status == 1)
                                                <span class="status-dot status-dot-animated status-green"
                                                    style="font-size:11px"></span> <b class="text-green">Complete</b>
                                            @elseif ($item->status == 2)
                                                <span class="status-dot status-dot-animated status-blue"
                                                    style="font-size:11px"></span> <b class="text-blue">Progress</b>
                                            @elseif ($item->status == 3)
                                                <span class="status-dot status-dot-animated status-red"
                                                    style="font-size:11px"></span> <b class="text-red">Pending</b>
                                            @else
                                                <span class="status-dot status-dot-animated text-gray"
                                                    style="font-size:11px"></span> <b class="text-gray">Unknown</b>
                                            @endif
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="text-center mt-4">
            <a href="{{ url('maintenance') }}" class="btn btn-primary">View All Projects</a>
        </div>
    </div>
</section>

@section('modal')
    @foreach ($project as $item)
        <!-- Modal for each project -->
        <div class="modal fade" id="projectModal{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="projectModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <!-- Gambar di sebelah kiri -->
                            <div class="col-md-4">
                                <img src="{{ asset('storage/my_project/' . $item->foto) }}" class="img-fluid"
                                    alt="{{ $item->nama }}" style="max-height: 550px; object-fit: cover;">

                            </div>
                            <!-- Nama proyek dan informasi di sebelah kanan -->
                            <div class="col-md-8 d-flex flex-column justify-content-between">
                                <p>
                                <div class="status">
                                    {{ \Carbon\Carbon::parse($item->tgl_project)->format('d M, Y') }}
                                    @if ($item->status == 1)
                                        <span class="status-dot status-dot-animated status-green"
                                            style="font-size:11px"></span>
                                        <b class="text-green">Complete</b>
                                    @elseif ($item->status == 2)
                                        <span class="status-dot status-dot-animated status-blue"
                                            style="font-size:11px"></span>
                                        <b class="text-blue">Progress</b>
                                    @elseif ($item->status == 3)
                                        <span class="status-dot status-dot-animated status-red"
                                            style="font-size:11px"></span>
                                        <b class="text-red">Pending</b>
                                    @else
                                        <span class="status-dot status-dot-animated text-gray"
                                            style="font-size:11px"></span>
                                        <b class="text-gray">Unknown</b>
                                    @endif
                                </div>
                                </p>
                                <p class="name">{{ $item->nama }}</p>
                                <p>{{ $item->keterangan }}</p>
                                <a href="{{ url('pengembangan') }}" target="_blank"
                                    class="btn btn-danger view-demo-btn">
                                    View Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@endsection
