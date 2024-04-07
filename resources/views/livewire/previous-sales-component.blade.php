<div>
    <table class="w-full border-collapse">
        <thead>
            <tr>
                <th class="px-4 py-2 border border-gray-600">Quantity</th>
                <th class="px-4 py-2 border border-gray-600">Unit Cost</th>
                <th class="px-4 py-2 border border-gray-600">Selling Price</th>
            </tr>
        </thead>
        <tbody>
            @if($previous_sales->count() == 0)
                <tr class="bg-gray-100">
                        <td colspan=3><center>No records found</center></td>
                </tr>
            @else
                @foreach ( $previous_sales as $previous_sale )
                    <tr class="bg-gray-100">
                        <td class="border px-4 py-2 border-gray-600">{{ $previous_sale->qty }}</td>
                        <td class="border px-4 py-2 border-gray-600">{{ $previous_sale->unit_cost }}</td>
                        <td class="border px-4 py-2 border-gray-600">{{ $previous_sale->selling_price }}</td>
                    </tr>    
                @endforeach
                
            @endif
            <!-- Add more rows here if needed -->
        </tbody>
    </table>
</div>
