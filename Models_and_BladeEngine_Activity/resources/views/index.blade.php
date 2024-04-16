@include('partials.header')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Book List</h1>

        <table class="min-w-full border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ISBN</th>
                    <th class="py-2 px-4 border-b">Title</th>
                    <th class="py-2 px-4 border-b">Author</th>
                    <th class="py-2 px-4 border-b">Description</th>
                    <th class="py-2 px-4 border-b">Date Published</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td class="py-2 px-4 border-b>{{$book->isbn}}</td>

                    <td class="py-2 px-4 border-b>{{$book->title}}</td>

                    <td class="py-2 px-4 border-b>{{$book->author}}</td>

                    <td class="py-2 px-4 border-b>{{$book->description}}</td>

                    <td class="py-2 px-4 border-b>{{$book->date_published}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@include('partials.footer')
    @endsection