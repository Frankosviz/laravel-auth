@extends('layouts.app')
@section('title')
    
@endsection
@section('content')
<section class="text-center">
</section>
<section>
    <div class="d-flex justify-content-between align-items-center">
        <div class="f-d-main-first-container">
            <table class="f-d-table">
                <tr>
                    <th class="text-center fw-bold gradientColor fs-4">Title</th>
                    <th class="text-center fw-bold gradientColor fs-4">Repo-Url</th>

                </tr>
                @foreach ($projects as $project)
                    <tr>
                        <td class="green">{{ $project->title }}</td>
                        <td class="green">{{ $project->repository_url }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="f-d-main-second-container">
            <h2 class="green fs-4 fw-bold text-center text-uppercase">From the community</h2>
            <div class="w-100 d-flex justify-content-between flex-column">
                <div class="f-d-firstFavProject">
                    <a class="f-d-card-layer text-decoration-none" href="#">
                        <!-- Qui andrà la rotta della show -->
                        {{ $project->title }}
                    </a>
                </div>
                <div class="f-d-secondFavProject">
                    <a class="text-decoration-none f-d-card-layer" href="#">
                        <!-- Qui andrà la rotta della show -->
                        {{ $project->title }}
                    </a>
                </div>
                <div class="f-d-thirdFavProject">
                    <a class="text-decoration-none f-d-card-layer" href="#">
                        <!-- Qui andrà la rotta della show -->
                        {{ $project->title }}
                    </a>
                </div>
            </div>
        </div>
    </div>


</section>
@endsection

@section('sidebarContent')
<div class="f-d-nav-vertical">
    <div>
        <p class="green fs-4 fw-bold">
            User
        </p>
        <a href="#" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-chart-line"></i>
            Profile
        </a>
        <a href="#" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-sliders"></i>
            Dashboard
        </a>
        <a href="#" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-list-check"></i>
            Projects
        </a>
    </div>

    <div>
        <p class="green fs-4 fw-bold">
            Data
        </p>
        <a href="#" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-book"></i>
            Documentation
        </a>
        <a href="#" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-chart-line"></i>
            Charts
        </a>
    </div>

    <div>
        <p class="green fs-4 fw-bold">
            Help
        </p>
        <a href="#" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-people-group"></i>
            Community
        </a>
        <a href="#" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-headset"></i>
            Support
        </a>
        <a href="#" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-gear"></i>
            Settings
        </a>
    </div>
</div>

@endsection