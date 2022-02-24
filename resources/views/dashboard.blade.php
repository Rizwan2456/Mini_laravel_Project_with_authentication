<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Post') }}
        </h2>
    </x-slot>
    <section>
        <div class="container bg-white mt-5 shadow-lg">
            <div class="row bg-light shadow-sm">
                <div class="col mt-2">
                    <div class="h2 fw-bold d-flex justify-content-center">
                        ALL Post
                    </div>
                </div>
            </div>
            @if (session()->has('status'))
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                          </div>
                    </div>
                </div>
            @endif
            <div class="mt-2 row d-flex justify-content-center">
                <div class="col">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Title</th>
                                <th scope="col">Body</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                              $count=1;  
                            @endphp
                            @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">@php echo $count++ @endphp</th>
                                    <td>{{$post->user->name}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->body}}</td>
                                    <td><a href="{{url('/post/edit',$post->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
                                        <form action="{{url('/post/delete',$post->id)}}" method="post" style="display:inline">
                                            @csrf @method('DELETE') 
                                            <button type="submit" name='submit' class="ms-1 btn btn-danger">Delete</button>
                                        </form></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        
    </section>

</x-app-layout>
