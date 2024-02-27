<x-layout>
    @guest
        <div class="container-fluid">
            <div class="row" style="height:100vh;">
                <div class="col-sm-6 background-left" style="background-color: #ffffff;">
                    <h2 style="color:rgb(0, 0, 0); font-size:60pt; padding-bottom: 30px; padding-left:50px; padding-right:50px">DO <b>YOU</b> WANT TO <span style="color:  #f3d113">TELL</span> A STORY?</h2>
                    <button class="buttonPrimary" style="background-color: #000; color: white; padding: 10px 20px; border: none;"><a href="/register" style="text-decoration: none; color:white;">Join Us</a></button>
                </div>
                <div class="col-sm-6 background-right" style="background-color: #000000;">
                    <h2 style="color: white; font-size:60pt; padding-bottom: 30px; padding-left:50px; padding-right:50px">DO YOU WANT TO <span style="color:  #f3d113">READ</span> A STORY?</h2>
                    <button class="buttonSecondary" style="; padding: 10px 20px; border: none;"><a href="{{route('books.index')}}" style="text-decoration: none; color:rgb(0, 0, 0);">Our Library</a></button>
                </div>
            </div>
        </div>
    @endguest

    @auth
        <div class="container-fluid">
            <div class="row" style="height:100vh;">
                <div class="col-sm-6 background-left" style="background-color: #ffffff;">
                    <h2 style="color:rgb(0, 0, 0); font-size:60pt; padding-bottom: 30px; padding-left:50px; padding-right:50px">DO YOU WANT TO <span style="color:  #f3d113">TELL</span> A STORY?</h2>
                    <button class="buttonPrimary" style="background-color: #000; color: white; padding: 10px 20px; border: none;"><a href="{{route('books.create')}}" style="text-decoration: none; color:white;">Upload a book</a></button>
                </div>
                <div class="col-sm-6 background-right" style="background-color: #000000;">
                    <h2 style="color: white; font-size:60pt; padding-bottom: 30px; padding-left:50px; padding-right:50px">DO YOU WANT TO <span style="color:  #f3d113">READ</span> A STORY?</h2>
                    <button class="buttonSecondary" style="; padding: 10px 20px; border: none;"><a href="{{route('books.index')}}" style="text-decoration: none; color:rgb(0, 0, 0);">Our Library</a></button>
                </div>
            </div>
        </div>
    @endauth

</x-layout>
