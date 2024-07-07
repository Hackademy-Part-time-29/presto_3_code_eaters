<x-layout>

<form method="POST" action="{{ route('workwithus.submit') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="first_name" value="{{ old('first_name') }}" required>
    </div>
    <div class="form-group">
        <label for="surname">Surname:</label>
        <input type="text" class="form-control" id="surname" name="last_name" value="{{ old('last_name') }}" required>
    </div>
    <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
    </div>
    <div class="form-group">
        <label for="cover_letter">Cover Letter:</label>
        <textarea class="form-control" id="cover_letter" name="cover_letter" rows="5" required>{{ old('cover_letter') }}</textarea>
    </div>
    <button type="submit" class="btn btn_get btn_get_two button_form">Submit</button>
</form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-layout>