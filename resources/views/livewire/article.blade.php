<div>
    @session('success')
        <div class="alert alert-success" rule="alert">
            {{session('success')}}
        </div>
    @endsession

    <form livewire.submit>
        <div class="mb-3">
            <label class="form-label">title</label>
            <input type="text" class="form-control" wire.model="title">
            @error('title')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">price</label>
            <input type="text" class="form-control" wire.model="price">
            @error('price')
                <span class="small text-danger">{{$message}}</span>
            @enderror
          </div>
        <div class="mb-3">
          <label class="form-label">description</label>
          <input type="text" class="form-control" wire.model="description">
          @error('description')
              <span class="small text-danger">{{$message}}</span>
          @enderror
        </div>
        <select class="form-select" wire:change="category">
            @foreach ($Categories as $Category)
                <option>{{$Category['name']}}</option>
            @endforeach           
        </select>
        <div class="mb-3">
            <label class="form-label">user</label>
            <input type="text" class="form-control" wire.model="user">
            @error('user')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
