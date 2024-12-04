@extends('layouts.admin')

@section('title')
    Order List
@endsection

@section('content')
<div class="container">
    <h2>Order List</h2>

    <!-- Flash messages -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Table to list orders -->
    <table class="table">
        <thead>
            <tr>
                <th>Item No</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Created At</th>
                <th>Slots</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderItems as $orderItem)
            <tr>
                <td>{{ $orderItem->id }}</td>
                <td>{{ $orderItem->item_name }}</td>
                <td>{{ $orderItem->price }}</td>
                <td>{{ $orderItem->quantity }}</td>
                <td>{{ $orderItem->created_at }}</td>
                <td>{{ $orderItem->reservation->slots}}</td>
                <td>{{ $orderItem->status }}</td>
                <td>
                    <!-- Dropdown to select status -->
                    <form action="{{ route('orders.updateStatus', $orderItem->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <select name="status" class="form-control" onchange="this.form.submit()">
                            <option value="Pending" {{ $orderItem->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Accepted" {{ $orderItem->status == 'accepted' ? 'selected' : '' }}>Accepted</option>
                            <option value="Cancelled" {{ $orderItem->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
