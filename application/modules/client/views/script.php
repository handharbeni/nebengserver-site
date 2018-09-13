    <!--   Core JS Files   -->
    <script src="<?=base_url()?>assets/client/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript" ></script>
	<script src="<?=base_url()?>assets/client/js/bootstrap-notify.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/client/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?=base_url()?>assets/client/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?=base_url()?>assets/client/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?=base_url()?>assets/client/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?=base_url()?>assets/client/js/demo.js"></script>

	<script type="text/javascript">

    	$(document).ready(function(){

        	demo.initChartist();
            /*DATATABLE SECTION*/
            $("#listOrdeTable").DataTable();

            /*FORM SECTION*/
            $("#UPDATEUSERFORM").submit(function(e){
                $.ajax({
                    // host = 'localhost',
                    // port = '880',
                    // path = '/client/main/update_user',
                    url : $(this).attr("action"),
                    type : $(this).attr("method"),
                    data : $(this).serialize(),
                    success: function(){
                        $.notify({
                            icon: 'pe-7s-check',
                            message: "Success Update Data"
                        },{
                            type: 'success',
                            timer: 4000
                        });
                    },
                    error: function(){
                        $.notify({
                            icon: 'pe-7s-gift',
                            message: "Failed Update Data"
                        },{
                            type: 'warning',
                            timer: 4000
                        });
                    }
                });
                e.preventDefault();
            });
    	});
	</script>