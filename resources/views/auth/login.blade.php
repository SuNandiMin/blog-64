<x-layout>
    <div class="container">
    <div class="row">
    <div class="col-md-5 mx-auto">
    <h3 class="text-primary text-center my-2">Register Form</h3>
        <div class="card p-4 my-3 shadow-sm">
        <form method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">
                    Email address
                </label>
                <input 
                    require
                    type="email" 
                    class="form-control" 
                    id="exampleInputEmail1" 
                    aria-describedby="emailHelp"
                    name="email"
                    value="{{old('email')}}"
                >
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">
                    Password
                </label>
                <input 
                    require
                    type="password" 
                    class="form-control" 
                    id="exampleInputPassword1"
                    name="password"
                    value="{{old('password')}}"
                >
            </div>

            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
        </div>
    </div>
    </div>
    </div>
</x-layout>