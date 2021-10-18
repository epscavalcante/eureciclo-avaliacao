@extends('layouts.app')

@section('content')
<form action="{{ route('orders.import') }}" method="post" class="d-flex align-items-start gap-2"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group w-100">
                <input type="file" name="file" id="file" class="form-control @error('file') is-invalid @enderror">

                @error('file')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button class="btn btn-primary">Upload</button>
        </form>

        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th>Comprador</th>
                    <th>Descrição</th>
                    <th>Preço unitário</th>
                    <th>Quantidade</th>
                    <th>Endereço</th>
                    <th>Fornecedor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->comprador }}</td>
                        <td>{{ $order->descricao }}</td>
                        <td class="text-center">{{ $order->preco_unitario }}</td>
                        <td class="text-center">{{ $order->quantidade }}</td>
                        <td>{{ $order->endereco }}</td>
                        <td>{{ $order->fornecedor }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection