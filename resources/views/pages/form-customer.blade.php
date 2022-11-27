@extends('../layout/' . $layout)

@section('subhead')
    <title>Add New Customer</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">ADD NEW CUSTOMER</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Form Layout -->
            
            <div class="intro-y box p-10">
                
                <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                    <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                            <img class="rounded-md" alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $fakers[0]['photos'][0]) }}">
                            <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </div>
                        </div>
                        <div class="mx-auto cursor-pointer relative mt-5">
                            <button type="button" class="btn btn-primary w-full">Upload Photo</button>
                            <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                        </div>
                    </div>
                </div>
                <div>
                    <label for="crud-form-1" class="form-label mt-5">Customer Name</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="full name">
                </div>
                <div>
                    <label for="crud-form-1" class="form-label mt-5">Email Address</label>
                    <input id="crud-form-1" type="email" class="form-control w-full" placeholder="email">
                </div>
                <div>
                    <label for="crud-form-1" class="form-label mt-5">Username</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="username">
                </div>
                <div>
                    <label for="crud-form-1" class="form-label mt-5">Password</label>
                    <input id="crud-form-1" type="password" class="form-control w-full" placeholder="password">
                </div>
                <div class="mt-3">
                    <label>Active Status</label>
                    <div class="form-switch mt-2">
                        <input type="checkbox" class="form-check-input">
                    </div>
                </div>
                <div class="mt-3">
                    <label for="crud-form-3" class="form-label">Total Checkout</label>
                    <div class="input-group">
                        <input id="crud-form-3" type="text" class="form-control" placeholder="total" aria-describedby="input-group-1">
                        <div id="input-group-1" class="input-group-text">items</div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">
                        <a href="{{ route('users-layout-1') }}">Cancel</a>
                    </button>
                    <button type="button" class="btn btn-primary w-24">
                        <a href="{{ route('users-layout-1') }}">Save</a>
                    </button>
                </div>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection

@section('script')
    @vite('resources/js/ckeditor-classic.js')
@endsection
