<script>
$('#edit_user').on('show.bs.modal', function (event) {
      var button 	= $(event.relatedTarget) 
      var fullname	= button.data('user_name') 
      var username	= button.data('user_username') 
	var email 	= button.data('user_email') 
      var password 	= button.data('user_password')
      var level 	= button.data('user_level')
      var user_id 	= button.data('user_id') 
      var modal 	= $(this)

	modal.find('.modal-body #fullname').val(fullname);
      modal.find('.modal-body #username').val(username);
      modal.find('.modal-body #email').val(email);
      modal.find('.modal-body #password').val(password);
      modal.find('.modal-body #level').val(level);
      modal.find('.modal-body #id').val(user_id);
});
  $('#delete_user').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var user_id = button.data('user_id') 
      var modal = $(this)
      modal.find('.modal-body #id').val(user_id);
});

</script>