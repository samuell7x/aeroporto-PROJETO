
<div class="row">
    <div class="col-md-8 mx-auto">
        <h2>Status do Voo</h2>
        
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="index.php?pg=status" method="get">
                    <input type="hidden" name="pg" value="status">
                    <div class="mb-3">
                        <label class="form-label">Número do Voo</label>
                        <input type="text" name="voo" class="form-control" placeholder="Ex: AA1234" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data</label>
                        <input type="date" name="data" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search me-2"></i>Consultar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>