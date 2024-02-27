<x-layout>
    <x-success></x-success>
    <x-delete></x-delete>
    <h1><b>Our Library</b></h1>
<div class="container">


    <div class="row justify-content-center">

        @foreach($books as $book)

        <div class="card" style="width: 18rem;margin-right: 10px; margin-left: 10px; padding-left:0px; padding-right:0px;
        box-shadow: 3px 5px 12px -3px rgba(0,0,0,0.27); border:0,1px; margin-top:10px; margin-bottom:10px">

            <img src="{{Storage::url($book['image'])}}" class="img-fluid" alt="...">
            <div class="card-body" style="position: relative;">
                <h4 class="card-title"><b>{{$book->title}}</b></h4>
                <p class="card-text font-italic"><i>{{$book->author}}</i></p>
                <h4 class="card-text" style="color:#f3d113; margin-bottom: 55px;">{{$book->price}}€</h4>
                <button class="buttonPrimary" style="position: absolute; bottom: 10px;"> More</button>
            </div>

        </div>

        @endforeach

    </div>

</div>
</x-layout>