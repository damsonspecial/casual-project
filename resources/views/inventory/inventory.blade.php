<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product Inventory') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="table-responsive">
            <div class="table-responsive">
                <div class="table-responsive" >
                    <table class="table" id="categoryDataTable">
                        <thead>
                            <tr>
                                @foreach($categories as $categoryName => $data)
                                
                                <th>{{ $data->category_name}}</th>
                                    @foreach($categoryData as $dataforcategory)
                                    
                                    <td> {{ $dataforcategory['data'] }}</td>
                                    
                                    @endforeach
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                              
                                    
                                
                            
                        </tbody>
                    </table>
                </div>
                
            </div>
            
        </div>
    </div>
   
      
    <script type="text/javascript">
      $(function () {
        
        var table = $('#ckategoryDataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('inventory') }}",
            columns: [
               
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'data', name: 'data'},
                {data: 'data', name: 'data'},
                {data: 'action', name: 'action'},
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ]
        });
        
      });
    </script>
</x-app-layout>


