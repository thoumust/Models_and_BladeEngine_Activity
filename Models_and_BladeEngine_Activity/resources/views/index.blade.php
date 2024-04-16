@include('partials.header')

<div class="container mx-auto">
    <h1 class=" text-gray-200 text-2xl font-bold my-5">
        Books Collection
    </h1>

     <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-200 uppercase">
            <tr>
                <th class="border border-green-400 px-4 py-2">ID</th>
                <th class="border border-green-400 px-4 py-2">ISBN</th>
                <th class="border border-green-400 px-4 py-2">Title</th>
                <th class="border border-green-400 px-4 py-2">Author</th>
                <th class="border border-green-400 px-4 py-2">Description</th>
                <th class="border border-green-400 px-4 py-2">Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td class="border border-green-400 px-4 py-2">{{ $book->id }}</td>
                    <td class="border border-green-400 px-4 py-2 font-bold">{{ $book->isbn }}</td>
                    <td class="border border-green-400 px-4 py-2">{{ $book->title }}</td>
                    <td class="border border-green-400 px-4 py-2 font-bold">{{ $book->author }}</td>
                    <td class="border border-green-400 px-4 py-2">{{ $book->description }}</td>
                    <td class="border border-green-400 px-4 py-2">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>




@include('partials.footer')
