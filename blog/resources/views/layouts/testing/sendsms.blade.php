<form action="http://103.233.58.138/admin/public/sms/v3/send" method="POST">
	@csrf()
	TO : <input type="number" name="to">
	Message : <textarea name="text"></textarea>
	<input type="text" name="auth_token" value="e17b9097e6ec4450ed488ee536924d2b41e4ec8a6ffdac7cff5e2aed0cf4a3c7">
	<input type="submit" name="" value="SEND">
</form>