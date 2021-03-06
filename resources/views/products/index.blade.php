@extends('layouts.app')



@section('content')

    <div class="big-padding blue-grey white-text ">

        <h1>Productos</h1>

    </div>



    <div class="container">

        <table class="table table-hover text-center color-black">

            <thead>

            <tr>

                <td>Id</td>

                <td>Titulo</td>

                <td>Categoria</td>

                <td>Descripcion</td>

                <td>Precio</td>

                <td>Acciones</td>

            </tr>

            </thead>

            <tbody>

            @foreach ($products as $product)

                <tr>

                    <td>{{ $product->id }}</td>

                    <td>{{ $product->title }}</td>

                    <td>{{ (is_object($product->cat)) ? $product->cat->title : 'N/A' }}</td>

                    <td>{{ $product->description }}</td>

                    <td>{{ (is_object($product->cat) && $product->cat->title == 'Promociones') ? $product->promotion_pricing :$product->pricing }}</td>

                    <td>

                    <a class="green" href="{{url("/products/$product->id")}}">Ver</a>

                        @if(Auth::check() && Auth::user()->rol == 'admin')                            

                            <a href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>

                            @include('products.delete',['product' => $product])

                        @endif



                    </td>



                </tr>

            @endforeach

            </tbody>

        </table>

        <div class="pagination">

                    {{ $products->links() }}

                </div>

    </div>

    <div class="floating">

        <a href="{{url('/products/create')}}" class="btn btn-default btn-fab">

            <i class="material-icons">add</i>

        </a>

    </div>





@endsection

