<div>
    <div class="card border border-light">
        <div class="card-header bg-primary">
            <h3 class="mt-2 text-white">Add Fan</h3>
        </div>
        <div class="card-body shadow">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="name">
                <label for="name">Name</label>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="age">
                <label for="age">Age</label>
                @error('age')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="address">
                <label for="address">Address</label>
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="idol_name">
                <label for="idol_name">Idol Name</label>
                @error('idol_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="group_name">
                <label for="group_name">Group Name</label>
                @error('group_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
               
            <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" wire:click="addFan()">
                    Add Fan
                </button>
            </div>
        </div>
    </div>
</div>
