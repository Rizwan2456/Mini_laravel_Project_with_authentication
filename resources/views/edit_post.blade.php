<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>
    <section>
        <div class="container bg-white mt-5 shadow-lg">
            <div class="row bg-light shadow-sm">
                <div class="col mt-2">
                    <div class="h2 fw-bold d-flex justify-content-center">
                        Edit Post
                    </div>
                </div>
            </div>
            
            <div class="mt-2 row d-flex justify-content-center">
                <div class="col-10">
                    <form action="{{url('/post/edit' ,$post->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label fw-normal">Post Title</label>
                            <input type="text" name="title" class="form-control" placeholder='Post title' value="{{$post->title}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-normal">Post Body</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="body">{{$post->body}}</textarea>
                        </div>
                        <input type="submit" class="mb-3 btn btn-primary shadow-sm" value="Edit" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>