@extends('layouts.app')

@section('title', 'New User')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>New User</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">User</a></div>
                <div class="breadcrumb-item">New Users</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="card-header">
                                <h4>New User</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control @error ('name')
                                    is-invalid
                                    @enderror" name="name">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control @error('email')
                                        is-invalid
                                        @enderror" name="email">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control @error('password')
                                        is-invalid
                                        @enderror" name="password">
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Roles</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="roles" value="admin" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">Admin</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="roles" value="dosen" class="selectgroup-input">
                                                <span class="selectgroup-button">Dosen</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="roles" value="mahasiswa" class="selectgroup-input">
                                                <span class="selectgroup-button">Mahasiswa</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Address</label>
                                        <textarea class="form-control" data-height="150" name="address"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>
                    <div class="card">

                    </div>
                </div>
                {{-- <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <form>
                                <div class="card-header">
                                    <h4>Server-side Validation</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text"
                                            class="form-control is-valid"
                                            value="Rizal Fakhri"
                                            required="">
                                        <div class="valid-feedback">
                                            Good job!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email"
                                            class="form-control is-invalid"
                                            required=""
                                            value="rizal@fakhri">
                                        <div class="invalid-feedback">
                                            Oh no! Email is invalid.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="email"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Message</label>
                                        <textarea class="form-control is-invalid"
                                            data-height="150"
                                            required="">Hello, i'm handsome!</textarea>
                                        <div class="invalid-feedback">
                                            Oh no! You entered an inappropriate word.
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="card">
                            <form class="needs-validation"
                                novalidate="">
                                <div class="card-header">
                                    <h4>JavaScript Validation (Horizontal Form)</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Your Name</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="form-control"
                                                required="">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email"
                                                class="form-control"
                                                required="">
                                            <div class="invalid-feedback">
                                                Oh no! Email is invalid.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Subject</label>
                                        <div class="col-sm-9">
                                            <input type="email"
                                                class="form-control">
                                            <div class="valid-feedback">
                                                Good job!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label class="col-sm-3 col-form-label">Message</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"
                                                data-height="150"
                                                required=""></textarea>
                                            <div class="invalid-feedback">
                                                What do you wanna say?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div> --}}
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush
