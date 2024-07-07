<x-layout>
<div>
<form class="custom-form mb-5 form-article" method="POST" action="{{ route('workwithus.submit') }}">
    @csrf
    <div class="custom-form-group">
        <label for="name">{{__('ui.name')}}</label>
        <input type="text" class="custom-form-control form--input" id="name" name="first_name" value="{{ old('first_name') }}" required>
        @error('last_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
    <div class="custom-form-group">
        <label for="surname">{{__('ui.surname')}}</label>
        <input type="text" class="custom-form-control form--input" id="surname" name="last_name" value="{{ old('last_name') }}" required>
        @error('first_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
    <div class="custom-form-group">
        <label for="age">{{__('ui.age')}}</label>
        <input type="number" class="custom-form-control form--input" id="age" name="age" value="{{ old('age') }}" required>
        @error('age')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
    <div class="custom-form-group">
        <label for="email">{{__('ui.email')}}</label>
        <input type="email" class="custom-form-control form--input" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
    <div class="custom-form-group">
        <label for="cover_letter">{{__('ui.coverletter')}}:</label>
        <textarea class="custom-form-control form--input" id="cover_letter" name="cover_letter" rows="5" required>{{ old('cover_letter') }}</textarea>
        @error('cover_letter')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
    <button type="submit" class="custom-btn custom-btn-primary custom-form--submit mt-5 footer_bottom">{{__('ui.submit')}}</button>
</form>
</div>

</x-layout>