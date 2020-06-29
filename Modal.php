<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header">
                <img src="https://image.freepik.com/vector-gratis/perfil-hombre-dibujos-animados_18591-58482.jpg" alt="avatar" class="rounded-circle img-responsive">
            </div>
            <!--Body-->
            <form action="validar.php" method="post">
                <div class="modal-body text-center mb-1">

                    <h5 class="mt-1 mb-2">Carlos Alberto Barrera Lugo</h5>

                    <div class="md-form ml-0 mr-0">
                        <input type="password" name="pass" type="text" id="pass" class="form-control form-control-sm validate ml-0">
                        <label data-error="wrong" data-success="right" for="pass" class="ml-0">Password</label>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-cyan mt-1">Aceder <i class="fas fa-sign-in ml-1"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <!--/.Content-->
    </div>
</div>