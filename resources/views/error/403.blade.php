<!DOCTYPE html>
<html lang="vn">

<head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <meta name="description" content="" />
     <meta name="author" content="" />

     <!-- Title -->
     <title>Sorry, This Page Can&#39;t Be Accessed</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
</head>

<body class="bg-dark text-white py-5">
     <div class="container py-5">
          <div class="row">
               <div class="col-md-2 text-center">
                    <p><i class="fa fa-exclamation-triangle fa-5x"></i><br/>Lỗi: 403</p>
               </div>
               <div class="col-md-10">
                    <h3>OPPSSS!!!! Sorry...</h3>
                    <p>Hình như tài khoản của bạn không có quyền để truy cập vào trang này, vui lòng xem lại hoặc liên hệ với quản trị viên !</p>
                    <a class="btn btn-danger" href="javascript:history.back()">Quay lại</a>
                    <a class="ml-3 btn btn-primary" href="{{ route('login.admin' )}}">Đăng nhập bằng tài khoản khác</a>
               </div>
          </div>
     </div>
</body>

</html>