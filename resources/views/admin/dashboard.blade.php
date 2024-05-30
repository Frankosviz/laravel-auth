@extends('layouts.app')
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
<div>
    <h2 class="green fs-4 fw-bold">
        Top Projects
    </h2>
    <table class="f-d-table">
        <tr class="">
            <th class="text-center fw-bold gradientColor fs-4">Title</th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td class="fw-bold text-center"><strong class="green"> - </strong><a class="text-decoration-none green"
                        href="#">{{ $project->title }}</a></td>
            </tr>
        @endforeach
    </table>
</div>
<h2></h2>
@endsection