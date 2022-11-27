@extends('../layout/' . $layout)

@section('subhead')
    <title>Edit Customer</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Edit Customer</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-12">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Form Edit</h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col-reverse xl:flex-row">
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">Customer Name</label>
                                        <input id="update-profile-form-1" type="text" class="form-control" placeholder="fullname" value="{{ $fakers[0]['users'][0]['name'] }}" disabled>
                                    </div>
                                    <div class="pt-5">
                                        <label for="update-profile-form-1" class="form-label">Email Address</label>
                                        <input id="update-profile-form-1" type="text" class="form-control" placeholder="fullname" value="{{ $fakers[0]['users'][0]['email'] }}">
                                    </div>
                                    <div class="pt-5">
                                        <label for="update-profile-form-1" class="form-label">Username</label>
                                        <input id="update-profile-form-1" type="text" class="form-control" placeholder="fullname" value="{{ ["Themeforest", "Codecanyon", "Graphicriver"][rand(0, 2)] }}">
                                    </div>
                                </div>
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">Password</label>
                                        <input id="update-profile-form-1" type="password" class="form-control" placeholder="fullname" value="12345678">
                                    </div>
                                    
                                    <div class="mt-5">
                                        <label>Active Status</label>
                                        <div class="form-switch mt-2">
                                            <input type="checkbox" class="form-check-input">
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <label for="crud-form-3" class="form-label">Total Checkout</label>
                                        <div class="input-group">
                                            <input id="crud-form-3" type="number" class="form-control" placeholder="total" aria-describedby="input-group-1">
                                            <div id="input-group-1" class="input-group-text">items</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <div class="mt-10">
                                    <button type="button" class="btn btn-outline-secondary w-20 mt-3">
                                        <a href="{{ route('users-layout-1') }}">Cancel</a>
                                    </button>
                                    <button type="button" class="btn btn-primary w-20 mt-3">
                                        <a href="{{ route('users-layout-1') }}">Save</a>
                                    </button>
                                </div>
                            </center>
                        </div>
                        <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                            <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img class="rounded-md" alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $fakers[0]['photos'][0]) }}">
                                    <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                        <i data-lucide="x" class="w-4 h-4"></i>
                                    </div>
                                </div>
                                <div class="mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="btn btn-primary w-full">Change Photo</button>
                                    <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->
        </div>
    </div>
@endsection
