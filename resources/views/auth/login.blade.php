<x-layout>
    <h1 style="text-align: center">Login</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <form class="mt-5" action="/login" method="POST">
                    @csrf
                    <div class='mb-3'>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id='email'>
                    </div>

                    <div class='mb-3'>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id='password'>
                    </div>
                    @error('email') <span class="text-danger">{{$message}}</span> 
                    @enderror

                    <button type="submit" class="btn btn-primary">Login</button>

                </form>
            </div>

        </div>

    </div>
</x-layout>