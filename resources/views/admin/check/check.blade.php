@extends('admin.master')
@section('body')
    <div class="container my-5">
        <h2 class="text-center mb-4">Third Party Api Product List</h2>

        <div class="table-responsive shadow rounded">
            <table class="table table-striped table-hover table-bordered align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price ($)</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Rating</th>
                        <th>Count</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($responseDatas as $index=>$productData)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$productData['title']}}</td>
                        <td>{{$productData['category']}}</td>
                        <td>{{$productData['price']}}</td>
                        <td>{{ \Illuminate\Support\Str::limit($productData['description'],25,'...') }}</td>


                        <td><img src="{{$productData['image']}}" alt="product image" width="50px"></td>
                        <td>{{$productData['rating']['rate']}}</td>
                        <td>{{$productData['rating']['count']}}</td>



                        <td><span class="badge bg-success">Available</span></td>
                    </tr>
                 @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
