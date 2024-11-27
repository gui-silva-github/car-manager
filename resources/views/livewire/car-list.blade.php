<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>CRUD em Laravel</h2>
                </div>
                <div class="col">
                    <a href="/add/new" wire:navigate class="btn btn-success btn-sm float-end">Adicionar novo carro</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped align-middle" id="carros">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Capacidade do motor</th>
                        <th scope="col">Tipo de combustível</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>
                        <!--<th></th>-->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $item)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$item->nome}}</td>
                            <td>{{$item->marca}}</td>
                            <td>{{$item->motor}}</td>
                            <td>{{$item->combustivel}}</td>
                            <td><a href="/edit/car/{{$item->id}}" wire:navigate class="btn btn-primary btn-sm"><box-icon type='solid' name='edit'></box-icon></a></td>
                            <td>
                                <button data-id="{{$item->id}}" class="btn btn-danger btn-sm" wire:click="delete({{$item->id}})" onclick="confirmDelete({{$item->id}}, '{{ $item->nome }}', '{{ $item->marca }}', '{{ $item->motor }}', '{{ $item->combustivel }}')">
                                    <box-icon name='trash'></box-icon>
                                </button>
                            </td>
                            <!--<td>
                                <div class="spinner-grow" role="status" wire:loading wire:target="delete({{$item->id}})">
                                </div>
                            </td>-->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(()=>{
        $('#carros').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.0.5/i18n/pt-BR.json',
            }
        });
    })
</script>

<script>

    function confirmDelete(id, nome, marca, motor, combustivel) {
        const message = `Você tem certeza que deseja excluir ${nome} - ${marca}, ${motor} - ${combustivel}?`;

        if (confirm(message)) {
            @this.call('delete', id);
        }
    }

</script>
