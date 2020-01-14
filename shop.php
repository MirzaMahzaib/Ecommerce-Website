<?php

$active='Shop';
include("includes/header.php");

?>

	<!--content begin-->
	<div id="content">
		
		<!--container begin-->
		<div class="container">
			
			<!--col-md-12 begin-->
			<div class="col-md-12">
				
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						Shop
					</li>
				</ul>

			</div>
			<!--col-md-12 finish-->

			<!--col-md-3 begin-->
			<div class="col-md-3">
				
				<?php

					include("includes/sidebar.php");

				?>

			</div>
			<!--col-md-3 finish-->

			<!--col-md-9 begin-->
			<div class="col-md-9">

				<!--box begin-->
				<div class='box'>
									
					<h1>Shop</h1>

					<p>
						Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century
					</p>

				</div>
				<!--box finish-->

				<!--row begin-->
				<div class="row" id="products">

					<?php getProducts(); ?>

				</div>
				<!--row finish-->

				<!--center begin-->
				<center>
					<ul class="pagination">

						<?php echo getPaginator(); ?>

					</ul>
				</center>
				<!--center finish-->

				</div>
			<!--col-md-9 finish-->

			<div class="wait" id="wait" style="position: absolute;top: 40%;left: 45%;padding: 200px 100px 100px 100px;">
				
			</div>

		</div>
		<!--container finish-->

	</div>
	<!--content finish-->







	<!--footer begin-->
	<?php
	include("includes/footer.php");
	?>
	<!--footer finish-->

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script>

    	$(document).ready(function(){

    		// Hide & Show Sidebar Toggle Begin //

    		$('.nav-toggle').click(function(){

    			$('.panel-collapse,.collapse-data').slideToggle(700,function(){

    				if ($(this).css('display')=='none') {

    					$(".hide-show").html('Show');

    				}else{

    					$(".hide-show").html('Hide');

    				}

    			})

    		});

    		// Hide & Show Sidebar Toggle Finish //

    		// Search Filters | By Letter Begin //

    		$(function(){

    			$.fn.extend({

    				filterTable: function(){

    					return this.each(function(){

    						$(this).on('keyup', function(){

    							var $this = $(this),
    							search = $this.val().toLowerCase(),
    							target = $this.attr('data-filters'),
    							handle = $(target),
    							rows = handle.find('li a');

    							if (search == '') {

    								rows.show();

    							}else{

    								rows.each(function(){

    									var $this = $(this);

    									$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() :
    									$this.show();

    								});

    							}

    						});

    					});

    				}

    			});

    			$('[data-action="filter"][id="dev-table-filter"]').filterTable();

    		});

    		// Search Filters | By Letter Finish //

    	});

    </script>

	<script>
		
		$(document).ready(function(){

			// getProducts Function Begin //

			function getProducts(){

				// Code For Manufacturer Begin //

				var sPath = '';
				var aInputs = $('li').find('.get_manufacturer');
				var aKeys = Array();
				var aValues = Array();

				iKey = 0;

				$.each(aInputs, function(key, oInput){

					if (oInput.checked) {

						aKeys[iKey] = oInput.value

					};

					iKey++;

				});

				if(aKeys.length>0){

					var sPath = '';

					for(var i = 0; i < aKeys.length; i++){

						sPath = sPath + 'manufacturer[]=' + aKeys[i]+'&';

					}

				}

				// Code For Manufacturer Finish //

				// Code For Product Categories Begin //

				var aInputs = Array();
				var aInputs = $('li').find('.get_p_cat');
				var aKeys = Array();
				var aValues = Array();

				iKey = 0;

				$.each(aInputs, function(key, oInput){

					if (oInput.checked) {

						aKeys[iKey] = oInput.value

					};

					iKey++;

				});

				if(aKeys.length>0){

					var sPath = '';

					for(var i = 0; i < aKeys.length; i++){

						sPath = sPath + 'p_cat[]=' + aKeys[i]+'&';

					}

				}

				// Code For Product Categories Finish //

				// Code For Categories Begin //

				var aInputs = Array();
				var aInputs = $('li').find('.get_cat');
				var aKeys = Array();
				var aValues = Array();

				iKey = 0;

				$.each(aInputs, function(key, oInput){

					if (oInput.checked) {

						aKeys[iKey] = oInput.value

					};

					iKey++;

				});

				if(aKeys.length>0){

					var sPath = '';

					for(var i = 0; i < aKeys.length; i++){

						sPath = sPath + 'cat[]=' + aKeys[i]+'&';

					}

				}

				// Code For Categories Finish //

				// Loader Begin //

				$('#wait').html('<img src="images/load.gif"');

				// Loader Finish //

				$.ajax({

					url:"load.php",
					method:"POST",

					data: sPath+'sAction=getProducts',

					success:function(data){

						$('#products').html('');
						$('#products').html(data);
						$('#wait').empty();

					}

				});

				$.ajax({

					url:"load.php",
					method:"POST",

					data: sPath+'sAction=getPaginator',

					success:function(data){

						$('.pagination').html('');
						$('.pagination').html(data);	

					}

				});

			}

			// getProducts Function Finish //

			$('.get_manufacturer').click(function(){

				getProducts();

			});

			$('.get_p_cat').click(function(){

				getProducts();

			});

			$('.get_cat').click(function(){

				getProducts();

			});

		})

	</script>


</body>
</html>