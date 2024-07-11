<x-layout>
    <div>
        <form class="custom-form mb-5 form-article" method="POST" action="{{ route('workwithus.submit') }}">
            @csrf
            <div class="custom-form-header">
                <span class="signup">{{__('ui.workwithus')}}</span>
            </div>
            <div class="custom-form-group">
                <label for="name">{{ __('ui.firstname') }}</label>
                <input type="text" class="custom-form-control form--input @error('first_name') is-invalid @enderror" id="name" name="first_name" value="{{ old('first_name') }}">
                @error('first_name')
                    <div class="messaggioDiErroreLogin_Register">{{ $message }}</div>
                @enderror
            </div>
            <div class="custom-form-group">
                <label for="surname">{{ __('ui.lastname') }}</label>
                <input type="text" class="custom-form-control form--input @error('last_name') is-invalid @enderror" id="surname" name="last_name" value="{{ old('last_name') }}">
                @error('last_name')
                    <div class="messaggioDiErroreLogin_Register">{{ $message }}</div>
                @enderror
            </div>
            <div class="custom-form-group">
                <label for="age">{{ __('ui.age') }}</label>
                <input type="number" class="custom-form-control form--input @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age') }}">
                @error('age')
                    <div class="messaggioDiErroreLogin_Register">{{ $message }}</div>
                @enderror
            </div>
            <div class="custom-form-group">
                <label for="email">{{ __('ui.email') }}</label>
                <input type="email" class="custom-form-control form--input @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="messaggioDiErroreLogin_Register">{{ $message }}</div>
                @enderror
            </div>
            <div class="custom-form-group">
                <label for="cover_letter">{{ __('ui.coverletter') }}:</label>
                <textarea class="custom-form-control form--input @error('cover_letter') is-invalid @enderror" id="cover_letter" name="cover_letter" rows="5">{{ old('cover_letter') }}</textarea>
                @error('cover_letter')
                    <div class="messaggioDiErroreLogin_Register">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="custom-btn custom-btn-primary custom-form--submit mt-5 footer_bottom">{{ __('ui.submit') }}</button>
        </form>
    </div>
</x-layout>