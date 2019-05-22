        </div>
    </div>
</div>

        <!-- jQuery -->
        <script src="./js/jquery.min.js"></script>

        <!-- Tag plugin's JavaScript -->
        <script src="./js/select2.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="./js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="./js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="./js/dataTables/jquery.dataTables.min.js"></script>
        <script src="./js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="./js/startmin.js"></script>

        <!-- Customized JavaScript -->
        <script src="./js/app.js"></script>

        <script>
            $(document).ready(function() {
                $(".alert-success").fadeIn(6000, 500).delay(3000).slideUp(900, function() {
                    $(this).remove();
                });
                $('#tbl-iLinks').DataTable({
                    columnDefs: [{
                        targets: [ 0 ],
                        orderData: [ 0, 1 ]
                    }],
                    responsive: true,
                    stateSave: true
                });
                $('.tags').select2({
                    tags: true,
                    tokenSeparators: [',', ' ']
                });
            });
        </script>

</body>
</html>