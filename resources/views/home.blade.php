@extends('layouts.app')
@section('content')
<section class="text-center">
    <h1 class="green text-uppercase gradientColor">Boolhub Projects</h1>
    <div class="f-d-jumbotron">

    </div>
</section>
<section>
    <div class="">
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