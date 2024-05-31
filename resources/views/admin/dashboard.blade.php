@extends('layouts.admin')
@section('content')
<section class="text-center">
    <h1 class="green text-uppercase gradientColor">Boolhub Projects</h1>
    <div class="f-d-jumbotron mb-5">

    </div>
</section>
<section>

    <h2 class="green fs-4 fw-bold text-center text-uppercase mb-5">Frankosviz favorite's Projects</h2>
    <div class="w-100 d-flex justify-content-between ">
        <div class="f-d-firstFavProject">
            <a class="f-d-card-layer text-decoration-none" href="#">
                <!-- Qui andrà la rotta della show -->
                Psy Child
            </a>
        </div>
        <div class="f-d-secondFavProject">
            <a class="text-decoration-none f-d-card-layer" href="#">
                <!-- Qui andrà la rotta della show -->
                Wild Phone
            </a>
        </div>
        <div class="f-d-thirdFavProject">
            <a class="text-decoration-none f-d-card-layer" href="#">
                <!-- Qui andrà la rotta della show -->
                Hot Coffee
            </a>
        </div>
    </div>
    <div class="mt-5">
        <table class="f-d-table">
            <tr>
                <th class="text-center fw-bold gradientColor fs-4">Title</th>
                <th class="text-center fw-bold gradientColor fs-4">Repo-Url</th>
                <th class="text-center fw-bold gradientColor fs-4">Start-Date</th>
                <th class="text-center fw-bold gradientColor fs-4">Status</th>

            </tr>
            @foreach ($projects as $project)
                <tr>
                    <td class="green">{{ $project->title }}</td>
                    <td class="green">{{ $project->repository_url }}</td>
                    <td class="green">{{ $project->start_date }}</td>
                    <td class="green">{{ $project->status }}</td>

                </tr>
            @endforeach
        </table>
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