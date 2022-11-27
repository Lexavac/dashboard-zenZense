@extends('../layout/' . $layout)

@section('subhead')
    <title>Change Status</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Change Status Transaction</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Form Layout -->
            
            <div class="intro-y box p-10">
                
                <center>
                    <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                        {{-- <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
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
                        </div> --}}
                        <div>
                            {{-- <label for="update-profile-form-1" class="form-label">INV</label> --}}
                            <input id="update-profile-form-1" type="text" class="text-center form-control" placeholder="fullname" value="{{ ["INV-1234567", "INV-9843526", "INV-2987543"][rand(0, 2)] }}" disabled>
                            {{-- <input id="update-profile-form-1" type="text" class="form-control" placeholder="fullname" value="{{ '#INV-' . $faker['totals'][0] . '807556' }}" disabled> --}}
                        </div>
                        <select class="w-50 form-select box mt-3">
                            <option>Pending Payment</option>
                            <option>Completed Payment</option>
                            <option>Sending</option>
                            <option>Completed Order</option>
                        </select>
                    </div>
                </center>

                <div class="text-center mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">
                        <a href="{{ route('transaction-list') }}">Cancel</a>
                    </button>
                    <button type="button" class="btn btn-primary w-24">
                        <a href="{{ route('transaction-list') }}">Save</a>
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