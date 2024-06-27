<div>    
    {{-- <form wire:submit.prevent="store" class="mb-5 form-article">
        <div class="mb-3">
            <label class="form-label">title</label>
            <input type="text" class="form-control" wire:model.blur="title">
            @error('title')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">price</label>
            <input type="text" class="form-control" wire:model.blur="price">
            @error('price')
                <span class="small text-danger">{{$message}}</span>
            @enderror
          </div>
        <div class="mb-3">
          <label class="form-label">description</label>
          <textarea type="text" class="form-control" wire:model="description" id="autoResizeTextarea"></textarea>
          @error('description')
              <span class="small text-danger">{{$message}}</span>
          @enderror
        </div>
        <select class="form-select" wire:model="Categoria">
            <option value="" selected disabled>Select a category</option>
            @foreach ($Categories as $Category)
                <option value="{{ $Category->id }}">{{$Category->name}}</option>
            @endforeach           
        </select>
        <button type="submit" class="btn btn-primary mt-5">Crea Articolo</button>
    </form> --}}

    <form wire:submit.prevent="store" class="form mb-5 form-article">
        
        <div class="d-flex justify-content-center">
            <span class="signup">Crea un Articolo</span>
        </div>
        
        
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control form--input" wire:model.blur="title">
            @error('title')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control form--input" wire:model.blur="price">
            @error('price')
                <span class="small text-danger">{{$message}}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea type="text" class="form-control form--input" wire:model="description" id="autoResizeTextarea"></textarea>
            @error('description')
                <span class="small text-danger">{{$message}}</span>
            @enderror
          </div>

        <select class="form-select" wire:model="Categoria">
            <option value="" selected disabled>Select a category</option>
            @foreach ($Categories as $Category)
                <option value="{{ $Category->id }}">{{$Category->name}}</option>
            @endforeach           
        </select>
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary form--submit mt-5 footer_bottom">Crea Articolo</button>
        </div>
        </form>
    </form>
</div>
