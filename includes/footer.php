
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">¿Estas seguro que quieres salir?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../util/logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
      <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <!-- script para la modal editar proyecto -->

    <script>
            $(document).ready(function() {
                // Cuando se hace clic en el botón de edición
                $('.editBtn').on('click', function() {
                    // Obtén los datos del proyecto desde los atributos del botón
                    var id_proyecto = $(this).data('id');
                    var nombre_proyecto = $(this).data('nombre');
                    var descripcion = $(this).data('descripcion');
                    
                    // Asigna los valores a los campos del formulario en la modal
                    $('#edit_id_proyecto').val(id_proyecto);
                    $('#edit_nombre_proyecto').val(nombre_proyecto);
                    $('#edit_descripcion').val(descripcion);
                    
                    // Abre la modal
                    $('#editModal').modal('show');
                });

                // Al hacer clic en el botón de eliminación, pasamos el id al modal
                $('.finishBtn').on('click', function() {
                    var id = $(this).data('id');
                    $('#finish_id').val(id); // Pasamos el id al campo oculto del modal
                });
            });


    </script>

</body>

</html>