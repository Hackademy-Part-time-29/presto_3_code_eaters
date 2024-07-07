<x-layout>

    <div class="container mt-5">
    <h1>Work With Us</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('workwithus.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
            @if ($errors->has('first_name'))
                <div class="text-danger">{{ $errors->first('first_name') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
            @if ($errors->has('last_name'))
                <div class="text-danger">{{ $errors->first('last_name') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}">
            @if ($errors->has('age'))
                <div class="text-danger">{{ $errors->first('age') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <div class="text-danger">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="cover_letter">Cover Letter</label>
            <textarea class="form-control" id="cover_letter" name="cover_letter" rows="4">{{ old('cover_letter') }}</textarea>
            @if ($errors->has('cover_letter'))
                <div class="text-danger">{{ $errors->first('cover_letter') }}</div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-layout>