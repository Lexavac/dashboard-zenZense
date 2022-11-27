@extends('../layout/' . $layout)

@section('subhead')
<title>Edit Product</title>
@endsection

@section('subcontent')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Edit Product</h2>
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
                                    <label for="update-profile-form-1" class="form-label">Product Name</label>
                                    <input id="update-profile-form-1" type="text" class="form-control"
                                        placeholder="fullname" value="{{ $fakers[0]['users'][0]['name'] }}" disabled>
                                </div>
                                <div class="pt-5">
                                    <label for="update-profile-form-1" class="form-label">Stock</label>
                                    <div class="input-group">
                                        <input id="update-profile-form-1" type="number" class="form-control" placeholder="fullname" value="45">
                                        <div id="input-group-1" class="input-group-text">items</div>
                                    </div>
                                </div>

                                <div class="pt-5">
                                    <label for="update-profile-form-1" class="form-label">Price</label>
                                    <input id="update-profile-form-1" type="number" class="form-control" placeholder="Rp."
                                        value="{{ ["Rp.200.000", "Rp.300.000", "Rp.100.000"][rand(0, 1)] }}">
                                </div>
                                <div class="pt-5">
                                    <label>Active Status</label>
                                    <div class="form-switch mt-2">
                                        <input type="checkbox" class="form-check-input">
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-span-12 2xl:col-span-6">
                                <!-- BEGIN: Multiple File Upload -->
                                <div class="intro-y box mt-5">
                                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                        <h2 class="font-medium text-center mr-auto">Product Image</h2>
                                    </div>
                                    <div id="multiple-file-upload" class="p-5">
                                        <div class="preview">
                                            <form action="/file-upload" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple />
                                                </div>
                                                <div class="dz-message" data-dz-message>
                                                    <div class="text-lg font-medium">Drop files here or click to upload.
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="source-code hidden">
                                            <button data-target="#copy-multiple-file-upload"
                                                class="copy-code btn py-1 px-2 btn-outline-secondary">
                                                <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                                            </button>
                                            <div class="overflow-y-auto mt-3 rounded-md">
                                                <pre id="copy-multiple-file-upload" class="source-preview">
                                                    <code class="html">
                                                        {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                                            <form action="/file-upload" class="dropzone">
                                                                <div class="fallback">
                                                                    <input name="file" type="file" multiple/>
                                                                </div>
                                                                <div class="dz-message" data-dz-message>
                                                                    <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                                                    <div class="text-slate-500">
                                                                        This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        ')) }}
                                                    </code>
                                                </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Multiple File Upload -->
                            </div>
                        </div>
                        <center>
                            <div class="mt-10">
                                <button type="button" class="btn btn-outline-secondary w-20 mt-3">
                                    <a href="{{ route('product-list') }}">Cancel</a>
                                </button>
                                <button type="button" class="btn btn-primary w-20 mt-3">
                                    <a href="{{ route('product-list') }}">Save</a>
                                </button>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Display Information -->
    </div>
</div>
@endsection