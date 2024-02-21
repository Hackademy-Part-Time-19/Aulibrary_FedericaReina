<x-layout>
    <h1 style="text-align: center">Register</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <form class="mt-5" action="/register" method="POST">
                    @csrf
                    <div class='mb-3'>
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id='name'>
                    </div>
                    @error('name') <span class="text-danger">{{$message}}</span> @enderror

                    <div class='mb-3'>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id='email'>
                    </div>
                    @error('email') <span class="text-danger">{{$message}}</span> @enderror

                    <div class='mb-3'>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id='password'>
                    </div>
                    @error('password') <span class="text-danger">{{$message}}</span> @enderror

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>

                </form>
            </div>

        </div>

    </div>
</x-layout>