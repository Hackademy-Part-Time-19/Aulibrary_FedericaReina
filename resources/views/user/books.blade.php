<x-layout>
    <x-success></x-success>
    <x-delete></x-delete>
    <h1><b><span style="color:#f3d113">{{auth()->user()->name}}</span>'s Library</b></h1>
    <div class="container">
        <div class="row justify-content-center">
            @foreach($books as $book)
            <div class="card" style="width: 18rem;margin-right: 10px; margin-left: 10px; margin-top: 10px; margin-bottom: 10px;padding:0px;">
                <img src="{{Storage::url($book['image'])}}" class="img-fluid" alt="...">
                <div class="card-body">
                    <h4 class="card-title"><b>{{$book->title}}</b></h4>
                    <p class="card-text font-italic">{{$book->author}}</p>
                    <h4 class="card-text" style="color:#f3d113; margin-bottom: 25px;">{{$book->price}}€</h4>
                    <div class="card-buttons" style="display: flex; justify-content: space-between;">
                        <a href="{{route('books.edit' , ['book'=>$book])}}" class="buttonPrimary" style="text-decoration: none;">Edit</a>
                        <form action="{{route('books.destroy',['book'=>$book])}}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button class="buttonDelete">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    
</x-layout>