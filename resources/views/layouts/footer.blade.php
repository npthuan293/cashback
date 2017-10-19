	<!-- Bootstrap core JavaScript -->
	<script src={{ asset("src/jquery/jquery.min.js") }}></script>
	<script src={{ asset("src/popper/popper.min.js") }}></script>
	<script src={{ asset("src/bootstrap/js/bootstrap.min.js") }}></script>
	<script src={{ asset("src/script.js") }}></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#btn_get_link').on('click', function (e) {
				var url = $("input[name=url]").val();
				if(!url){
					alert('Vui lòng nhập liên kết mua hàng');
				}else{
					$.ajax({
						type: 'get',
						url: '{{ url()->current() }}/get-link',
						dataType: 'json',
						data: {
							url: url
						},
						success: function(response) {
							if(response.data){
								$("input[name=shorturl]").val(response.data.id);
								$("#result").show();
							}else{
								alert(response.msg);
							}						
						},
						error: function (msg) {
							console.log(msg);
						}
					});
				}
			});
		});
	</script>
</body>

</html>