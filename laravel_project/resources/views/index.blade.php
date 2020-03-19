@extends('template4')
@section('css')
    <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.4em;
        }
        .is-info {
            margin: 0.3em;
        }
        select, .is-info {
    margin: 0.3em;

        }
    </style>
@endsection
@section('content')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif

    <div class="card">
    <header class="card-header">
        <p class="card-header-product_name">Products</p>
        <div class="select">
            <select onchange="window.location.href = this.value">
                <option value="{{ route('products.index') }}">Toutes catégories</option>
                
                @foreach($categories as $category)
                    <option value="{{ route('products.category', $category->name) }}" {{ $name = $category->name ? 'selected' : '' }}>{{ $category->name }}</option>
                    
                @endforeach
            </select>
        </div>
        <a class="button is-info" href="{{ route('products.create') }}">Créer un produit</a>
    </header>
    
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Artistes</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><strong>{{ $product->artist_name }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('products.show', $product->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('products.edit', $product->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
       
@endsection



