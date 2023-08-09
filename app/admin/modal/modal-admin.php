<div class="modal fade" id="modal-admin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar novo Admin</h5>
            </div>
            <div class="modal-body">
                <form class="p-3" method="post" action="processa-cadastro-admin.php">
                    <div class="row form-row align-items-center pb-5">
                        <div class="col-sm-4" align="right">
                            <label for="username">Digite o User:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="username" id="username" required>
                        </div>
                    </div>

                    <div class="row form-row align-items-center pb-5">
                        <div class="col-sm-4" align="right">
                            <label for="email">Digite e Email:</label>
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>

                    <div class="row form-row align-items-center pb-5">
                        <div class="col-sm-4" align="right">
                            <label for="senha">Digite a Senha:</label>
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" name="senha" id="senha">
                        </div>
                    </div>

                    <div class="row form-row align-items-center pb-5">
                        <div class="col-sm-4" align="right">
                            <label for="senha2">Repita a Senha:</label>
                        </div>

                        <div class="col">
                            <input type="password" class="form-control" name="senha2" id="senha2">
                        </div>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Cancelar
                        </button>
                        <button type="submit" class="btn btn-success">Salvar</button>

                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Fechar
                </button>
            </div>
        </div>
    </div>
</div>