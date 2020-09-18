<?php 
Delete(); 

?>

<!--------content------------->

      <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manage Horoscope</h1>
                </div>
            </div>
         

		    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <a href="horoscope.php"> <i class="fa fa-plus-circle"></i> Add New </a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Zodaic Sign</th>
										<th>Basis</th>
                                        <th>Publish Date</th>
                                        <th>Publish Status</th>
                                        <th>Content</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php GetAllHoroscope();?>
								 </tbody>
                            </table>
                            <!-- /.table-responsive -->
                                                   </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
<!--------content------------->



    <!-- Metis Menu Plugin JavaScript -->
    <script src="Resources/vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="Resources/vendor/raphael/raphael.min.js"></script>
    <script src="Resources/vendor/morrisjs/morris.min.js"></script>
    <script src="Resources/data/morris-data.js"></script>
    <script src="Resources/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="Resources/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="Resources/vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>