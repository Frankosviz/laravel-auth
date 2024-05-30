@extends('layouts.app')
@section('content')
    <section class="text-center">
        <h1 class="green">Boolhub Projects</h1>
        <div class="f-d-jumbotron">

        </div>
    </section>
@endsection

@section('sidebarContent')
    <div>
        <h2 class="green fs-4 fw-bold">
            Top Projects
        </h2>
        <table>
            <tr class="d-flex justify-content-around">
                <th>Name</th>
                <th>Owner</th>
            </tr>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->owner }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <h2></h2>
@endsection
