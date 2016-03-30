<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./styles/bootstrap.min.css">
</head>
<body>
	<table class="table table-striped table-bordered" style="width:640px;margin:0 auto;">
      <thead>
        <tr>
          <th colspan="2" style="text-align: center;">系统信息</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">操作系统</th>
          <td><?php echo PHP_OS;?></td>
        </tr>
        <tr>
          <th scope="row">Apache版本</th>
          <td><?php echo apache_get_version();?></td>
        </tr>
         <tr>
          <th scope="row">PHP版本</th>
          <td><?php echo PHP_VERSION;?></td>
        </tr>
         <tr>
          <th scope="row">运行方式</th>
          <td><?php echo PHP_SAPI;?></td>
        </tr>
         <tr>
          <th scope="row">系统名称</th>
          <td>电子商城后台系统</td>
        </tr>
         <tr>
          <th scope="row">作者</th>
          <td>刘士辰</td>
        </tr>
        <tr>
          <th scope="row">联系方式</th>
          <td>412537738@qq.com</td>
        </tr>
      </tbody>
    </table>
</body>
</html>