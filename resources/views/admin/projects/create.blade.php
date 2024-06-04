@extends('layouts.admin')
@section('title')
<h1 class="green text-uppercase"><strong class="gradientColor">{{ $project->title }}</strong></h1>
@endsection
@section('content')
<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<form class="h-100" action="{{ route('admin.projects.store', $project->slug) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="f-d-editform-container f-d-transparent-layer-edit">
        @error('title', 'description', 'image_path', 'repository_url', 'url', 'technologies_used', 'start_date', 'end_date', 'status')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="title" class="form-label lightbrown fw-bold">Title</label>
            <div class="input-group">
                <input type="text" class="form-control f-d-bg-form @error('title') title.required @enderror"
                    name="title" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>

        <div class="mb-3">
            <img src="/images/placeholder.webp" width="100" id="uploadPreview">
            <label for="image_path" class="form-label lightbrown fw-bold">Image Path</label>
            <div class="input-group">
                <input type="file" accept="image/*" class="form-control f-d-bg-form @error('image_path') is-invalid @enderror"
                    name="image_path" id="upload_image" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>

        <div class="mb-3">
            <label for="repository_url" class="form-label lightbrown fw-bold">Repo URL</label>
            <div class="input-group">
                <input type="text" class="form-control f-d-bg-form @error('repository_url') is-invalid @enderror"
                    name="repository_url" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label lightbrown fw-bold">Description</label>
            <textarea name="description" id="" cols="30" rows="10"
                class="form-control f-d-bg-form @error('description') description.min|max @enderror"></textarea>
        </div>
        <div class="mb-3">
            <label for="technologies_used" class="form-label lightbrown fw-bold">Technologies</label>
            <div class="input-group">
                <input type="text"
                    class="form-control f-d-bg-form @error('technologies_used') technologies_used.max @enderror"
                    name="technologies_used" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label lightbrown fw-bold">Start Date</label>
            <div class="input-group">
                <input type="date" class="form-control f-d-bg-form @error('start_date') is-invalid @enderror"
                    name="start_date" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>

        <div class="mb-3">
            <label for="end_date" class="form-label lightbrown fw-bold">End Date</label>
            <div class="input-group">
                <input type="date" class="form-control f-d-bg-form @error('end_date') end_date.after @enderror"
                    name="end_date" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label lightbrown fw-bold">Status</label>
            <select name="status" id="status" class="form-select f-d-bg-form @error('status') status.required @enderror"
                required>

                <option value="Not Started">Not Started</option>
                <option value="Started">Started</option>
                <option value="Finished">Finished</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="url" class="form-label lightbrown fw-bold">Url</label>
            <div class="input-group">
                <input type="text" class="form-control f-d-bg-form @error('url') url.required @enderror" name="url"
                    aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <button type="submit" class="f-d-button-form">Create</button>
            <button type="reset" class="f-d-button-form-cancel">Cancel</button>
        </div>
    </div>
</form>


@endsection

@section('sidebarContent')
<div class="f-d-nav-vertical">
    <div>
        <p class="green fs-4 fw-bold">
            User
        </p>
        <a href="{{ route('home') }}" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-chart-line"></i>
            Home
        </a>
        <a href="{{ route('admin.dashboard') }}" class="d-flex justify-content-start align-items-center">
            <i class="fs-5 fa-solid fa-sliders"></i>
            Dashboard
        </a>
        <a href="{{ route('admin.dashboard') }}" class="d-flex justify-content-start align-items-center">
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