<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>List customers</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

<div class="container">
    <table class="responsive-table">
        <caption>Task management</caption>
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Họ và tên</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="7">Ghi chú: Bài tập Task management - C0718G2 - CodeGym Mỹ Đình - Hà Nội - Việt Nam </td>
        </tr>
        </tfoot>
        <tbody>
        @foreach($customers as $key => $customer)
        <tr>

            <td scope="stt">{{ ++$key }}</td>
            <td data-title="name">{{ $customer->name }}</td>
            <td data-title="mobile">{{ $customer->phone }}</td>
            <td data-title="email">{{ $customer->email }}</td>
            <td data-title="action"><a href="#">Xem</a> |
                <a href="{{route('edit_customer',$customer->id)}}">Sửa</a> |
                <a href="{{route('delete_customer',$customer->id )}}"  onclick="return confirm('Do you really want to delete this customer')">Xóa</a></td>
            @endforeach
        </tr>

        </tbody>
    </table>
    <form method="post">
        <a href="{{route('add_customer')}}">Add new customer</a>
    </form>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



</body>

</html>
