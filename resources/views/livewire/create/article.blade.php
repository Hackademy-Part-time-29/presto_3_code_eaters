<div>    
    <form wire:submit.prevent="store" class="form mb-5 form-article">
        <div class="d-flex justify-content-center">
            <span class="signup">{{__('ui.creaarticolo')}}</span>
        </div>        
        <div class="mb-3">
            <label class="form-label">{{__('ui.title')}}</label>
            <input type="text" class="form-control form--input" wire:model.blur="title">
            @error('title')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">{{__('ui.price')}}</label>
            <input type="text" class="form-control form--input" wire:model.blur="price">
            @error('price')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
          <div class="mb-3">
            <label class="form-label">{{__('ui.description')}}</label>
            <textarea type="text" class="form-control form--input" wire:model="description" id="autoResizeTextarea"></textarea>
            @error('description')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        <select class="form-select" wire:model="Categoria">
            <option value="" selected disabled>{{__('ui.category')}}</option>
            @foreach ($Categories as $Category)
                <option value="{{ $Category->id }}">{{$Category->name}}</option>
            @endforeach           
        </select>

        <div class="mb-3">
            <input type="file" wire:model.live="temporary_images" multiple class="form-controll shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
            @error('temporary_images.*')
                <p class="fst-italic text-danger">{{$message}}</p>
            @enderror
            @error('temporary_images')
                <p class="fst-italic text-danger">{{$message}}</p>
            @enderror
        </div>
        @if(!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>Photo prewiew:</p>
                    <div class="row border border-4 border-success rounded shadow py-4">
                        @foreach ($images as $key => $image)
                            <div class="col d-flex flex-column align-items-center my-3">
                                <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});"></div>
                                <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{ $key }})"> X </button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        @endif
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary form--submit mt-5 footer_bottom">{{__('ui.creaarticolobtn')}}</button>
        </div>
    </form>
</div>
