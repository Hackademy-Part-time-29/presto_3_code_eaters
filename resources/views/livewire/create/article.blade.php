<div>    
    <form wire:submit.prevent="store" class="custom-form mb-5 form-article">
        <div class="custom-form-header">
            <span class="signup">{{__('ui.creaarticolo')}}</span>
        </div>        
        <div class="custom-form-group">
            <label class="custom-form-label">{{__('ui.title')}}</label>
            <input type="text" class="custom-form-control form--input" wire:model.blur="title">
            @error('title')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="custom-form-group">
            <label class="custom-form-label">{{__('ui.price')}}</label>
            <input type="number" class="custom-form-control form--input" wire:model.blur="price">
            @error('price')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="custom-form-group">
            <label class="custom-form-label">{{__('ui.description')}}</label>
            <textarea type="text" class="custom-form-control form--input" wire:model="description" id="autoResizeTextarea"></textarea>
            @error('description')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="custom-form-group">
            <label class="custom-form-label">{{__('ui.category')}}</label>
            <select class="custom-form-select" wire:model="Categoria">
                <option value="" selected disabled>{{__('ui.category')}}</option>
                @foreach ($Categories as $Category)
                    <option value="{{ $Category->id }}">{{$Category->name}}</option>
                @endforeach           
            </select>
        </div>
        <div class="custom-form-group">
            <input type="file" id="actual-btn" wire:model.live="temporary_images" multiple hidden/>
            <label class="select-file"  for="actual-btn">{{__('ui.choosefile')}}</label>
            @error('temporary_images.*')
                <p class="fst-italic text-danger">{{$message}}</p>
            @enderror
            @error('temporary_images')
                <p class="fst-italic text-danger">{{$message}}</p>
            @enderror
        </div>
        @if(!empty($images))
            <div class="custom-image-preview-container">
                <p>{{__('ui.photopreview')}}</p>
                <div class="custom-image-preview-grid">
                    @foreach ($images as $key => $image)
                        <div class="custom-image-preview-item">
                            <div class="custom-img-preview" style="background-image: url({{$image->temporaryUrl()}});"></div>
                            <button type="button" class="custom-btn custom-btn-danger" wire:click="removeImage({{ $key }})"> X </button>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="custom-form-footer">
            <button type="submit" class="custom-btn custom-btn-primary custom-form--submit mt-5 footer_bottom">+ {{__('ui.creaarticolobtn')}}</button>
        </div>
    </form>
</div>
