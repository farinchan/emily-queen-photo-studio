@extends('back.app')
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <form id="kt_ecommerce_edit_user_form" class="form d-flex flex-column flex-lg-row" 
                action="{{ route('back.user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Foto</h2>
                            </div>
                        </div>
                        <div class="card-body text-center pt-0">
                            <style>
                                .image-input-placeholder {
                                    background-image: url('{{ asset('back/media/svg/files/blank-image.svg') }}');
                                }

                                [data-bs-theme="dark"] .image-input-placeholder {
                                    background-image: url('{{ asset('back/media/svg/files/blank-image-dark.svg') }}');
                                }
                            </style>
                            <div class="image-input image-input-outline image-input-placeholder mb-3"
                                data-kt-image-input="true">
                                <div class="image-input-wrapper w-150px h-150px" style="background-image: url('{{ $user->getPhoto() }}')"></div>
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Ubah Thumbnail">
                                    <i class="ki-duotone ki-pencil fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="file" name="photo" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Batalkan Thumbnail">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Hapus Thumbnail">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <div class="text-muted fs-7">
                                Set foto anggota, hanya menerima file dengan ekstensi .png, .jpg, .jpeg
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Role</h2>
                            </div>
                            <div class="card-toolbar">
                                <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" name="role_admin" value="1"
                                    @if ($user->hasRole('admin')) checked @endif id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    Admin
                                </label>
                            </div>

                            @error('status')
                                <div class="text-danger fs-7">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Biodata</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">

                            <div class="mb-5 fv-row">
                                <label class="required form-label">Nama</label>
                                <input type="text" name="name" class="form-control mb-2"
                                    placeholder="Nama Staff" value="{{ $user->name }}" required />
                                @error('name')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-5 fv-row">
                                <label class="required form-label">Posisi</label>
                                <input type="text" name="position" class="form-control mb-2"
                                    placeholder="Posisi Staff" value="{{  $user->position }}" required />
                                @error('position')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-5 fv-row">
                                <label class=" form-label">Email</label>
                                <input type="email" name="email" class="form-control mb-2" placeholder="Email"
                                    value="{{ $user->email }}"  />
                                @error('email')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-5 fv-row">
                                <label class="form-label">Tentang Anda</label>
                                <textarea name="about" class="form-control mb-2" rows="5" placeholder="Tentang Anda">{{ $user->about }}</textarea>
                                @error('about')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Media Sosial</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-5 fv-row">
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label class="form-label mb-0">Tiktok</label>
                                        <input type="text" name="tiktok" class="form-control mb-2"
                                            placeholder="https://tiktok.com/username" value="{{  $user->tiktok }}" />
                                        @error('tiktok')
                                            <div class="text-danger fs-7">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="form-label mb-0">Twitter</label>
                                        <input type="text" name="twitter" class="form-control mb-2"
                                            placeholder="https://twitter.com/username" value="{{  $user->twitter }}" />
                                        @error('twitter')
                                            <div class="text-danger fs-7">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="form-label mb-0">Instagram</label>
                                        <input type="text" name="instagram" class="form-control mb-2"
                                            placeholder="https://instagram.com/username" value="{{ $user->instagram }}" />
                                        @error('instagram')
                                            <div class="text-danger fs-7">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="form-label mb-0">Linkedin</label>
                                        <input type="text" name="linkedin" class="form-control mb-2"
                                            placeholder="https://linkedin.com/username" value="{{ $user->linkedin }}" />
                                        @error('linkedin')
                                            <div class="text-danger fs-7">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Buat Password</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-5 fv-row">
                                <label class="required form-label">Password</label>
                                <input type="password" name="password" class="form-control mb-2" placeholder="Password" />
                                    <small class="text-muted">Password minimal 8 karakter, kosongkan jika tidak ingin mengubah password</small>
                                @error('password')
                                    <div class="text-danger fs-7">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('back.user.index') }}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">Batal</a>
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Simpan Perubahan</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
