<h2>Tell us about yourself</h2>

{{-- print_r($errors) --}}
{{--
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
--}} 

<form action="addUser" method="post">
    <!-- to use methods like patch, put, delete, the form method remains post and we use them with input field. -->
    <!-- though form's actual method will be post but we have to make routes separately as we do for get and post -->
    <!-- input type="hidden" name="_method" value="patch"> -->
    <!-- Route::patch($uri,$callback) -->
    @csrf
    <div>
        <h5>Info</h4>
        <input type="text" name="username" placeholder="Enter your name" value="{{old('username', 'Jitendra')}}" class="{{ $errors->has('username') ? 'error' : '' }}">
        <span style="color: red;">@error('username'){{$message}}@enderror</span>
        <br> <br>

        <input type="email" name="email" placeholder="Enter your email" value="{{old('email')}}">
        <span style="color: red;">@error('email'){{$message}}@enderror</span>
        <br> <br>

        <input type="text" name="city" placeholder="Enter your city" value="{{old('city')}}">
        <span style="color: red;">@error('city'){{$message}}@enderror</span>
    </div>
    <div>
        <h5>User skill</h4>
        
        <input type="checkbox" name="skill[]" value="PHP" id="php"> <label for="php" >PHP</label>
        <input type="checkbox" name="skill[]" value="Node" id="node"> <label for="node" >Node</label>
        <input type="checkbox" name="skill[]" value="Java" id="java"> <label for="java" >Java</label>
        <span style="color: red;">@error('skill'){{$message}}@enderror</span>
    </div>
    <div>
        <br>
        <button>Add New User</button>
    </div>

</form>

<style>
    .error {
        border: 1px solid red;
        color: red;
        background-color: #f8d7da;
        padding: 5px;
        border-radius: 5px;
        margin: 5px 0;
        box-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
    }
    .error:focus {
        outline: none;
        border: 1px solid green;
    }
</style>
