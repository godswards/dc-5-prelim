<div>
    <div class="card">
     <div class="card-header bg-info">
         <h3>Add New Diet</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Diet name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='food'>
             <label for="food">Food</label>
             @error('food')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="type" class="form-select" wire:model.defer='type'>
             <option hidden="true">Select type</option>
             <option selected disabled>Select type</option>
             <option value="protein">protein</option>
             <option value="sour">sour</option>
             <option value="fruit">fruit</option>
             <option value="dairy">dairy</option>
            </select>
         </div>

          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='addDiet()'>
                 Add New Diet
             </button>
          </div>
     </div>
    </div>
 </div>
