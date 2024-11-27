<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>CRUD em Laravel</h2>
                </div>
                <div class="col">
                    <a href="/cars" wire:navigate class="btn btn-primary btn-sm float-end">Lista de Carros</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form wire:submit="saveCar">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" wire:model="nome" class="form-control" id="nome" name="nome" placeholder="Digite o nome do carro">

                    @error('nome')
                        <span class="text-danger">O campo é obrigatório!</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" wire:model="marca" class="form-control" id="marca" name="marca" placeholder="Digite a marca do carro">

                    @error('marca')
                        <span class="text-danger">O campo é obrigatório!</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="motor" class="form-label">Capacidade do motor</label>
                    <input type="number" wire:model="motor" class="form-control" id="motor" name="motor" placeholder="Digite o motor do carro">

                    @error('motor')
                        <span class="text-danger">O campo é obrigatório!</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="combustivel" class="form-label">Tipo de combustível</label>
                    <select name="combustivel" wire:model="combustivel" id="combustivel" class="form-select">
                        <option value="">Selecione o tipo de combustível</option>
                        <option value="Gasolina">Gasolina</option>
                        <option value="Etanol">Etanol</option>
                        <option value="Eletrico">Elétrico</option>
                        <option value="Flex">Flex</option>
                        <option value="Hibrido">Híbrido</option>
                    </select>

                    @error('combustivel')
                        <span class="text-danger">O campo é obrigatório!</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
</div>
