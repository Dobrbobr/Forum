<form action="go.php" method="post" enctype="multipart/form-data">
<!-- ����� ����� ���������� ��������� ������������� ������ ������� go.php ������� POST -->
<img src='captcha.php' id='capcha-image'>
<!-- ���� ����� -->
<a href="javascript:void(0);" onclick="document.getElementById('capcha-image').src='captcha.php?rid=' + Math.random();">�������� �����</a>
<!-- ������ �� ���������� �����. ����������� � captcha.php ��������� �����������.  -->
<span>������� �����:</span>
<input type="text" name="code">
<input type="submit" name="go" value="����������">
<!-- ���������� ������ �������-����������� go.php -->
</form>