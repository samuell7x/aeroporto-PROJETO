
<div class="row">
    <div class="col-md-10 mx-auto">
        <h2>Buscar Voos</h2>
        
        <div class="card search-card">
            <div class="card-body">
                <ul class="nav nav-tabs mb-3" id="flightTab" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#ida-volta">
                            <i class="fas fa-exchange-alt me-2"></i>Ida e Volta
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#somente-ida">
                            <i class="fas fa-plane-departure me-2"></i>Somente Ida
                        </button>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="ida-volta">
                        <form action="index.php" method="get">
                            <input type="hidden" name="pg" value="voos">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Origem</label>
                                    <input type="text" name="origem" class="form-control" placeholder="De onde você vai sair?" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Destino</label>
                                    <input type="text" name="destino" class="form-control" placeholder="Para onde você vai?" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Data Ida</label>
                                    <input type="date" name="data_ida" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Data Volta</label>
                                    <input type="date" name="data_volta" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Passageiros</label>
                                    <select name="passageiros" class="form-select">
                                        <option value="1">1 Passageiro</option>
                                        <option value="2">2 Passageiros</option>
                                        <option value="3">3 Passageiros</option>
                                        <option value="4">4 Passageiros</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">&nbsp;</label>
                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="fas fa-search me-2"></i>Buscar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php if (!empty($_GET['origem']) && !empty($_GET['destino'])): ?>
        <div class="mt-4">
            <h3>Resultados da Busca</h3>
            <div class="list-group">
                <div class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">São Paulo (GRU) → Rio de Janeiro (GIG)</h6>
                            <small class="text-muted">2h · Direto · Boeing 737</small>
                        </div>
                        <div class="text-end">
                            <div class="fw-bold text-primary">R$ 399,00</div>
                            <button class="btn btn-outline-primary btn-sm">Selecionar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>