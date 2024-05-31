@extends('layouts.admin')
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
                    <th class="text-center fw-bold gradientColor fs-4">Start-Date</th>
                    <th class="text-center fw-bold gradientColor fs-4">Status</th>

                </tr>
                @foreach ($projects as $project)
                    <tr>
                        <td class="green">{{ $project->title }}</td>
                        <td class="green">{{ $project->repository_url }}</td>
                        <td class="green">{{ $project->start_date }}</td>
                        <td class="green">{{ $project->status }}</td>
                        <td class="d-flex align-items-center">
                            <a href="{{ route('admin.projects.show', $project) }}" class="f-d-button">
                                <i class="fa-solid fa-eye">
                                </i>
                            </a>
                            <a href="{{ route('admin.projects.edit', $project) }}" class="f-d-button">
                                <i class="fa-solid fa-pen">
                                </i>
                            </a>
                            <a href="{{ route('admin.projects.destroy', $project) }}" class="f-d-button">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="f-d-main-second-container">

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