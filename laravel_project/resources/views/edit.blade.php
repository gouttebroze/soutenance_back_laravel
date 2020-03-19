@extends('template4')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'une oeuvre</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="field">
       
    </div>

        <div class="card-content">
            <div class="content">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf

                    <div class="field">
                        <label class="label">id</label>
                        <div class="control">
                          <input class="input @error('category_id') is-danger @enderror" type="text" name="category_id" value="{{ old('category_id') }}" placeholder="Support">
                        </div>
                        @error('category_id')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Nom de l'artiste</label>
                        <div class="control">
                          <input class="input @error('artist_name') is-danger @enderror" type="text" name="artist_name" value="{{ old('artist_name') }}" placeholder="Nom de l'artiste">
                        </div>
                        @error('artist_name')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Nom du produit</label>
                        <div class="control">
                          <input class="input @error('product_name') is-danger @enderror" type="text" name="product_name" value="{{ old('product_name') }}" placeholder="Nom du produit">
                        </div>
                        @error('product_name')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label"> </label>
                        <div class="control">
                          <input class="input @error('img_filename') is-danger @enderror" type="text" name="img_filename" value="{{ old('img_filename') }}" placeholder="">
                        </div>
                        @error('img_filename')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Envoi d'une photo</h4>
            <div class="card-body">
                <form action="{{ url('photo') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image"  value="{{ old('image') }}">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
                </form>
            </div>
        </div>
    </div>



                    <div class="field">
                        <label class="label">Année de sortie</label>
                        <div class="control">
                          <input class="input" type="number" name="year" value="{{ old('year') }}" min="1900" max="{{ date('Y') }}">
                        </div>
                        @error('year')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="desc_product" placeholder="desc_product">{{ old('desc_product') }}</textarea>
                          </div>
                        @error('desc_product')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Prix</label>
                        <div class="control">
                          <input class="input @error('price_product') is-danger @enderror" type="decimal" name="price_product" value="{{ old('price_product') }}" placeholder="Prix">
                        </div>
                        @error('price_product')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    
                    <div class="field">
                        <div class="control">
                          <button class="button is-link">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
