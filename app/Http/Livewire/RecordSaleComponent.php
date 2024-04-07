<?php

namespace App\Http\Livewire;

use App\Models\PreviousSale;
use App\Models\Product;
use Livewire\Component;

class RecordSaleComponent extends Component
{
    public $qty,$unit_cost,$selling_price;
    public $selectedProduct;

    protected $rules = [
        'selectedProduct'=>'required|exists:products,id',
        'qty' => 'required|numeric',
        'unit_cost' => 'required|numeric',
    ];

    public function render()
    {
        // part 2 - constant values
        $profit_margin = 15/100;   // 15 as per document given
        $shipping_cost = 10;

        if(!empty($this->qty) && !empty($this->unit_cost)){
            $cost = $this->qty * $this->unit_cost;
            $this->selling_price = round((($cost / (1- $profit_margin))+$shipping_cost),2);
        }

        $products = Product::all();
        
        return view('livewire.record-sale-component',compact('products'));
    }


    function recordSale(){
        $this->validate();

        $previous_sale = new PreviousSale();
        $previous_sale->product_id = $this->selectedProduct;
        $previous_sale->qty = $this->qty;
        $previous_sale->unit_cost = $this->unit_cost;
        $previous_sale->selling_price = $this->selling_price;
        $previous_sale->save();

        // clear input
        $this->qty ="";
        $this->unit_cost ="";
        $this->selectedProduct = "";
        $this->selling_price = "";

        // fire an event
        $this->emit('updatePreviousSales');

    }
}
