@extends('../layout/' . $layout)

@section('subhead')
<title>Edit Product</title>
@endsection

@section('subcontent')
{{-- {{$categories}} --}}


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
                <form action="{{ route('edit-pro', $product->id) }}" method="POST">
                    <div class="flex flex-col-reverse xl:flex-row">
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-9">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">Product Name</label>
                                        <input id="update-profile-form-1" type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" disabled>
                                    </div>
                                    <div class="pt-5">
                                        <label for="update-profile-form-1" class="form-label">Stock</label>
                                        <div class="input-group">
                                            <input disabled id="update-profile-form-1" type="number" name="quantity" class="form-control" value="{{ old('quantity', $product->quantity) }}">
                                            <div id="input-group-1" class="input-group-text">items</div>
                                        </div>
                                    </div>
    
                                    <div class="pt-5">
                                        <label for="update-profile-form-1" class="form-label">Price</label>
                                        <input disabled id="update-profile-form-1" type="number" class="form-control" name="price" value="{{ old('price', $product->price) }}">
                                    </div>
                                    <div class="pt-5">
                                        <label>Active Status</label>
                                        <div class="form-switch mt-2">
                                            <input type="checkbox" class="form-check-input">
                                        </div>
                                    </div>
                                </div>
    
                                
                                <div class="col-span-12 2xl:col-span-3">
                                    
    
                                    <div style="margin-top: 100px; margin-left: 20px;">
                                        <button type="button" class="btn btn-outline-secondary w-20 mt-3">
                                            <a href="{{ route('product-list') }}">Cancel</a>
                                        </button>
                                        <button type="button" class="btn btn-primary w-20 mt-3">
                                            <a href="{{ route('product-list') }}">Save</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- END: Display Information -->
    </div>
</div>
@endsection