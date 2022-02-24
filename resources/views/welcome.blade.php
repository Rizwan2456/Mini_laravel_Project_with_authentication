<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

           {{-- bootstrap --}}
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

       
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                    <div class="container">
                    <div class="row">
                    <div class="col">
                    <div class="alert alert-light float-end">

                        <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
                        
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-dark">Register</a>
                        @endif
                    </div>
                </div>
                </div>
                </div>
                    @endauth
                </div>
            @endif

           
        </div>
        <div class="mt-2 row d-flex justify-content-center">
            <div class="col-10">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Body</th>
                            
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
                               
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{$posts->links('pagination::bootstrap-5')}}
            </div>
        </div>

    </body>
</html>
