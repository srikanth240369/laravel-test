<div>
    <form class="space-y-6" wire:submit.prevent='recordSale()'>
        @csrf
    <div class="flex items-center">

      <div class="flex flex-col">
        <label for="product" class="mb-2">Product:</label>
        <select id="product" name="product" wire:model="selectedProduct" class="w-24 px-2 py-1 border rounded-md focus:outline-none focus:border-blue-500">
            <option value="">Select Product</option>
            @foreach ($products as $product)
              <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
            <!-- Add more options here if needed -->
        </select>
        @error('selectedProduct') <span class="error">{{ $message }}</span> @enderror
      </div>
    

          <div class="flex flex-col">
            <label for="qty" class="mb-2">Quantity:</label>
            <input type="text" id="qty" name="qty" wire:model='qty' class="w-24 px-2 py-1 border rounded-md focus:outline-none focus:border-blue-500">
            @error('qty') <span class="error">{{ $message }}</span> @enderror
          </div>
          
          <div class="flex flex-col ">
            <label for="unit_cost" class="mb-2">Unit Cost:</label>
            <input type="number" id="unit_cost" name="unit_cost" step="0.001" wire:model='unit_cost' class="w-24 px-2 py-1 border rounded-md focus:outline-none focus:border-blue-500">
            @error('unit_cost') <span class="error">{{ $message }}</span> @enderror
          </div>
          
          <div class="flex flex-col ">
            <label for="sellingPrice" class="mb-2">Selling price:</label>
            <label id="sellingPrice">&nbsp;{{ $selling_price }}</label>
          </div>
          <div class="flex flex-col ">
                <button type="submit" >Record Sale</button>
            </div>
      </div>
    </form>
</div>
