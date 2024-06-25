<div>    
    <form wire:submit.prevent="store">
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
        <button type="submit" class="btn btn-primary">Crea Articolo</button>
    </form>
</div>
