@extends('layouts.app')

@section('content')
    <div class="table-container">
        <h1 style="text-align: center;">Weight Monitoring Dashboard</h1>
        <table id="weight-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Weight 1 (kg)</th>
                    <th>Weight 2 (kg)</th>
                    <th>Percent Weight 1 (%)</th>
                    <th>Percent Weight 2 (%)</th>
                    <th>Timestamp</th>
                </tr>
            </thead>
            <tbody>
                @foreach($weights as $weight)
                    <tr>
                        <td>{{ $weight->id }}</td>
                        <td>{{ $weight->weight1 }}</td>
                        <td>{{ $weight->weight2 }}</td>
                        <td>{{ $weight->percent_weight1 }}</td>
                        <td>{{ $weight->percent_weight2 }}</td>
                        <td>{{ $weight->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        // JavaScript for scrolling the table
        var table = document.getElementById('weight-table');
        var wrapper = document.createElement('div');
        wrapper.style.overflow = 'auto';
        wrapper.style.maxHeight = '400px'; // Adjust max height as needed
        wrapper.appendChild(table.parentNode.replaceChild(wrapper, table));
        wrapper.appendChild(table);
    </script>
@endsection
